/*
	W3C compliance for Microsoft Internet Explorer

	this module forms part of IE7
	IE7 version 0.6.1 (alpha) 2004/06/08
	by Dean Edwards, 2004
*/

// big, ugly box-model hack + min/max stuff
// #tantek > #erik > #dean { voice-family: hacker; }

try {
modules.add("ie7-box-model", function() {

	push(ie7StyleSheet.recalcs, function() {
		// stop resizing
		setTimeout(resizeQueue.flush, 0);
	});

	var MATCH = (appVersion < 6) ? /\b(min|max)-(width|height)\b/gi : /\b(min|max)-width\b/gi;
	CSSFixes.add(MATCH, function(match) {
		return match.slice(0, 3) + match.charAt(4).toUpperCase() + match.slice(5);
	});

	// this function is called for every element in the dom tree
	//  via ie7StyleSheet.recalc
	push(elementFixes, function(element) {
	with (element) {
		// IE5 doesn't support min-height. IE6 only pretends to..
		if (currentStyle.minWidth || currentStyle.maxWidth ||
		    (currentStyle.minHeight && currentStyle.minHeight != "auto")) {
			// convenience flag
			runtimeStyle.minMax = true;
			// need box-model for min/max properties
			runtimeStyle["box-sizing"] = true;
		}
		// enforce "layout" - whatever that is..
		// setting a numeric width or height means that an element
		//  acquires "layout". once an element has acquired this property
		//  it behaves differently in the document flow.
		//  sometimes we want this behaviour and sometimes we don't.
		//  so we make it configurable via the w3c standard "box-sizing"
		//  property.
		if (!hasLayout(element) && currentStyle["box-sizing"]) runtimeStyle.height = 0;
		// don't need box-model hacks for IE6.0 (standards mode)
		if (!quirksMode && !runtimeStyle.minMax) return;
		// now we've got "layout" if we need it (sorry if we don't :-)
		if (hasLayout(element)) {
			runtimeStyle.boxSizing = "content-box";
			// apply box-model hack
			if (!isHTML || tagName != "HR") {
				fixWidth(element, currentStyle.width);
				fixHeight(element, currentStyle.height);
			}
			// min/max event handling
			if (runtimeStyle.minMax) captureResize(element);
		}
		// ok. we've finished applying box-model hackery to this element
	}});

	// -----------------------------------------------------------------------
	// box-model
	// -----------------------------------------------------------------------

	// constants
	var UNIT = /^\d\w*$/;

	// saves a bit of space..
	// convert a width function to a height function
	function heightFunction(widthFunction) {
		return String(widthFunction).replace(/Width/g, "Height").replace(/width/g, "height");
	};

	// er.. "layout" you said?
	var hasLayout = (appVersion < 6) ? function(element) {
		return element.clientWidth;
	} : function(element) {
		return element.currentStyle.hasLayout;
	};

	// i'm referring to arguments[1] here because the element
	//  might have a "value" attribute and we're in a "with" block
	function fixWidth(element, value) {
	with (element) {
		runtimeStyle.fixedWidth = (clientWidth && UNIT.test(arguments[1])) ? getFixedWidth(element, arguments[1]) : arguments[1];
		runtimeStyle.width = runtimeStyle.fixedWidth;
	}};
	eval(heightFunction(fixWidth));

	// lexical scoping gone wrong
	if (quirksMode) {
		function getFixedWidth(element, value) {
			return getPixelValue(element, value) + getBorderWidth(element) + getPaddingWidth(element);
		};
		eval(heightFunction(getFixedWidth));
	} else {
		// no box-model trickery required
		var getFixedWidth = function(element, value) {
			return getPixelValue(element, value);
		};
		var getFixedHeight = getFixedWidth;
	}

	// easy way to get border thickness for elements with "layout"
	function getBorderWidth(element) {
		return element.offsetWidth - element.clientWidth;
	};
	eval(heightFunction(getBorderWidth));

	// have to do some pixel conversion to get padding thickness :-(
	function getPaddingWidth(element) {
		with (element.currentStyle) return getPixelValue(element, paddingLeft) + getPixelValue(element, paddingRight);
	};
	eval(heightFunction(getPaddingWidth));

	// -----------------------------------------------------------------------
	// pixel conversion
	// -----------------------------------------------------------------------

	// this is handy because it means that web developers can mix and match
	//  measurement units in their style sheets. it is not uncommon to
	//  express something like padding in "em" units whilst border thickness
	//  is most often expressed in pixels.

	var PIXEL = /\d+px$/;
	if (appVersion < 6) { // IE5
		// create a temporary element which is used to inherit styles
		//  from the target element. the temporary element can be resized
		//  to determine pixel widths/heights
		var ie7_tmp = ownerDocument.createElement("div");
		ie7_tmp.runtimeStyle.cssText = "position:absolute;padding:0px;display:block;border:none;clip:rect(0 0 0 0);left:-9999px}";
		var getPixelValue = function(element, value) {
			if (PIXEL.test(value)) {
				return parseInt(value);
			} else {
				// inherit style
				element.appendChild(ie7_tmp);
				// resize the temporary element
				ie7_tmp.style.width = value;
				// retrieve pixel width
				value = ie7_tmp.offsetWidth;
			//-	element.removeChild(ie7_tmp);
				return value;
			}
		};
	} else { // IE6
		var getPixelValue = function(element, value) {
			if (PIXEL.test(value)) {
			return parseInt(value);
			} else {
				// use "pixelWidth" which works great for IE6
				with (element) {
					// preserve original width
					var originalWidth = style.width;
				//# // tell ie7 event handlers this is an internal resize
				//# runtimeStyle.resize = true;
					// set the new width
					style.width = arguments[1];
					// let explorer calculate pixel value
					arguments[1] = style.pixelWidth;
					// restore original width
					style.width = originalWidth;
				//# // allow reisize event capture
				//# runtimeStyle.resize = false;
					// return pixelWidth
					return arguments[1];
				}
			}
		};
	}

	// -----------------------------------------------------------------------
	// min/max-width/height
	// -----------------------------------------------------------------------

	// this is mostly event handling

	function element_onresize() {
		resizeElement(event.srcElement);
	};

	// to prevent recursive resize loops, store elements
	//  currently being resized
	var resizeQueue = [];
	// flush this queue once the reisze event is complete
	resizeQueue.flush = function() {
		while (resizeQueue.length) pop(resizeQueue).runtimeStyle.resizing = 0;
		if (ie7_tmp && ie7_tmp.parentElement) ie7_tmp.parentElement.removeChild(ie7_tmp);
	};

	// to enable min/max-width/height we need to capture resize events
	//  for the element and its containing element. this is further
	//  complicated by the fact that an element needs to have "layout"
	//  before a resize event is fired. grrrr..

	// this doesn't work perfectly at the moment but it's about 90% good
	// known bug: doesn't work properly on <body/> tag

	function captureResize(element) {
	with (element) {
		// apply min/max restrictions
		resizeElement(element);
		if (runtimeStyle.resizeCaptured) return;
		// capture resize event for the target element
		attachEvent("onresize", element_onresize);
		// capture resize event for the target element's parent
		var parent = element;
		// loop and find a parent element that can receive a resize event
		while ((parent = parent.offsetParent) && !hasLayout(parent)) continue;
		if (!parent) parent = ownerDocument.body;
		var pixelWidth = parent.clientWidth;
		// handle resize of parent element
		window.attachEvent("onresize", function() {
			// reset width if min-width is set and the container is made bigger
			//  or if max-width
			if (!runtimeStyle.resizing && ((currentStyle.minWidth && pixelWidth < parent.clientWidth) || currentStyle.maxWidth)) {
				runtimeStyle.width = "";
			}
			pixelWidth = parent.clientWidth;
			// re-allow resizing
			setTimeout(resizeQueue.flush, 0);
		});
		runtimeStyle.resizeCaptured = true;
	}};

	// apply min/max restrictions
	function resizeElement(element) {
	with (element) {
		// prevent resize loops
		runtimeStyle.resizing = push(resizeQueue, element);
		// check boundaries
		if (currentStyle.maxWidth && offsetWidth >= getFixedWidth(element, currentStyle.maxWidth))
			runtimeStyle.width = getFixedWidth(element, currentStyle.maxWidth);
		else if (currentStyle.minWidth && offsetWidth <= getFixedWidth(element, currentStyle.minWidth))
			runtimeStyle.width = getFixedWidth(element, currentStyle.minWidth);
		else
			runtimeStyle.width = runtimeStyle.fixedWidth;
	//# can't get this to work without changing the structure of the document
	//# if (currentStyle.maxHeight && offsetHeight >= getFixedHeight(currentStyle, currentStyle.maxHeight))
	//# 	runtimeStyle.height = getFixedHeight(currentStyle, currentStyle.maxHeight);
		if (currentStyle.minHeight && offsetHeight <= getFixedHeight(element, currentStyle.minHeight))
			runtimeStyle.height = getFixedHeight(element, currentStyle.minHeight);
		else
			runtimeStyle.height = runtimeStyle.fixedHeight;
	}};

});
} catch (error) {
	// this means that ie7-core has not loaded.
	// the error is trapped there
}
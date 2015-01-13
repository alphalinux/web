/*
	W3C compliance for Microsoft Internet Explorer

	this module forms part of IE7
	IE7 version 0.6.1 (alpha) 2004/06/08
	by Dean Edwards, 2004
*/

// original fix supplied by James Denny
// and what a brilliant fix it is!
try {
modules.add("ie7-fixed", function() {

	// some things to consider for this hack.
	// the document body requires a fixed background. even if
	//  it is just a blank image.
	// you have to use setExpression instead of onscroll, this
	//  together with a fixed body background help avoid the
	//  annoying screen flicker of other solutions.

	// scrolling is relative to the documentElement (HTML tag) when in
	//  standards mode, otherwise it's relative to the document body
	ie7StyleSheet.scrollParent = (quirksMode) ? ownerDocument.body : documentElement;

	// this is requied by both position:fixed and background-attachment:fixed.
	// it is necessary for the document to also have a fixed background image.
	// we can fake this with a blank image if necessary
	with (ownerDocument.body) {
		if (currentStyle.backgroundImage == "none")
			runtimeStyle.backgroundImage = "url(javascript:0)"; // dummy
		runtimeStyle.backgroundAttachment = "fixed";
	}

	// called by the background-attachment expression
	ie7StyleSheet.backgroundPosition = function(element) {
		return getFixedLeft(element) + " " + getFixedTop(element);
	};

	function getFixedLeft(element) {
		return ie7StyleSheet.scrollParent.scrollLeft - getScreenLeft(element) - element.runtimeStyle.offsetLeft;
	};

	function getFixedTop(element) {
		return ie7StyleSheet.scrollParent.scrollTop - getScreenTop(element) - element.runtimeStyle.offsetTop;
	};

	push(elementFixes, function(element) {
	with (element) {
		if (currentStyle.position == "fixed") {
			// we'll move the element about ourselves
			runtimeStyle.position = "absolute";
			// preserve original co-ords
			runtimeStyle.screenLeft = getScreenLeft(element);
			runtimeStyle.screenTop = getScreenTop(element);
			// onsrcoll produces jerky movement - this is better
			runtimeStyle.setExpression("pixelLeft", "runtimeStyle.screenLeft+document.ie7StyleSheet.scrollParent.scrollLeft");
			runtimeStyle.setExpression("pixelTop", "runtimeStyle.screenTop+document.ie7StyleSheet.scrollParent.scrollTop");
		} else if (currentStyle.backgroundAttachment == "fixed" && !element.contains(ownerDocument.body)) {
			// darned "layout". border-widths now affect our positioning
			runtimeStyle.offsetLeft = (clientWidth) ? (offsetWidth - clientWidth) / 2 : 0;
			runtimeStyle.offsetTop = (clientHeight) ? (offsetHeight - clientHeight) / 2 : 0;
			runtimeStyle.setExpression("backgroundPosition", "document.ie7StyleSheet.backgroundPosition(this)");
		}
	}});

	// self-explanatory really - sprechen sie javascript?
	function getScreenLeft(element) {
		var offsetLeft = element.offsetLeft;
		while (element = element.offsetParent) offsetLeft += element.offsetLeft;
		return offsetLeft;
	};

	// ditto
	function getScreenTop(element) {
		var offsetTop = element.offsetTop;
		// spin until you reach the top..
		while (element = element.offsetParent) offsetTop += element.offsetTop;
		return offsetTop;
	};

});
} catch (error) {
	// this means that ie7-core has not loaded.
	// the error is trapped there
}

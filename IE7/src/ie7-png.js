/*
	W3C compliance for Microsoft Internet Explorer

	this module forms part of IE7
	IE7 version 0.6.1 (alpha) 2004/06/08
	by Dean Edwards, 2004
*/
// doesn't work for IE5.0
try {
if (appVersion > 5) modules.add("ie7-png", function() {

	// constants
	// this filter is used to replace a PNG image
	var FILTER = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src=%1,sizingMethod='scale')";
	// a small transparent image used as a placeholder
	var NULL = "javascript:'#define x_width 1\\n#define x_height 1\\nstatic char x_bits[]={0x00}'";
	// user configurable file name filter
	// e.g. only apply the hack to files ending in "-trans.png"
	var PNG = getSetting("png-suffix") || ".png";
	// regular expression version of the above
	var pngTest = new RegExp(PNG + "$", "i");

	// apply the filter
	function addFilter(element, src) {
		element.runtimeStyle.filter = FILTER.replace(/%1/, src);
	};

	// -----------------------------------------------------------------------
	//  fix css
	// -----------------------------------------------------------------------

	// replace background(-image): url(..) .. ;
	var match = /background(-image)?\s*:([^\(;\}]*)url\(['"]?([^\)'"]+)['"]?\)([^;\}]*)/gi;
	// with    background(-image): .. ;filter: ..;
	function replace(match, image, prefix, url, suffix) {
		if (pngTest.test(url)) {
			match = "filter:" + FILTER.replace(/%1/, url);
			if (!image && prefix && suffix) match += ";background:" + prefix + suffix;
		// add filter:none so we can trash the filter for hovers
		} else match = "filter:none;" + match;
		return match;
	};
	CSSFixes.add(match, replace);

	// -----------------------------------------------------------------------
	//  fix html
	// -----------------------------------------------------------------------

	if (HTMLFixes) {
		function fixImg(img) {
			if (pngTest.test(img.src)) {
				// we have to preserve width and height
				var width = img.width, height = img.height;
				// add the AlphaImageLoader thingy
				addFilter(img, img.src);
				// remove the real image
				img.src = NULL;
				img.width = width;
				img.height = height;
			} else element.runtimeStyle.filter = "";
		};
		HTMLFixes.add("img", function(element) {
			fixImg(element);
			element.attachEvent("onpropertychange", function() {
				if (event.propertyName == "src") fixImg(element);
			});
		});
	}

	/* ######

	// -----------------------------------------------------------------------
	//  dhtml/javascript support
	// -----------------------------------------------------------------------

	function fixBackgroundImage(element) { //DHTML
	//#	// ignore HTML IMG tags
	//#	if (isHTML && element.tagName == "IMG") return;
		var src = element.currentStyle.backgroundImage.slice(5, -2);
		if (pngTest.test(src)) {
			addFilter(element, src);
			element.runtimeStyle.backgroundImage = "none";
		} else element.runtimeStyle.filter = "";
	};

	###### */
});
} catch (error) {
	// this means that ie7-core has not loaded.
	// the error is trapped there
}
/*
	W3C compliance for Microsoft Internet Explorer

	this module forms part of IE7
	IE7 version 0.6.1 (alpha) 2004/06/08
	by Dean Edwards, 2004
*/
/* credits/thanks:
	Shaggy, Martijn Wargers, Jimmy Cerra, Mark D Anderson,
	Lars Dieckow, Erik Arvidsson, Gellért Gyuris, James Denny,
	Unknown W Brackets, Benjamin Westfarer, Tantek Çelik
*/
try {
// -----------------------------------------------------------------------
// globals
// -----------------------------------------------------------------------

var alert = document.alert || new Function;
// ie7-debug will put it back for debugging

var NAME = "IE7"; // Internet Exploder 7 (my how version numbers fly)
var VERSION = "0.6.1 (alpha)";

// IE version info
var appVersion = navigator.appVersion.match(/MSIE (\d\.\d)/)[1];
if (appVersion < 6) {
	element.ownerDocument = window.document;
	// for sniffers
	ownerDocument.compatMode = "BackCompat";
}
// "standards" mode?
var quirksMode = Boolean(ownerDocument.compatMode == "BackCompat");
// assume html unless explicitly defined
// - there's got to be a better way of doing this..
try {
	var isHTML = Boolean(ownerDocument.mimeType != "XML Document");
} catch (bug) {
	// annoying IE bug. sometimes this causes
	//  "unspecified error"
	var isHTML = /\.xml$/i.test(location.href);
}
// identify the root of the document
var documentElement;
var HEADER = (isHTML) ? "" : "*{margin:0}";

// -----------------------------------------------------------------------
// external
// -----------------------------------------------------------------------

// another global
var HTMLFixes; // loaded separately

// cache for the various modules that make up IE7.
//  modules are stored as functions. these are executed
//  after the style sheet text has been loaded.
// storing the modules as functions means that we avoid
//  name clashes with other modules.
var modules = new function() {
	var modules = {};
	this.add = function(name, boot) {
		modules[name] = boot;
	};
	this.load = function() {
		for (var i in modules) {
			// execute the boot function
			modules[i]();
			// alert the user in debug mode (ie7-debug.js)
			alert(0, i);
		}
	};
};

// settings may be stored in an xml data island defined within the
//  behavior (.htc) file (or they may be stored in an external xml document).
// load a setting from the xml data island
//  - currently only png-suffix is supported (see ie7-png.js for more details)
function getSetting(name) {
	// retrieve a reference to the xml data island
	var settings = document.all.settings;
	if (settings) { // got it?
		// good, get the appropriate node in the xml document
		var node = cssQuery(name, settings.XMLDocument)[0];
		// got that? even better. return the value
		if (node) return node.getAttribute("value") || "";
	}
	return "";
};

// we'll use microsoft's http request object to load external files
var httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
function load(url) {
	// easy to load a file huh?
	httpRequest.open("get", url, false);
	httpRequest.send();
	return httpRequest.responseText;
};

// -----------------------------------------------------------------------
// IE5.0 compatibility
// -----------------------------------------------------------------------

// use custom push/pop functions because IE5.0 doesn't support Array.push/pop
//  it's no good to add these methods to Array.prototype because it messes up
//  iteration: i.e. for (var i in array);

var push = function(array, item) {
	array[array.length] = item;
	return array.length;
};

var pop = function(array) {
	var item = array[array.length - 1];
	array.length--;
	return item;
};

if (appVersion >= 5.5) {
	push = function(array, item) {
		return array.push(item);
	};
	pop = function(array) {
		return array.pop();
	};
}

// -----------------------------------------------------------------------
//  IE7 style sheet
// -----------------------------------------------------------------------

var ie7StyleSheet = function() {
	// this is as close as we get to a public global variable
	ownerDocument.ie7StyleSheet = ie7StyleSheet = this;

	documentElement = (isHTML) ? parentElement : firstChildElement(element);

	// handy reference to the sytle sheets collection
	var styleSheets = ownerDocument.styleSheets;
	var inlineStyles = [];
	var styles = ownerDocument.getElementsByTagName("style");
	for (var i = 0; i < styles.length; i++) push(inlineStyles, styles[i].innerHTML);
	// we're popping them...
	inlineStyles.reverse();

	// retrieve unparsed css text. inline style sheets have their
	//  unparsed css text cached by ie7-style.htc.
	function getCSSText(styleSheet) {
		var cssText = "";
		// loop through imported style sheets
		if (styleSheet.media.toLowerCase() != "print") {
			for (var i = 0; i < styleSheet.imports.length; i++) {
				// call this function recursively to get all
				//  imported style sheets
				cssText += arguments.callee(styleSheet.imports[i]);
			}
			// retrieve inline style or load an external style sheet
			cssText += ((styleSheet.href) ? loadStyleSheet(styleSheet) : pop(inlineStyles));
		}
		return cssText;
	};

	// test for the ie7 style sheet, we don't want to parse this
	var IE7_STYLESHEET = /url\([^\)]*ie7[^\)]*\.htc\)/i;
	function loadStyleSheet(styleSheet) {
		if (IE7_STYLESHEET.test(styleSheet.cssText)) {
			// flag it, so it doesn't get trashed later
			styleSheet.ie7 = true;
			return "";
		// otherwise load the style sheet text
		} else return (styleSheet.disabled) ? "" : fixUrls(load(styleSheet.href), styleSheet.href);
	};

	// fix css paths
	var URL = /(url\(['"]?)([\w\.]+[^:\)]*['"]?\))/gi;
	// we're lumping all css text into one big style sheet so relative
	//  paths have to be fixed. this is necessary anyway because of other
	//  explorer bugs.
	function fixUrls(cssText, pathname) {
		// hack & slash
		return cssText.replace(URL, "$1" + pathname.slice(0, pathname.lastIndexOf("/") + 1) + "$2");
	};

	// store for style sheet text
	this.cssText = "";
	// load all style sheets in the document
	for (i = 0; i < styleSheets.length; i++) this.cssText += getCSSText(styleSheets[i]);
	// tidy the style sheet text (remove somments etc)
	this.cssText = encode(this.cssText);

	// load modules (ie7 components)
	modules.load();

	// apply fixes to the style sheet text (text parse)
	CSSFixes.apply();
	// parse css text (ie7 classes and rules)
	this.parse();
	//window.alert(this.cssText);
	// if the document has been hidden for faster loading, unhide it
	runtimeStyle.display = "block";
	// fix html page elements (i.e. <abbr/>)
	if (HTMLFixes) HTMLFixes.apply();

	// apply the style sheet rules
	this.styleSheet = ownerDocument.createStyleSheet();
	this.styleSheet.ie7 = true;
	this.styleSheet.cssText = HEADER + decode(this.cssText);
	// trash the old style sheets
	for (i = 0; i < styleSheets.length; i++) {
		if (!styleSheets[i].disabled && !styleSheets[i].ie7) {
			styleSheets[i].cssText = "";
		}
	}

	// refresh the document
	this.recalc();
};
ie7StyleSheet.prototype = {
	// functions called by document.recalc
	recalcs: [],
	// be aware of the css module (do nothing if it's not there)
	parse: new Function,
	// this will change some more later.
	//  but for the moment this is how i'm applying the various fixes
	//  (this and the huge constructor function preceding it..)
	recalc: function() {
		// re-apply style sheet rules (re-calculate ie7 classes)
		CSSFixes.recalc();
		// check the length of the main loop first to save unnecessary
		//  processing.
		if (elementFixes.length) {
			var i, j;
			for (i in elementFixes) elementFixes[i](documentElement);
			for (i in elementFixes) elementFixes[i](ownerDocument.body);
			// fix individual elements
			for (j = 0; j < all.length; j++)
				if (isElement(all[j])) for (i in elementFixes) elementFixes[i](all[j]);
		}
		// apply global fixes to the document (and some tidying)
		for (i in this.recalcs) this.recalcs[i]();
	}
};

// -----------------------------------------------------------------------
//  fix css
// -----------------------------------------------------------------------

/* other fixes may be loaded by external modules in the format:

   CSSFixes.add(match, replace);

   where:
   match: is a javascript regular expression used to match a piece of css text
   replace: is a string or function which is used as the replacement
*/

CSSFixes = new function() {
	var fixes = []; // private
	this.add = function() {
		push(fixes, arguments);
	};
	this.apply = function() {
		// loop through the fixes
		// they consist of a pair of arguments passed to a String.replace
		// function. the replacement is made to the entire style sheet text
		with (ie7StyleSheet) for (var i in fixes)
			cssText = cssText.replace(fixes[i][0], fixes[i][1]);
	};
	// placeholder for the css module
	this.recalc = new Function;
	// one weany fix to add for the moment (there are others in other modules)
	// display:list-item (IE5.x)
	if (appVersion < 6) this.add(/display\s*:\s*list-item/gi, "display:block");
};

// -----------------------------------------------------------------------
//  fix elements
// -----------------------------------------------------------------------

/* other fixes may be loaded by external modules in the format:

   elementFixes.add(fix);

   where:
  	fix: is a function that receives the element to to be fixed as
  	     its only parameter
*/

elementFixes = [];

// -----------------------------------------------------------------------
//  css query engine
// -----------------------------------------------------------------------

/*** THIS IS A MODIFIED VERSION OF cssQuery 1.0.1 ***/

// the following functions allow querying of the dom using css selectors

var STANDARD_SELECT = /^[^>\+~\s]/;
var STREAM = /[\s>\+~:@#\.]|[^\s>\+~:@#\.]+/g;
var NAMESPACE = /\|/;
var IMPLIED_SELECTOR = /([\s>\+~\,]|^)([\.:#@])/g;
var ASTERISK ="$1*$2";

// cache results for faster processing
var cssCache = {};

// this is the main query function
function cssQuery(selector, from) {
	var useCache = !from;
	from = (from) ? (from.constructor == Array) ? from : [from] : [ownerDocument];
	// process comma separated selectors
	if (isHTML) selector = selector.toLowerCase();
	var selectors = selector.replace(IMPLIED_SELECTOR, ASTERISK).split(",");
	var match = [];
	for (var i in selectors) {
		// convert the selector to a stream
		selector = toStream(selectors[i]);
		// process the stream
		var j = 0, token, filter, cacheSelector = "";
		while (j < selector.length) {
			token = selector[j++];
			filter = selector[j++];
			cacheSelector += token + filter;
			// process a token/filter pair
			from = (useCache && cssCache[cacheSelector]) ? cssCache[cacheSelector] : select(from, token, filter);
			if (useCache) cssCache[cacheSelector] = from;
		}
		match = match.concat(from);
	}
	// return the filtered selection
	return match;
};

// convert css selectors to a stream of tokens and filters
//  it's not a real stream. it's just an array of strings.
function toStream(selector) {
	if (STANDARD_SELECT.test(selector)) selector = " " + selector;
	return selector.match(STREAM);
};

// select a set of matching elements.
// "from" is an array of elements.
// "token" is a character representing the type of filter
//  e.g. ">" means child selector
// "filter" represents the tag name, id or class name that is being selected
// the function returns an array of matching elements
function select(from, token, filter) {
	//alert("token="+token+",filter="+filter);
	var scopeName = "";
	if (NAMESPACE.test(filter)) {
		filter = filter.split("|");
		scopeName = filter[0];
		filter = filter[1];
	}
	var filtered = [], i;
	switch (token) {
		case " ": // descendant
			for (i in from) {
				var subset = (filter == "*" && from[i].all) ? from[i].all : from[i].getElementsByTagName(filter);
				for (var j = 0; j < subset.length; j++) {
					if (isElement(subset[j]) && (!scopeName || subset[j].scopeName == scopeName))
						push(filtered, subset[j]);
				}
			}
			break;
		case ">": // child
			for (i in from) {
				var subset = from[i].children;
				for (var j = 0; j < subset.length; j++)
					if (compareTagName(subset[j], filter, scopeName)) push(filtered, subset[j]);
			}
			break;
		case "+": // adjacent (direct)
			for (i in from) {
				var adjacent = nextElement(from[i]);
				if (adjacent && compareTagName(adjacent, filter, scopeName)) push(filtered, adjacent);
			}
			break;
		case "~": // adjacent (indirect)
			for (i in from) {
				var adjacent = from[i];
				while (adjacent = nextElement(adjacent)) {
					if (adjacent && compareTagName(adjacent, filter, scopeName)) push(filtered, adjacent);
				}
			}
			break;
		case ".": // class
			filter = new RegExp("(^|\\s)" + filter + "(\\s|$)");
			for (i in from) if (filter.test(from[i].className)) push(filtered, from[i]);
			break;
		case "#": // id
			for (i in from) if (from[i].id == filter) push(filtered, from[i]);
			break;
		case "@": // attribute selector
			filter = attributeSelectors[filter];
			for (i in from) if (filter(from[i])) push(filtered, from[i]);
			break;
		case ":": // pseudo-class (static)
			filter = pseudoClasses[filter];
			if (filter) for (i in from) if (filter(from[i])) push(filtered, from[i]);
			break;
	}
	return filtered;
};

// these are all pretty readable without comments
var pseudoClasses = { // static
	// CSS1
	"link": function(element) {
		return Boolean(element.currentStyle["ie7-link"] == "link");
	},
	"visited": function(element) {
		return Boolean(element.currentStyle["ie7-link"] == "visited");
	},
	// CSS2
	"first-child": function(element) {
		return !previousElement(element);
	},
	// CSS3
	"last-child": function(element) {
		return !nextElement(element);
	},
	"root": function(element) {
		// yes i know...
		return Boolean(element == documentElement || element == ownerDocument.body);
	},
	"empty": function(element) {
		return !firstChildElement(element) && !element.innerText;
	}
	// can anyone code nth-child?
};

function compareTagName(element, tagName, scopeName) {
	if (scopeName && element.scopeName != scopeName) return false;
	return (tagName == "*") ? isElement(element) : (isHTML) ? (element.tagName == tagName.toUpperCase()) : (element.tagName == tagName);
};

// explorer includes comments (lol) in it's element collections.
// so we have to check for this. the test is tagName != "!". lol (again).
function isElement(node) {
	return Boolean(node && node.nodeType == 1 && node.tagName != "!");
};

// return the previous element to the supplied element
//  previousSibling is not good enough as it might return a text or comment node
function previousElement(element) {
	while (element && (element = element.previousSibling) && !isElement(element)) continue;
	return element;
};

// return the next element to the supplied element
function nextElement(element) {
	while (element && (element = element.nextSibling) && !isElement(element)) continue;
	return element;
};

// return the first child ELEMENT of an element
//  NOT the first child node (though they may be the same thing)
function firstChildElement(element) {
	element = element.firstChild;
	return (isElement(element)) ? element : nextElement(element);
};

// attribute selectors

var QUOTED = /([\'\"])[^\1]*\1/;
function quote(value) {return (QUOTED.test(value)) ? value : "'" + value + "'"};
function unquote(value) {return (QUOTED.test(value)) ? value.slice(1, -1) : value};

var attributeSelectors = [];

function attributeSelector(attribute, compare, value) {
	// properties
	this.id = attributeSelectors.length;
	// build the test expression
	var test = "element.";
	switch (attribute.toLowerCase()) {
		case "id":
			test += "id.replace(/ms_\\d+/g,'')";
			break;
		case "class":
			test += "className.replace(/\\b\\s*ie7_\\d+/g,'')";
			break;
		default:
			test += "getAttribute('" + attribute + "')";
	}
	// continue building the test expression
	switch (compare) {
		case "=":
			test += "==" + quote(value);
			break;
		case "~=":
			test = "/(^|\\s)" + unquote(value) + "(\\s|$)/.test(" + test + ")";
			break;
		case "|=":
			test = "/(^|-)" + unquote(value) + "(-|$)/.test(" + test + ")";
			break;
	}
	push(attributeSelectors, new Function("element", "return " + test));
};
attributeSelector.prototype.toString = function() {
	return attributeSelector.PREFIX + this.id;
};
// constants
attributeSelector.PREFIX = "@";
attributeSelector.ALL = /\[([^~|=\]]+)([~|]?=?)([^\]]+)?\]/g;
// class methods
attributeSelector.ID = function(match, attribute, compare, value) {
	return new attributeSelector(attribute, compare, value);
};

// -----------------------------------------------------------------------
// encoding
// -----------------------------------------------------------------------

// a style sheet must be prepared for parsing.
// this means stripping out comments etc

function encode(cssText) {
	return cssText
//- // remove comments (w3c)
//- .replace(/\/\*[^\*]*\*+([^\*][^\*]*\*+)*\//g, "")
	// remove comments (gellért gyuris)
	.replace(/\/\*[^\*]*\*+([^\/][^\*]*\*+)*\//g, "")
	// parse out @namespace/@import (restating them crashes explorer!)
	.replace(/@(namespace|import)[^;\n]+[;\n]|<!\-\-|\-\->/g, "")
	// fix IE namespaces
	.replace(/\\:/g, "|")
	// trim whitespace
	.replace(/^\s+|\s*([\{\}\+\,>~\s;])\s*|\s+$/g, "$1")
	// encode attribute selectors
	.replace(attributeSelector.ALL, attributeSelector.ID);
};

function decode(cssText) {
	// fix IE namespaces
	return cssText.replace(/\|/g, "\\:");
};

// -----------------------------------------------------------------------
//  error handling
// -----------------------------------------------------------------------

} catch (error) {
	// doh!
} finally {
	alert(error || 0, NAME);
	// zzzz zz zzzz
}

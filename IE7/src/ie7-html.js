/*
	W3C compliance for Microsoft Internet Explorer

	this module forms part of IE7
	IE7 version 0.6.1 (alpha) 2004/06/08
	by Dean Edwards, 2004
*/

/* other fixes may be loaded by external modules in the format:

  if (HTMLFixes) HTMLFixes.add(selector, fix);

  where:
  selector: string used to match a set of elements
  fix: function that receives the element to to be fixed as its only parameter
*/
HTMLFixes = new function() {
	var fixes = []; // private

	// this x-bitmap provides the dotted underline effect for <abbr/> and <acronym/>
	var DOTTED = "url(javascript:'#define x_width 2\\n#define x_height 1\\nstatic char x_bits[]={0x01})') repeat-x bottom left";

	function dottedUnderline(element) {
		// implement the dotted underline effect
		if (element.title) element.runtimeStyle.background = DOTTED;
	};

	this.add = function() {
		push(fixes, arguments);
	};
	this.apply = function() {
	try {
		// create the namespace used to declare our fixed <abbr/> tag.
		//  strangely, this throws an error if there is no <abbr/> tag present!?
		if (appVersion > 5) ownerDocument.namespaces.add("HTML", "http://www.w3.org/1999/xhtml");

	} catch (error) {
		// explorer confuses me.
		// we can create a namespace when the <abbr/>
		//  tag is present, otherwise error!
		//  this kind of suits me but it's still weird.
	} finally {
		// apply all fixes
		for (var i in fixes) {
			var elements = cssQuery(fixes[i][0]);
			for (var j in elements) fixes[i][1](elements[j]);
		}
		// don't cache broken <abbr/> tags
		delete cssCache[" abbr"];
	}};

	// -------------------------------------------------------------------
	// <label/>
	// -------------------------------------------------------------------

	// associate <label/> elements with an input element

	this.add("label", function(element) {
		if (!element.htmlFor) {
			var input = element.getElementsByTagName("input")[0];
			if (input) {
				if (!input.id) input.id = input.uniqueID;
				element.htmlFor = input.id;
			}
		}
	});

	// -------------------------------------------------------------------
	// <abbr/>
	// -------------------------------------------------------------------

	// provide support for the <abbr/> tag for html documents
	//  this is a proper fix, it preserves the dom structure and
	//  <abbr/> elements report the correct tagName & namespace prefix.

	this.add("abbr", function(element) {
		// remove the broken tags and replace with HTML:ABBR
		var outerHTML = element.outerHTML.replace(/ABBR/, "HTML:ABBR");
		var fixedAbbr = ownerDocument.createElement(outerHTML);
		with (element) {
			var node;
			// remove child nodes and copy them to the new element
			while ((node = nextSibling) && node.outerHTML != "</ABBR>") {
				parentNode.removeChild(node);
				fixedAbbr.appendChild(node);
			}
			// remove the </abbr> closing tag
			if (node) parentNode.removeChild(node);
			// replace the broken tag with the namespaced version
			parentNode.replaceChild(fixedAbbr, element);
			dottedUnderline(fixedAbbr);
		}
	});

	this.add("acronym", dottedUnderline);
};
alert(0, "ie7-html");

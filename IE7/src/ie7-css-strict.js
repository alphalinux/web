/*
	W3C compliance for Microsoft Internet Explorer

	this module forms part of IE7
	IE7 version 0.6.1 (alpha) 2004/06/08
	by Dean Edwards, 2004
*/
try {
modules.add("ie7-css-strict", function() {

	// constants
	var NONE = [], ID = /#/g, CLASS = /[:@\.]/g, TAG = /^\w|[\s>+~]\w/g;

	ie7StyleSheet.parser.parse = function(cssText) {
		var DYNAMIC = /(.*):(hover|active|focus)(.*)/;
		function addRule(selector, cssText) {
			var match = selector.match(DYNAMIC);
			// dynamic style (hover/active/focus)
			if (match) new DynamicRule(selector, match[1], match[2], match[3], cssText);
			// static style
			else new Rule(selector, cssText);
		};

		// convert all selectors to ie7 classes
		var RULE = /([^\{]+)\{(\d+)\}/g, match;
		while (match = RULE.exec(cssText)) {
			addRule(match[1], match[2]);
			// fix for IE5.0
			if (appVersion < 5.5) cssText = cssText.slice(match.lastIndex);
		}

		// sort the classes by specificity
		ie7StyleSheet.classes.sort(Rule.compare);

		// return the new style sheet text
		return ie7StyleSheet.classes.join("\n");
	};

	// -----------------------------------------------------------------------
	// IE7 rules (strict)
	// -----------------------------------------------------------------------

	// constructor
	function Rule(selector, cssText) {
		// inheritance
		this.inherit = ie7StyleSheet.Class;
		this.inherit(selector);
		// initialise object properties
		this.cssText = cssText;
		this.specificity = Rule.score(selector);
	};
	// inheritance
	Rule.prototype = new ie7StyleSheet.Class.ancestor;
	Rule.prototype.toString = function() {
		return "." + this.name + "{" + this.cssText + "}";
	};
	// class methods
	Rule.score = function(selector) {
		with (selector)
		return (match(ID)||NONE).length * 10000 +
		       (match(CLASS)||NONE).length * 100 +
		       (match(TAG)||NONE).length;
	};
	Rule.compare = function(rule1, rule2) {
		return rule1.specificity - rule2.specificity;
	};

	// constructor
	function DynamicRule(selector, attach, dynamicPseudoClass, target, cssText) {
		// inheritance
		this.inherit = ie7StyleSheet.DynamicStyle;
		this.inherit(selector, attach, dynamicPseudoClass, target);
		// initialise object properties
		this.cssText = cssText;
		this.specificity = Rule.score(selector);
	};
	// inheritance
	DynamicRule.prototype = new ie7StyleSheet.DynamicStyle.ancestor;
	DynamicRule.prototype.toString = Rule.prototype.toString;
});
} catch (error) {
	// this means that ie7-core has not loaded.
	// the error is trapped there
}

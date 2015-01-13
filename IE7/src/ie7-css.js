/*
	W3C compliance for Microsoft Internet Explorer

	this module forms part of IE7
	IE7 version 0.6.1 (alpha) 2004/06/08
	by Dean Edwards, 2004
*/
try {
modules.add("ie7-css", function() {

	// this has lost its oo shape due to IE5.0 inadequcies and
	//  the demands of multiple inheritance (sometimes it's just
	//  easier that way).

	// cache ie7 classes
	ie7StyleSheet.classes = [];
	// i can;t remember why the parser has to be exposed
	ie7StyleSheet.parser = new Parser;
	// ie7 constructors are stored on the ie7StyleSheet interface
	//  this is in anticipation of ie7-css-strict.js
	ie7StyleSheet.Class = Class;
	ie7StyleSheet.DynamicStyle = DynamicStyle;
	// replace unlnown css2/3 selectors with ie7 classes
	ie7StyleSheet.parse = function() {
		with (this.parser) this.cssText = decode(parse(encode(this.cssText)));
	};
	// apply ie7 classes to elements in the dom
	CSSFixes.recalc = function() {
		for (var i in ie7StyleSheet.classes) ie7StyleSheet.classes[i].exec();
	};

	// -----------------------------------------------------------------------
	//  parser
	// -----------------------------------------------------------------------

	function Parser() {
		var encoded = []; // private
		// public
		this.parse = function(cssText) {
			return cssText
			// dynamic style (hover/active/focus)
			.replace(DynamicStyle.ALL, DynamicStyle.ID)
			// static style
			.replace(Class.ALL, Class.ID);
		};

		this.encode = function(cssText) {
			return cssText
			// encode style blocks
			.replace(/\{[^\}]*\}/g, function($){return "{"+(push(encoded,$)-1)+"}"})
			// split comma separated selectors
			.replace(/([^\}\s]*\,[^\{]*)(\{\d+\})/g, function($,$1,$2){return $1.split(",").join($2)+$2});
		};

		// put style blocks back
		this.decode = function(cssText) {
			// put css blocks back
			return cssText.replace(/\{(\d+)\}/g, function($,$1){return encoded[$1]});
		};
	};

	// -----------------------------------------------------------------------
	// IE7 style classes
	// -----------------------------------------------------------------------

	// virtual
	function _Class() {
		// properties
	//- this.id = 0;
	//- this.name = "";
	//-	this.selector = "";
	//-	this.MATCH = null;
		this.toString = function() {
			return "." + this.name;
		};
		// methods
		this.add = function(element) {
			// allocate this class
			element.className += " " + this.name;
		};
		this.remove = function(element) {
			// deallocate this class
			element.className = element.className.replace(this.MATCH, "");
		};
		this.exec = function() {
			// execute the underlying css query for this class
			var match = cssQuery(this.selector);
			// add the class name for all matching elements
			for (var i in match) this.add(match[i]);
		};
	};

	// constructor
	function Class(selector, cssText) {
		this.id = ie7StyleSheet.classes.length;
		this.name = Class.PREFIX + this.id;
		this.selector = selector;
		this.MATCH = new RegExp("\\s" + this.name + "\\b", "g");
		push(ie7StyleSheet.classes, this);
	};
	// inheritance
	Class.ancestor = _Class;
	Class.prototype = new _Class;
	// constants
	Class.PREFIX = "ie7_";
	Class.ALL = /[^\}\,\s]*([>\+~][^:@\,\s\{]+|:(first-child|last-child|empty|root)|\.[\w-]+\.[\w-.]+|@[@\d]+)/g;
//#	Class.MATCH = new RegExp("\\s" + Class.PREFIX + "\\d+\\b", "g");

	// class methods
	Class.ID = function(match) {
		return simpleSelector(match) + new Class(match);
	};

	// -----------------------------------------------------------------------
	// IE7 dynamic style
	// -----------------------------------------------------------------------

	// virtual
	function _DynamicStyle() {
	//-	this.attach = "";
	//- this.dynamicPseudoClass = null;
	//-	this.target = "";
		// execute the underlying css2 query for this class
		this.exec = function() {
			// execute the underlying css query for this class
			var match = cssQuery(this.attach);
			// process results
			for (var i in match) {
				// retrieve the event handler's target element(s)
				var target = (this.target) ? cssQuery(this.target, match[i]) : [match[i]];
				// attach event handlers for dynamic pseudo-classes
				if (target) this.dynamicPseudoClass(match[i], target, this);
			}
		};
	};
	// inheritance
	_DynamicStyle.prototype = new _Class;

	// constructor
	function DynamicStyle(selector, attach, dynamicPseudoClass, target) {
		// inheritance
		this.inherit = Class;
		this.inherit(selector);
		// initialise object properties
		this.attach = attach;
		this.dynamicPseudoClass = dynamicPseudoClasses[dynamicPseudoClass];
		this.target = target;
	};
	// inheritance
	DynamicStyle.ancestor = _DynamicStyle;
	DynamicStyle.prototype = new _DynamicStyle;
	// constants
	DynamicStyle.ALL = /([^\}]*):(hover|active|focus)([^\{]*)/g;
	DynamicStyle.ANCHOR = /(\ba(\.[\w-]+)?)$|(:link|:visited)$/i;

	// class methods
	DynamicStyle.ID = function(match, attach, dynamicPseudoClass, target) {
		// no need to capture anchor events
		if (isHTML && dynamicPseudoClass != "focus" && DynamicStyle.ANCHOR.test(attach)) return match;
		return simpleSelector(match) + new DynamicStyle(match, attach, dynamicPseudoClass, target);
	};

	// -----------------------------------------------------------------------
	// IE7 dynamic pseudo-classes
	// -----------------------------------------------------------------------

	dynamicPseudoClasses = {
		hover: function(element) {
			var instance = arguments;
			addEventHandler(element, "onmouseover", function() {
				ie7Event.hover.register(instance);
			});
			addEventHandler(element, "onmouseout", function() {
				ie7Event.hover.unregister(instance);
			});
		},
		active: function(element) {
			var instance = arguments;
			addEventHandler(element, "onmousedown", function() {
				ie7Event.active.register(instance);
			});
		},
		focus: function(element) {
			var instance = arguments;
			addEventHandler(element, "onfocus", function() {
				ie7Event.focus.register(instance);
			});
			addEventHandler(element, "onblur", function() {
				ie7Event.focus.unregister(instance);
			});
			// check focus of the active element
			if (element == ownerDocument.activeElement) {
				ie7Event.focus.register(instance)
			}
		}
	};

	// globally trap the mouseup event (thanks Martijn!)
	ownerDocument.attachEvent("onmouseup", function() {
		with (ie7Event.active) for (var i in instances) unregister(instances[i]);
		with (ie7Event.hover) for (i in instances)
			if (!instances[i][0].contains(event.srcElement)) unregister(instances[i]);
	});

	// -----------------------------------------------------------------------
	//  IE7 events
	// -----------------------------------------------------------------------

	// virtual
	function _ie7Event() {
		// properties
	//- this.type = "";
	//- this.instances = null;
		// methods
		this.register = function(instance) {
			var element = instance[0];
			var target = instance[1];
			var Class = instance[2];
			for (var i in target) Class.add(target[i]);
			this.instances[Class.id + element.uniqueID] = instance;
		};
		this.unregister = function(instance) {
			var element = instance[0];
			var target = instance[1];
			var Class = instance[2];
			for (var i in target) Class.remove(target[i]);
			delete this.instances[Class.id + element.uniqueID];
		};
	};

	// constructor
	function ie7Event(type) {
		this.type = type;
		this.instances = {};
		ie7Event[type] = this;
	};
	// inheritance
	ie7Event.prototype = new _ie7Event;

	// ie7 events
	new ie7Event("hover");
	new ie7Event("active");
	new ie7Event("focus");

	// -----------------------------------------------------------------------
	// generic functions
	// -----------------------------------------------------------------------

	function addEventHandler(element, type, handler) {
		element.attachEvent(type, handler);
	//# push(element.runtimeStyle.events, {type:type, handler:handler});
	};

	function removeEventHandler(element, event) {
		element.detachEvent(event.type, event.handler);
	};

	//var TOKENS = /^.+[+~]/, PSEUDO = /[:@][\w-]+/g, CHILD = />/g;
	var COMPLEX = /[^\s]+[+~]|@\d+|:(first-child|last-child|empty|root|hover|active|focus|before|after)|\.[\w-.]+/g, CHILD = />/g;
	function simpleSelector(selector) {
		// attempt to preserve specificity for "loose" parsing by
		//  removing unknown tokens from a css selector but keep as
		//  much as we can
		return selector.replace(COMPLEX, "").replace(CHILD, " ");
	};

});
} catch (error) {
	// this means that ie7-core has not loaded.
	// the error is trapped there
}

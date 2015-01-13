/*
	W3C compliance for Microsoft Internet Explorer

	this module forms part of IE7
	IE7 version 0.6.1 (alpha) 2004/06/08
	by Dean Edwards, 2004
*/

// constants
var MESSAGES = [
	"%1 loaded successfully"
];

document.alert = function(message) {
	var title = NAME + " version " + VERSION + "\n\n";
	if (!arguments.length) message = "";
	else if (message && message.constructor == Error) message = "Error: " + message.message;
	else if (typeof message == "number") {
		message = MESSAGES[message] || message;
		for (var i = 1; i < arguments.length; i++) message = message.replace("%" + i, arguments[i]);
	}
	window.alert(title + message);
};
window.alert("IE7 debug mode");

	document.getElementById("spanUser").style.visibility = "hidden";
	document.getElementById("spanPass").style.visibility = "hidden";

function check() {	
	// if(username.value.length<2 || username.value.length>12) {
	// 	alert("You must enter a username that is 2 - 12 characters long.");
	// 	username.focus();
	// 	return false;
	// }

	// if(password.value.length<4 || password.value.length>8 || !isNaN(password.value)) {
	// 	alert("You must enter your PASSWORD which must have 4 to 8 characters");
	// 	password.focus();
	// 	return false;
	// }

	//much simpler for future users if the check function contains all the other functions, then if one is acting up/buggy it's easy
	// to fix and it's also easier to understand what functions there are and easier to find the functions.
	
	return checkUsernameMinLength() && checkUsernameMaxLength && checkPasswordMinLength() && checkPasswordMaxLength() && checkPasswordISNAN();	    
}

function checkPasswordMinLength() {
	if(password.value.length < 4) {
		document.getElementById("spanPass").style.visibility = "visible";
		password.focus();
		return false;
	}
	document.getElementById("spanPass").style.visibility = "hidden";
	return true;
}

function checkPasswordMaxLength() {
	if(password.value.length > 8) {
		document.getElementById("spanPass").style.visibility = "visible";
		password.focus();
		return false;
	}
	document.getElementById("spanPass").style.visibility = "hidden";
	return true;
}

function checkPasswordISNAN() {
	if(!isNaN(password.value)) {
		document.getElementById("spanPass").style.visibility = "visible";
		password.focus();
		return false;
	}
	document.getElementById("spanPass").style.visibility = "hidden";
	return true;
}

function checkUsernameMinLength() {
	if(username.value.length < 2) {
		document.getElementById("spanUser").style.visibility = "visible";
		username.focus();
		return false;
	}
	document.getElementById("spanUser").style.visibility = "hidden";
	return true;
}

function checkUsernameMaxLength() {
	if(username.value.length > 12) {
		document.getElementById("spanUser").style.visibility = "visible";
		username.focus();
		return false;
	}
	document.getElementById("spanUser").style.visibility = "hidden";
	return true;
}

var formA = document.getElementById("formA");
var username = document.getElementById("username");
var password = document.getElementById("password");

username.focus();

formA.onsubmit = check;
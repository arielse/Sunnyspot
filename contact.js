document.getElementById("spanFname").style.visibility = "hidden";
document.getElementById("spanLname").style.visibility = "hidden";
document.getElementById("spanAddress").style.visibility = "hidden";
document.getElementById("spanEmail").style.visibility = "hidden";
document.getElementById("spanPhone").style.visibility = "hidden";
document.getElementById("spanMobile").style.visibility = "hidden";
document.getElementById("spanRadio").style.visibility = "hidden";

function check() {

	if(fname.value.length < 2) {
		document.getElementById("spanFname").style.visibility = "visible";
		fname.focus();
		return false;
	}
	document.getElementById("spanFname").style.visibility = "hidden";

	if(lname.value.length < 2) {
		document.getElementById("spanLname").style.visibility = "visible";
		lname.focus();
		return false;
	}
	document.getElementById("spanLname").style.visibility = "hidden";

	if(address.value.length < 10) {
		document.getElementById("spanAddress").style.visibility = "visible";
		address.focus();
		return false;
	}
	document.getElementById("spanAddress").style.visibility = "hidden";

	if(phone.value.length < 8 || phone.value.length > 14) {
		document.getElementById("spanPhone").style.visibility = "visible";
		phone.focus();
		return false;
	}
	document.getElementById("spanPhone").style.visibility = "hidden";

	if(mobile.value.length < 10 || mobile.value.length > 12) {
		document.getElementById("spanMobile").style.visibility = "visible";
		mobile.focus();
		return false;
	}
	document.getElementById("spanMobile").style.visibility = "hidden";

	if(email.value.length < 7) {
		document.getElementById("spanEmail").style.visibility = "visible";
		email.focus();
		return false;
	}
	document.getElementById("spanEmail").style.visibility = "hidden";

	var num1 = email.value.indexOf("@");
	var num2 = email.value.lastIndexOf(".");
	
	if(email.value.indexOf("@" || ".") ==-1 || num1 > num2) {
		document.getElementById("spanEmail").style.visibility = "visible";
		email.focus();
		return false;
	}
	document.getElementById("spanEmail").style.visibility = "hidden";

	if(radio1.checked == false && radio2.checked == false && radio3.checked == false && radio4.checked == false) {
		document.getElementById("spanRadio").style.visibility = "visible";
		return false;
	}
	document.getElementById("spanRadio").style.visibility = "hidden";

	return true;

}




var formA = document.getElementById("contactForm");
var fname = document.getElementById("fname");
var lname = document.getElementById("lname");
var address = document.getElementById("address");
var phone = document.getElementById("phone");
var mobile = document.getElementById("mobile");
var email = document.getElementById("email");
var radio1 = document.getElementById("radio1");
var radio2 = document.getElementById("radio2");
var radio3 = document.getElementById("radio3");
var radio4 = document.getElementById("radio4");

fname.focus();

formA.onsubmit = check;






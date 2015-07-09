document.getElementById("spanType").style.visibility = "hidden";
document.getElementById("spanDescription").style.visibility = "hidden";
document.getElementById("spanPerNight").style.visibility = "hidden";
document.getElementById("spanPerWeek").style.visibility = "hidden";
document.getElementById("spanPhoto").style.visibility = "hidden";
document.getElementById("spanPpnValue").style.visibility = "hidden";
document.getElementById("spanPpwValue").style.visibility = "hidden";
document.getElementById("spanNightVSWeek").style.visibility = "hidden";

function check() {


	return checkTypeNotNull() && checkDescriptionNotNull() && checkPerNightNotNull() && checkPerWeekNotNull()
	 && checkPhotoNotNull() && checkPerWeekValue() && checkPerNightValue() && checkNightVSWeek();
	 
}

function checkTypeNotNull() {
	if (type.value == "") {
		document.getElementById("spanType").style.visibility = "visible";
		type.focus();
		return false;
	}
	document.getElementById("spanType").style.visibility = "hidden";
	return true;
}


function checkDescriptionNotNull() {
	if (description.value == "") {
		document.getElementById("spanDescription").style.visibility = "visible";
		description.focus();
		return false;
	}
	document.getElementById("spanDescription").style.visibility = "hidden";
	return true;
}


function checkPerNightNotNull() {
	if (ppn.value == "") {
		document.getElementById("spanPerNight").style.visibility = "visible";
		ppn.focus();
		return false;
	}
	document.getElementById("spanPerNight").style.visibility = "hidden";
	return true;
}


function checkPerWeekNotNull() {
	if (ppw.value == "") {
		document.getElementById("spanPerWeek").style.visibility = "visible";
		ppw.focus();
		return false;
	}
	document.getElementById("spanPerWeek").style.visibility = "hidden";
	return true;
}


function checkPhotoNotNull() {
	if (photo.value == "") {
		document.getElementById("spanPhoto").style.visibility = "visible";
		photo.focus();
		return false;
	}
	document.getElementById("spanPhoto").style.visibility = "hidden";
	return true;
}


function checkPerNightValue() {
	if(ppn.value < 50 || ppn.value > 200) {
		document.getElementById("spanPpnValue").style.visibility = "visible";
		ppn.focus();
		return false;
	}
	document.getElementById("spanPpnValue").style.visibility = "hidden";
	return true;
}

function checkPerWeekValue() {
	if (ppw.value < 200 || ppw.value > 2000) {
		document.getElementById("spanPpwValue").style.visibility = "visible";
		ppw.focus();
		return false;
	}
	document.getElementById("spanPpwValue").style.visibility = "hidden";
	return true;
}

function checkNightVSWeek() {
	if ((parseFloat(ppn.value) >= (parseFloat(ppw.value)) {
		document.getElementById("spanNightVSWeek").style.visibility = "visible";
		ppn.focus();
		console.log(ppn.value, ppw.value);
		return false;

	}
	document.getElementById("spanNightVSWeek").style.visibility = "hidden";
	return true;
}




var form = document.getElementById("update")
var type = document.getElementById("type");
var description = document.getElementById("cabinDescription");
var ppn = document.getElementById("ppn");
var ppw = document.getElementById("ppw");
var photo = document.getElementById("photo");

type.focus();

form.onsubmit = check;


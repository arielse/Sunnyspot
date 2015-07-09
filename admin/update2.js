document.getElementById("spanType").style.visibility = "hidden";
document.getElementById("spanDescription").style.visibility = "hidden";
document.getElementById("spanPerNight").style.visibility = "hidden";
document.getElementById("spanPerWeek").style.visibility = "hidden";
document.getElementById("spanPhoto").style.visibility = "hidden";
document.getElementById("spanPpnValue").style.visibility = "hidden";
document.getElementById("spanPpwValue").style.visibility = "hidden";
document.getElementById("spanNightVSWeek").style.visibility = "hidden";

function check() {


	if (type.value == "") {
		document.getElementById("spanType").style.visibility = "visible";
		type.focus();
		return false;
	}
	document.getElementById("spanType").style.visibility = "hidden";
	



	if (description.value == "") {
		document.getElementById("spanDescription").style.visibility = "visible";
		description.focus();
		return false;
	}
	document.getElementById("spanDescription").style.visibility = "hidden";
	


	if (ppn.value == "") {
		document.getElementById("spanPerNight").style.visibility = "visible";
		ppn.focus();
		return false;
	}
	document.getElementById("spanPerNight").style.visibility = "hidden";



	if (ppw.value == "") {
		document.getElementById("spanPerWeek").style.visibility = "visible";
		ppw.focus();
		return false;
	}
	document.getElementById("spanPerWeek").style.visibility = "hidden";
	


	if (photo.value == "") {
		document.getElementById("spanPhoto").style.visibility = "visible";
		photo.focus();
		return false;
	}
	document.getElementById("spanPhoto").style.visibility = "hidden";



	if(ppn.value < 50 || ppn.value > 200) {
		document.getElementById("spanPpnValue").style.visibility = "visible";
		ppn.focus();
		return false;
	}
	document.getElementById("spanPpnValue").style.visibility = "hidden";



	if (ppw.value < 200 || ppw.value > 2000) {
		document.getElementById("spanPpwValue").style.visibility = "visible";
		ppw.focus();
		return false;
	}
	document.getElementById("spanPpwValue").style.visibility = "hidden";

	if ((parseFloat(ppn.value)) >= (parseFloat(ppw.value))) {
		document.getElementById("spanNightVSWeek").style.visibility = "visible";
		ppn.focus();
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


function check()
{
	if(document.myForm.date.value =="2") {
		document.getElementById("errorDate").innerHTML = "Invalide";
		document.myForm.date.style.backgroundColor = "#fba";
		document.myForm.date.focus();
		return false;
		}
	
	else if(document.myForm.patient.value == "") {
		document.getElementById("errorDate").innerHTML = "Invalide";
		document.myForm.patient.style.backgroundColor = "#fba";
		document.myForm.patient.focus();
		return false;
		}
	else {return true;}
	

	}
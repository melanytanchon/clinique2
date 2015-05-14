function check()
{
	if(document.myForm.mdp.value =="") {
		document.getElementById("maZoneNom").innerHTML = "Invalide";
		document.myForm.mdp.style.backgroundColor = "#fba";
		document.myForm.mdp.focus();
		return false;
		}
	else 	if(document.myForm.mail.value =="") {
		document.getElementById("maZoneNom").innerHTML = "Invalide";
		document.myForm.mail.style.backgroundColor = "#fba";
		document.myForm.mail.focus();
		return false;
		}

	else if (document.myForm.mail.value.indexOf("@") == -1){
		document.getElementById("maZoneNom").innerHTML = "Invalide";
		document.myForm.mail.style.backgroundColor = "#fba";
		document.myForm.mail.focus();
		return false;
	}
	else {return true;}
	

	}
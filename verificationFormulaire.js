function check()
{
	if(document.myForm.nom.value == "") {
		document.getElementById("maZoneNom").innerHTML = "Invalide";
		document.myForm.nom.style.backgroundColor = "#fba";
		document.myForm.nom.focus();
		return false;
	}
	else{
		document.getElementById("maZoneNom").innerHTML = "";
		document.myForm.nom.style.backgroundColor = "white";
	}
	if(document.myForm.prenom.value == "") {
		document.getElementById("maZonePrenom").innerHTML = "Invalide";
		document.myForm.prenom.style.backgroundColor = "#fba";
		document.myForm.prenom.focus();
		return false;
	}	
	else{
		document.getElementById("maZonePrenom").innerHTML = "";
		document.myForm.prenom.style.backgroundColor = "white";
	}
	if (document.myForm.mail.value.indexOf("@") == -1){
		document.getElementById("maZoneMail").innerHTML = "Invalide";
		document.myForm.mail.style.backgroundColor = "#fba";
		document.myForm.mail.focus();
		return false;
	}
	else{
		document.getElementById("maZoneMail").innerHTML = "";
		document.myForm.mail.style.backgroundColor = "white";
	}
	if (document.myForm.pwd.value.length < 2) {
		console.log("mistake");
		document.myForm.pwd.style.backgroundColor = "#fba";
        document.getElementById("maZonePwd").innerHTML = "Court";
		document.myForm.pwd.focus();
		return false;
	}
	else{
		document.getElementById("maZonePwd").innerHTML = "";
		document.myForm.pwd.style.backgroundColor = "white";
	}
	if (document.myForm.pwd.value != document.myForm.pwd2.value) {
		document.myForm.pwd2.style.backgroundColor = "#fba";
        document.getElementById("maZonePwd2").innerHTML = "Différents";
		document.myForm.pwd2.focus();
		return false;
	}
	else{
		document.getElementById("maZonePwd2").innerHTML = "";
		document.myForm.pw2.style.backgroundColor = "white";
	}
    return true;	
}

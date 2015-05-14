function check()
{
	if(document.myForm.age.value =="") {
		document.getElementById("errorAge").innerHTML = "Invalide";
		document.myForm.age.style.backgroundColor = "#fba";
		document.myForm.age.focus();
		return false;
		}
	else if(document.myForm.age.value <=0  | document.myForm.age.value >150) {
		document.getElementById("errorAge").innerHTML = "Invalide";
		document.myForm.age.style.backgroundColor = "#fba";
		document.myForm.age.focus();
		return false;
	}
	else if(document.myForm.sexe.value !='F' &&  document.myForm.sexe.value !='M') {
		document.getElementById("errorAge").innerHTML = "Invalide";
		document.myForm.sexe.style.backgroundColor = "#fba";
		document.myForm.sexe.focus();
		return false;
	}
	else if(document.myForm.fumeur.value !='Oui' &&  document.myForm.fumeur.value !='Non') {
		document.getElementById("errorAge").innerHTML = "Invalide";
		document.myForm.fumeur.style.backgroundColor = "#fba";
		document.myForm.fumeur.focus();
		return false;
	}
	else if(document.myForm.ant.value ==''){
	document.myForm.ant.value="RAS";
	return true;
	}
	else {return true;}
	

	}
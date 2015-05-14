<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
	function sendEmail($nomDest, $prenomDest, $spe) {
	
		$mail ="charlotterame@orange.fr"; // Déclaration de l'adresse de destination.
		if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
		{
			$passage_ligne = "\r\n";
		}
		else
		{
			$passage_ligne = "\n";
		}

		//=====Déclaration des messages au format texte.
		$message_txt = '<html><body>Bonjour Docteur '.$prenomDest.' '.$nomDest.',<br>'
		.'<br>Nous vous informons que vous avez été supprimé de la liste de nos médecins.<br>';	
		$message_txt = $message_txt.'<br>Cordialement,<br><br>';
		$message_txt = $message_txt.'Jeanne DUROUX<br></body><html>';
		// $message_txt = utf8_decode($message_txt);


		//=====Définition du sujet.
		$sujet =utf8_decode("La clinique vous informe de votre suppression de sa base de données!");
		//=========
		 
		//=====Création du header de l'e-mail.
		$header = "From: \"Administrateur\"<jeanne.duroux@gmail.fr>".$passage_ligne;
		$header.= "Reply-to: \"Administrateur\" <jeanne.duroux@gmail.fr>".$passage_ligne;
		$header.= "MIME-Version: 1.0".$passage_ligne;
		$header.= 'Content-Type: text/html; charset=utf-8' . "\r\n";
		//==========
		 
		//=====Envoi de l'e-mail.
		mail($mail,$sujet,$message_txt,$header);
		//==========
	}
?>
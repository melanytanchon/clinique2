<?php
	session_start();
	$id=$_SESSION['id'];
	$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");						
	mysqli_select_db($connexion, 'clinique');
	
	$saisie = mysqli_query($connexion, "SELECT saisie FROM questionnaire WHERE idPatient = $id"); 
	$saisietab = mysqli_fetch_array($saisie, MYSQLI_BOTH);
	
	if ($saisietab[0]==1){
	header ('location: QuestDejaSaisie.php');
	}
	else{
	header ('location: saisirQuestionnaire.php');
	}
?>
<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
	<head>
	<title>Nouveaux inscrits</title>
	<meta charset="utf-8">
	<link rel="icon" href="images/favicon.ico">
	<link rel="shortcut icon" href="images/favicon.ico" /><link rel="shortcut icon" href="images/favicon.png" />
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.1.1.js"></script>
	<script src="js/jquery.equalheights.js"></script>
	<script src="js/jquery.ui.totop.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script>
	$(document).ready(function(){
	  $().UItoTop({ easingType: 'easeOutQuart' });
	}) 
	</script>
	</head>
	<body  class="">

	<?php include("headerDeconnexion.php") ?>
	 
	<!--==============================Content=================================-->
	<div class="content"><div class="ic"></div>
		<div class="container_12">
		<div class="grid_12">
			<h3 class="head2">Personne(s) en attente</h3>
			<center><img src="images/attente.jpg" alt="" align = center><span></span><br><br><br></center>
		</div> 
			<div id="content">
				<center>
					<?php
						$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");
						mysqli_select_db($connexion, 'clinique');
						//on recupere tous booleens pour permettre l'acceptation des medecins
						$resMed = mysqli_query($connexion, "SELECT * FROM medecin"); 
						$tabMed = mysqli_fetch_array($resMed, MYSQLI_BOTH);
						while($tabMed = mysqli_fetch_array($resMed, MYSQLI_BOTH)){
							if($tabMed['accepte']==0){
								//on affiche les medecins en attente
								echo 'Nom :';
								echo $tabMed['nom']."<br>";
								echo 'Prenom :';
								echo $tabMed['prenom']."<br>";
								echo 'E-mail :';
								echo $tabMed['mail'];
								echo '<a href="gestionNouveauxInscrits.php?action=accepter&idMedecin='.$tabMed['idMedecin'].'"><br>Accepter / </a>';
								echo '<a href="gestionNouveauxInscrits.php?action=refuser&idMedecin='.$tabMed['idMedecin'].'">Refuser</a>';
								echo '<br><br>';
							} 
						}
						if (isset($_GET['action']) AND isset($_GET['idMedecin'])){
							$action = $_GET['action'];
							if ($action == "accepter"){
								//si le medecin est accepte le booleen passe a 1
								mysqli_query($connexion, "UPDATE medecin SET accepte = 1 WHERE  idMedecin =\"".$_GET['idMedecin']."\"");
								echo '<meta http-equiv="refresh" content="0;URL=gestionNouveauxInscrits.php">';
								//permet de recharger la page pour n'afficher que ceux qui restent en attente
							}
							elseif ($action == "refuser"){
								//suppression du medecin de la base de données
								mysqli_query($connexion, "DELETE FROM medecin WHERE idMedecin =\"".$_GET['idMedecin']."\"");
								echo '<meta http-equiv="refresh" content="0;URL=gestionNouveauxInscrits.php">';
								//permet de recharger la page pour n'afficher que ceux qui restent en attente
							}
						}
						
						//on fait la meme chose pour les patients
						$resPatient = mysqli_query($connexion, "SELECT * FROM patient"); 
						$tabPatient = mysqli_fetch_array($resPatient,MYSQLI_BOTH);
						while($tabPatient ){
							if($tabPatient['accepte']=='0'){
							
								//on affiche les patients en attente
								echo 'Nom :';
								echo $tabPatient['nom']."<br>";
								echo 'Prenom :';
								echo $tabPatient['prenom']."<br>";
								echo 'E-mail :';
								echo $tabPatient['mail'];
								echo '<a href="gestionNouveauxInscrits.php?action=accepter&idPatient='.$tabPatient['idPatient'].'"><br>Accepter / </a>';
								echo '<a href="gestionNouveauxInscrits.php?action=refuser&idPatient='.$tabPatient['idPatient'].'">Refuser</a>';
								echo '<br><br>';
								
							 }
							 $tabPatient = mysqli_fetch_array($resPatient,MYSQLI_BOTH);
						}
						if (isset($_GET['action']) AND isset($_GET['idPatient'])){
							$action = $_GET['action'];
							if ($action == "accepter"){
								//si le patient est accepte le booleen passe a 1
								mysqli_query($connexion, "UPDATE patient SET accepte = 1 WHERE  idPatient =\"".$_GET['idPatient']."\"");
								echo '<meta http-equiv="refresh" content="0;URL=gestionNouveauxInscrits.php">';
								//permet de recharger la page pour n'afficher que ceux qui restent en attente
							}
							elseif ($action == "refuser"){
								//suppression du patient de la base de données
								mysqli_query($connexion, "DELETE FROM patient WHERE idPatient =\"".$_GET['idPatient']."\"");
								echo '<meta http-equiv="refresh" content="0;URL=gestionNouveauxInscrits.php">';
								//permet de recharger la page pour n'afficher que ceux qui restent en attente
							}
						}	
						echo '<br>';
						if($_SESSION['quest']==1){
						echo '<a href="pageMembreAdminAvecQuestionnaire.php"><b>Retour à ma page</b></a>';
						}
						else{
							echo '<a href="pageMembreAdminSansQuestionnaire.php"><b>Retour à ma page</b></a>';
							}		
					?>
				</center>			
			</div>
		</div>
	</div>          

	<!--==============================footer=================================-->

	<?php include("footerDeconnexion.php"); ?>
		<script>
			$(document).ready(function(){ 
				$(".bt-menu-trigger").toggle( 
					function(){
						$('.bt-menu').addClass('bt-menu-open'); 
					}, 
					function(){
						$('.bt-menu').removeClass('bt-menu-open'); 
					} 
				); 
			}) 
		</script>
	</body>
</html>
<!DOCTYPE html>
<!-- cette page est appelée par gestionNouveauxMedecins.php pour que l'administrateur puisse ajouter/supprimer des médecins-->
<?php session_start(); ?>
<html lang="en">
     <head>
     <title>Gestion des médecins</title>
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
				<h3 class="head2">Gestion des médecins</h3>
			</div>  
				<div id="container">
					<div id="content">
						<?php
							if(!empty($_POST['mail'])){
								// D'abord, je me connecte à la base de données.
								$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");
								mysqli_select_db($connexion, 'clinique');
								$nom = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['nom']));
								$prenom = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['prenom']));
								$mail = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['mail']));
								//récupérer l'idSpe pour l'ajouter à la table medecin
								$res = mysqli_query($connexion, "SELECT idSpe FROM specialite WHERE nomSpe =\"".$_POST['specialites']."\"");
								$tab = mysqli_fetch_array($res, MYSQLI_NUM);
								$idSpe = $tab[0];
								
								$requete = "SELECT * FROM medecin WHERE nom='$nom' AND mail='$mail'";
								$result=mysqli_query($connexion,$requete);
								
								
							
							//Selon l'option sélectionnée, le médecin est ajouté ou supprimé à la base de données.
							//S'il est ajouté, son mot de passe est 0000 par défaut et il devra le modifier, les instructions
							//lui seront données dans le mail qu'il recevra
							//il est accepté car c'est l'administrateur lui-même qui l'ajoute.

								$choix = ceil($_POST['choix']);
								if ($choix == "1"){
									if((mysqli_num_rows($result))==0){
										//echo $choix;
										//on ajoute le medecin dans la base de données
										mysqli_query($connexion, "INSERT INTO medecin VALUES('', '$nom', '$prenom', '$mail','0000','1','$idSpe','','0')");
										include("mailAjoutMedecin.php");
										//sendEmail($mail,$nom,$prenom,$_POST['specialites']); je n'utilise pas le vrai mail du destinataire pour ne pas spamer des personnes inconnues
										sendEmail($nom,$prenom,$_POST['specialites']);
										//recapitulatif des informations 
										echo"<fieldset>";
										echo"<legend> Récapitulatif concernant le médecin ajouté : </legend>";
										echo "<BR>Le médecin ".$prenom." ".$nom." ayant pour spécialité ".$_POST['specialites']." a été ajouté à la base de données.<BR>";
										echo "Son mail est : ".$mail." et son mot de passe a été initialisé à 0000";
										echo"</fieldset>";
									}
									else{
										echo"<fieldset>";
										echo"<legend> Erreur : </legend>";
										echo "<BR>Le médecin ".$nom." ".$prenom." existe déjà dans la base de données.";
										echo"</fieldset>";
									}
								}
								else{
									if((mysqli_num_rows($result))==0){
										echo"<fieldset>";
										echo"<legend> Erreur : </legend>";
										echo "<BR>Le médecin ".$nom." ".$prenom." ne peut être supprimé car il n'est pas dans la base de données.<br>";
										echo"</fieldset>";
									}
									else{
										//on supprime le medecin dans la base de données
										mysqli_query($connexion, "DELETE FROM medecin WHERE nom='$nom' AND prenom='$prenom' AND mail='$mail')");
										include("mailSuppressionMedecin.php");
										sendEmail($nom,$prenom,$_POST['specialites']);
										//recapitulatif des informations 
										echo"<fieldset>";
										echo"<legend> Récapitulatif concernant le médecin supprimé : </legend>";
										echo "<BR>Le médecin ".$prenom." ".$nom." dont la spécialité est ".$_POST['specialites']." a été supprimé de la base";
										echo"</fieldset>";
									}
								}
							}					
						?>	
					<BR><BR>
					</div>
						<?php
							if ($_SESSION['quest']==0){
								if ($_SESSION['admin']==0) {
								echo '<center><br><br><a href="pageMembreMedecinSansQuestionnaire.php"><b>Retour à ma page</b></a><br></center>';
								}
								else {
								echo '<center><br><br><a href="pageMembreAdminSansQuestionnaire.php"><b>Retour à ma page</b></a><br></center>';
								}
							}
							if ($_SESSION['quest']==1){
								if ($_SESSION['admin']==0 ){
								echo '<center><br><br><a href="pageMembreMedecinAvecQuestionnaire.php"><b>Retour à ma page</b></a><br></center>';
								}
								else {
								echo '<center><br><br><a href="pageMembreAdminAvecQuestionnaire.php"><b>Retour à ma page</b></a><br></center>';
								}
							}	
						?>	
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
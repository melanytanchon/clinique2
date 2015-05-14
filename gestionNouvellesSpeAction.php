<!DOCTYPE html>
<!-- cette page est appelée par gestionNouveauxMedecins.php pour que l'administrateur puisse ajouter/supprimer des médecins-->
<?php session_start(); ?>
<html lang="en">
     <head>
     <title>Gestion des Spécialités</title>
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
				<h3 class="head2">Gestion des spécialités</h3>
			</div>  
				<div id="container">
					<div id="content">
						<?php
							if(!empty($_POST['specialite'])){
							
							//Selon l'option sélectionnée, la spécialité est ajoutés ou supprimés à la base de données.

								$choix = ceil($_POST['choix']);
								
								//Connexion à la base de données.
								$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");						
								mysqli_select_db($connexion, 'clinique');
								$specialite = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['specialite']));	
								
								$requete = "SELECT * FROM specialite WHERE nomSpe  =\"".$_POST['specialite']."\"";
								$result=mysqli_query($connexion,$requete);
								
								if ($choix == "1"){
									//Vérifier si la spécialité qu'on est en train d'ajouter n'existe pas déja
									if((mysqli_num_rows($result))==0){
											mysqli_query($connexion, "INSERT INTO specialite VALUES('', '$specialite')");
											//recapitulatif des informations données
											echo"<fieldset>";
											echo"<legend> Récapitulatif concernant la spécialité : </legend>";
											echo "<BR>La ".$specialite." a bien été ajoutée à la base de données.<br>";
											echo"</fieldset>";
										  }
									else{
										echo"<fieldset>";
										echo"<legend> Erreur : </legend>";
										echo "<BR>La ".$specialite." existe déjà dans la base de données.";
										echo"</fieldset>";
									}
								}
								else{
									//Vérifier si la spécialité qu'on est en train de supprimer existe 
									if((mysqli_num_rows($result))==0){
										echo"<fieldset>";
										echo"<legend> Erreur : </legend>";
										echo "<BR>La ".$specialite." ne peut être supprimée car elle n'existe pas.<br>";
										echo"</fieldset>";
									}
									else{
										mysql_query($connexion, "DELETE FROM specialite WHERE nomSpe= =\"".$_POST['specialite']."\"");
										echo"<fieldset>";
										echo"<legend> Récapitulatif concernant la spécialité : </legend>";
										echo "<BR>La ".$specialite." a bien été supprimée de la base de données.<br>";
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
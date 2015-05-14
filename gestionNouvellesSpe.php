<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
     <head>
     <title>Gestion des spécialités</title>
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
			  <h3 class="head2">Ajout de spécialités</h3>
			</div>  
				<div id="container">
					<div id="content">
					<center><img src="images/ajouter.png" alt=""><span></span></a></center>
						<form name="myForm"  method="post" action="gestionNouvellesSpeAction.php">
							<BR>
							<fieldset>
								<legend> Vous voulez </legend><BR>
								<select name="choix"><BR>
								<option value="1"selected>Ajouter une spécialité</option>
								<option value="2">Supprimer une spécialité</option></select>
							</fieldset>
							<fieldset>
								<legend> Saisie de la spécialité à modifier </legend><BR>
								<label for="specialite">Spécialité :</label><BR>
								<Input type = "text" name="specialite" placeholder="à remplir"><span id="maZoneNewSpe" class="error"></span> <BR>
								<BR><BR>
							</fieldset>
							<p>
								<Input type ="submit" value ="Valider"/>
								<input type="reset" value="Effacer"/><BR>
							</p>
						</form>
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
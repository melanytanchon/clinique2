<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
     <head>
     <title>Nouveaux médecins</title>
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
					<center><img src="images/ajouter.png" alt=""><span></span></a></center>
						<form name="myForm"  method="post" action="gestionNouveauxMedecinsAction.php"><BR>
							<fieldset>
								<legend> Vous voulez </legend><BR>
								<select name="choix"><BR>
								<option value="1"selected>Ajouter un médecin</option>
								<option value="2">Supprimer un médecin</option></select>
							</fieldset><br>
							<fieldset>
								<legend>Données concernant le médecin :</legend><BR>
								<label for="nom">Nom :</label><BR>
								<Input type = "text" name="nom" placeholder="à remplir"><span id="maZoneNom" class="error"></span> <BR>
								<label for="prenom">Prénom :</label><BR>
								<Input type = "text" name="prenom" placeholder="à remplir"><span id="maZonePrenom" class="error"></span> <BR>
								<label for="mail">E-mail :</label><BR>
								<Input type = "text" name="mail" placeholder="à remplir"><span id="maZoneMail" class="error"></span> <BR>
								<?php
									$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");
									
									if(!$connexion){
										die('could not connect:'.mysql-error());
									}
									
									$db = mysqli_select_db($connexion, 'clinique');
									$result = mysqli_query($connexion, "SELECT nomSpe FROM specialite");
									
									echo "<label for=\"specialites\">Specialité :<BR></label>";
									echo "<select name=\"specialites\" id=\"specialites\">";
									
									while ($row = mysqli_fetch_array($result)){
										echo "<option value=\"".$row['nomSpe']."\">".$row['nomSpe']."</option>";
									}
									echo "</select><BR>";
								?>	
							<BR><BR>
							</fieldset>
							<p>
								<input type ="submit" value ="Valider"/>
								<input type="reset" value="Effacer"/><BR>
							</p>
						</form>
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
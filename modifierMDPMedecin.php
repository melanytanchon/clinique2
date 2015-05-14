<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Données personnelles</title>
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
      <h3 class="head2">Votre compte</h3>	  
    </div> 
		<div id="content">
		<script type="text/javascript" src="verfiFormulaireModif.js"></script>
			<center><img src="images/mdp.png" alt="" align = center><span></span><br><br><br></center>
			<form name="myForm"  method="post" action="modifierMDPMedecinAction.php" onsubmit="return check()">
			<BR>
			<fieldset>
				<legend> Changement de mot de passe </legend><BR>
				<label for="mdp">Nouveau mot de passe</label><BR>
				<Input type = "text" id ="mdp" name="mdp" placeholder="à remplir"><span id="maZoneNom" class="error"></span>
				<BR><BR>
				</fieldset>
				<fieldset>
				<legend> Changement de mail </legend><BR>
					<label for="mail">Nouveau mail</label><BR>
					<Input type = "text" id="mail" name="mail" placeholder="à remplir"><span id="maZoneNom" class="error"></span>
					<BR><BR>
				</fieldset>
					<p>
						<Input type ="submit" name="valider" value ="Valider" />
						<input type="reset" name="annuler"value="Effacer"/><BR>
					</p>
					<?php 
					session_start();
					if ($_SESSION['quest'] ==0){
						if ($_SESSION['admin']==0){
							echo "<center><br><br><a href='pageMembreMedecinSansQuestionnaire.php'><b>Retour à ma page</b></a><br></center>";
						}
						else {
							echo "<center><br><br><a href='pageMembreAdminSansQuestionnaire.php'><b>Retour à ma page</b></a><br></center>";	
						}
						}
					else{
						if ($_SESSION['admin']==0){
							echo "<center><br><br><a href='pageMembreMedecinAvecQuestionnaire.php'><b>Retour à ma page</b></a><br></center>";					
						}
						else{
							echo "<center><br><br><a href='pageMembreAdminAvecQuestionnaire.php'><b>Retour à ma page</b></a><br></center>";
						}
					}
					
					
					?>
					
				</form>			
					
			
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
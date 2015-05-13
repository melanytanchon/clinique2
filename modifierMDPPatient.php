<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Reservation</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
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
      <h3 class="head2">À propos de vous</h3>	  
    </div> 
		<div id="content">
			<center><img src="images/mdp.png" alt="" align = center><span></span><br><br><br></center>
			<form name="myForm"  method="post" action="modifierMDPPatientAction.php">
			<BR>
			<fieldset>
						<legend> Changement de mot de passe </legend><BR>
						<label for="mdp">Nouveau mot de passe</label><BR>
						<Input type = "text" name="mdp" placeholder="à remplir">
						
				

					
					<BR><BR>
					</fieldset>
					
					<p>
						<Input type ="submit" name="valider" value ="Valider" />
						<input type="reset" name="annuler"value="Effacer"/><BR>
					</p>
					<?php 
					session_start();
					if ($_SESSION['quest'] ==0){
					echo "<center><br><br><a href='pageMembrePatientSansQuestionnaire.php'><b>Retour à ma page</b></a><br></center>";
					}
					else{
					echo "<center><br><br><a href='pageMembrePatientAvecQuestionnaire.php'><b>Retour à ma page</b></a><br></center>";
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
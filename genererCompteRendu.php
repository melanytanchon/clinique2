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
      <h3 class="head2">Compte rendu</h3>	  
    </div> 
		<div id="content">
			<center><img src="images/info.png" alt="" align = center><span></span><br><br><br></center>
			<form name="myForm"  method="post" action="genererCompteRenduAction.php">
			<BR>
			<fieldset>
						<legend>Suivi du patient</legend><BR>
						<label for="date">Date:</label><BR>
						<Input type = "date" name="date" placeholder="à remplir"><span id="errorDate" class="error"></span>
						<br>

						<?php
						session_start();
						$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");						
						mysqli_select_db($connexion, 'clinique');
						$resPat = mysqli_query($connexion, "SELECT * FROM patient WHERE idMedecin=".$_SESSION['id']); 
				
							
				echo "<label for=\"patient\">Patient :<BR></label>";
						echo "<select name=\"patient\" id=\"patient\" onchange=\"request(this)\">";
						echo "<option value=\"\" disabled selected></option>";
						while ($row = mysqli_fetch_array($resPat)){
							echo "<option value=\"".$row['idPatient']."\">".$row['nom']."</option>";
						}
						echo "</select><br>";
						
						
						
						?>
						
					
						
						<BR><label for = "cr">Compte rendu</label>	<BR>	
						<BR><textarea name="cr" cols=30 Rows=5 value=""></textarea><BR>
		

					
					<BR><BR>
					</fieldset>
					
					<p>
						<Input type ="submit" name="valider" value ="Valider" />
						<input type="reset" name="annuler"value="Effacer"/><BR>
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
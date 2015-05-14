<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Information</title>
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
      <h3 class="head2">À propos de votre médecin</h3>
	  <center><img src="images/medecin.png" alt="" align = center><span></span><br><br><br></center>
    </div> 
 
					<div id="content">
					<center>
					
					<?php
					session_start();
					$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");						
					mysqli_select_db($connexion, 'clinique');
					$idMed=$_SESSION['idMedecin'];
					$resQuest = mysqli_query($connexion, "SELECT * FROM medecin WHERE idMedecin=$idMed"); 
				
					$row = mysqli_fetch_array($resQuest, MYSQLI_BOTH);
					$spe = mysqli_query($connexion, "SELECT nomSpe FROM specialite,medecin WHERE medecin.idSPe=specialite.idSpe and medecin.idMedecin=$idMed"); 
					
					$nomSpe = mysqli_fetch_array($spe,MYSQLI_BOTH);
					$quest = mysqli_query($connexion, "SELECT idQuestionnaire FROM medecin WHERE idMedecin=$idMed"); 
					$questTab = mysqli_fetch_array($quest);
					
					
					while ($row){
					echo '<div class="tabs tb gallery">
							<div class="div-nav  ">
								<div class="grid_12">
									<div id="container">
										<div id="content"><ul class="nav"><li><b><center>
						Nom : '.$row["nom"].'<br>
						Prenom : '.$row["prenom"].'<br>
						</center></li></ul><br>
					</div></div></div></div></div>
					
						
					<center>
						Spécialité : '.$nomSpe[0].'<br>
						Mail : '.$row["mail"].'<br><br>_____________________________________<br><br></center>';
					if($questTab[0]==1){
					echo '<a href="testQuestDejaSaisie.php">Saisir mon questionnaire</a><br>';}
					
					
					$row = mysqli_fetch_array($resQuest,  MYSQLI_BOTH);}
					if($_SESSION['quest'] == 1){echo '<a href="pageMembrePatientAvecQuestionnaire.php">Retour à ma page</a>';}
									else{echo '<a href="pageMembrePatientSansQuestionnaire.php">Retour à ma page</a>';}
					
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
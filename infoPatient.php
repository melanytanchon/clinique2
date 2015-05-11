<!DOCTYPE html>
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
      <h3 class="head2">Résultats de questionnaire</h3>
	  <center><img src="images/agree.png" alt="" align = center><span></span><br><br><br></center>
    </div> 
 
					<div id="content">
					<center>
					<?php
					session_start();
					$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");						
					mysqli_select_db($connexion, 'clinique');
					$resQuest = mysqli_query($connexion, "SELECT * FROM patient, questionnaire WHERE patient.idMedecin=".$_SESSION['id']." AND questionnaire.idPatient=patient.idPatient"); 
				
					
						
						
					while ($row = mysqli_fetch_array($resQuest)){
					echo '<br><br><br> <div class="tabs tb gallery">
        <div class="div-nav  ">
            <div class="grid_12">
				<div id="container">
					<div id="content"><ul class="nav"><li><b>À propos de votre patient</b></li></ul><br>
					</div></div></div></div>
					<center>
						Nom : '.$row["nom"].'<br>
						Prenom : '.$row["prenom"].'<br>
						Mail: '.$row["mail"].'<br></center>
						<div id="content"><ul class="nav"><li><b><br><br>Données médicales</b></li></ul><br>
					</div></div></div></div>
					<center>
						Sexe : '.$row["sexe"].'<br>
						Âge : '.$row["age"].'<br>
						Fumeur: '.$row["prenom"].'<br>
						Antécédents: '.$row["antecedent"].'<br></center>';
					
					
					
					
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
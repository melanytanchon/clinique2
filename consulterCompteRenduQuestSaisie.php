<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
     <head>
     <title>Compte rendu</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" /><link rel="shortcut icon" href="images/favicon.png" />
     <link rel="stylesheet" href="css/touchTouch.css">
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/jquery.tabs.min.js"></script>
     <script src="js/touchTouch.jquery.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
	 
     <script>
        $(document).ready(function(){

          $().UItoTop({ easingType: 'easeOutQuart' });
         $('.gallery a.gal').touchTouch();
         
       }) 
     </script>

     </head>
     <body  class="">

<?php include("headerDeconnexion.php") ?>

<!--==============================Content=================================-->
<div class="content"><div class="ic"></div>

<div class="container_12">
    <div class="grid_12">
      <h3 class="head2">Compte Rendu!</h3>
	  <center>_________________________________________________________________________</center>
    </div>  

		<div id="container">
			<div id="content">
			
					<?php
					session_start();
					$id= $_SESSION['id'];
					$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");						
					mysqli_select_db($connexion, 'clinique');
					
					$resCR = mysqli_query($connexion, "SELECT * FROM medecin, consultation WHERE consultation.idPatient=$id AND consultation.idMedecin=medecin.idMedecin"); 
					$row = mysqli_fetch_array($resCR);
					if ($row["nom"] == ''){
					echo '<center><img src="images/enCours.png" alt=""><span></span></a></center><br><br><br> <div class="tabs tb gallery">
        <div class="div-nav  ">
            <div class="grid_12">
				<div id="container">
					<div id="content"><ul class="nav"><li><b>Pas de compte rendu disponible</b></li></ul>
					<center>Votre compte rendu sera prochainement en ligne.<br>
					_________________________________________________________________________<br></center>
					</div>
					
					</div></div></div></div>';
					}
					while($row){	
						if ($row["nom"] != ''){
					
					echo '<center><img src="images/resultat.png" alt=""><span></span></a></center><br><br><br> <div class="tabs tb gallery">
        <div class="div-nav  ">
            <div class="grid_12">
				<div id="container">
					<div id="content"><ul class="nav"><li><b>À propos de votre médecin</b></li></ul><br>
					</div></div></div></div>
					<center>
						Nom : '.$row["nom"].'<br>
						Prenom : '.$row["prenom"].'<br>
						Mail: '.$row["mail"].'<br></center>
						<div id="content"><ul class="nav"><li><b><br><br>Votre compte rendu</b></li></ul><br>
					
					<center>
						Date : '.$row["date"].'<br>
						Compte rendu : '.$row["cr"].'<br>
						_________________________________________________________________________<br></center></div>';}
					else {
					echo '<center><img src="images/enCours.png" alt=""><span></span></a></center><br><br><br> <div class="tabs tb gallery">
        <div class="div-nav  ">
            <div class="grid_12">
				<div id="container">
					<div id="content"><ul class="nav"><li><b>Pas de compte rendu disponible</b></li></ul>
					<center>Votre compte rendu sera prochainement en ligne.
					_________________________________________________________________________<br></center>
					</div>
					
					</div></div></div></div>';
					}
					$row = mysqli_fetch_array($resCR);
					
					}
	
					echo '<br><center><br><br><a href="pageMembrePatientAvecQuestionnaire.php"><b>Retour à ma page</b></a><br></center></div>	';		
			
					
					
					
					?>
			
	
			</div>
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

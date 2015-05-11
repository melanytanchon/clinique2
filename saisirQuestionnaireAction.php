<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
     <head>
     <title>Menu</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
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
      <h3 class="head2">Enregistrement validé!</h3>
    </div>  

		<div id="container">
			<div id="content">
			<center><img src="images/info.png" alt=""><span></span></a></center>
				<?php 
						session_start();
						$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");						
						mysqli_select_db($connexion, 'clinique');
						
						
						$age=null;
						$re = "/\d+/"; 
 
						if (preg_match($re, $_POST['age'], $matches)){$age = $_POST['age'];}
						
						$sexe = $_POST['sexe'];
						$fumeur = $_POST['fumeur'];
						$ante = $_POST['antecedents'];
						$id = $_SESSION["id"];
						//ajouter l'idSpe à la table medecin
						
						mysqli_query($connexion, "INSERT INTO questionnaire VALUES(0, $id, 0, $age,'$fumeur','$sexe','$ante')");						
						
						//recapitulatif des informations données
						echo '<br><br><br> <div class="tabs tb gallery">
        <div class="div-nav  ">
            <div class="grid_12">
				<div id="container">
					<div id="content"><ul class="nav"><li><b>Saisir de vos données</b></li></ul><br>
					</div></div></div></div>
					<center>
						Votre âge : '.$age.'<br>
						Votre sexe : '.$sexe.'<br>
						Fumeur: '.$fumeur.'<br>
						Vos antécédents médicaux: '.$ante.'
						<br><br><a href="pageMembrePatientAvecQuestionnaire.php"><b>Retour à ma page</b></a><br></center>
					';
						
					
					
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
     <head>
     <title>Données personnelles</title>
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
      <h3 class="head2">Votre compte</h3>
    </div>  

		<div id="container">
			<div id="content">
			<center><img src="images/mdp.png" alt=""><span></span></a></center>
				<?php 
						session_start();
						
						$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");						
						mysqli_select_db($connexion, 'clinique');
						
						
						$id = $_SESSION['id'];
						$mdp = $_POST['mdp'];
						$mail = $_POST['mail'];
						echo '<br><br><br> <div class="tabs tb gallery">
						<div class="div-nav  ">
							<div class="grid_12">
								<div id="container">
									<div id="content"><ul class="nav"><li><b>Nouveau mot de passe</b></li></ul><br>
									</div>
								</div>
							</div>
						</div>';
					
						if ($mdp != ''){
						mysqli_query($connexion, "UPDATE patient SET 'pwd' = $mdp WHERE $id=idPatient");
						$_SESSION['pwd']=$mdp;
						echo '<center>
						Votre mdp: '.$mdp.'<br>';
						}
						else {
						echo "<br><br><b>Saisie vide, votre mot de passe n'a pas été modifié</b><br></center>";
						}
						
						echo '<br><br><br> <div class="tabs tb gallery">
						<div class="div-nav  ">
							<div class="grid_12">
								<div id="container">
									<div id="content"><ul class="nav"><li><b>Nouveau mail</b></li></ul><br>
									</div>
								</div>
							</div>
						</div>';
						if ($mail != ''){
						mysqli_query($connexion, "UPDATE patient SET 'mail' = $mail WHERE $id=idPatient");
						$_SESSION['mail']=$mail;
						echo '<center>
						Votre mail: '.$mail.'<br>';
						}
						else {
						echo "<br><br><b>Saisie vide, votre mail n'a pas été modifié</b><br></center>";
						}
						
						
						if ($_SESSION['quest'] ==0){
					echo "<center><br><br><a href='pageMembrePatientSansQuestionnaire.php'><b>Retour à ma page</b></a><br></center>";
					}
					else{
					echo "<center><br><br><a href='pageMembrePatientAvecQuestionnaire.php'><b>Retour à ma page</b></a><br></center>";
					}
					
						
					
						
					
					
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
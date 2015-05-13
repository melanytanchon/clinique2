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

<?php include("headerConnexion.php") ?>

<!--==============================Content=================================-->
<div class="content"><div class="ic"></div>

<div class="container_12">
    <div class="grid_12">
      <h3 class="head2">Connexion</h3>
    </div>  

		<div id="container">
			<div id="content">
				<?php
				
					$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB") or die(mysqli_error());
					if(!$connexion){
						die('could not connect:'.mysql-error());
					}
					$db = mysqli_select_db($connexion, 'clinique');
					$mail = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['mail']));
					$pwd = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['pwd']));
					$res = mysqli_query($connexion, "SELECT mail FROM patient WHERE mail =\"".$_POST['mail']."\""); //verifier si le medecin existe
					$tab = mysqli_fetch_array($res, MYSQLI_NUM);
					$name = mysqli_query($connexion, "SELECT nom FROM patient WHERE mail =\"".$_POST['mail']."\"");
					$nom = mysqli_fetch_array($name, MYSQLI_NUM);
					$id = mysqli_query($connexion, "SELECT idPatient FROM patient WHERE mail =\"".$_POST['mail']."\"");
					$idP = mysqli_fetch_array($id, MYSQLI_NUM);					
					$questionnaire = mysqli_query($connexion, "SELECT idQuestionnaire FROM patient WHERE mail =\"".$_POST['mail']."\"");					
					$quest = mysqli_fetch_array($questionnaire, MYSQLI_NUM);
					$prenom = mysqli_query($connexion, "SELECT prenom FROM patient WHERE mail =\"".$_POST['mail']."\"");
					$pn = mysqli_fetch_array($prenom, MYSQLI_NUM);					
					$medecin= mysqli_query($connexion, "SELECT idMedecin FROM patient WHERE mail =\"".$_POST['mail']."\"");
					$med = mysqli_fetch_array($medecin, MYSQLI_NUM);							
					if($tab[0]) // Si le mail existe.
					{
						$quete = mysqli_query($connexion, "SELECT pwd FROM patient WHERE mail=\"".$_POST['mail']."\"");
						$infos = mysqli_fetch_array($quete, MYSQLI_NUM);
						if($pwd == $infos[0])
						{
							// C'est ici que je mets le code servant à effectuer la connexion, car le mot de passe est bon.
							if (isset($_POST['mail']) && isset($_POST['pwd']) ) 
							{ 
								$quete = mysqli_query($connexion, "SELECT accepte FROM patient WHERE mail=\"".$_POST['mail']."\"");
								$infos = mysqli_fetch_array($quete, MYSQLI_NUM);
								if($infos[0] == 1){
									// on la démarre :)
									session_start ();
									// on enregistre les paramètres de notre visiteur comme variables de session ($mail et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
									$_SESSION['mail'] = $mail;
									$_SESSION['pwd'] = $pwd;
									$_SESSION['name'] = $nom[0];
									$_SESSION['id'] = $idP[0];
									$_SESSION['quest'] = $quest[0];
									$_SESSION['surname'] = $pn[0];
									$_SESSION['idMedecin'] = $med[0];
									
									// Redirection en fonction de s'il a ou non un questionnaire	
									if($quest[0] == 1){header ('location: pageMembrePatientAvecQuestionnaire.php');}
									else{header ('location: pageMembrePatientSansQuestionnaire.php');}	
								}
								
								else {
									header ('location: attenteValidation.php');
									}								
							}
												
						}
						else // Si le mot de passe n'est pas bon.
							{
							header ('location: PatientError.php');
							}					
					}
						else // Si le mail n'est pas bon.
							{
							header ('location: PatientError.php');
							}
					
				?>
			</div>
		</div>      
     </div>

</div>          

<!--==============================footer=================================-->

<?php include("footer.php"); ?>
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
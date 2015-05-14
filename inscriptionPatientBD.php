<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
     <head>
     <title>Récapitulatif</title>
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
      <h3 class="head2">Récapitulatif de votre inscription</h3>
    </div>  

		<div id="container">
			<div id="content">
				<?php 
					if(!empty($_POST['mail']))
					{
						// D'abord, je me connecte à la base de données.
						$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");						
						mysqli_select_db($connexion, 'clinique');
						// Je mets aussi certaines sécurités ici…
						$pwd = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['pwd']));
						$nom = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['nom']));
						$prenom = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['prenom']));
						$mail = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['mail']));
						
						$nomMedecin = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['medecins']));

						
						//ajouter l'idSpe à la table patient
						$res = mysqli_query($connexion, "SELECT idSpe FROM specialite WHERE nomSpe =\"".$_POST['specialites']."\"");
						$tab = mysqli_fetch_array($res, MYSQLI_NUM);
						$idSpe = $tab[0];
						
						//ajouter l'idMedecin à la table patient
						$res = mysqli_query($connexion, "SELECT idMedecin FROM medecin WHERE nom =\"".$_POST['medecins']."\"");
						$tab = mysqli_fetch_array($res, MYSQLI_NUM);
						$idMedecin = $tab[0];
						
						mysqli_query($connexion, "INSERT INTO patient VALUES('', '$nom', '$prenom', '$mail','$pwd','','','$idSpe','')");						
						
						//recapitulatif des informations données
						echo '<fieldset>';
						echo '<legend> Informations contenant vos données personnelles : </legend>';
						echo "Votre nom est : ".$nom."<br>";
						echo "Votre prénom est : ".$prenom."<br>";
						echo "Votre mail est : ".$mail."<br>";
						echo "Votre mot de passe est : ".$pwd."<br>";
						echo '</fieldset>';
						
						echo '<fieldset>';
						echo '<legend> Votre médecin et sa spécialité : </legend>';
						echo "Le médecin choisi est : ".$nomMedecin."<br>";
						echo "La spécialité choisie est : ".$_POST['specialites']."<br>";
						echo '</fieldset>';
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
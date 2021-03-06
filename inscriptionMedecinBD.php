<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Inscription</title>
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

<?php include("headerConnexion.php") ?>

<!--==============================Content=================================-->
<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - December 02, 2013!</div>

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
						// Je vais crypter le mot de passe.
						//$pwd = sha1($pwd);
						//ajouter l'idSpe à la table medecin
						$res = mysqli_query($connexion, "SELECT idSpe FROM specialite WHERE nomSpe =\"".$_POST['specialites']."\"");
						$tab = mysqli_fetch_array($res, MYSQLI_NUM);
						$idSpe = $tab[0];
						
						mysqli_query($connexion, "INSERT INTO medecin VALUES('', '$nom', '$prenom', '$mail','$pwd','',$idSpe,'','')");						
						
						//recapitulatif des informations données
						echo '<fieldset>';
						echo '<legend> Informations contenant vos données personnelles : </legend><BR>';
						echo "Bienvenue Docteur ".$nom." ".$prenom.",<br>";
						echo "Votre mail est : ".$mail."<br>";
						echo "Votre mot de passe est : ".$pwd."<br>";
						echo '</fieldset><BR>';
						
						echo '<fieldset>';
						echo '<legend> Votre spécialité : </legend><BR>';
						echo "Vous exercez en : ".$_POST['specialites']."<br>";
						echo '</fieldset>';
					}
					
				?>
				<center><p><b><br>Votre inscription est désormais en cours de validation.<br>
				Veuillez vous reconnecter ultérieurement.
				<br><br><br><a href="index.php">Accueil</a></b></p></center>				
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
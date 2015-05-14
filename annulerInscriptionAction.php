<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
     <head>
     <title>Annulation inscription</title>
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
<div class="content"><div class="ic"></div>

<div class="container_12">
    <div class="grid_12">
      <h3 class="head2">À Bientôt ! </h3>
    </div>  

				<div id="container">
			<div id="content">
				<p><BR>
				<?php 
				if(!empty($_POST['mail'])&&!empty($_POST['pwd']))
					{
						// D'abord, je me connecte à la base de données.
						$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");
						mysqli_select_db($connexion, 'clinique');

						mysqli_query($connexion, "DELETE FROM medecin WHERE mail =\"".$_POST['mail']."\" or mail =\"".$_POST['pwd']."\"");				
						mysqli_query($connexion, "DELETE FROM patient WHERE mail =\"".$_POST['mail']."\" or mail =\"".$_POST['pwd']."\"");	
						
					}
	
				?>
				</p>
				<center><br><br><a href="index.php"><b>Accueil</b></a><br></center>
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
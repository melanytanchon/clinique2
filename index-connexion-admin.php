<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Connexion</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
	 <link rel="shortcut icon" href="images/favicon.png" />
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
			<center><img src="images/page3_img6.jpg" alt=""><span></span></a></center>
				<form id="form" name="myConnexion"  method="post" action= "verifConnexionAdmin.php">
				
					<fieldset>
							<label for="mail">E-mail :</label><BR>
							<Input type = "text" name="mail" placeholder="à remplir"><span id="maZoneMail" class="error"></span> <BR><BR>
							<label for="pwd">Mot de passe :</label><BR>
							<input type="password" name="pwd" placeholder="à remplir"><span id="maZonePwd" class="error"></span><BR>
					</fieldset>
					
					<Input type ="submit" value ="Valider">
					<input type="reset" value="Effacer"><BR>
				</form>	
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
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
      <h3 class="head2">Annulation </h3>
    </div>  

		<div id="container">
			<div id="content">
				<p><BR><center>
				<b>Entrez les données saisies lors de l'inscription  :</b></center><BR>
				<form name="myForm"  method="post" action="annulerInscriptionAction.php">
				<fieldset>
					<legend> Vos données: </legend><BR>
					<label for="mail">E-mail :</label><BR>
					<Input type = "text" name="mail" placeholder="à remplir"><span id="maZoneMail" class="error"></span> <BR>
					<label for="pwd">Mot de passe :</label><BR>
					<input type="password" name="pwd"><span id="maZonePwd" class="error"></span><BR>
				</fieldset>
				<Input type ="submit" value ="Valider"/>
				<input type="reset" value="Effacer"/><BR>
				</form>
				</p>
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
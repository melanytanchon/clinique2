<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
     <head>
     <title>Questionnaire</title>
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
      <h3 class="head2">Vous avez déjà saisie votre questionnaire</h3>
	  <center><img src="images/ok.png" alt="" align = center><span></span></center>
    </div>  

    <div class="tabs tb gallery">
             <div class="div-nav  ">
             <div class="grid_12">
			     		<div id="container">
			<div id="content">
                 <ul class="nav">
                    <li class="selected"><a href="#tab-1" class=""></a></li>
                 </ul>
             </div>    
             </div>
		
			<br><center><b><a href="pageMembrePatientAvecQuestionnaire.php">Retour à ma page</a></b></center>
             
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
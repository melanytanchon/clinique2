<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
     <head>
     <title>Bienvenue</title>
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
      <h3 class="head2">Bienvenue !</h3>
    </div>  

    <div class="tabs tb gallery">
        <div class="div-nav  ">
            <div class="grid_12">
				<div id="container">
					<div id="content">
						<ul class="nav">
							<li class="selected"><a href="#tab-1" class="">Connexion</a></li>
							<li><a href="#tab-2">Première visite</a></li>
						</ul>
					</div>    
				</div>
				<div class="div-tabs" >
					<div  id="tab-1" class="tab-content gallery1" >

						<center><img src="images/page3_img6.jpg" alt=""><span></span>
							<br><a href="index-connexion-medecin.php">Se loguer</a>
						</center>
						</div>     
					<div  id="tab-2" class="tab-content gallery2">

					<center>		<img src="images/page3_img7.jpg" alt=""><span></span>
                    <br><a href="index-inscription-medecin.php">S'inscrire</a>
					</center>
                  </div>
			</div> 
			 </div>	
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
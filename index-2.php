<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
     <head>
     <title>Bienvenue</title>
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

<!--==============================header=================================-->
 <header> 
  <div class="container_12">
   <div class="grid_12"> 
    <div class="socials">
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"> </a>
      <a href="#" class="last"></a>
    </div>
    <h1><a href="index.php"><img src="images/logo.png" alt="Boo House"></a> </h1>
    <div class="menu_block">


    <nav id="bt-menu" class="bt-menu">
        <a href="#" class="bt-menu-trigger"><span>Bienvenue</span></a>
        <ul>
          <li class="bt-icon "><a href="index.php">Home</a></li>
          <li class="bt-icon "></li>
         <li class="current bt-icon"><a href="index-2.php">Bienvenue</a></li>		
		 <li class="bt-icon "></li>
		 <li class="bt-icon"><a href="index-1.php">À propos de nous</a></li>
         <li class="bt-icon"><a href="index-5.php">Contacts</a></li>
        </ul>
      </nav>
    
 <div class="clear"></div>
</div>
<div class="clear"></div>
          </div>
      </div>
</header>

<!--==============================Content=================================-->
<div class="content"><div class="ic"></div>
  <div class="container_12">
    <div class="grid_12">
      <h3 class="head2">Vous êtes...</h3>
    </div>  

    <div class="tabs tb gallery">
        <div class="div-nav  ">
            <div class="grid_12">
				<div id="container">
					<div id="content">
						<ul class="nav">
							<li class="selected"><a href="#tab-1" class="">Un patient</a></li>
							<li><a href="#tab-2">Un médecin</a></li>
							<li><a href="#tab-3">L'administrateur</li>
						</ul>
					</div>    
				</div>
				<div class="div-tabs" >
					<div  id="tab-1" class="tab-content gallery1" >
						<div class="grid_3" >
						<img src="images/page3_patient.png" alt=""><span></span>
							<div class="col2" ><span class="col3"><a href="index-2-patient.php">Accès patients</a></span></div>
							</div>
						</div>     
					<div  id="tab-2" class="tab-content gallery2">
						<div class="grid_3">
							<img src="images/page3_medecin.png" alt=""><span></span>
                    <div class="col2"><span class="col3"><a href="index-2-medecin.php">Accès médecins</a></span></div>
                  </div>
			</div> 
					<div  id="tab-3" class="tab-content gallery3">
						<div class="grid_3">
							<img src="images/page3_admin.png" alt=""><span></span>
                    <div class="col2"><span class="col3"><a href="index-connexion-medecin.php">Accès administrateur</a></span></div>
                  </div>
			</div> 			
			 </div>	 </div> 
			 </div> 
			 </div>	  
			 </div>	
 </div>	

<!--==============================footer=================================-->

<footer>    
  <div class="container_12">
    <div class="grid_6 prefix_3">
      <a href="index.php" class="f_logo"><img src="images/f_logo.png" alt=""><span></span></a>
      <div class="copy">
      &copy; 2013 | <a href="#">Privacy Policy</a> <br> Website   designed by <a href="http://store.templatemonster.com?aff=netsib1" rel="nofollow">TemplateMonster.com</a>
      </div>
    </div>
  </div>
</footer>
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
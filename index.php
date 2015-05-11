<!DOCTYPE html>

<html>
     <head>
     <title>Home</title>
     <meta charset="utf-8">
	 		<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
		<meta name="Description" content="A free open source web design by Gen.  Free for anyone to use as long as credits are intact. " />
		<meta name="Keywords" content="open source web design,http://gendesigns.blogspot.com" />
		<meta name="Copyright" content="Gen" />
		<meta name="Designed By" content="http://gendesigns.blogspot.com" />
		<meta name="Language" content="English" />
		<title> Clinique </title>
     <link rel="icon" href="images/favicon.ico">
     <link  href="images/favicon.ico" />
     <link type="text/css" rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>

     <script>
        $(document).ready(function(){
          $( ".block1" ).mouseover(function() {
            $(this).addClass( "blur" );
          });
          $( ".block1" ).mouseout(function() {
            $(this).removeClass( "blur" );
          });
          $().UItoTop({ easingType: 'easeOutQuart' });
        }) 
     </script>   
     </head>
     <body class="page1">

<?php include("headerConnexion.php") ?>

<!--==============================Content=================================-->

<div class="content"><div class="ic"></div>
<a href="index-2-patient.php" class="block1">
  <img src="images/blur_img1.jpg" alt="">
  <span class="price"><span>Patient<strong></strong></span>
</a>
<a href="index-2-medecin.php" class="block1">
  <img src="images/blur_img2.jpg" alt="">
  <span class="price"><span>Médecin<strong></strong></span>
</a>
<a href="index-connexion-admin.php" class="block1">
  <img src="images/blur_img3.jpg" alt="">
  <span class="price"><span>Administrateur<strong></strong></span>
</a>

 

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
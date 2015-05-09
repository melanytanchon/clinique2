<!DOCTYPE html>
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
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>

    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
    <!--[if lt IE 10]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie1.css">
    <![endif]-->
    
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
    <h1><a href="index.html"><img src="images/logo.png" alt="Boo House"></a> </h1>
    <div class="menu_block">


    <nav id="bt-menu" class="bt-menu">
        <a href="#" class="bt-menu-trigger"><span>Menu</span></a>
        <ul>
          <li class="bt-icon "><a href="index.html">Home</a></li>
         <li class="bt-icon"><a href="index-1.html">About</a></li>
         <li class="current bt-icon"><a href="index-2.html">Menu</a></li>
         <li class="bt-icon"><a href="index-3.html">Blog</a></li>
         <li class="bt-icon"><a href="index-4.html">Reservation</a></li>
         <li class="bt-icon"><a href="index-5.html">Contacts</a></li>
        </ul>
      </nav>
    
 <div class="clear"></div>
</div>
<div class="clear"></div>
          </div>
      </div>
</header>

<!--==============================Content=================================-->
<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - December 02, 2013!</div>

<div class="container_12">
    <div class="grid_12">
      <h3 class="head2">Inscription</h3>
    </div>  

		<div id="container">
			<div id="content">
			<center><img src="images/page3_img7.jpg" alt=""><span></span></a></center>
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
						mysqli_query($connexion, "INSERT INTO medecin VALUES('', '$nom', '$prenom', '$mail','$pwd','','$idSpe','')");						
						
						//recapitulatif des informations données
						echo "Votre nom est : ".$nom."<br>";
						echo "Votre prénom est : ".$prenom."<br>";
						echo "Votre mail est : ".$mail."<br>";
					}
				?>
			</div>
		</div>      
     </div>


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
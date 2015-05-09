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
      <h3 class="head2">Connection</h3>
    </div>  

		<div id="container">
			<div id="content">
			<?php
					$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB") or die(mysqli_error());
					if(!$connexion){
						die('could not connect:'.mysql-error());
					}
					$db = mysqli_select_db($connexion, 'clinique');
					$mail = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['mail']));
					$pwd = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['pwd']));
					$res = mysqli_query($connexion, "SELECT mail FROM medecin WHERE mail =\"".$_POST['mail']."\""); //verifier si le medecin existe
					$tab = mysqli_fetch_array($res, MYSQLI_NUM);
					if($tab[0]) // Si le mail existe.
					{
						$quete = mysqli_query($connexion, "SELECT pwd FROM medecin WHERE mail=\"".$_POST['mail']."\"");
						$infos = mysqli_fetch_array($quete, MYSQLI_NUM);
						if($pwd == $infos[0])
						{
							// C'est ici que je mets le code servant à effectuer la connexion, car le mot de passe est bon.
							if (isset($_POST['mail']) && isset($_POST['pwd'])) {
								// on la démarre :)
								session_start ();
								// on enregistre les paramètres de notre visiteur comme variables de session ($mail et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
								$_SESSION['mail'] = $mail;
								$_SESSION['pwd'] = $pwd;
								// on redirige notre visiteur vers une page de notre section membre
								header ('location: pageMembreMedecin.php');
							}
						}
						else // Si le couple mail/ mot de passe n'est pas bon.
						{
							echo 'Vous n\'avez pas rentré les bons identifiants';
						}
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
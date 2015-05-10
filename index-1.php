<!DOCTYPE html>
<html lang="en">
     <head>
     <title>About</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.png">
     <link rel="shortcut icon" href="images/favicon.png" />
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>   
     </head>
     <body  class="">

<!--==============================header=================================-->
 <header> 
  <div class="container_12">
   <div class="grid_12"> 

    <h1><a href="index.php"><img src="images/logo.png" alt="Boo House"></a> </h1>
    <div class="menu_block">


    <nav id="bt-menu" class="bt-menu">
        <a href="#" class="bt-menu-trigger"><span>Menu</span></a>
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

<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - December 02, 2013!</div>
  <div class="container_12">
    <div class="grid_8">
    <h3>À propos du projet</h3>
      <img src="images/page2_img.jpg" alt="" class="img_inner fleft">
      <div class="extra_wrapper">
        <p class="col1">En cliquant sur ce <span><a href="http://silico.biotoul.fr/site/images/b/bf/Projet_PHP2015.pdf" rel="dofollow">lien</a></span>,  vous pourrez trouver le sujet de ce projet.</p>
        <p class="col1">Il a été développer dans le cadre de l'UE de <i>Bases de Données et Technologies Web </i> par Charlotte Ramé et Mélany Tanchon.</p>
        
      </div>
       
    </div>
    <div class="grid_4">
      <h3>Fonctionnalités</h3>
      <p class="col1 pad1">Ce site web résulte de l'informatisation d'une petite clinique toulousaine</p>
      <p class="pad1">Celle-ci dispose des services d'endocrinologie, de rhumatologie, de cardiologie, de gynécologie et de gastrologie.</p>
      <p class="pad1">Les principales fonctionnalités pour vous, patients et médecins, sont:</p>
	  <ul class="list">
        <li><a>Création de compte</a></li>
        <li><a>Prise de rendez-vous</a></li>
        <li><a>Suivi médical </a></li>
        <li><a>Gestion de votre profil</a></li>
        <li><a>...</a></li>
        <li><a></a></li>
      </ul>
    </div>
    <div class="grid_12">
      <h3 class="head1">Informations</h3>
    </div>
    <div class="grid_3">
      <div class="box maxheight">      
      </div>
    </div>
	
    <div class="grid_3">
      <div class="box maxheight">
        <img src="images/page2_img1.jpg" alt="">
        <div class="title"><a href="#">Charlotte Ramé</a></div>
n° Etu : 

      </div>
    </div>
    <div class="grid_3">
      <div class="box maxheight">
        <img src="images/page2_img2.jpg" alt="">
        <div class="title"><a href="#">Mélany Tanchon</a></div>
n° Etu : 21406969  
      </div>
    </div>

    <div class="grid_3">
      <div class="box maxheight">
      </div>
    </div>

  </div>
</div>

<!--==============================footer=================================-->

<footer>    
  <div class="container_12">
    <div class="grid_6 prefix_3">
      <a href="index.php" class="f_logo"><img src="images/f_logo.png" alt=""></a>
      <div class="copy">
      &copy; 2015 | <a href="./index.php">RAME Charlotte & TANCHON Melany</a> <br> 12, place de la mairie 31000 Toulouse 
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
<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Reservation</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script>
        $(document).ready(function(){

          $().UItoTop({ easingType: 'easeOutQuart' });
        }) 
     </script>

    
     </head>
     <body  class="">

<?php include("headerDeconnexion.php") ?>
 

<!--==============================Content=================================-->
<div class="content"><div class="ic"></div>

  <div class="container_12">
    <div class="grid_8">
	<?php session_start() ?>
	<h3>Bonjour <?php echo $_SESSION['surname']." ".$_SESSION['name'] ?></h3>
      <img src="images/patient.png" alt="" class="img_inner fleft">
      <div class="extra_wrapper">
	  <center>
        <p class="col1"><b>Données personnelles. </b></p>
         <span class="cont_phone"><?php echo $_SESSION['surname']." ".$_SESSION['name'] ?> </span><br>
		 <span class="cont_phone"><?php echo "Id: ".$_SESSION['id'] ?></span><br><br>
		 <p class="col1"><b>Votre compte. </b></p>
		 <span class="cont_phone"><?php echo "Mail: ".$_SESSION['mail'] ?></span><br>
		 <span class="cont_phone"><?php echo "Mot de passe: ".$_SESSION['pwd'] ?></span><br><br>
		
		 <p class="col1"><b>Vos activités.</b> </p><br>
		 <?php if ($_SESSION['quest']==1){$rep = "Oui";} else {$rep="Non";}?>
		  <span class="cont_phone"><?php echo "Questionnaire en ligne: ".$rep ?></span><br>
										 
        </div>
        <p>ICI marquer du blabla <span class="cont_phone">BLA BLA BLA</span> . blabla. </p>
        ... <span class="cont_phone">...</span> <br>
      </center>
	  
	 
	  
	  
	  <a href="consulterCompteRendu.php" class="reserv"><span>GO</span>-  Consulter mon compte rendu</a>
	 
    </div>
	
	
	
	
	
	
	
    <div class="grid_4">
      <div class="hours">
        <div class="title">Mon Médecin</div>
        <div>
        <?php
		// Ici le carré en haut à droite sur la page des médecins : affiche le lien sur chacun de ses patients,
		//  pour avoir accès à son questionnaire rempli
						
						$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");
						mysqli_select_db($connexion, 'clinique');
						//on recupere tous booleens pour permettre l'acceptation des medecins
						$resPat = mysqli_query($connexion, "SELECT * FROM medecin"); 
						$tabPat = mysqli_fetch_array($resPat, MYSQLI_BOTH);
						
						while($tabPat = mysqli_fetch_array($resPat, MYSQLI_BOTH)){
						
						if($tabPat['idMedecin']==$_SESSION['idMedecin']){
						echo '<center><a href="infoMedecin.php">'.$tabPat['nom'].'</a><br></center>';
						}}
			
						?>
        </div>
		
      </div>
	  	  	   <div class="hours">
        <div class="title">Gestion</div>
        <div>
        <a href="./gestionNouveauxInscrits.php"><b>Nouveaux inscrits</b></a><br>
        
        p2<br>
        ...<br>
        ...<br>
        ...<br>
        ...<br>
		...<br>
        ...<br>
        ...<br>
        </div>
		
      </div>
      <h3 class="head3">Prochains Rendez-vous</h3>
      <div class="news">
        <time datetime="2013-01-01">Sept<span>04</span></time>
        <div class="extra_wrapper">
          <p class="col1"><a href="#">Dr House</a></p>Pour tous mes troubles
        </div>
      </div>
      <div class="news">
        <time datetime="2013-01-01">Oct<span>08</span></time>
        <div class="extra_wrapper">
          <p class="col1"><a href="#">Dr Wilson</a></p>Pour mon cancer 
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
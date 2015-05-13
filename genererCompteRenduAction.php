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

<?php include("headerDeconnexion.php") ?>

<!--==============================Content=================================-->
<div class="content"><div class="ic"></div>

<div class="container_12">
    <div class="grid_12">
      <h3 class="head2">Enregistrement validé!</h3>
    </div>  

		<div id="container">
			<div id="content">
			<center><img src="images/info.png" alt=""><span></span></a></center>
				<?php 
				
						session_start();
						
						$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");						
						mysqli_select_db($connexion, 'clinique');
						$id = $_SESSION['id'];
						
						$res = mysqli_query($connexion, "SELECT saisie FROM questionnaire WHERE idPatient=medecin.idPatient AND questionnaire.saisie=1 AND medecin.idMedecin=$id"); 
						
						$nomP = mysqli_fetch_array($res, MYSQLI_BOTH);
						
						if ($nomP[0]==1){
						
						
						
						$pat = $_POST['patient'];	
						$res = mysqli_query($connexion, "SELECT nom, prenom FROM patient WHERE idPatient=$pat"); 
						$nomP = mysqli_fetch_array($res);
						$res = mysqli_query($connexion, "SELECT idSpe FROM patient WHERE idPatient=$pat"); 
						$idSpe = mysqli_fetch_array($res);
						
						$date=$_POST['date'];					
						$date=null;
						$d = "/\d\d\/\d\d\/\d\d\d\d/";
						if (preg_match($d, $_POST['date'], $matches)){$date = $_POST['date'];}
						$cr=$_POST['cr'];						
						
						

						mysqli_query($connexion, "INSERT INTO consultation VALUES(NULL, $id,  $pat,$idSpe[0],'$date','$cr')");
						mysqli_query($connexion, "UPDATE consultation SET cr=$cr WHERE idPatient=$id");
						mysqli_query($connexion, "UPDATE consultation SET date=$date WHERE idPatient=$id");
						
						
						
						
						
						
						//recapitulatif des informations données
						echo '<br><br><br> <div class="tabs tb gallery">
        <div class="div-nav  ">
            <div class="grid_12">
				<div id="container">
					<div id="content"><ul class="nav"><li><b>Récapitulatif</b></li></ul><br>
					</div></div></div></div>
					<center>
						Patient : '.$nomP[0].' '.$nomP[1].'<br>
						Date de consultation : '.$date.'<br>
						
						Votre compte rendu: '.$cr.'</center>'; }
						
						else {
						echo '<br><br><br> <div class="tabs tb gallery">
        <div class="div-nav  ">
            <div class="grid_12">
				<div id="container">
					<div id="content"><ul class="nav"><li><b>Votre consultation n\'a pas encore eu lieu</b></li></ul><br>
					</div></div></div></div>';
				
						
						}
						
						
					
					
				?>
<?php
		
		if ($_SESSION['quest']==0){
			if ($_SESSION['admin']==0) {
			echo '<center><br><br><a href="pageMembreMedecinSansQuestionnaire.php"><b>Retour à ma page</b></a><br></center>';
			}
			else {
			echo '<center><br><br><a href="pageMembreAdminSansQuestionnaire.php"><b>Retour à ma page</b></a><br></center>';
			}
			}
		if ($_SESSION['quest']==1){
			if ($_SESSION['admin']==0 ){
			echo '<center><br><br><a href="pageMembreMedecinAvecQuestionnaire.php"><b>Retour à ma page</b></a><br></center>';
			}
			else {
			echo '<center><br><br><a href="pageMembreAdminAvecQuestionnaire.php"><b>Retour à ma page</b></a><br></center>';
			}
			}	
		
		
		?>				
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

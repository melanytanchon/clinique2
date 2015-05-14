<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Gestion Questionnaire</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" /><link rel="shortcut icon" href="images/favicon.png" />
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
      <div class="grid_12">
      <h3 class="head2">Suppression</h3>
	  <center><img src="images/disagree.png" alt="" align = center><span></span><br><br><br></center>
    </div> 
 
					<div id="content">
					<center>
						<?php
						
						session_start();
						$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");
						mysqli_select_db($connexion, 'clinique');
						$id = $_SESSION['id'];
						//on recupere tous booleens pour permettre l'acceptation des medecins
						$resMed = mysqli_query($connexion, "SELECT * FROM medecin where idMedecin = $id"); 
						$tabMed = mysqli_fetch_array($resMed, MYSQLI_BOTH);
						
					
							if ( $tabMed['administrateur']==1){
								if($tabMed['idQuestionnaire']==1){			
									echo '<a href="supprimerQuestionnaire.php?action=confirmer&idMedecin='.$tabMed['idMedecin'].'"><br>Confirmer</a>';
									echo '<br><br>';
									} 
						
								if (isset($_GET['action']) AND isset($_GET['idMedecin'])){
									$action = $_GET['action'];
									if ($action == "confirmer"){
										//si on confirme, le questionnaire est bien ajouté et redirection vers la bonne page
										mysqli_query($connexion, "UPDATE medecin SET idQuestionnaire = 0 WHERE  idMedecin =\"".$_GET['idMedecin']."\"");
										mysqli_query($connexion, "UPDATE patient set idQuestionnaire = 0 WHERE idMedecin =\"".$_GET['idMedecin']."\"");
										$_SESSION['quest']=0;
										header ('location: pageMembreAdminSansQuestionnaire.php');
										}
									}
								echo '<a href="pageMembreAdminAvecQuestionnaire.php"><b>Retour à ma page</b></a>';	
								}
								
							// Ici cas des autres médecins
							if ( $tabMed['administrateur']==0){
								if($tabMed['idQuestionnaire']==1){			
									echo '<a href="supprimerQuestionnaire.php?action=confirmer&idMedecin='.$tabMed['idMedecin'].'"><br>Confirmer</a>';
									echo '<br><br>';
									} 
						
								if (isset($_GET['action']) AND isset($_GET['idMedecin'])){
									$action = $_GET['action'];
									if ($action == "confirmer"){
										//si on confirme, le questionnaire est bien ajouté et redirection vers la bonne page
										mysqli_query($connexion, "UPDATE medecin SET idQuestionnaire = 0 WHERE  idMedecin =\"".$_GET['idMedecin']."\"");
										mysqli_query($connexion, "UPDATE patient set idQuestionnaire = 0 WHERE idMedecin =\"".$_GET['idMedecin']."\"");
										$_SESSION['quest']=0;
										header ('location: pageMembreMedecinSansQuestionnaire.php');
										}
									}
								
								echo '<a href="pageMembreMedecinAvecQuestionnaire.php"><b>Retour à ma page</b></a>';
							}
						
						
					
					
				
										
						?>
					</center>			
					
			
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
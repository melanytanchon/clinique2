<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Médecin</title>
		<meta charset="utf-8">
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="shortcut icon" href="images/favicon.png" />
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
					<img src="images/page5_img1.jpg" alt="" class="img_inner fleft">
					<div class="extra_wrapper">
						<center>
							<fieldset><BR>
								<fieldset><BR>
									<legend>Données personnelles</legend>
									<span class="cont_phone"><?php echo $_SESSION['surname']." ".$_SESSION['name'] ?> </span><br><BR>
									<span class="cont_phone"><?php echo "Id: ".$_SESSION['id'] ?></span><br>
								</fieldset><BR>
								<fieldset>
									<legend>Votre compte</legend><BR>
									<span class="cont_phone"><?php echo "Mail: ".$_SESSION['mail'] ?></span><br><BR>
									<span class="cont_phone"><?php echo "Mot de passe: ".$_SESSION['pwd'] ?></span><br>
								</fieldset><BR>
								<fieldset>
								<legend>Vos activités</legend><BR>
								<?php if ($_SESSION['quest']==1){$rep = "Oui";} else {$rep="Non";}?>
								<span class="cont_phone"><?php echo "Questionnaire en ligne: ".$rep ?></span><br>
								</fieldset><BR>
								<fieldset><BR>
									<a href="modifierMDPMedecin.php"><b>Modifier mon compte</b></a><br>
								</fieldset>						 
								<!--<p>ICI marquer du blabla <span class="cont_phone">BLA BLA BLA</span> . blabla. </p>
								... <span class="cont_phone">...</span> <br>-->
							
							</fieldset></center></div>
							<fieldset>
									<legend>Statistiques</legend><BR>
							<?php
							$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");
							mysqli_select_db($connexion, 'clinique');
							$id = $_SESSION['id'];
							$nbcr = mysqli_query($connexion, "SELECT COUNT(idPatient) FROM patient WHERE idMedecin = $id"); 
							$nbcrtab = mysqli_fetch_array($nbcr, MYSQLI_BOTH);
							$nbc = mysqli_query($connexion, "SELECT COUNT(idConsultation) FROM consultation WHERE idMedecin = $id"); 
							$nbconsult = mysqli_fetch_array($nbc, MYSQLI_BOTH);
							if (! $nbc){$nbconsult=0;}
							if (! $nbcr){$nbcrtab=0;}
							?>
							<span class="cont_phone"><?php echo "Nombre de patient(s): ".$nbcrtab[0]."</span>" ?></span><br><BR>
							<span class="cont_phone"><?php echo "Nombre de consultation(s): ".$nbconsult[0]."</span>" ?></span><br><BR>
							
							</fieldset></fieldset><center>
							<a href="genererCompteRendu.php" class="reserv"><span></span>Saisir un compte rendu</a>
							<a href="supprimerQuestionnaire.php" class="reserv"><span></span>Supprimer mon questionnaire</a>
						</center>
					
				</div><br><br><br><br><br>
				<div class="grid_4">
				<div class="hours">
					<div class="title">Patients</div>
					<div>	
						<?php
						// Ici le carré en haut à droite sur la page des médecins : affiche le lien sur chacun de ses patients,
						//  pour avoir accès à son questionnaire rempli
							$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");
							mysqli_select_db($connexion, 'clinique');
							//on recupere tous booleens pour permettre l'acceptation des medecins
							$resPat = mysqli_query($connexion, "SELECT * FROM patient"); 
							$tabPat = mysqli_fetch_array($resPat, MYSQLI_BOTH);
							$bool=null;
							while($tabPat){
								if($tabPat['idMedecin']==$_SESSION['id']){
									echo '<center>'.$tabPat['nom'].'<br></center>';
									$bool=1;
								}
								$tabPat = mysqli_fetch_array($resPat, MYSQLI_BOTH);
							}
							if($bool){
								echo '<center><a href="infoPatient.php"><b>+ d\'infos</b></a></center>';
							}
							else {
								echo "<center>Pas de patient</center>";
							}
						?>
					<br><br><br><br><br><br>
					</div>
					</div>
					<h3 class="head3">Prochains Rendez-vous</h3>
					<div class="news">
						<time datetime="2013-01-01">Sept<span>04</span></time>
						<div class="extra_wrapper">
							<p class="col1"><a href="#">Mr Dupont </a></p>Troubles intestinaux 
						</div>
					</div>
					<div class="news">
						<time datetime="2013-01-01">Oct<span>08</span></time>
						<div class="extra_wrapper">
							<p class="col1"><a href="#">Mme Durand</a></p>Troubles neurologiques 
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
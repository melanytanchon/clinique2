<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
	<head>
		<title>Inscription</title>
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
				<h3 class="head2">Inscription médecin</h3>
			</div>  
			<script type="text/javascript" src="verificationFormulaire.js"></script>
			<div id="container">
				<div id="content">
					<center><img src="images/page3_img7.jpg" alt=""><span></span></a></center>
					<form name="myForm"  method="post" action="inscriptionMedecinBD.php" onsubmit="return check()"><BR>
						<fieldset>
							<legend> A propos de vous : </legend><BR>
							<label for="nom">Nom :</label><BR>
							<Input type = "text" name="nom" placeholder="à remplir"><span id="maZoneNom" class="error"></span><BR><BR>
							<label for="prenom">Prénom :</label><BR>
							<Input type = "text" name="prenom" placeholder="à remplir"><span id="maZonePrenom" class="error"></span><BR><BR>
							<label for="mail">E-mail :</label><BR>
							<Input type = "text" name="mail" placeholder="à remplir"><span id="maZoneMail" class="error"></span><BR><BR>
							<?php
								$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");
								if(!$connexion){
									die('could not connect:'.mysql-error());
								}
								$db = mysqli_select_db($connexion, 'clinique');
								$result = mysqli_query($connexion, "SELECT nomSpe FROM specialite");
								echo "<label for=\"specialites\">Specialité :<BR></label>";
								echo "<select name=\"specialites\" id=\"specialites\">";
								while ($row = mysqli_fetch_array($result)){
									echo "<option value=\"".$row['nomSpe']."\">".$row['nomSpe']."</option>";
								}
								echo "</select>"
							?><BR><BR>
						</fieldset>
						<BR><fieldset>
							<legend> Votre mot de passe :</legend><BR>
							<label for="pwd">Mot de passe :</label><BR>
							<input type="password" name="pwd"><span id="maZonePwd" class="error"></span><BR><BR>
							<label for="pwd2">Confirmation du mot de passe :</label><BR>
							<input type="password" name="pwd2"><span id="maZonePwd2" class="error"></span><BR><BR>
						</fieldset>
						<p>
							<Input type ="submit" value ="Valider"/>
							<input type="reset" value="Effacer"/><BR>
						</p>
					</form>
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
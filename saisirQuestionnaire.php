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
      <div class="grid_12">
      <h3 class="head2">À propos de vous</h3>	  
    </div> 
		<div id="content">
			<center><img src="images/info.png" alt="" align = center><span></span><br><br><br></center>
			<form name="myForm"  method="post" action="saisirQuestionnaireAction.php">
			<BR>
			<fieldset>
						<legend> À propos de vous : </legend><BR>
						<label for="age">Age :</label><BR>
						<Input type = "int" name="age" placeholder="à remplir"><span id="errorAge" class="error"></span>
						
					
						<BR><label for="fumeur">Sexe</label>	<BR>					
						<select name="sexe" id="sexe" onchange="request(this)">
						<option value= disabled selected>Sexe</option>
						<option value="F">F</option>
						<option value="M">M</option>
						</select>
						
						<BR><label for="fumeur">Fumeur</label>	<BR>	
						<select name="fumeur" id="fumeur" onchange="request(this)">
						<option value= disabled selected>Fumez-vous?</option>
						<option value="Oui">Oui</option>
						<option value="Non">Non</option>
						</select>
						
						
						
						<BR><label for = "antecedents">Vos antécédents</label>	<BR>	
						<BR><textarea name="antecedents" cols=30 Rows=5 value=""></textarea><BR>
		

					
					<BR><BR>
					</fieldset>
					
					<p>
						<Input type ="submit" name="valider" value ="Valider" />
						<input type="reset" name="annuler"value="Effacer"/><BR>
					</p>
					
					<center><br><br><a href="pageMembrePatientAvecQuestionnaire.php"><b>Retour à ma page</b></a><br></center>
				</form>			
					
			
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
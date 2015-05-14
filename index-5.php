<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Contacts</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/form.css">
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/TMForm.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false"></script>
     <script>
        $(document).ready(function(){

          $().UItoTop({ easingType: 'easeOutQuart' });
        }) 
     </script>
 
     </head>
     <body  class="">

<?php include("headerConnexion.php") ?>

<!--==============================Content=================================-->
<div class="content"><div class="ic"></div>

<div class="content contact">
  <div class="container_12">
      <div class="grid_12">
      <div class="clear"></div>
      <div class="grid_4">
        <h3 class="head3">Adresse</h3>
              <div class="map">
                <address>
                 <dl>
				 <dt>12, place de la mairie. <br>
                     31400 TOULOUSE,<br>
                     France.
                     </dt>
                 <dd><span>Telephone:</span>+33 (0)7 00 00 00 00</dd>
                 <dd>E-mail: <a href="#" class="col2">duroux@clinique.duroux.fr</a></dd>                              </dl>
                 </address>
                 <p>Nésitez pas à contacter la clinique Duroux pour toute(s) information(s) complémentaire(s).</p>
              </div>        
          </div>
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
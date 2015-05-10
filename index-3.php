<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Blog</title>
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

<?php include("headerConnexion.php") ?>

<!--==============================Content=================================-->
<div class="content"><div class="ic"></div>

 <div class="container_12">
    <div class="grid_8">  
      <h3 class="">Blog</h3>
      <div class="post">
        <img src="images/page4_img1.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
          <div class="title col3"><a href="#">Fusce adipiscing quam id risusyn </a></div>
          <p class="col1">
            <time datetime="2013-01-01">22.10.2013</time><span></span>posted by 
            <a href="#">admin</a><span></span><a href="#">comments:5</a>
          </p>Etiam dui eros, laoreet sit amet est vel,odo venenatis eros. Fusce adipiscing quam id risus sagittis, non consequaty lacus terdm. Proin ut tincidunt nulla, eu sodales arcum. Quisque viverra nulla nunc, eu ultrices. libero ultricies egehasellus.
          <br>
          <a href="#" class="link1">More Info</a>
        </div>
      </div>
      <div class="post">
        <img src="images/page4_img2.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
          <div class="title col3"><a href="#">Piscing quam id risusyn sagittisyl</a></div>
          <p class="col1">
            <time datetime="2013-01-01">18.10.2013</time><span></span>posted by 
            <a href="#">admin</a><span></span><a href="#">comments:3</a>
          </p>Jtiam dui eros, laoreet sit amet est vel,odo venenatis eros. Musce adipiscing quam ill risus sagittis, non consequat lacus terdo. Droin ut tincidunt nulla, eu sodales arcu. Quisque viverra nulla nunc, eu ultrice. libero ultricies egehasellus dertoli.
          <br>
          <a href="#" class="link1">More Info</a>
        </div>
      </div>
      <div class="post">
        <img src="images/page4_img3.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
          <div class="title col3"><a href="#"></a></div>
          <p class="col1">
            <time datetime="2013-01-01">16.10.2013</time><span></span>posted by 
            <a href="#">admin</a><span></span><a href="#">comments:2</a>
          </p>Viam dui eros, laoreet sit amet est vel,odot venenatis eros. Busce adipiscing quam ko risus sagittis, non consequati lacus terdy. Oroin ut tincidunt nulla, eu sodales arcum. Buisque viverra nulla nunc, eu ultrice. libero ultricies egehasellus molotiko.
          <br>
          <a href="#" class="link1">More Info</a>
        </div>
      </div>
    </div>  
    <div class="grid_3 prefix_1">
      <h3 class="head3">Categories</h3>
    <ul class="list">
      <li><a href="#">Aurabitur Mellore Jito</a></li>
      <li><a href="#">Kou Monsectetur Gigula</a></li>
      <li><a href="#">Nui eros Vaoreet Dit Sawstvel</a></li>
      <li><a href="#">Commodo Venenatis Erossce </a></li>
      <li><a href="#">Nedipiscing Muam id Risus</a></li>
      <li><a href="#">Ittis  Consequat Lacus </a></li>
      <li><a href="#">Onterdumoin ut </a></li>
      <li><a href="#">Mincidunt Тullau Sodales  </a></li>
      <li><a href="#">Buisque Viverra nulla </a></li>
      <li><a href="#">Ultrices Libero Ultricieeget.</a></li>
      <li><a href="#">Phasellus Accumsan Justo </a></li>
    </ul>
    <h3 class="head3">Archives</h3>
    <ul class="list">
      <li><a href="#">November - 2013</a></li>
      <li><a href="#">October - 2013</a></li>
      <li><a href="#">September - 2013</a></li>
      <li><a href="#">August - 2013</a></li>
      <li><a href="#">July-2013</a></li>
      <li><a href="#">June-2013</a></li>
    </ul>
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
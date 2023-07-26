<!DOCTYPE html>
  <?php









?>
  
  
  
  
  
<html lang="en">
<head>
<?php
include_once"stylejuban.php";


?>
  
  
</head>
<body>
  <!-- <nav class="light-blue lighten-1" role="navigation"> -->
  


<?php
//include_once"topjuban.php"; 
?>


   
  
<!------------- slides -------------------------------->  
  
<div class="carousel carousel-slider center"  id="carousel" style="cursor: grab; ">
    <div class="carousel-fixed-item center"  id="slide-container">
    
    </div>

    <div class="slide" style:"height:600px;"  data-slideIndex="0">
    <div class="carousel-item red white-text"  href="#one!">
      <img class="ratio"  src="images/insc.png"/>
           <h2>Carregando slide</h2>
      <p class="white-text">aguarde...</p>
      
       <div class="preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
  
    </div>
    </div>
    


    <div class="slide" style:"height:600px;"  data-slideIndex="1">
    <div class="carousel-item amber white-text"   href="#two!">
    <img class="ratio"  src="images/palworks.png" />
    
             <h2>Carregando slide</h2>
      <p class="white-text">aguarde...</p>
      
       <div class="preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
    
    </div>
    </div>
    
    



    

  

  
</div>






  
 <!--   ------------------------------------------  -->
 
 
 
 
  
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center red-text">CONJUBAN - PE</h1>
      <div class="row center">
        <h5 class="header col s12 light">CONJUBAN - PE: Evento encerrado <br><br>
 
        <h4 id="demo">Obrigado por participar!!</h4>
        <br><br>
        
        </h5>
      </div>
      <div class="row center">
          

        
        
      </div>
      <br><br>

    </div>
  </div>


  
<?php include_once"footer.php"; ?>





  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
  
  
   <script>



  // Or with jQuery

  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true,
    

  });
        
  autoplay();
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 7000);
}




  </script>
  
  
    <script>

$(document).ready(function(){
    $('.sidenav').sidenav();
  });


</script>








  </body>
</html>

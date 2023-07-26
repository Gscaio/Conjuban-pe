<!DOCTYPE html>
  
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Conjuban - PE</title>

  <!-- CSS  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
<?php include_once"stylejuban.php";?>
  
  
</head>
<body>
  <!-- <nav class="light-blue lighten-1" role="navigation"> -->
  


<?php 
include_once"topjuban.php";

?>
  

  
 
  
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center red-text">INSTRUÇÕES</h1>
      <div class="row center">
        <h5 class="header col s12 light">Siga as instruções abaixo para realizar sua inscrição. (escolha apenas uma opção palestra e uma opção de Workshop, pois as palestras serão realizadas simultaneamente durante a tarde. O mesmo vale para os Workshops.)
        </h5>
      </div>
      <div class="row center">
        <a href="selectpalestra_reservadas.php" id="download-button" class="btn-large waves-effect waves-light red">Iniciar</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

       
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">PALESTRA</h5>

            <p class="light">Selecione um tema de palestra.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">WORKSHOP</h5>

            <p class="light">   Selecione um tema de Workshop. </p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">account_circle</i></h2>
            <h5 class="center">FORMULÁRIO</h5>

            <p class="light">Preencha o formulário de cadastro para finalizar sua inscrição.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>


<?php
include_once"footer.php";

?>



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
    setTimeout(autoplay, 6000);
}




  </script>
  
  
    <script>

$(document).ready(function(){
    $('.sidenav').sidenav();
  });


</script>

  </body>
</html>

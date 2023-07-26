<!DOCTYPE html>
  <?php


session_start();






include_once 'conexao.php';
//$sql = mysqli_query($conn, "SELECT * FROM usuarios order by id desc limit 1");
@$email =$_SESSION['email'];


$sql =mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email'");
while($line = mysqli_fetch_array($sql)){
  $idusuario = $line['id'];
  //$nivel = $line['nivel'];
$nomeusuario =$line['nome'];
$sobrenomeusuario =$line['sobrenome'];
$emailusuario=$line['email'];
$workshop=$line['workshop'];
$palestra=$line['palestra'];
  }

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
include_once"topjuban.php"; 
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
        <h5 class="header col s12 light">Venha participar da CONJUBAN - PE!<br> Realize abaixo sua inscrição, o evento será realizado dia 15/07 às 14:00hrs<br>
        Inscrições abertas dia 03/07
        <h4 id="demo"></h4>
        
        
        </h5>
      </div>
      <div class="row center">
          
          <?php
          
         if(!empty($_SESSION['id'])){
             
             echo"          
        <a href=\"user.php\" id=\"download-button\" class=\"btn-large waves-effect waves-light orange\">Consultar palestra/workshop</a>
        ";

}else{

echo"          
       
        ";

}

      
        
        ?>
        
        
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






<script>
// Set the date we're counting down to--------------------------------------------------------
var countDownDate = new Date("Jul 15, 2023 02:29:59").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "INSCRIÇÕES ENCERRADAS";
  }
}, 1000);
</script>

  </body>
</html>

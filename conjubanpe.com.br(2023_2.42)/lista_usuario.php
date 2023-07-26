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
//include_once"topjuban.php";

?>
  

  
 
  



<!-- palestras------------------------------------------------------>




  
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Palestras (Inscritos)</h1>
      
      <h3 class="header center Black-text">Total de inscritos: <?php
      include"conexao.php";
        $query2 = "SELECT COUNT(*) AS total2 FROM usuarios"; 
              $result2 = mysqli_query($conn, $query2); 
$values2 = mysqli_fetch_assoc($result2); 
$num_rows2 = $values2['total2']; 
      
      echo $num_rows2;
      ?></h3>

      
      <div class="row center">
           <h4 id="demo"></h4>
        <h5 class="header col s12 light"></h5>
      </div>

      <br><br>

    </div>
  </div>



   
<section class="articles">


<div class="article__content container container--pall">
        <blockquote>Palestras</blockquote>

        <div class="article__grid">

        <?php 
include "conexao.php";
$qtde_registros = 7;
@$page = $_GET['pag'];
if(!$page){
  $pagina = 1;
}


else{
$pagina = $page;

}

@$inicio = $pagina - 1;
$inicio = $inicio * $qtde_registros;
$sel_parcial = mysqli_query($conn, "select * from  palestras order by idpalestra desc limit $inicio, $qtde_registros");
$sel_total = mysqli_query($conn, "select * from palestras");

$contar = mysqli_num_rows($sel_total);
$contar_pages = $contar / $qtde_registros;


while($line = mysqli_fetch_array($sel_parcial)){
  $titulo = $line['titulopalestra'];
  $imagem = $line['imagem'];
  $conteudo = $line['descpalestra'];
  $autor = $line['palestrante'];
  $vagaspal = $line['vagas'];
  $hora = $line['horario'];
  $id_post = $line['idpalestra'];
  //$resumo = $line['resumo_txt'];
  
  
  
  
  
  
  
?>





      <?php // href="#"  echo"$id_post";?>

          <a class="article__item">
               
            <div
              class="article__image">
               
              <img src="img/<?php echo $imagem?>" alt="Imagem indisponível" style=" width:100% ;height:100%; ">
    
    
          
          
          </div>
          
            <div class="article__text">
         
              <div class="article__author" style="font-size:14px;">Palestrante: <?php echo $autor ;?> <br> 
              
              
              
               <?php 
               
               if ($vagaspal > 0){
                   
                   echo   "Vagas: " .$vagaspal;
                   
                   
               } else{
                   
                    echo   "Vagas esgotadas!";
                   
               }
               
               
              ?>
               
               
               
               
              
              <!--?php echo  "data de postagem: " .date('d/m/Y',strtotime($data));?-->
             
            
            </div>
            
              <div class="article__title">
                
               <?php echo $titulo;?>
              </div>
              <div class="article__description" >
                  
              <?php 
              //include_once"conexao.php";
              //$select_pal = mysqli_query($conn, "select * from usuarios");
              
             $query = "SELECT COUNT(*) AS total FROM usuarios WHERE palestra ='$id_post'"; 
              $result = mysqli_query($conn, $query); 
$values = mysqli_fetch_assoc($result); 
$num_rows = $values['total']; 
//echo $num_rows;
              
              
              
              
             echo "Qtd. inscritos: ".$num_rows;
              
              
              
              
              ?>
              
              
              </div>



      <form method="POST" action="nomes.php" enctype="multipart/form-data">
        
<input type="hidden" name="idpalestra" value=<?php echo $id_post;?>> 
<input class="button" style="color:white;" id="logintxt" type="submit" name="btnExp" value="Selecionar">;
            
            
</form>


            </div>
            


          </a>

          
        

<?php

}



?>









</div>



      </div>
      
      
      <!------------------------------------------ WORKSHOPS ---------------------------------------------------------->
      
      
<div class="article__content container container--pall">
        <blockquote>Workshops(Tarde)</blockquote>

        <div class="article__grid">

        <?php 
include "conexao.php";
$qtde_registros = 7;
@$page = $_GET['pag'];
if(!$page){
  $pagina = 1;
}


else{
$pagina = $page;

}

@$inicio = $pagina - 1;
$inicio = $inicio * $qtde_registros;
$sel_parcial = mysqli_query($conn, "select * from  workshop order by idworkshop desc limit $inicio, $qtde_registros");
$sel_total = mysqli_query($conn, "select * from workshop");

$contar = mysqli_num_rows($sel_total);
$contar_pages = $contar / $qtde_registros;


while($line = mysqli_fetch_array($sel_parcial)){
  $titulo = $line['tituloworkshop'];
  $imagem = $line['imagem'];
  $conteudo = $line['descwork'];
  $autor = $line['nomework'];
  $vagaswork = $line['vagas'];
  $hora = $line['hora'];
  $id_post = $line['idworkshop'];
  //$resumo = $line['resumo_txt'];
  
?>





      <?php // href="#"  echo"$id_post";?>

          <a class="article__item">
               
            <div
              class="article__image">
               
              <img src="img/<?php echo $imagem?>" alt="Imagem indisponível" style=" width:100% ;height:100%; ">
    
    
          
          
          </div>
          
            <div class="article__text">
         
              <div class="article__author" style="font-size:14px;">Palestrante: <?php echo $autor ;?> <br> 
              
              
              
               <?php 
               
               if ($vagaswork > 0){
                   
                   echo   "Vagas: " .$vagaswork;
                   
                   
               } else{
                   
                    echo   "Vagas esgotadas!";
                   
               }
               
               
              ?>
               
               
               
               
              
              <!--?php echo  "data de postagem: " .date('d/m/Y',strtotime($data));?-->
             
            
            </div>
            
              <div class="article__title">
                
               <?php echo $titulo;?>
              </div>
              <div class="article__description">
            
            
            <?php 
              //include_once"conexao.php";
              //$select_pal = mysqli_query($conn, "select * from usuarios");
              
             $query = "SELECT COUNT(*) AS total FROM usuarios WHERE workshop ='$id_post'"; 
              $result = mysqli_query($conn, $query); 
$values = mysqli_fetch_assoc($result); 
$num_rows = $values['total']; 
//echo $num_rows;
              
              
              
              
             echo "Qtd. inscritos: ".$num_rows;
              
              
              
              
              ?>
            
            
            
            
            
              </div>




<!--  DADOS

     //palestra
     
    $idpalestra = $_POST['idpalestra'];
	$titulopal = $_POST['titulopalestra'];
    $palestrante = $_POST['palestrante'];
    $descpalestra = $_POST['descpalestra'];
    $vagaspalestra = $_POST['vagaspalestra'];
    $horapalestra = $_POST['horapalestra'];
    $imgexppal = $_POST['imagempalestra'];
    
    //workshop
    
    $idworkshop = $_POST['idworkshop'];
	$tituloworkshop = $_POST['tituloworkshop'];
    $nomework = $_POST['nomework'];
    $descwork = $_POST['descwork'];
    $vagaswork = $_POST['vagaswork'];
    $horariowork = $_POST['horariowork'];
    $imgexpwork = $_POST['imagemwork'];

-->

              
            <form method="POST" action="nomeswork.php" enctype="multipart/form-data">
        
<input type="hidden" name="idworkshop" value=<?php echo $id_post;?>> 
<input class="button" style="color:white;" id="logintxt" type="submit" name="btnExp" value="Selecionar">;
            
            
</form>
</div>
          </a>

          
        

<?php

}



?>









</div>



      </div>
      
      
      
      
      
      
    </section>

























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

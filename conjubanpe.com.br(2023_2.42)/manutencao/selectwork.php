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
  
<?php //include_once"stylejuban.php";?>
  
  
</head>
<body>
  <!-- <nav class="light-blue lighten-1" role="navigation"> -->
  


<?php 
include_once"topjuban.php";

?>
<?php
//include_once"backtointro.php";
?>

  

<!--



-->




<?php



$btnExp = filter_input(INPUT_POST, 'btnExp', FILTER_SANITIZE_STRING);
if($btnExp){
    include_once"stylejuban.php";
	include_once 'conexao.php';
	$idpalestras = $_POST['idpalestra'];
	$vagaspal = $_POST['vagas'];


	
	
	
} else { 
    
    header("Location: intrucoes.php");

}






 ?>
  



<!-- Workshops------------------------------------------------------>




  
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Workshops disponíveis</h1>
      <div class="row center">
        <h5 class="header col s12 light">Inscrição dos workshops (vagas limitadas)</h5>
      </div>

      <br><br>

    </div>
  </div>



   
<section class="articles">


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
              <?php echo $conteudo;?>
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

              
            <form method="POST" action="finalinsc.php" enctype="multipart/form-data">
            

       
            <input type="hidden" name="idpalestra" value=<?php echo $idpalestras;?>> 
            <input type="hidden" name="vagaspalestra" value=<?php echo $vagaspal;?>> 
            <input type="hidden" name="idworkshop" value=<?php echo $id_post;?>> 
            <input type="hidden" name="vagasworkshop" value=<?php echo $vagaswork;?>> 
           

            <label for="titulo2"><?php //echo $titulo;?></label>

   

         
      <!--input  class="button" style="color:white;" id="logintxt" type="submit" name="btnExp" value="Selecionar"-->
      
             <?php 
               
               if ($vagaswork > 0){
                   
                   echo   "<input class=\"button\" style=\"color:white;\" id=\"logintxt\" type=\"submit\" name=\"btnExp\" value=\"Selecionar\"> ";
                   
                   
               } else{
                   
                  echo "Indisponível";
                   
               }
               
               
              ?>
      
          
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

  </body>
</html>

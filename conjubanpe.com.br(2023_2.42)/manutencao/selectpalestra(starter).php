<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
  <style>
      
 
.articles {
  padding: 60px;
  background-color: #fafafa;
}

.article__grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 1.875rem;
}

@media (min-width: 30em) {
  
  .article__grid {
 
    grid-template-columns: initial;
  }
}
@media (min-width: 40em) {
  .article__grid {

    grid-template-columns: repeat(2, 1fr);
  }
}
@media (min-width: 64em) {
  .article__grid {

    grid-template-columns: repeat(4, 1fr);
  }
}
.article__item {
  border-radius: 0.3125rem;
  overflow: hidden;
  background-color: white;
  box-shadow: 0px 3px 12px rgba(0, 0, 0, 0.15);
  transition: all 150ms ease-in-out;
}
.article__item:hover {
  transform: scale(1.05);
}
.article__image {
  height: 12.5rem;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
.article__text {
  padding: 1.875rem 1.875rem 2.5rem 1.875rem;
  color: #9698a6;
}
@media (min-width: 40em) {
  .article__text {
    padding: 1.875rem 1.5625rem;
  }
}
.article__author {
  font-size: 0.625rem;
  margin-bottom: 0.75rem;
}
.article__title {
  font-size: 1.0625rem;
  line-height: 1.2;
  color: #2d314d;
  margin-bottom: 0.5rem;
}
.article__description {
  font-size: 0.8125rem;
}







/* Cosmetics styles */ 




.active { border-color: orangered; }

/* This is where the magic happens */
input[type="checkbox"] {
  position: absolute;
  top: .5em;
  left:.5em;
}

@media (pointer: coarse) { 
  input[type="checkbox"] {
    height: 2em;
    width: 2em;
  }
}

/* Use z-index to make it accessible to keyboard navigation */
@media (hover: hover) {
              input[type="checkbox"] { z-index: -1 }
 .article__item:hover  input[type="checkbox"],
              input[type="checkbox"]:focus,
              input[type="checkbox"]:checked { z-index: auto }
}
      
  </style>
  
  
  
</head>
<body>
  <!-- <nav class="light-blue lighten-1" role="navigation"> -->
  

        <nav class=" grey lighten-1" role="navigation">
      
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="images/jubanpng2.png" style="width:90px; height:65px; padding-left:15px">  </a>
    
      <ul class="right hide-on-med-and-down">
        <li><a class="black-text text-darken-1" href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
  
  
 
  
  
  
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      
    </div>
   
    <div class="nav-content">
      <ul class="tabs tabs-transparent ">
        <li class="tab"><a class="active" href="index.php"> Início</a></li>
        <li class="tab"><a href="Bíblia.php"> Bíblia </a></li>
     
        <li class="tab"><a href="IBMBJEstudos.php"> Estudos da semana</a></li>
        <li class="tab"><a href="IBMBJLive.php"> Live(Em breve)</a></li>
        <li class="tab"><a href="IBMBJMissoes.php"> Missões</a></li>
        <li class="tab"><a href="IBMBJNoticias.php"> Notícias</a></li>
         


      </ul>
    </div>
   
   
   
   
  </nav>
   
  
  <div class="carousel carousel-slider center" id="carousel" style="cursor: grab; ">
    <div class="carousel-fixed-item center" id="slide-container">
    
    </div>

    <div class="slide" data-slideIndex="0">
    <div class="carousel-item red white-text" href="#one!">
    
      <img class="ratio" src="images/introjuban.jpg"/>
    </div>
    </div>
    


  
</div>
  
  
 

  
 
  
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Palestras disponíveis</h1>
      <div class="row center">
        <h5 class="header col s12 light">Inscrição das palestras (vagas limitadas)</h5>
      </div>

      <br><br>

    </div>
  </div>



   
<section class="articles">


<div class="article__content container container--pall">
        <blockquote>Palestras(Tarde)</blockquote>

        <div class="article__grid">

        <?php 
include "conexao.php";
$qtde_registros = 4;
@$page = $_GET['pag'];
if(!$page){
  $pagina = 1;
}


else{
$pagina = $page;

}

@$inicio = $pagina - 1;
$inicio = $inicio * $qtde_registros;
$sel_parcial = mysqli_query($conn, "select * from  palestras where categoria = palestra order by id_post desc limit $inicio, $qtde_registros");
$sel_total = mysqli_query($conn, "select * from tb_postagens where categoria = palestra");

$contar = mysqli_num_rows($sel_total);
$contar_pages = $contar / $qtde_registros;


while($line = mysqli_fetch_array($sel_parcial)){
  $titulo = $line['titulo'];
  $imagem = $line['imagem'];
  $conteudo = $line['texto'];
  $autor = $line['autor'];
  $data = $line['dt'];
  $hora = $line['hr'];
  $id_post = $line['id_post'];
  $resumo = $line['resumo_txt'];
  
?>





      <?php // href="#"  echo"$id_post";?>

          <a class="article__item">
               
            <div
              class="article__image">
               
              <img src="postagens/<?php echo "post".$titulo."/".$imagem?>" alt="Imagem indisponível" style=" width:100% ;height:100%; ">
    
    
          
          
          </div>
          
            <div class="article__text">
         
              <div class="article__author">Postado por: <?php echo $autor ;?> <br> <?php echo  "data de postagem: " .date('d/m/Y',strtotime($data));?>
             
            
            </div>
            
              <div class="article__title">
                
               <?php echo $titulo;?>
              </div>
              <div class="article__description">
              <?php echo $resumo;?>
              </div>



              
            <form method="POST" action="IBMBJExpcard.php" enctype="multipart/form-data">
            

       
            <input type="hidden" name="id_post" value=<?php echo $id_post;?>> 
            <input type="hidden" name="titulo" value=<?php echo $titulo;?>> 
            <input type="hidden" name="autor" value=<?php echo $autor;?>> 
            <input type="hidden" name="conteudo" value=<?php $conteudo;?>> 
            <input type="hidden" name="data" value=<?php echo $data;?>> 
            <input type="hidden" name="hora" value=<?php echo $hora;?>> 
            <input type="hidden" name="imagem" value=<?php echo $imagem;?>> 

            <label for="titulo2"><?php //echo $titulo;?></label>

   

         
      <input  class="button" style="color:white;" id="logintxt" type="submit" name="btnExp" value="Ler mais...">
          
          </form>


            </div>
            


          </a>

          
        

<?php

}



?>









</div>



      </div>
      
    </section>



 








  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  
  
  
  
   <script>



  // Or with jQuery

  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true,
    

  });
        
  //autoplay();
//function autoplay() {
  //  $('.carousel').carousel('next');
    //setTimeout(autoplay, 6000);
//}




  </script>
  
  <script>
      $(document).ready(function () {
  // Card Multi Select
  $('input[type=checkbox]').click(function () {
    if ($(this).parent().hasClass('active')) {
      $(this).parent().removeClass('active');
    }
    else
    { $(this).parent().addClass('active'); }
  });
});
      
  </script>
  

  </body>
</html>

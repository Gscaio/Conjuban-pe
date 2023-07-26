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
  

  
  
</head>
<body>
  <!-- <nav class="light-blue lighten-1" role="navigation"> -->
  


  
<!----------------TRAZENDO DADOS DA PALESTRA E WORKSHOP PARA O FORMULÁRIO------->
  
   <?php 


    
$btnExp = filter_input(INPUT_POST, 'btnExp', FILTER_SANITIZE_STRING);
if($btnExp){
    include_once"stylejuban.php";
include_once"topjuban.php";
    
	include_once 'conexao.php';
   
     //palestra
     
    $idpalestra = $_POST['idpalestra'];
   // $vagaspalestra = $_POST['vagaspalestra'];
    
    
//	$titulopal = $_POST['titulopalestra'];
   // $palestrante = $_POST['palestrante'];
   // $descpalestra = $_POST['descpalestra'];
   // $horapalestra = $_POST['horapalestra'];
   // $imgexppal = $_POST['imagempalestra'];
    
    //workshop
    
    $idworkshop = $_POST['idworkshop'];
    // $vagaswork = $_POST['vagaswork'];
     
     
//	$tituloworkshop = $_POST['tituloworkshop'];
   // $nomework = $_POST['nomework'];
    //$descwork = $_POST['descwork'];
  //  $horariowork = $_POST['horariowork'];
  //  $imgexpwork = $_POST['imagemwork'];
    
    
        $sql12 =mysqli_query($conn, "SELECT * FROM palestras WHERE idpalestra = '$idpalestra'");
   while($line = mysqli_fetch_array($sql12)){

    $titulo = $line['titulopalestra'];
    $imagem = $line['imagem'];
    $conteudo = $line['descpalestra'];
    $autor = $line['palestrante'];
    $hora = $line['horario'];
    $id_post = $line['idpalestra'];
    $vagas = $line['vagas'];

   }
    
    
    
    
    $sql11 =mysqli_query($conn, "SELECT * FROM workshop WHERE idworkshop = '$idworkshop'");
while($line = mysqli_fetch_array($sql11)){
    
$idworkshop = $line['idworkshop'];
$tituloworkshop = $line['tituloworkshop'];
$nomework =$line['nomework'];
$imgexpwork =$line['imagem'];
$horariowork = $line['hora'];
$descwork = $line['descwork'];
$vagaswork = $line['vagas'];
  }


    
    
    



}else{
header("Location: intrucoes.php");

}

?>
  
  
  
  
  
 
  
<!---------------- CADASTRO ------------------------------->



<nav>
    <div class="nav-wrapper" style="background-color: #c42633;">
      <div class="col s12">
        <a href="index.php" style="padding:8px;" class="breadcrumb">Início</a>
        <a href="selectpalestra.php" class="breadcrumb">Palestra</a>
       
        <a href="#!" class="breadcrumb">Cadastro</a>
      </div>
    </div>
  </nav>





<div id ="pc" class="row" style="padding: 40px;">
      <div class="col s6 ">
        <div class="card"  >
          <div class="card-image" style="background-color:#9698a6" >
              
               <div class="carousel carousel-slider center">
    <div class="carousel-fixed-item center">
      <!--a class="btn waves-effect white grey-text darken-text-2">button</a-->
    </div>
    <div class="carousel-item grey white-text" href="#one!">
       <img style="max-width: 500px; height:300px;margin:auto;" src="img/<?php echo $imagem;?>" alt="1"> 
       
       
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item grey white-text" href="#two!">
     <img style="max-width: 500px; height:300px;margin:auto;" src="img/<?php echo $imgexpwork;?>" alt="1"> 
      <p class="white-text">This is your second panel</p>
    </div>


  </div>
              
              
            <!--   
          <img style="max-width: 500px; height:300px;margin:auto;" src="img/<?php //echo "car".$autor."/".$imagem?>" alt="1">
           <a href="" class="halfway-fab btn-floating pink pulse">
              <i class="material-icons">favorite</i> 
            </a> -->
          </div>
          
          
          
          
          <div class="card-content">
              
              
            <span class="card-title"><?php echo "Palestra:<br>".$titulo;?> </span>
            <div>
                
                <div class="article__author" style="font-size:14px;">Ministrado por: <?php echo $autor ;?> <br><br> 
            
            <!--h5>Sobre a palestra: </h5-->
            <span class="card-title">
                 <?php echo "<br>
            Descrição: ".$conteudo.
            "<br><br>horario: ".$hora
            
            
            ;?>
                
                
            </span>
            
            
            
            
           </div>
           
           
           <!-- Variaveis
           
           $idworkshop = $_POST['idworkshop'];
	$tituloworkshop = $_POST['tituloworkshop'];
    $nomework = $_POST['nomework'];
    $descwork = $_POST['descwork'];
    $vagaswork = $_POST['vagaswork'];
    $horariowork = $_POST['horariowork'];
    $imgexpwork = $_POST['imagemwork'];
           
         
           -->
           
           <br>
             <span class="card-title"> + </span>
           
         <!--_______________________________________________ INFO WORKSHOPS _______________________________________  -->  
         <br>
         <span class="card-title"><?php echo "Workshop:<br>".$tituloworkshop;?> </span>
           <div class="article__author" style="font-size:14px;"> <?php //echo $autor ;?> <br><br> 
            
            <!--h5>Sobre a palestra: </h5-->
            <span class="card-title">
                 <?php echo "
           
           horario: ".$horariowork
            
            
            ;?>
                
                
            </span>
            
            
            
            
           </div>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
                <!--_______________________________________________ BREAK INFO _______________________________________  --> 
           
            <br><br><br>
            <div  style="overflow:hidden;word-break:break-word;-webkit-text-overflow:ellipsis;">    <?php //echo"Cor: ". $conteudo;?></div>
          </div>
          <div class="card-action" style="-webkit-border-radius: 30px;
-moz-border-radius: 30px;
border-radius: 30px; ;background-color:black;">
         <i class="material-icons prefix" style="color:white;">phone</i>    <a href="">Dúvidas: (81) 99522-7599 </a>
            <!--a href="">Compartilhar</a-->
          </div>
        </div>
      </div>

</div>


    <div class="col s4 m5">
      <div class="card-panel teal">
        <span class="white-text"> <h2>
               <?php echo"Cadastro"; ?>
            <?php //echo $autor." ".$titulo; ?>
            
            </h2> 
          <div class="row">
    <form class="col s12">
      <div class="row">
          <p>  <?php echo "Seu email e senha serão utilizados para o login, caso queira conferir ou trocar a palestra/workshop escolhido(s)
          <br>(Aviso: Ao trocar, fique atento a quantidade de vagas disponíveis. Não arrisque perder sua vaga!!)"; ?></p>
   <br>
         <span class="white-text"> <h5> <?php echo "Insira suas informações abaixo: "//.$preco; ?> </h5>
        
        
        
        
        
        
      </div>
    </form>
  </div>
        
        </span>
      </div>
    </div>
    
    
     <div class="col s4 m5">
      <div class="card-panel white">
        <span class="black-text"> 
          <div class="row">
    <form class="col s12" method="POST" action="cadastro.php" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="nome" type="text" name="nome" class="validate">
          <label for="nome">Nome </label>
        </div>
         <div class="input-field col s6">
          <i class="material-icons prefix"></i>
          <input id="sobrenome" type="text" name="sobrenome" class="validate">
          <label for="sobrenome">Sobrenome</label>
        </div>
       <div class="input-field col s6">
          <i class="material-icons prefix">church</i>
          <input id="igreja" type="text" name="igreja" class="validate">
          <label for="igreja">Igreja</label>
        </div>  
        
        <div class="input-field col s6">
          <i class="material-icons prefix"></i>
          <input id="telefone" type="number" name="telefone" class="validate">
          <label for="telefone">Telefone</label>
        </div>
     
        
            <div class="input-field col s6">
          <i class="material-icons prefix">mail</i>
          <input id="email" type="text" name="email" class="validate">
          <label for="email">Email</label>
        </div>
        
     <div class="input-field col s6">
          <i class="material-icons prefix"></i>
          <input id="senha" type="password" name="senha" class="validate">
          <label for="senha">Senha</label>
        </div>
        
             <div class="input-field col s6">
          <i class="material-icons prefix"></i>
          <input id="repsenha" type="password" name="repsenha" class="validate">
          <label for="repsenha">Repita a senha</label>
        </div>
  
        
      </div>
      
      
      
      
      
     
      
      
      
      
      
            
             <input type="hidden" name="idpalestra" value=<?php echo $idpalestra;?>> 
            <input type="hidden" name="titulopalestra" value=<?php echo $titulo;?>> 
            <input type="hidden" name="palestrante" value=<?php echo $autor;?>> 
            <input type="hidden" name="descpalestra" value=<?php $descpalestra;?>> 
            <input type="hidden" name="vagaspalestra" value=<?php echo $vagas;?>> 
            <input type="hidden" name="horapalestra" value=<?php echo $hora;?>> 
            <input type="hidden" name="imagempalestra" value=<?php echo $imagem;?>> 
      
      
                  <input type="hidden" name="idworkshop" value=<?php echo $idworkshop;?>> 
            <input type="hidden" name="tituloworkshop" value=<?php echo $tituloworkshop;?>> 
            <input type="hidden" name="nomework" value=<?php echo $nomework;?>> 
            <input type="hidden" name="descwork" value=<?php $descwork;?>> 
            <input type="hidden" name="vagaswork" value=<?php echo $vagaswork;?>> 
            <input type="hidden" name="horariowork" value=<?php echo $horariowork;?>> 
            <input type="hidden" name="imagemwork" value=<?php echo $imgexpwork;?>> 
      
      
      <input class="col s12" id="button2" style="color:white; " id="logintxt" type="submit" name="btnCadUsuario" value="Concluir Inscrição">
    </form>
  </div>
        
        </span>
      </div>
    </div>
    


</div>





<!-- mobile ----------------------------------------------------------------------->







<div id ="mobile" class="row" style="padding: 40px;">
      <div class="col s12 ">
        <div class="card"  >
          <div class="card-image" style="background-color:#9698a6" >
              
               <div class="carousel carousel-slider center">
    <div class="carousel-fixed-item center">
      <!--a class="btn waves-effect white grey-text darken-text-2">button</a-->
    </div>
    <div class="carousel-item grey white-text" href="#one!">

       <img style="max-width: 500px; height:300px;margin:auto;" src="img/<?php echo $imagem;?>" alt="1"> 
       
       
      <p class="white-text">Palestra</p>
    </div>
    <div class="carousel-item grey white-text" href="#two!">
     
     <img style="max-width: 500px; height:300px;margin:auto;" src="img/<?php echo $imgexpwork;?>" alt="1"> 
      <p class="white-text">Workshop</p>
    </div>
   

  </div>
              
              
            <!--   
          <img style="max-width: 500px; height:300px;margin:auto;" src="img/<?php echo "car".$autor."/".$imagem?>" alt="1">
           <a href="" class="halfway-fab btn-floating pink pulse">
              <i class="material-icons">favorite</i> 
            </a> -->
          </div>
          
          
          
          
  <div class="card-content">
              
              
            <span class="card-title"><?php echo "Palestra:<br>".$titulo;?> </span>
            <div>
                
                <div class="article__author" style="font-size:14px;">Ministrado por: <?php echo $autor ;?> <br><br> 
            
            <!--h5>Sobre a palestra: </h5-->
            <span class="card-title">
                 <?php echo "<br>
            Descrição: ".$conteudo.
            "<br><br>horario: ".$hora
            
            
            ;?>
                
                
            </span>
            
            
            
            
           </div>
           
           
           <!-- Variaveis
           
           $idworkshop = $_POST['idworkshop'];
	$tituloworkshop = $_POST['tituloworkshop'];
    $nomework = $_POST['nomework'];
    $descwork = $_POST['descwork'];
    $vagaswork = $_POST['vagaswork'];
    $horariowork = $_POST['horariowork'];
    $imgexpwork = $_POST['imagemwork'];
           
         
           -->
           
           <br>
             <span class="card-title"> + </span>
           
         <!--_______________________________________________ INFO WORKSHOPS _______________________________________  -->  
         <br>
         <span class="card-title"><?php echo "Workshop:<br>".$tituloworkshop;?> </span>
           <div class="article__author" style="font-size:14px;"> <?php //echo $autor ;?> <br><br> 
            
            <!--h5>Sobre a palestra: </h5-->
            <span class="card-title">
                 <?php echo "
           
           horario: ".$horariowork
            
            
            ;?>
                
                
            </span>
            
            
            
            
           </div>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
                <!--_______________________________________________ BREAK INFO _______________________________________  --> 
           
            <br><br><br>
            <div  style="overflow:hidden;word-break:break-word;-webkit-text-overflow:ellipsis;">    <?php //echo"Cor: ". $conteudo;?></div>
          </div>
          <div class="card-action" style="-webkit-border-radius: 30px;
-moz-border-radius: 30px;
border-radius: 30px; ;background-color:black;">
         <i class="material-icons prefix" style="color:white;">phone</i>    <a href="">Dúvidas: (81) 99522-7599 </a>
            <!--a href="">Compartilhar</a-->
          </div>
        </div>        
          
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
      </div>

</div>


    <div class="col s12">
        <div class="card-panel teal">
        <span class="white-text"> <h2>
               <?php echo"Cadastro"; ?>
          
            
            </h2> 
            
            
          <div class="row">
    <form class="col s12">
      <div class="row">
          <p>  <?php echo "Seu email e senha serão utilizados para o login, caso queira conferir ou trocar a palestra/workshop escolhido(s)
          <br>(Aviso: Ao trocar, fique atento a quantidade de vagas disponíveis. Não arrisque perder sua vaga!!)"; ?></p>
   <br>
         <span class="white-text"> <h5> <?php echo "Insira suas informações abaixo: "//.$preco; ?> </h5>
        
        
        
        
        
        
      </div>
    </form>
  </div>
        
        </span>
      </div>
    </div>
    
    
     <div class="col s12">
      <div class="card-panel white">
        <span class="black-text"> Cadastre-se e receba as melhores ofertas para este veículo
          <div class="row">
 <form class="col s12" method="POST" action="cadastro.php" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input placeholder="" id="nome" type="text" name="nome" class="validate">
          <label for="nome">Nome </label>
        </div>
         <div class="input-field col s6">
          <i class="material-icons prefix"></i>
          <input placeholder="" id="sobrenome" type="text" name="sobrenome" class="validate">
          <label for="sobrenome">Sobrenome</label>
        </div>
       <div class="input-field col s6">
          <i class="material-icons prefix">church</i>
          <input placeholder="" id="igreja" type="text" name="igreja" class="validate">
          <label for="igreja">Igreja</label>
        </div>  
        
        <div class="input-field col s6">
          <i class="material-icons prefix"></i>
          <input placeholder="" id="telefone" type="number" name="telefone" class="validate">
          <label for="telefone">Telefone</label>
        
        </div>
     
        
            <div class="input-field col s6">
          <i class="material-icons prefix">mail</i>
          <input placeholder="" id="email_inline" type="text" name="email" class="validate">
          <label for="email">Email</label>
         
        </div>
        
     <div class="input-field col s6">
          <i class="material-icons prefix"></i>
          <input placeholder="" id="senha" type="password" name="senha" class="validate">
          <label for="senha">Senha</label>
        </div>
        
             <div class="input-field col s6">
          <i class="material-icons prefix"></i>
          <input placeholder="" id="repsenha" type="password" name="repsenha" class="validate">
          <label for="repsenha">Repita a senha</label>
        </div>
  
        
      </div>
      
      
      
      
      
      
      
     
      
      
      
      
      
                   
             <input type="hidden" name="idpalestra" value=<?php echo $idpalestra;?>> 
            <input type="hidden" name="titulopalestra" value=<?php echo $titulo;?>> 
            <input type="hidden" name="palestrante" value=<?php echo $autor;?>> 
            <input type="hidden" name="descpalestra" value=<?php $descpalestra;?>> 
            <input type="hidden" name="vagaspalestra" value=<?php echo $vagas;?>> 
            <input type="hidden" name="horapalestra" value=<?php echo $hora;?>> 
            <input type="hidden" name="imagempalestra" value=<?php echo $imagem;?>> 
      
      
                  <input type="hidden" name="idworkshop" value=<?php echo $idworkshop;?>> 
            <input type="hidden" name="tituloworkshop" value=<?php echo $tituloworkshop;?>> 
            <input type="hidden" name="nomework" value=<?php echo $nomework;?>> 
            <input type="hidden" name="descwork" value=<?php $descwork;?>> 
            <input type="hidden" name="vagaswork" value=<?php echo $vagaswork;?>> 
            <input type="hidden" name="horariowork" value=<?php echo $horariowork;?>> 
            <input type="hidden" name="imagemwork" value=<?php echo $imgexpwork;?>> 

      
      <input class="col s12" id="button2" style="color:white; " id="logintxt" type="submit" name="btnCadUsuario" value="Concluir Inscrição">
    </form>
  </div>
        
        </span>
      </div>
    </div>
    


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
  
  
  
  <script language="Javascript">
function validacaoEmail(field) {
usuario = field.value.substring(0, field.value.indexOf("@"));
dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);

if ((usuario.length >=1) &&
    (dominio.length >=3) &&
    (usuario.search("@")==-1) &&
    (dominio.search("@")==-1) &&
    (usuario.search(" ")==-1) &&
    (dominio.search(" ")==-1) &&
    (dominio.search(".")!=-1) &&
    (dominio.indexOf(".") >=1)&&
    (dominio.lastIndexOf(".") < dominio.length - 1)) {
document.getElementById("msgemail").innerHTML="<font color='green'>E-mail válido </font>";
//alert("E-mail valido");
}
else{
document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inválido </font>";
//alert("E-mail invalido");
}
}
</script>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   <script>



  // Or with jQuery

  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true,
    

  });
        
  autoplay();
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 5000);
}




  </script>
  
  
    <script>

$(document).ready(function(){
    $('.sidenav').sidenav();
  });


</script>

  </body>
</html>

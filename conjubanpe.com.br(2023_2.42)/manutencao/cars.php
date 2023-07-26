
        <?php 
/*
include ('conexao.php');
    include('IBMBJNoticias.php');

    $btnCardinfo = filter_input(INPUT_POST, 'btnCardinfo', FILTER_SANITIZE_STRING);

    if($btnCardinfo){


echo $id_post;
echo $conteudo;

    }

*/

    
$btnExp = filter_input(INPUT_POST, 'btnExp', FILTER_SANITIZE_STRING);
if($btnExp){
	include_once 'conexao.php';
  $id_post = $_POST['id'];
	$titulo = $_POST['modelo'];
    $autor = $_POST['cor'];
    //$conteudo = $_POST['conteudo'];
    //$data = $_POST['data'];
    //$hora = $_POST['hora'];
    $imgexp = $_POST['img'];
    

    $sql2 = mysqli_query($conn, "SELECT * FROM modelos where id = '$id_post' ");
   while($line = mysqli_fetch_array($sql2)){

    $titulo = $line['modelo'];
    $imagem = $line['img'];
    $imagemb = $line['imgb'];
    $imagemint = $line['imgint'];
    
    $conteudo = $line['cor'];
    $autor = $line['marca'];
    //$data = $line['dt'];
    //$hora = $line['hr'];
    $id_post = $line['id'];
    //$resumo = $line['resumo_txt'];
$preco = $line['preço'];
$performance = $line['performance'];
$cambio = $line['cambio'];
$tecnologia = $line['tecnologia'];
$design = $line['design'];

   }

}















?>

<nav>
    <div class="nav-wrapper" style="background-color: #c42633;">
      <div class="col s12">
        <a href="index.html" style="padding:8px;" class="breadcrumb">Início</a>
        <a href="compra.php" class="breadcrumb">Modelos</a>
        <a href="#!" class="breadcrumb">Simulação</a>
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
       <img style="max-width: 500px; height:300px;margin:auto;" src="img/<?php echo "car".$autor."/".$imagem?>" alt="1"> 
       
       
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item grey white-text" href="#two!">
     <img style="max-width: 500px; height:300px;margin:auto;" src="img/<?php echo "car".$autor."/".$imagemb?>" alt="1"> 
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item grey white-text" href="#three!">
  <img style="max-width: 500px; height:300px;margin:auto;" src="img/<?php echo "car".$autor."/".$imagemint?>" alt="1"> 
      <p class="white-text">This is your third panel</p>
    </div>

  </div>
              
              
            <!--   
          <img style="max-width: 500px; height:300px;margin:auto;" src="img/<?php echo "car".$autor."/".$imagem?>" alt="1">
           <a href="" class="halfway-fab btn-floating pink pulse">
              <i class="material-icons">favorite</i> 
            </a> -->
          </div>
          <div class="card-content">
            <span class="card-title"><?php echo $titulo;?> </span>
            <div><div class="article__author">Fabricado por: <?php echo $autor ;?> <br><br> 
            
            <h5>Especificações: </h5>
            
            <?php echo "<br>
            Motor: ".$performance.
            "<br>Câmbio: ".$cambio.
            "<br>Design: ".$design.
            "<br>Tecnologia e periféricos: ".$tecnologia
            
            
            
            
            
            
            ;?></div>
            <br><br><br>
            <div  style="overflow:hidden;word-break:break-word;-webkit-text-overflow:ellipsis;">    <?php echo"Cor: ". $conteudo;?></div>
          </div>
          <div class="card-action" style="-webkit-border-radius: 30px;
-moz-border-radius: 30px;
border-radius: 30px; ;background-color:black;">
         <i class="material-icons prefix" style="color:white;">phone</i>    <a href="">Ligue agora: (81)4002-8922</a>
            <!--a href="">Compartilhar</a-->
          </div>
        </div>
      </div>

</div>


    <div class="col s4 m5">
      <div class="card-panel teal">
        <span class="white-text"> <h2><?php echo $autor." ".$titulo; ?></h2> 
          <div class="row">
    <form class="col s12">
      <div class="row">
   <br>
         <span class="white-text"> Por apenas: <h1> <?php echo "R$: ".$preco; ?> </h1>
        
        
        
        
        
        
      </div>
    </form>
  </div>
        
        </span>
      </div>
    </div>
    
    
     <div class="col s4 m5">
      <div class="card-panel white">
        <span class="black-text"> Cadastre-se e receba as melhores ofertas para este veículo
          <div class="row">
    <form class="col s12" method="POST" action="obrigado.html" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="nome" type="text" class="validate">
          <label for="nome">Nome </label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">telephone</i>
          <input id="telefone" type="tel" class="validate">
          <label for="telefone">Telefone</label>
        </div>
        
          <div class="input-field col s6">
          <i class="material-icons prefix">mail</i>
          <input id="email" type="text" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">message</i>
          <input id="msg" type="text" class="validate">
          <label for="msg">Mensagem</label>
        </div>
        
        
        
      </div>
      
      <input class="col s12" id="button" style="color:white; " id="logintxt" type="submit" name="btnEmail" value="Receba Ofertas">
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
       <img style="max-width: 500px; height:300px;margin:auto;" src="img/<?php echo "car".$autor."/".$imagem?>" alt="1"> 
       
       
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item grey white-text" href="#two!">
     <img style="max-width: 500px; height:300px;margin:auto;" src="img/<?php echo "car".$autor."/".$imagemb?>" alt="1"> 
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item grey white-text" href="#three!">
  <img style="max-width: 500px; height:300px;margin:auto;" src="img/<?php echo "car".$autor."/".$imagemint?>" alt="1"> 
      <p class="white-text">This is your third panel</p>
    </div>

  </div>
              
              
            <!--   
          <img style="max-width: 500px; height:300px;margin:auto;" src="img/<?php echo "car".$autor."/".$imagem?>" alt="1">
           <a href="" class="halfway-fab btn-floating pink pulse">
              <i class="material-icons">favorite</i> 
            </a> -->
          </div>
          <div class="card-content">
            <span class="card-title"><?php echo $titulo;?> </span>
            <div><div class="article__author">Fabricado por: <?php echo $autor ;?> <br><br> 
            
            <h5>Especificações: </h5>
            
            <?php echo "<br>
            Motor: ".$performance.
            "<br>Câmbio: ".$cambio.
            "<br>Design: ".$design.
            "<br>Tecnologia e periféricos: ".$tecnologia
            
            
            
            
            
            
            ;?></div>
            <br><br><br>
            <div  style="overflow:hidden;word-break:break-word;-webkit-text-overflow:ellipsis;">    <?php echo"Cor: ". $conteudo;?></div>
          </div>
          <div class="card-action" style="-webkit-border-radius: 30px;
-moz-border-radius: 30px;
border-radius: 30px; ;background-color:black;">
         <i class="material-icons prefix" style="color:white;">phone</i>    <a href="">Ligue agora: (81)4002-8922</a>
            <!--a href="">Compartilhar</a-->
          </div>
        </div>
      </div>

</div>


    <div class="col s12">
      <div class="card-panel teal">
        <span class="white-text"> <h2><?php echo $autor." ".$titulo; ?></h2> 
          <div class="row">
    <form class="col s12">
      <div class="row">
   <br>
         <span class="white-text"> Por apenas: <h1> <?php echo "R$: ".$preco; ?> </h1>
        
        
        
        
        
        
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
    <form class="col s12" method="POST" action="obrigado.html" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="nome" type="text" class="validate">
          <label for="nome">Nome </label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">telephone</i>
          <input id="telefone" type="tel" class="validate">
          <label for="telefone">Telefone</label>
        </div>
        
          <div class="input-field col s6">
          <i class="material-icons prefix">mail</i>
          <input id="email" type="text" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">message</i>
          <input id="msg" type="text" class="validate">
          <label for="msg">Mensagem</label>
        </div>
        
        
        
      </div>
      
      <input class="col s12" id="button" style="color:white; " id="logintxt" type="submit" name="btnEmail" value="Receba Ofertas">
    </form>
  </div>
        
        </span>
      </div>
    </div>
    


</div>
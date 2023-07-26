<!DOCTYPE html>
  <?php
session_start();
include_once 'conexao.php';

    include_once"stylejuban.php";
//include_once"topjuban.php";


    
$btnExp = filter_input(INPUT_POST, 'btnExp', FILTER_SANITIZE_STRING);
if($btnExp){

    
    
    
    
	include_once 'conexao.php';
   
  
     
    $idpalestra = $_POST['idpalestra'];

   // $idworkshop = $_POST['idworkshop'];

   
    
        $sql12 =mysqli_query($conn, "SELECT * FROM usuarios WHERE palestra = '$idpalestra'");
   while($line = mysqli_fetch_array($sql12)){

    $nome = $line['nome'];
    $sobrenome = $line['sobrenome'];
      $email = $line['email'];
          $igreja = $line['igreja'];
          $telefone = $line['telefone'];
    
 
 
 
   
    









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


   
  
<!------------- nomes -------------------------------->  
  

   <ul class="collection">
    <li class="collection-item avatar">
         <i class="material-icons circle">folder</i>
      <span class="title"><?php echo $nome." ".$sobrenome; ?></span>
      <p><?php echo $telefone;?><br>
         <?php echo $email;?>
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
  <li class="collection-item">
  
  
  </li>
       
      </ul>

  
 <!--   ------------------------------------------  -->
 
 
 
 
 <?php
 
}
}

 ?>
 



  
<?php include_once"footer.php"; ?>





  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
  
  

  
  
    <script>

$(document).ready(function(){
    $('.sidenav').sidenav();
  });


</script>







  </body>
</html>
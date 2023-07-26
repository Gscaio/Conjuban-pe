<?php
session_start();
@$email =$_SESSION['email'];
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	@$email =$_SESSION['email'];
	     //palestra
     
    $idworkup = $_POST['idpalestra'];





$sql =mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email'");
while($line = mysqli_fetch_array($sql)){
 $idusuario = $line['id'];
  $palestraantiga = $line['workshop'];
}

	$registro=true;

if($registro==true){ 
	//$senha = password_hash($senha, PASSWORD_DEFAULT);
	
	
	
	//dados da palestra antiga 
	
	$sql2 =mysqli_query($conn, "SELECT * FROM workshop WHERE idworkshop = '$palestraantiga'");
	while($line = mysqli_fetch_array($sql2)){ 
	     $vagaspalestraantiga = $line['vagas'];
	   
	}
	
	
	
	//dados da nova palestra
	
	$sql3 =mysqli_query($conn, "SELECT * FROM workshop WHERE idworkshop = '$idworkup'");
	while($line = mysqli_fetch_array($sql3)){ 
	     $vagaspalestraup = $line['vagas'];
	   
	}
	




	if($idworkup != $palestraantiga ) {
	    
	    $vagaspalestra2 = $vagaspalestraup - 1;
$vagaspalestra3 = $vagaspalestraantiga + 1;

$sql6 = mysqli_query($conn, "UPDATE workshop SET vagas = $vagaspalestra2 WHERE idworkshop = $idworkup") or die("Unable to update - work");
$sql7 = mysqli_query($conn, "UPDATE workshop SET vagas = $vagaspalestra3 WHERE idworkshop = $palestraantiga") or die("Unable to update + work");
$sql5 = mysqli_query($conn, "UPDATE usuarios SET workshop = $idworkup WHERE id = $idusuario") or die("Unable to update - work");
	    
	    
	} else {
	    
	   
	}






		$_SESSION['msgcad'] = "Workshop trocado com sucesso";
		header("Location: user.php");
	}else{
		$_SESSION['msg'] = "Erro ao trocar work";
	} 
}




?>
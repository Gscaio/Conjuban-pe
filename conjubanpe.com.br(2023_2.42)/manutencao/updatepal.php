<?php
session_start();
@$email =$_SESSION['email'];
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	@$email =$_SESSION['email'];
	     //palestra
     
    $idpalestraup = $_POST['idpalestra'];





$sql =mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email'");
while($line = mysqli_fetch_array($sql)){
 $idusuario = $line['id'];
  $palestraantiga = $line['palestra'];
}

	$registro=true;

if($registro==true){ 
	//$senha = password_hash($senha, PASSWORD_DEFAULT);
	
	
	
	//dados da palestra antiga 
	
	$sql2 =mysqli_query($conn, "SELECT * FROM palestras WHERE idpalestra = '$palestraantiga'");
	while($line = mysqli_fetch_array($sql2)){ 
	     $vagaspalestraantiga = $line['vagas'];
	   
	}
	
	
	
	//dados da nova palestra
	
	$sql3 =mysqli_query($conn, "SELECT * FROM palestras WHERE idpalestra = '$idpalestraup'");
	while($line = mysqli_fetch_array($sql3)){ 
	     $vagaspalestraup = $line['vagas'];
	   
	}
	
	
	if($idpalestraup != $palestraantiga ) {
	    
	    $vagaspalestra2 = $vagaspalestraup - 1;
$vagaspalestra3 = $vagaspalestraantiga + 1;

$sql6 = mysqli_query($conn, "UPDATE palestras SET vagas = $vagaspalestra2 WHERE idpalestra = $idpalestraup") or die("Unable to update - palestras");
$sql7 = mysqli_query($conn, "UPDATE palestras SET vagas = $vagaspalestra3 WHERE idpalestra = $palestraantiga") or die("Unable to update + palestras");
$sql5 = mysqli_query($conn, "UPDATE usuarios SET palestra = $idpalestraup WHERE id = $idusuario") or die("Unable to update - palestras");
	    
	    
	} else {
	    
	   
	}
	








		$_SESSION['msgcad'] = "Palestra trocada com sucesso";
		header("Location: user.php");
	}else{
		$_SESSION['msg'] = "Erro ao trocar palestra";
	}
	
	
	
	
	
}




?>
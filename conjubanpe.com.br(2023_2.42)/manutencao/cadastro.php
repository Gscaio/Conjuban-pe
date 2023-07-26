<?php
//session_start();
//ob_start();






$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	     //palestra
     
    $idpalestra = $_POST['idpalestra'];
	//$titulopal = $_POST['titulopalestra'];
    //$palestrante = $_POST['palestrante'];
    //$descpalestra = $_POST['descpalestra'];
    $vagaspalestra = $_POST['vagaspalestra'];
    //$horapalestra = $_POST['horapalestra'];
    //$imgexppal = $_POST['imagempalestra'];
    
    //workshop
    
    $idworkshop = $_POST['idworkshop'];
	//$tituloworkshop = $_POST['tituloworkshop'];
    //$nomework = $_POST['nomework'];
    //$descwork = $_POST['descwork'];
    $vagaswork = $_POST['vagaswork'];
    //$horariowork = $_POST['horariowork'];
    //$imgexpwork = $_POST['imagemwork'];
	
	
	
	
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$repetesenha = $_POST['repsenha'];
    $telefone = $_POST['telefone'];
   $igreja = $_POST['igreja'];

	
	$registro = false;
    $registrofoto = false;

$erro = false;





	if($nome !="" && $email !="" && $senha !="" && $telefone !="" && $repetesenha !="" && $sobrenome !="" && $igreja !=""){
		if ($senha != $repetesenha){$erro=true;
		  echo "<script>alert ('Senhas diferentes');;window.history.go(-1);</script>";
		} elseif((strlen($senha)) < 6){
			$erro=true;
			echo "<script>alert ('Senha deve ter no minimo 6 caracteres');window.history.go(-1);</script>";
		 }
		 elseif(stristr($senha, "'")) {
			$erro = true;
			echo "<script>alert ('Caracter ( ' ) utilizado na senha é inválido');window.history.go(-1);</script>";
		
		}
		
		
		$result_usuario = "SELECT id FROM usuarios WHERE email='". $email ."'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			echo "<script>alert ('Email já está sendo utilizado');window.history.go(-1);</script>";
		}
	else{
			
			
		//	$erro=false;
			//echo "<script>alert ('Cadastro concluído');</script>";

		
				$registro = true;
				

		
		}
	}else{ 
		echo "<script>alert ('Preencha todos os campos corretamente');window.history.go(-1);</script>";
	}
	

	

if($registro==true){ 
	$senha = password_hash($senha, PASSWORD_DEFAULT);

$vagaspalestra2 = $vagaspalestra - 1;
$vagaswork2 = $vagaswork - 1;


$sql1 = mysqli_query($conn, "INSERT INTO usuarios (nome, sobrenome, email, senha, telefone, palestra, workshop, igreja) VALUES (
'$nome','$sobrenome','$email', '$senha' , $telefone,'$idpalestra','$idworkshop' , '$igreja'  

)") or die("Unable to insert user");;

$vagasok = true;

if ($vagasok==true){

$sql2 = mysqli_query($conn, "UPDATE palestras SET vagas = $vagaspalestra2 WHERE idpalestra = $idpalestra") or die("Unable to update palestras");
$sql3 = mysqli_query($conn, "UPDATE workshop SET vagas = $vagaswork2 WHERE idworkshop = $idworkshop")or die("Unable to update workshop");
}else{
    
    echo"Não foi possível realizar a inscrição, verifique se preencheu os campos corretamente ou entre em contato com o suporte técnico";
}


echo "<script>alert ('Cadastro concluído! Realize o login caso queira conferir seus dados');location.href=\"login.php\";</script>";
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar o usuário";
	} 
}else{
header("Location: intrucoes.php");

}




?>



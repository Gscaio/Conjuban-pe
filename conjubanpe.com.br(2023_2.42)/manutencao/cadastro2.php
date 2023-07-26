<?php
//session_start();
//ob_start();






$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$repetesenha = $_POST['repsenha'];
    $telefone = $_POST['telefone'];

$erro = false;
$registro = false;
   
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






	if($nome !="" && $sobrenome !="" && $email !="" && $senha !=""  ){
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
$registro = true;

	}else{ 
		echo "<script>alert ('Preencha todos os campos corretamente');window.history.go(-1);</script>";
	}
	

	

if($registro==true){ 
	//$senha = password_hash($senha, PASSWORD_DEFAULT);



mysqli_query($conn, "INSERT INTO usuarios (nome, sobrenome, email, senha, telefone, palestra, workshop) VALUES (
'$nome','$sobrenome','$email', '$senha', $telefone,'$idpalestra','$idworkshop'

)");




echo $erro;
		$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
	//	header("Location: user.php");
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar o usuário";
	} 
}




?>



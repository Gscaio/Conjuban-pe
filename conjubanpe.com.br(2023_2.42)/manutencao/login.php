<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CONJUBAN PE - Login</title>


		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />




<style>

*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: Helvetica;
color: #323232;
border:none;

}

body{

background-size: cover;


}

textarea:focus, input:focus{
outline: none;

}

	a{font-size: .8rem;

	}
a:hover{
color:#085588;

}

/*container login*/ 

#login-container{
background-color: #FFF;
width: 400px;
margin-left: auto;
margin-right: auto;

padding:20px 30px;
margin-top: 10vh;
border-radius: 10px;
text-align: center;

}

/* form */

form{
margin-top: 30px;
margin-bottom: 40px;

}

label,input{
display:block;
width:100%;
text-align: left;

}

label{
font-weight:bold;
font-size:.8rem;

}

input{
border-bottom: 2px solid #323232;
padding: 10px;
font-size: .1rem;
}

input:focus{
border-bottom: 2px solid #085588;

}

#forgot-pass{
text-align: right;
display:block;
}

input[type="submit"]{

text-align: center;
text-transform: uppercase;
font-weight: bold;
border:none;
height:40px;
border-radius: 20px;
margin-top: 30px;
color: #FFF;
background-color: #08558B; 
cursor:pointer;

}


input[type="submit"]:hover{
	background-color: #1B223C;
transition: .5s;
}

#logintxt{
font-size: .8rem;


}

#loginsubmit{
font-size: .8rem;


}

#loginib{

	margin-left: auto; 
	margin-right:auto;
margin-bottom: auto;
margin-top: auto;
text-align: center;

}




</style>


	</head>



	<body>

	<div id="logoib">
	<a  alt="juban"> <img src="images/jubanpng2.png" style="width:100px; height:100px;"></a>

	</div>
	





	<div id="login-container">
		<h2>Login</h2>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			if(isset($_SESSION['msgcad'])){
				echo $_SESSION['msgcad'];
				unset($_SESSION['msgcad']);
			}
		?>
		<form method="POST" action="valida.php">
			<label>Email</label>
			<input id="logintxt" type="text" name="email" placeholder="Digite o seu email"><br><br>
			
			<label>Senha</label>
			<input id="logintxt" type="password" name="senha" placeholder="Digite a sua senha"><br><br>
			
			<input type="submit" name="btnLogin" value="Entrar" id="loginsubmit">
			<a href="https://api.whatsapp.com/send?l=pt&amp;phone=55081987027455" id="forgot-pass">Esqueceu a senha?(suporte técnico)</a>
			<h4>Você ainda não possui uma conta?</h4> <br>
			<a href="intrucoes.php" id="forgot-pass2">Realize sua inscrição</a>
		    <a href="index.php" id="forgot-pass2">Sou visitante</a>
		</form>
		
	</div>

	
	

	</body>
</html>
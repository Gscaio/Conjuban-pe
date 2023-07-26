<?php
	$servidor = "localhost";
	$usuario = "u727873447_conjubanbd";
	$senha = "Aa99241386";
	$dbname = "u727873447_conjubanbd";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	//$con = ($host, $usuario, $senha, $banco);
	$con = new mysqli($servidor, $usuario, $senha, $dbname);
<?php

	$servidor = "localhost"; 
	$usuario = "root";
	$senha = "";
	$banco = "tccsuinos";

	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

	if(!$conexao){
		echo "Erro. Falha na conexao ao Servidor" .PHP_EOL;
		echo "Debugando Erro" .mysqli_connect_errno() .PHP_EOL;
		echo "Debugando Erro" .mysqli_connect_error() .PHP_EOL;
		exit;
	}

?>
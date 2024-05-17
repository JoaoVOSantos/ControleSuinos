<?php

	include("conexao.php");



	$nm = $_POST['nome_med'];
	$nl = $_POST['num_lote'];
  $dtC = $_POST['dtCheg'];
	$dtV = $_POST['dtValid'];
  $f = $_POST['fabric'];
	


	$resultado = mysqli_query($conexao,"insert into medicamentos (nome, num_lote, data_validade, fabricante, data_chegada)
  												values ('$nm','$nl','$dtV','$f','$dtC')");



  		
  			if(mysqli_affected_rows($conexao) > 0){
  				echo ("$nMatriz cadastrado com sucesso!!");
  				$redirecionar = "listaMedicamentos.php";
  				header("Location: $redirecionar", 3000);

  			}else{

  				echo ("Falha na inclusão!!");
  			}
  			
  			mysqli_close($conexao);



?>
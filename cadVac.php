<?php

	include("conexao.php");



	$n = $_POST['nome'];
	$lv = $_POST['lote_vac'];
  $f = $_POST['fabric'];
  $dtc = $_POST['dt_cheg'];
  $dtv = $_POST['dt_valid'];





	


	$resultado = mysqli_query($conexao,"insert into vacinas (nome, data_validade, lote_vac, fabricante, data_chegada)
  												values ('$n','$dtv','$lv','$f','$dtc')");



  		
  			if(mysqli_affected_rows($conexao) > 0){
  				echo ("$nMatriz cadastrado com sucesso!!");
  				$redirecionar = "listaVac.php";
  				header("Location: $redirecionar", 3000);

  			}else{

  				echo ("Falha na inclusão!!");
  			}
  			
  			mysqli_close($conexao);



?>
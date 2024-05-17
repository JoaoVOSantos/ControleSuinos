<?php

	include("conexao.php");



	$dtc = $_POST['dtComp'];
	$dtn = $_POST['dtNasc'];
	$b = $_POST['brinco'];
	$lm = $_POST['lmos'];
  $r = $_POST['raca'];


	$resultado = mysqli_query($conexao,"insert into matriz (raca, data_compra, cod_lote, data_nasc, num_mossa)
  												values ('$r','$dtc','$lm','$dtn','$b')");



  		
  			if(mysqli_affected_rows($conexao) > 0){
  				echo ("$nMatriz cadastrado com sucesso!!");
  				$redirecionar = "listaMatriz.php";
  				header("Location: $redirecionar", 3000);

  			}else{

  				echo ("Falha na inclusão!!");
  			}
  			
  			mysqli_close($conexao);



?>
<?php

	include("conexao.php");



	$dtn = $_POST['dtNasc'];
	$nc = $_POST['num_corbe'];
	$r = $_POST['raca'];
	


	$resultado = mysqli_query($conexao,"insert into cachaco (raca, data_nasc, num_cobertura)
  												values ('$r', '$dtn', '$nc')");



  		
  			if(mysqli_affected_rows($conexao) > 0){
  				echo ("$nMatriz cadastrado com sucesso!!");
  				$redirecionar = "listaCachaco.php";
  				header("Location: $redirecionar", 3000);

  			}else{

  				echo ("Falha na inclusão!!");
  			}
  			
  			mysqli_close($conexao);



?>
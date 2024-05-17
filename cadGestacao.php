<?php

	include("conexao.php");



	$nm = $_POST['nMatriz'];
	$m = $_POST['med'];
	$v = $_POST['vac'];
	$dtc = $_POST['dtCobert'];


	$resultado = mysqli_query($conexao,"insert into gestacao (num_matriz, medicamentos, vacinas, data_cobertura)
  												values ('$nm', '$m', '$v', '$dtc')");



  		
  			if(mysqli_affected_rows($conexao) > 0){
  				echo ("$nMatriz cadastrado com sucesso!!");
  				$redirecionar = "ListaGestacao.php";
  				header("Location: $redirecionar", 3000);

  			}else{

  				echo ("Falha na inclusão!!");
  			}
  			
  			
  			mysqli_close($conexao);



?>
<?php

	include("conexao.php");



	$nm = $_POST['num_matriz'];
	$dt = $_POST['dt_parto'];
	$np = $_POST['num_parto'];


	$resultado = mysqli_query($conexao,"insert into parto (num_matriz, num_parto, data_parto)
  												values ('$nm', '$np', '$dt')");



  		
  			if(mysqli_affected_rows($conexao) > 0){
  				$redirecionar = "listaParto.php";
  				header("Location: $redirecionar", 3000);

  			}else{

  				echo ("Falha na inclusão!!");
  			}
  			
  			
  			mysqli_close($conexao);



?>
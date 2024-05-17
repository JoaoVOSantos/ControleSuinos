<?php

	include("conexao.php");



	$dt = $_POST['dt_desmame'];
	$pm = $_POST['peso_med'];
	$nl = $_POST['num_lote'];
	


	$resultado = mysqli_query($conexao,"insert into desmame (num_lote, peso_medio, data_desmame)
  												values ('$nl', '$pm', '$dt')");



  		
  			if(mysqli_affected_rows($conexao) > 0){
  				$redirecionar = "listaDesmame.php";
  				header("Location: $redirecionar", 3000);

  			}else{

  				echo ("Falha na inclusão!!");
  			}
  			
  			
  			mysqli_close($conexao);



?>
<?php

	include("conexao.php");



	$dtc = $_POST['dt_cresc'];
	$pm = $_POST['peso_med'];


	$resultado = mysqli_query($conexao,"insert into cresc (data_cresc, peso_medio)
  												values ('$dtc', '$pm')");



  		
  			if(mysqli_affected_rows($conexao) > 0){
  				$redirecionar = "listaCresc.php";
  				header("Location: $redirecionar", 3000);

  			}else{

  				echo ("Falha na inclusão!!");
  			}
  			
  			
  			mysqli_close($conexao);



?>
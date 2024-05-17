<?php

	include("conexao.php");



	$da = $_POST['dt_abate'];
	$ps = $_POST['peso_sai'];
	$pe = $_POST['peso_entra'];
  $dtt = $_POST['dt_term'];
  


	$resultado = mysqli_query($conexao,"insert into terminacao (data_abate, peso_saida, peso_entrada, data_term)
  												values ('$da', '$ps','$pe','$dtt')");



  		
  			if(mysqli_affected_rows($conexao) > 0){
  				$redirecionar = "listaTerm.php";
  				header("Location: $redirecionar", 3000);

  			}else{

  				echo ("Falha na inclusão!!");
  			}
  			
  			
  			mysqli_close($conexao);



?>
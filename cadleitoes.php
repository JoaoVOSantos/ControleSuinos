<?php

	include("conexao.php");



	$nLote = $_POST['nLote'];
	$nFemea = $_POST['nFemea'];
	$nMacho = $_POST['nMacho'];
	$nMatriz = $_POST['nMatriz'];
	$nVivos = $_POST['nVivos'];
	$nMortos = $_POST['nMortos'];
	$nMumif = $_POST['nMumif'];
	$dt = $_POST['dtNasc'];
	$peso = $_POST['peso'];


	$resultado = mysqli_query($conexao,"insert into lote (peso_medio, num_matriz, num_macho, data_nasc, num_lote, num_femea, mumificados, vivos, mortos)
  												values ('$peso', '$nMatriz', '$nMacho', '$dt', '$nLote', '$nFemea', '$nMumif', '$nVivos', '$nMortos')");



  		
  			if(mysqli_affected_rows($conexao) > 0){
  				echo ("$nMatriz cadastrado com sucesso!!");
  				$redirecionar = "ListaLote.php";
  				header("Location: $redirecionar", 3000);

  			}else{

  				echo ("Falha na inclusão!!");
  			}
  			
  			
  			mysqli_close($conexao);



?>
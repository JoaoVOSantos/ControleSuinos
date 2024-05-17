
	<?php
		include("conexao.php");

		$cod_matriz = $_GET['cod_matriz'];


		$resultado = mysqli_query ($conexao, "delete from matriz where cod_matriz = $cod_matriz");

		
			$redirecionar = "listaMatriz.php";
			header("Location: $redirecionar", 1000);
			
		
		
	?>

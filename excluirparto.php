
	<?php
		include("conexao.php");

		$cod = $_GET['cod_parto'];


		$resultado = mysqli_query ($conexao, "delete from parto where cod_parto = $cod");

		
			$redirecionar = "listaParto.php";
			header("Location: $redirecionar", 1000);
			
		
		
	?>

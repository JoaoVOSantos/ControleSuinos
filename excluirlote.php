
	<?php
		include("conexao.php");

		$cod_lote = $_GET['cod_lote'];


		$resultado = mysqli_query ($conexao, "delete from lote where cod_lote = $cod_lote");

		
			$redirecionar = "listaLote.php";
			header("Location: $redirecionar", 1000);
			
		
		
	?>

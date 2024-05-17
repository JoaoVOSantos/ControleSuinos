
	<?php
		include("conexao.php");

		$cod = $_GET['cod_medi'];


		$resultado = mysqli_query ($conexao, "delete from medicamentos where cod_medi = $cod");

		
			$redirecionar = "listaMed.php";
			header("Location: $redirecionar", 1000);
			
		
		
	?>

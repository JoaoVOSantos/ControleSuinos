
	<?php
		include("conexao.php");

		$cod = $_GET['cod_desmame'];


		$resultado = mysqli_query ($conexao, "delete from desmame where cod_desmame = $cod");

		
			$redirecionar = "listaDesmame.php";
			header("Location: $redirecionar", 1000);
			
		
		
	?>

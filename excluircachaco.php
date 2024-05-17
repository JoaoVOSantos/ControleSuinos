
	<?php
		include("conexao.php");

		$cod_cachaco = $_GET['cod_cachaco'];


		$resultado = mysqli_query ($conexao, "delete from cachaco where cod_cachaco = $cod_cachaco");

		
			$redirecionar = "listaCachaco.php";
			header("Location: $redirecionar", 1000);
			
		
		
	?>

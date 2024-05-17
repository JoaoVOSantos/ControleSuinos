
	<?php
		include("conexao.php");

		$cod = $_GET['cod_term'];


		$resultado = mysqli_query ($conexao, "delete from terminacao where cod_term = $cod");

		
			$redirecionar = "listaTerm.php";
			header("Location: $redirecionar", 1000);
			
		
		
	?>

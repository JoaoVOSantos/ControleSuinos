
	<?php
		include("conexao.php");

		$cod_vac = $_GET['cod_vac'];


		$resultado = mysqli_query ($conexao, "delete from vacinas where cod_vac = $cod_vac");

		
			$redirecionar = "listaVac.php";
			header("Location: $redirecionar", 1000);
			
		
		
	?>

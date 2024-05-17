
	<?php
		include("conexao.php");

		$cod = $_GET['cod_cresc'];


		$resultado = mysqli_query ($conexao, "delete from cresc where cod_cresc = $cod");

		
			$redirecionar = "listaCresc.php";
			header("Location: $redirecionar", 1000);
			
		
		
	?>

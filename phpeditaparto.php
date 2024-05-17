
		<?php

					include("conexao.php");

			 $cod_parto = $_POST['cod'];

            $nu = $_POST['num_parto'];

            $matriz = $_POST['num_matriz'];

            $dtp = $_POST['dt_parto'];


			//fazendo o SQL de alteração de registro na tabela de aluno
			//LEMBRANDO: em um update nunca se esqueça de colocar o where

			$resultado = mysqli_query ($conexao, "update parto set
			num_matriz='$matriz',
			num_parto='$nu',
			data_parto='$dtp'
			where cod_parto = $cod_parto;");





			
			//verificando se houve alteração na base de dados
			if (mysqli_affected_rows($conexao) > 0)
			{
				echo "ALTERAÇÃO REALIZADA COM SUCESSO";
				//redirecionando para a pagina do formulario com o codigo do aluno (PK) e mais um
				//parametro que ? o realizada
				$redirecionar = "listaParto.php";
				header("Location: $redirecionar", 1000);
			}
			else
			{
				$redirecionar = "editaparto.php";
				header("Location: $redirecionar", 1000);

			}

			mysqli_close($conexao);
			?>

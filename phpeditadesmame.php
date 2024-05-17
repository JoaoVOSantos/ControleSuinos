
		<?php

					include("conexao.php");

			$cod = $_POST['cod'];

			$nul = $_POST['num_lote'];

            $peso = $_POST['peso_med'];

            $dtd = $_POST['dt_desmame'];


			//fazendo o SQL de alteração de registro na tabela de aluno
			//LEMBRANDO: em um update nunca se esqueça de colocar o where

			$resultado = mysqli_query ($conexao, "update desmame set
			num_lote='$nul',
			peso_medio='$peso',
			data_desmame='$dtd'
			where cod_desmame = $cod;");





			
			//verificando se houve alteração na base de dados
			if (mysqli_affected_rows($conexao) > 0)
			{
				echo "ALTERAÇÃO REALIZADA COM SUCESSO";
				//redirecionando para a pagina do formulario com o codigo do aluno (PK) e mais um
				//parametro que ? o realizada
				$redirecionar = "listaDesmame.php";
				header("Location: $redirecionar", 1000);
			}
			else
			{
				$redirecionar = "editaDesmame.php";
				header("Location: $redirecionar", 1000);

			}

			mysqli_close($conexao);
			?>

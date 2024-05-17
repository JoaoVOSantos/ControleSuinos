
		<?php

					include("conexao.php");

		    $c = $_POST['cod'];

			$nm = $_POST['nome_med'];

            $nl = $_POST['num_lote'];

            $dtc = $_POST['dtCheg'];

            $dtv = $_POST['dtValid'];

            $f = $_POST['fabric'];




			//fazendo o SQL de alteração de registro na tabela de aluno
			//LEMBRANDO: em um update nunca se esqueça de colocar o where

			$resultado = mysqli_query ($conexao, "update medicamentos set
			nome='$nm',
			num_lote='$nl',
			data_chegada='$dtc',
			data_validade='$dtv',
			fabricante='$f'
			where cod_medi = $c;");





			
			//verificando se houve alteração na base de dados
			if (mysqli_affected_rows($conexao) > 0)
			{
				echo "ALTERAÇÃO REALIZADA COM SUCESSO";
				//redirecionando para a pagina do formulario com o codigo do aluno (PK) e mais um
				//parametro que ? o realizada
				$redirecionar = "listaMed.php";
				header("Location: $redirecionar", 1000);
			}
			else
			{
				$redirecionar = "editaMed.php";
				header("Location: $redirecionar", 1000);

			}

			mysqli_close($conexao);
			?>

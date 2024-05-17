
		<?php

					include("conexao.php");

			$cod = $_POST['cod_vac'];

            $fab = $_POST['fabric'];

            $dtcheg = $_POST['dt_cheg'];

            $dtval = $_POST['dt_valid'];

            $lote = $_POST['lote_vac'];

            $nome = $_POST['nome'];



			//fazendo o SQL de alteração de registro na tabela de aluno
			//LEMBRANDO: em um update nunca se esqueça de colocar o where

			$resultado = mysqli_query ($conexao, "update vacinas a set
			nome='$nome',
			data_validade='$dtval',
			lote_vac='$lote',
			fabricante='$fab',
			data_chegada='$dtcheg'
			where cod_vac = $cod;");





			
			//verificando se houve alteração na base de dados
			if (mysqli_affected_rows($conexao) > 0)
			{
				echo "ALTERAÇÃO REALIZADA COM SUCESSO";
				//redirecionando para a pagina do formulario com o codigo do aluno (PK) e mais um
				//parametro que ? o realizada
				$redirecionar = "listaVac.php";
				header("Location: $redirecionar", 1000);
			}
			else
			{
				$redirecionar = "editavac.php";
				header("Location: $redirecionar", 1000);

			}

			mysqli_close($conexao);
			?>

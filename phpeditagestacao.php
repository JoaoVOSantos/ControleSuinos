
		<?php

					include("conexao.php");

			$cod = $_POST['cod_gestacao'];

            $matriz = $_POST['nMatriz'];

            $med = $_POST['med'];

            $vac = $_POST['vac'];

            $dt = $_POST['dtCobert'];



			//fazendo o SQL de alteração de registro na tabela de aluno
			//LEMBRANDO: em um update nunca se esqueça de colocar o where

			$resultado = mysqli_query ($conexao, "update gestacao a set
			num_matriz='$matriz',
			medicamentos='$med',
			vacinas='$vac',
			data_cobertura='$dt'
			where cod_gestacao = $cod;");





			
			//verificando se houve alteração na base de dados
			if (mysqli_affected_rows($conexao) > 0)
			{
				echo "ALTERAÇÃO REALIZADA COM SUCESSO";
				//redirecionando para a pagina do formulario com o codigo do aluno (PK) e mais um
				//parametro que ? o realizada
				$redirecionar = "listaGestacao.php";
				header("Location: $redirecionar", 1000);
			}
			else
			{
				$redirecionar = "editagestacao.php";
				header("Location: $redirecionar", 1000);

			}

			mysqli_close($conexao);
			?>

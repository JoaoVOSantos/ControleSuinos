
		<?php

					include("conexao.php");

			$cod_term = $_POST['cod'];

            $dta = $_POST['dt_abate'];

          $pesoS = $_POST['peso_sai'];

          $pesoE = $_POST['peso_entra'];

            $dtt = $_POST['dt_term'];


			//fazendo o SQL de alteração de registro na tabela de aluno
			//LEMBRANDO: em um update nunca se esqueça de colocar o where

			$resultado = mysqli_query ($conexao, "update terminacao set
			data_abate='$dta',
			peso_saida='$pesoS',
			peso_entrada='$pesoE',
			data_term='$dtt'
			where cod_term = $cod_term;");





			
			//verificando se houve alteração na base de dados
			if (mysqli_affected_rows($conexao) > 0)
			{
				echo "ALTERAÇÃO REALIZADA COM SUCESSO";
				//redirecionando para a pagina do formulario com o codigo do aluno (PK) e mais um
				//parametro que ? o realizada
				$redirecionar = "listaTerm.php";
				header("Location: $redirecionar", 1000);
			}
			else
			{
				$redirecionar = "editaTerm.php";
				header("Location: $redirecionar", 1000);

			}

			mysqli_close($conexao);
			?>

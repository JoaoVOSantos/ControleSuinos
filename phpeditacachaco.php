
		<?php

					include("conexao.php");

			$cod = $_POST['cod_cachaco'];

            $dtnasc = $_POST['dtNasc'];

            $cob = $_POST['num_corbe'];

            $raca = $_POST['raca'];

            


			//fazendo o SQL de alteração de registro na tabela de aluno
			//LEMBRANDO: em um update nunca se esqueça de colocar o where

			$resultado = mysqli_query ($conexao, "update cachaco a set
			raca='$raca',
			data_nasc='$dtnasc',
			num_cobertura='$cob'			
			where cod_cachaco = $cod;");





			
			//verificando se houve alteração na base de dados
			if (mysqli_affected_rows($conexao) > 0)
			{
				echo "ALTERAÇÃO REALIZADA COM SUCESSO";
				//redirecionando para a pagina do formulario com o codigo do aluno (PK) e mais um
				//parametro que ? o realizada
				$redirecionar = "listaCachaco.php";
				header("Location: $redirecionar", 1000);
			}
			else
			{
				$redirecionar = "editacachaco.php";
				header("Location: $redirecionar", 1000);

			}

			mysqli_close($conexao);
			?>

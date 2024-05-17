
		<?php

					include("conexao.php");

			 $cod_cresc = $_POST['cod'];

            $dtc = $_POST['dt_cresc'];

            $peso= $_POST['peso_med'];



			//fazendo o SQL de alteração de registro na tabela de aluno
			//LEMBRANDO: em um update nunca se esqueça de colocar o where

			$resultado = mysqli_query ($conexao, "update cresc set
			data_cresc='$dtc',
			peso_medio='$peso'
			where cod_cresc = $cod_cresc;");





			
			//verificando se houve alteração na base de dados
			if (mysqli_affected_rows($conexao) > 0)
			{
				echo "ALTERAÇÃO REALIZADA COM SUCESSO";
				//redirecionando para a pagina do formulario com o codigo do aluno (PK) e mais um
				//parametro que ? o realizada
				$redirecionar = "listaCresc.php";
				header("Location: $redirecionar", 1000);
			}
			else
			{
				$redirecionar = "editaCresc.php";
				header("Location: $redirecionar", 1000);

			}

			mysqli_close($conexao);
			?>

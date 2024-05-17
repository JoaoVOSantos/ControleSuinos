
		<?php

					include("conexao.php");

			 $cod = $_POST['cod_matriz'];

            $raca = $_POST['raca'];

            $dtnasc = $_POST['dtNasc'];

            $dtcomp = $_POST['dtComp'];

            $lote = $_POST['lmos'];

            $mossa = $_POST['brinco'];


			//fazendo o SQL de alteração de registro na tabela de aluno
			//LEMBRANDO: em um update nunca se esqueça de colocar o where

			$resultado = mysqli_query ($conexao, "update matriz a set
			raca='$raca',
			data_compra='$dtcomp',
			data_nasc='$dtnasc',
			cod_lote='$lote',
			num_mossa='$mossa'
			where cod_matriz = $cod;");





			
			//verificando se houve alteração na base de dados
			if (mysqli_affected_rows($conexao) > 0)
			{
				echo "ALTERAÇÃO REALIZADA COM SUCESSO";
				//redirecionando para a pagina do formulario com o codigo do aluno (PK) e mais um
				//parametro que ? o realizada
				$redirecionar = "listaMatriz.php";
				header("Location: $redirecionar", 1000);
			}
			else
			{
				$redirecionar = "editamatriz.php";
				header("Location: $redirecionar", 1000);

			}

			mysqli_close($conexao);
			?>

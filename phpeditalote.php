
		<?php

					include("conexao.php");

			$cod = $_POST['cod_lote'];

            $matriz = $_POST['nMatriz'];

            $machos = $_POST['nMacho'];

            $dtnasc = $_POST['dtNasc'];

            $lote = $_POST['nLote'];

            $femeas = $_POST['nFemea'];

            $mumif = $_POST['nMumif'];

            $vivos = $_POST['nVivos'];

            $mortos = $_POST['nMortos'];

             $peso = $_POST['peso'];


			//fazendo o SQL de alteração de registro na tabela de aluno
			//LEMBRANDO: em um update nunca se esqueça de colocar o where

			$resultado = mysqli_query ($conexao, "update lote a set
			num_matriz='$matriz',
			num_macho='$machos',
			data_nasc='$dtnasc',
			num_lote='$lote',
			num_femea='$femeas',
			mumificados='$mumif',
			vivos='$vivos',
			mortos = '$mortos',
			peso_medio = '$peso'
			where cod_lote = $cod;");





			
			//verificando se houve alteração na base de dados
			if (mysqli_affected_rows($conexao) > 0)
			{
				echo "ALTERAÇÃO REALIZADA COM SUCESSO";
				//redirecionando para a pagina do formulario com o codigo do aluno (PK) e mais um
				//parametro que ? o realizada
				$redirecionar = "listaLote.php";
				header("Location: $redirecionar", 1000);
			}
			else
			{
				$redirecionar = "editalote.php";
				header("Location: $redirecionar", 1000);

			}

			mysqli_close($conexao);
			?>

<html>
  	<head>
    	<title>Controle do Nascimento até o abate dos leitões</title>
  	</head>
  	<body>
  		<?php

  			include ("conexao.php");

  			$nome = $_POST['nome'];
  			$email = $_POST['email'];
  			$senha = $_POST['senha'];
        $Rsenha = $_POST['Rsenha'];

        if($senha != $Rsenha){

          echo "<script>alert('Senhas nao conferem'); window.location = 'cadastro.php';</script>";
        
        }else{

        $string = $senha;
        $algoritmo = "AES-256-CBC";
        $chave = "chave_privada";
        $iv = "wNYtCnelXfOa6uiJ";
        $mensagem = openssl_encrypt($string, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);
        $senha = utf8_decode($mensagem);

            
  			$resultado = mysqli_query($conexao,"insert into usuario (nome_usuario, email, senha)
  												values ('$nome', '$email', '$senha')");

  			
  		    echo (mysqli_affected_rows($conexao) > 0);
  				echo ("$nome cadastrado com sucesso!!");
  				$redirecionar = "login.php";
  				header("Location: $redirecionar", 3000);

  			}
  			
  			mysqli_close($conexao);
  		?>

  	</body>
</html>
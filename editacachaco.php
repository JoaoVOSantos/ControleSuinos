<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css2/bootstrap.min.css">
	<title>CL | Editar Cachaço</title>
</head>


	
	<?php

	 include("conexao.php");

    session_start();
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
      header ("location:login.php");
    }
    

        
?>
	

<style type="text/css">


	
	.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 850px;
    
}

.content {
    background-color: white;
    border-radius: 5px;
    width: 900px;
    height: 85%;
    justify-content: space-between;
    align-items: center;
    position: relative;
    box-shadow: 10px 6px 6px 6px #DB7093;
}


 .button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #FF1493;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {
  background-color: pink;
}

.button:active {
  background-color: pink;
  box-shadow: 0 5px #a30000;
  transform: translateY(4px);
}

.pedita{
  color: black;
  font-family: arial;
  font-size: 25px;
}

.buttonSair{
  display: inline-block;
  padding: 15px 25px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: red;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;

  
}

.buttonSair:hover {
  background-color:   #FF6347;

}

.buttonSair:active {
  background-color:   #FF6347;
  box-shadow: 0 5px #a30000;
  transform: translateY(4px);
  
}

</style>

<?php

 include("conexao.php");
            
            $cod_cachaco = $_GET['cod_cachaco'];

            $resultado = mysqli_query($conexao, "select * from cachaco where cod_cachaco = $cod_cachaco");


            


            
            $mostra = mysqli_fetch_array($resultado);


           $cod = $mostra['cod_cachaco'];

            $dtnasc = $mostra['data_nasc'];

            $cobert = $mostra['num_cobertura'];

            $raca = $mostra['raca'];

        ?>

<body style="background-color: pink;">

	<nav class="navbar navbar-light" style="background-color: white;">
  <a class="navbar-brand" style="margin-right: 1220px; font-weight: bold;">
    <img src="img/logop.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Controle de Suinos - Cadastro de Cachaço
  </a>
</nav>



	<form method="POST" action="phpeditacachaco.php">  
		
		<div class="container">
			<div class="content">
				
				<br><br><br>

        <div>
            <input type="hidden" name="cod_cachaco" value="<?php echo ("$cod_cachaco");?>"/>
          </div>
				<center><h2 style="color: #FF1493; font-weight: bold;
				">Editar Cachaço</h2></center>
				  <br>  <br> 
				 <center>
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Data do nascimento</label>
			      <input type="date" class="form-control" id="inputEmail4" placeholder="Data" name="dtNasc" value="<?php echo ("$dtnasc"); ?>">
			    </div>
			  <div class="form-group col-md-4">
			      <label for="inputEmail4">Numero de cobertura</label>
			      <input type="number" class="form-control" id="inputEmail4" placeholder="Cobertura" name="num_corbe" value="<?php echo ("$cobert"); ?>">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputEmail4">Raça</label>
			      <input type="text" class="form-control" id="inputEmail4" placeholder="Raça" name="raca" value="<?php echo ("$raca"); ?>">
			    </div>
			    <br><br>
			     <button class="button" style="vertical-align:middle; height: 60px; width: 150px;">  Editar </button>
			  </div>
			  </div>
			</div>
</center>
	</form>
</body>
</html>
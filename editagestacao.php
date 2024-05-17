<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css2/bootstrap.min.css">
	<title>CL | Editar Gestações</title>
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
    height: 600px;
    
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
            
            $cod_gestacao = $_GET['cod_gestacao'];

            $resultado = mysqli_query($conexao, "select * from gestacao where cod_gestacao = $cod_gestacao");


            


            
            $mostra = mysqli_fetch_array($resultado);


           $cod = $mostra['cod_gestacao'];

            $matriz = $mostra['num_matriz'];

            $med = $mostra['medicamentos'];

            $dtnasc = $mostra['data_nasc'];

            $vac = $mostra['vacinas'];

            $dtcob = $mostra['data_cobertura'];

            ?>



<body style="background-color: pink;">

	<nav class="navbar navbar-light" style="background-color: white;">
  <a class="navbar-brand" style="margin-right: 1220px; font-weight: bold;">
    <img src="img/logop.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Controle de Suinos - Editar Gestação
  </a>
</nav>



	<form method="POST" action="phpeditagestacao.php">
		
		<div class="container">
			<div class="content">
				
				<br>

        <div>
            <input type="hidden" name="cod_gestacao" value="<?php echo ("$cod_gestacao");?>"/>
          </div>

				<center><h2 style="color: #FF1493; font-weight: bold;
				">Editar Gestação</h2></center>
				  <br>  <br> 

				
				 <center>
			    <div class="form-group col-md-4">
			      <label for="inputEmail4">Numero Da Matriz</label>
			      <input type="number" class="form-control" id="inputEmail4" placeholder="Numero Matriz" name="nMatriz" value="<?php echo ("$matriz"); ?>">
			    </div>
			  
			  <br> 

			  <div class="form-row">
			  <div class="form-group col-md-4">
			      <label for="inputEmail4">Medicamentos</label>
			      <input type="text" class="form-control" id="inputEmail4" placeholder="Medicamentos" name="med" value="<?php echo ("$med"); ?>">
			    </div>

			
			    <div class="form-group col-md-4">
			      <label for="inputEmail4">Vacinas</label>
			      <input type="text" class="form-control" id="inputEmail4" placeholder="Vacinas" name="vac" value="<?php echo ("$vac"); ?>">
			    </div>
			  
			    <br>
			  <div class="form-group col-md-4">
			      <label for="inputEmail4">Data de Cobertura</label>
			      <input type="date" class="form-control" id="inputEmail4" placeholder="" name="dtCobert" value="<?php echo ("$dtcob"); ?>">
			    </div>
			  </div>

			  <br>
			     <button class="button" style="vertical-align:middle; height: 60px; width: 150px;">  Editar </button>
			  </div>
			  </div>	  
			</div>
</center>
	</form>
</body>
</html>
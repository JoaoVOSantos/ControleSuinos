<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css2/bootstrap.min.css">
	<title>CL |Editar Vacinas</title>
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
            
            $cod_vac = $_GET['cod_vac'];

            $resultado = mysqli_query($conexao, "select * from vacinas where cod_vac = $cod_vac");


            


            
            $mostra = mysqli_fetch_array($resultado);


           $cod = $mostra['cod_vac'];

            $nome = $mostra['nome'];

            $dtval = $mostra['data_validade'];

            $lote = $mostra['lote_vac'];

            $fab = $mostra['fabricante'];

            $dtcheg = $mostra['data_chegada'];

          
        ?>


<body style="background-color: pink;">

	<nav class="navbar navbar-light" style="background-color: white;">
  <a class="navbar-brand" style="margin-right: 1220px; font-weight: bold;">
    <img src="img/logop.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Controle de Suinos - Editar Vacinas
  </a>
</nav>



	<form method="POST" action="phpeditavac.php">  
		
		<div class="container">
			<div class="content">
				
				<br><br><br>

        <div>
            <input type="hidden" name="cod_vac" value="<?php echo ("$cod_vac");?>"/>
          </div>

				<center><h2 style="color: #FF1493; font-weight: bold;
				">Editar Vacinas</h2></center>
				  <br>  <br> 
				 <center>
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Nome Da Vacina</label>
			      <input type="text" class="form-control" id="inputEmail4" placeholder="Nome" name="nome" value="<?php echo ("$nome"); ?>" >
			    </div>
			  <div class="form-group col-md-4">
			      <label for="inputEmail4">Lote Da Vacina</label>
			      <input type="number" class="form-control" id="inputEmail4" placeholder="Numero Lote" name="lote_vac" value="<?php echo ("$lote"); ?>" >
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputEmail4">Fabricante</label>
			      <input type="text" class="form-control" id="inputEmail4" placeholder="Nome Fabricante" name="fabric" value="<?php echo ("$fab"); ?>" >
			    </div>
          <div class="form-group col-md-4">
            <label for="inputEmail4">Data de Chegada</label>
            <input type="date" class="form-control" id="inputEmail4" placeholder="Data" name="dt_cheg" value="<?php echo ("$dtcheg"); ?>" >
          </div>
          <div class="form-group col-md-4">
            <label for="inputEmail4">Data de Validade</label>
            <input type="date" class="form-control" id="inputEmail4" placeholder="Data" name="dt_valid" value="<?php echo ("$dtval"); ?>" >
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
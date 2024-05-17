<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css2/bootstrap.min.css">
	<title>CL | Cadastro de Terminação</title>
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
    height: 750px;
    
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

<body style="background-color: pink;">

	<nav class="navbar navbar-light" style="background-color: white;">
  <a class="navbar-brand" style="margin-right: 1220px; font-weight: bold;">
    <img src="img/logop.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Controle de Suinos - Cadastro de Terminação
  </a>
</nav>
	<form method="POST" action="cadTerm.php">
		
		<div class="container">
			<div class="content">
				
				<br>
				<center><h2 style="color: #FF1493; font-weight: bold;
				">Cadastro de Terminação</h2></center>
				  <br>  <br> 

				 <center>
			  <div class="form-group col-md-4">
			      <label for="inputEmail4">Data de Abate</label>
			      <input type="date" class="form-control" id="inputEmail4" placeholder="Data" name="dt_abate">
			    </div>

          <div class="form-group col-md-4">
            <label for="inputEmail4">Peso Entrada</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Peso Entrada" name="peso_entra">
          </div>

          <div class="form-group col-md-4">
            <label for="inputEmail4">Peso de Saida</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Peso Saida" name="peso_sai">
          </div>

          
          <div class="form-group col-md-4">
            <label for="inputEmail4">data Terminação</label>
            <input type="date" class="form-control" id="inputEmail4" placeholder="Data" name="dt_term">
          </div>

			    <br><br>
			     <button class="button" style="vertical-align:middle; height: 60px; width: 150px;">  Cadastrar </button>
			  </div>
			  </div>
			</div>
</center>
	</form>
</body>
</html>
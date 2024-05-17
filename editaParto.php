<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css2/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>CL | Editar Parto</title>

<?php

     include("conexao.php");

    session_start();
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
      header ("location:login.php");
    }
    

       

?>
</head>

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

 <?php

 include("conexao.php");
            
            $cod = $_GET['cod_parto'];

            $resultado = mysqli_query($conexao, "select * from parto where cod_parto = $cod");


            


            
            $mostra = mysqli_fetch_array($resultado);

            $cod_parto = $mostra['cod_parto'];

            $nu = $mostra['num_parto'];

            $matriz = $mostra['num_matriz'];

            $dtp = $mostra['data_parto'];
        ?>

<body style="background-color: pink;">
   

  <nav class="navbar navbar-light" style="background-color: white;">
  <a class="navbar-brand" style="margin-right: 1220px; font-weight: bold;">
    <img src="img/logop.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Controle de Suinos - Editar Partos
  </a>
</nav>
        

       

        <form method="POST" action="phpeditaparto.php" enctype="multipart/form-data">

<div class="container">
        <div class="content">

 <br> 
  <center>

      <h2 style="color: #FF1493; font-weight: bold;">  Editar campos parto </h2>

       <br> 

        <div>
            <input type="hidden" name="cod" value="<?php echo ("$cod_parto");?>"/>
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Número da Matriz</label>
            <input type="number" class="form-control" id="inputEmail4" value="<?php echo ("$matriz"); ?>" placeholder="Matriz" name="num_matriz">
          </div>

          <div class="form-group col-md-6">
            <label for="inputEmail4">Número do Parto</label>
            <input type="number" class="form-control" id="inputEmail4" value="<?php echo ("$nu"); ?>" placeholder="Parto" name="num_parto">
          </div>

        <div class="form-group col-md-4">
            <label for="inputEmail4">Data do Parto</label>
            <input type="date" class="form-control" id="inputEmail4" value="<?php echo ("$dtp"); ?>" placeholder="Data" name="dt_parto">
          </div>


<br> <br>


     
   <button class="btn btn-success" type="submit" name="" style="background-color: #FF1493; border: pink;">-- Editar --</button>
    <p></p>




</div>

</div>

</center>
    

</form>

</body>
</html>
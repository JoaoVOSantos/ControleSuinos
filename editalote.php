<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css2/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>CL | Editar Lote</title>

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
            
            $cod_lote = $_GET['cod_lote'];

            $resultado = mysqli_query($conexao, "select * from lote where cod_lote = $cod_lote");


            


            
            $mostra = mysqli_fetch_array($resultado);


           $cod = $mostra['cod_lote'];

            $matriz = $mostra['num_matriz'];

            $machos = $mostra['num_macho'];

            $dtnasc = $mostra['data_nasc'];

            $lote = $mostra['num_lote'];

            $femeas = $mostra['num_femea'];

            $mumif = $mostra['mumificados'];

            $vivos = $mostra['vivos'];

            $mortos = $mostra['mortos'];

             $peso = $mostra['peso_medio'];
        ?>

<body style="background-color: pink;">
   

  <nav class="navbar navbar-light" style="background-color: white;">
  <a class="navbar-brand" style="margin-right: 1220px; font-weight: bold;">
    <img src="img/logop.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Controle de Suinos - Editar lote
  </a>
</nav>
        

       

        <form method="POST" action="phpeditalote.php" enctype="multipart/form-data">

<div class="container">
        <div class="content">

 <br> 
  <center>

      <h2 style="color: #FF1493; font-weight: bold;">  Editar campos lote </h2>

       <br> 

        <div>
            <input type="hidden" name="cod_lote" value="<?php echo ("$cod_lote");?>"/>
          </div>
  
    
  
<center>
          <div class="form-group col-md-4">
            <label for="inputEmail4">Numero do Lote</label>
            <input type="number" class="form-control" id="inputEmail4" placeholder="Lote" value="<?php echo ("$lote"); ?>" name="nLote">
          </div>
        
        <br>

        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputEmail4">Numero de fêmeas</label>
            <input type="number" class="form-control" id="inputEmail4" placeholder="Fêmeas" value="<?php echo ("$femeas"); ?>" name="nFemea">
          </div>

          <div class="form-group col-md-4">
            <label for="inputEmail4">Numero de machos</label>
            <input type="number" class="form-control" id="inputEmail4" placeholder="Machos" value="<?php echo ("$machos"); ?>" name="nMacho">
          </div>
        

        <div class="form-group col-md-4">
            <label for="inputEmail4">Numero da matriz</label>
            <input type="number" class="form-control" id="inputEmail4" placeholder="Matriz"  value="<?php echo ("$matriz"); ?>" name="nMatriz">
          </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputEmail4">Numero de vivos</label>
            <input type="number" class="form-control" id="inputEmail4" placeholder="Vivos" value="<?php echo ("$vivos"); ?>" name="nVivos">
          </div>

          <div class="form-group col-md-4">
            <label for="inputEmail4">Numero de mortos</label>
            <input type="number" class="form-control" id="inputEmail4" placeholder="Mortos"  value="<?php echo ("$mortos"); ?>" name="nMortos">
          </div>
        

        <div class="form-group col-md-4">
            <label for="inputEmail4">Numero da mumificados</label>
            <input type="number" class="form-control" id="inputEmail4" placeholder="Mumificados" value="<?php echo ("$mumif"); ?>" name="nMumif">
          </div>
        </div>

        <br>

        <div class="form-group col-md-6">
            <label for="inputEmail4">Data do nascimento</label>
            <input type="date" class="form-control" id="inputEmail4" placeholder="Data" value="<?php echo ("$dtnasc"); ?>" name="dtNasc">
          </div>

            <br>

          <div class="form-group col-md-4">
            <label for="inputEmail4">Peso médio</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Peso" value="<?php echo ("$peso"); ?>" name="peso">
          </div>

     
   <button class="btn btn-success" type="submit" name="" style="background-color: #FF1493; border: pink;">-- Editar --</button>
    <p></p>




</div>

</div>

</center>
    

</form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css2/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>CL | Editar Crescimento</title>

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
    height: 650px;
    
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
            
            $cod = $_GET['cod_cresc'];

            $resultado = mysqli_query($conexao, "select * from cresc where cod_cresc = $cod");

            $mostra = mysqli_fetch_array($resultado);

            $cod_cresc = $mostra['cod_cresc'];

            $dt_cresc = $mostra['data_cresc'];

            $peso = $mostra['peso_medio'];


        ?>

<body style="background-color: pink;">
   

  <nav class="navbar navbar-light" style="background-color: white;">
  <a class="navbar-brand" style="margin-right: 1220px; font-weight: bold;">
    <img src="img/logop.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Controle de Suinos - Editar Crescimento
  </a>
</nav>


       

        <form method="POST" action="phpeditaCresc.php" enctype="multipart/form-data">

<div class="container">
        <div class="content">

 <br> 
  <center>

      <h2 style="color: #FF1493; font-weight: bold;">  Editar campos Crescimento </h2>
      <br> <br>
<center>

            <input type="hidden" name="cod" value="<?php echo ("$cod_cresc");?>"/>
        <div class="form-group col-md-4">
            <label for="inputEmail4">Data de Crescimento</label>
            <input type="date" class="form-control" id="inputEmail4" value="<?php echo ("$dt_cresc"); ?>" placeholder="Data" name="dt_cresc">
          </div>

          <div class="form-group col-md-6">
            <label for="inputEmail4">Peso Medio</label>
            <input type="text" class="form-control" id="inputEmail4" value="<?php echo ("$peso"); ?>" placeholder="Peso Medio" name="peso_med">
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
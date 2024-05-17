<html>
    <head>

  <link rel="icon" href="iconep.png">
  <link rel="stylesheet" type="text/css" href="homecss.css">

    <meta http-equiv="Content-Type" content="text/html" charsert="utf-8"/>
    <title>CL | Home</title>
</head>


  <?php

   include("conexao.php");

    session_start();
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
      header ("location: login.php");
    }
    


?>


<style type="text/css">
  
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
<body>
  <div class="container">
    <div class="content">
      <div class="divimg">
            <img id="css-element" class="img" src="img/p.png">
        </div>

        <div class="divform">
          <form action="listaLote.php">
            
            <h1><p>Bem-vindo(a) ao CL!!<br></p></h1>
                <p class="pedita">Controle dos suinos, 
                    <br>cadastre seu animal abaixo</p>
           
                <br><br><br><br><br><br><br><br><br><br>
                <button class="button" style="vertical-align:middle; margin-left: 110px;">  Lista de cadastros </button>

                

          </form>
          <a href="logout.php">
                <button class="buttonSair" style="vertical-align:middle; margin-left: 458px; margin-top: 0px;">Sair</button>
            </a>
        </div>

    </div>
  </div>
</body>
 </html>

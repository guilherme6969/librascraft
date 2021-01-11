<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, inicial-scale-to-fit-no">
        <title>Librascraft</title>
        <link href="css/bootstrap.min.css" rel="stylesssheet"/>
        
        <script src='js/jquery-3.4.1min.js'></script>
        <script src="js/bootstrap.min.js"></script>
        
        <style>
    html 
    {
        background: url("img/fundo/index.png") no-repeat ;
        width:100%; 
        overflow: hidden;
    }
    a:link
    {
        text-decoration: none;
    }
    .placa_esquerda
    {
        width:90%; 
        margin-top:-440px;
        margin-left:767px;
    }
    @media(width:640px)
    {
        html 
    {
        background: url("img/medias/index.png") no-repeat ;
        width:100%; 
        overflow: hidden;
    }
        .placa_cabo
        {
            width:100%; 
            margin-top:250px;
            margin-left:200px;
        }
      
    .placa_esquerda
    {
        width:100%; 
        margin-top:-160px;
        margin-left:943px;
    }

    .placa_direita
    {
        width:100%; 
        margin-left:-943px;
            
    }
    .mapa
    {
        margin-top:-216px;
        font-size:30px;
        margin-left:450px;
    }
    .logout
    {
        margin-top:30px;
        font-size:30px;
        margin-left:644px;
    }
    }
    @media (width:)
    {

    }
    .placa_direita
    {
        width:90%; 
        margin-top:-200px;
        margin-left:900px;
    }
    .mapa
    {
        margin-top:-216px;
        font-size:30px;
        margin-left:450px;
    }
    .logout
    {
        margin-top:30px;
        font-size:30px;
        margin-left:644px;
    }
    .login
    {
        margin-top:-216px;
        font-size:30px;
        margin-left:430px;
    }
    .cadastro
    {
        margin-top:30px;
        font-size:27px;
        margin-left:630px;
    }
    .modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: rgba(0,0,0,0.8);
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
}
        </style>
    </head>
    <body>
        
    <div class ="container">   <!-- BARRA -->
        <div class="row">
            <div class="placa_cabo">
                <img src="img/icones/placa/barra.png" style="width:43%; margin-top:240px; margin-left:750px;"></a>
            </div>
        </div>
    </div>
    <div class ="container">   <!-- PLACA ESQUERDA -->
        <div class="row">
            <div class="placa_esquerda">
                <img src="img/icones/placa/placa_esquerda.png" placeholder="login" style="width:30%;">
            </div>
        </div>        
    </div>
    <div class ="container">  <!-- PLACA DIREITA -->
        <div class="row">
            <div class="placa_direita">
                <img src="img/icones/placa/placa_direita.png" style="width:32%;"></a>
            </div>
        </div>        
    </div>

    <div class="login">
    <?php
        if(isset($_SESSION["autorizado"]))
        {
            echo '<div class="mapa"><a href = "mapa.php" style= "font-family:arial, Helvetica, sans-serif; color:black;">MAPA</a></div>';
            echo '<div class="logout"><a href = "logout.php" style= "font-family:arial, Helvetica, sans-serif; color:black;">LOGOUT</a></div>';
        }
        else{
            echo '<div class="login"><a href = "login.php"style= "font-family:arial, Helvetica, sans-serif; color:black;">LOGIN</a></div>';
            echo ' <div class="cadastro"><a href="form_cadastro_usuario.php" style= "font-family:arial, Helvetica, sans-serif; color:black; ">CADASTRO</a>
            </div>';
        }
    ?>

    <a href="#AbrirModal">Open Modal</a>
    <div id="#AbrirModal" class ="modal">
    <a href="#fechar" title="Fechar" class="fechar">x</a>
    <h2>Janela Modal</h2>
    </div>
    
    </body>
</html>
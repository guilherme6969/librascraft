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
        background: url("img/index.png") no-repeat ;
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
        margin-top:-480px;
        margin-left:-10px;
    }
    .placa_direita
    {
        width:90%; 
        margin-top:-200px;
        margin-left:150px;
    }
    .mapa
    {
        margin-top:-236px;
        margin-left:10px;
        font-size:30px;
    }
    .logout
    {
        margin-top:50px;
        margin-left:-90px;
        font-size:30px;
    }
    .login
    {
        margin-top:-236px;
        margin-left:-40px;
        font-size:30px;
    }
    .cadastro
    {
        margin-top:50px;
        margin-left:-60px;
        font-size:30px;
    }
        </style>
    </head>
    <body>
        
    <div class ="container">   
        <div class="row">
            <div class="placa_cabo">
                <img src="img/icones/placa/barra.png" style="width:43%; margin-top:185px; margin-left:750px;"></a>
            </div>
        </div>
    </div>
    <div class ="container">   
        <div class="row">
            <div class="placa_esquerda">
                <img src="img/icones/placa/placa_esquerda.png" placeholder="login" style="width:30%; margin-top:0px; margin-left:777px;">
            </div>
        </div>        
    </div>
    <div class ="container">   
        <div class="row">
            <div class="placa_direita">
                <img src="img/icones/placa/placa_direita.png" style="width:32%; margin-top:0px; margin-left:760px;"></a>
            </div>
        </div>        
    </div>

    <div class="login">
    <?php
        if(isset($_SESSION["autorizado2"]))
        {
            echo '<div class="login"><a href = "cadastro_palavra.php" style= "font-family:arial, Helvetica, sans-serif; color:black; margin-left:950px;">CADASTRO PALAVRA</a></div>';
            echo '<div class="cadastro"><a href = "cadastro_atividade.php" style= "font-family:arial, Helvetica, sans-serif; color:black; margin-left:1184px;">CADASTRO ATIVIDADE</a></div>';
        }

        if(isset($_SESSION["autorizado"]))
        {
            echo '<div class="mapa"><a href = "mapa.php" style= "font-family:arial, Helvetica, sans-serif; color:black; margin-left:900px;">MAPA</a></div>';
            echo '<div class="logout"><a href = "logout.php" style= "font-family:arial, Helvetica, sans-serif; color:black; margin-left:1234px;">LOGOUT</a></div>';
        }
        else{
            echo '<div class="login"><a href = "login.php"style= "font-family:arial, Helvetica, sans-serif; color:black; margin-left:950px;">LOGIN</a></div>';
            echo ' <div class="cadastro"><a href="form_cadastro_usuario.php" style= "font-family:arial, Helvetica, sans-serif; color:black; margin-left:1184px;">CADASTRO</a>
            </div>';
        }
    ?>
    </div>

    </body>
</html>
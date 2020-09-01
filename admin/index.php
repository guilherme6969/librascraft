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
        background: url("img/index2.png") no-repeat ;
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
        margin-top:-470px;
        margin-left:-10px;
    }
    .placa_direita
    {
        width:90%; 
        margin-top:-220px;
        margin-left:130px;
    }
    .placa_esquerda2
    {
        width:90%; 
        margin-top:-70px;
        margin-left:-10px;
    }
    .placa_direita2
    {
        width:90%; 
        margin-top:-40px;
        margin-left:-20px;
     
    }
    .login
    {
        margin-top:-256px;
        font-size:20px;
    }
    .cadastro
    {
        margin-top:67px;
        font-size:17px;
    }
    .c_palavra
    {
        margin-top:50px;
        font-size:17px;
    }
    .c_atividade_ouvinte
    {
        margin-top:50px;
        font-size:13px;
    }
    .c_atividade_surdo
    {
        margin-top:-165px;
        font-size:13px;
    }
    .logout
    {
        margin-top:-145px;
        font-size:17px;
    }
        </style>
    </head>
    <body>
        
    <div class ="container">   
        <div class="row">
            <div class="placa_cabo">
                <img src="img/icones/placa/barra.png" style="width:43%; margin-top:300px; margin-left:820px;"></a>
            </div>
        </div>
    </div>
    <div class ="container">   
        <div class="row">
            <div class="placa_esquerda">
                <img src="img/icones/placa/placa_esquerda.png" style="width:30%; margin-top:0px; margin-left:850px;">
            </div>
        </div>        
    </div>
    <div class ="container">   
        <div class="row">
            <div class="placa_direita">
                <img src="img/icones/placa/placa_direita.png" style="width:32%; margin-top:0px; margin-left:850px;"></a>
            </div>
        </div>        
    </div>

    <div class="login">
    <?php
        if(isset($_SESSION["autorizado"]))
        {
            echo '<div class="c_palavra"><a href = "form_cadastro_palavra.php" style= "font-family:arial, Helvetica, sans-serif; color:black; margin-left:920px;">CADASTRO PALAVRA</a></div>';
            echo '<div class="c_atividade_ouvinte"><a href = "form_cadastro_atividade.php" style= "font-family:arial, Helvetica, sans-serif; color:black; margin-left:1094px;">CADASTRO ATIVIDADE OUVINTE</a></div>';
            echo '  <div class ="container">   
                    <div class="row">
                        <div class="placa_esquerda2">
                            <img src="img/icones/placa/placa_esquerda.png" style="width:30%; margin-top:0px; margin-left:850px;">
                        </div>
                    </div>        
                </div>';
            echo '<div class="c_atividade_surdo"><a href = "form_cadastro_atividade_surdo.php" style= "font-family:arial, Helvetica, sans-serif; color:black; margin-left:900px;">CADASTRO ATIVIDADE SURDO</a></div>';
            echo '  <div class ="container">   
            <div class="row">
                <div class="placa_direita2">
                    <img src="img/icones/placa/placa_direita.png" style="width:30%; margin-top:0px; margin-left:1007px;">
                </div>
            </div>        
        </div>';
    echo '<div class="logout"><a href = "logout.php" style= "font-family:arial, Helvetica, sans-serif; color:black; margin-left:1220px;">LOGOUT</a></div>';

        }
        else
        {
            echo '<div class="login"><a href = "login.php"style= "font-family:arial, Helvetica, sans-serif; color:black; margin-left:975px;">LOGIN</a></div>';
            echo ' <div class="cadastro"><a href="itens_cadastrados.php" style= "font-family:arial, Helvetica, sans-serif; color:black; margin-left:1190px;">ITENS CADASTRADOS</a></div>';
           
        }
    ?>
    </div>

    </body>
</html>
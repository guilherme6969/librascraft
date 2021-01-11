
<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
 
if( $detect->isMobile()){
    $initial_scale="0.65";
}
else{
    $initial_scale="1";    
} 

session_start();
?>

<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Librascraft</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="estilo.css">      
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/md5.js"></script>
        <style>
        .menu 
        {
            background-color:black;
            height:60px;
            width:100%;
        }
       
        </style>
    </head>
    <body>

    <div class="menu"></div>

    <div class="container">
        <div class="row">
            <div class="ajuda"><!-- ICONE AJUDA -->
            <a href="ajuda.php" style="width:5%; margin-top:-85px; margin-left:1130px;"></a>
            </div>
        </div>

         <div class="row">
            <div class="voltar"><!-- ICONE SAIR -->
            <a href="logout.php"><img src="img/icones/menu/icone_sair.png" style="width:3%; margin-top:-135px; margin-left:1150px;"></a>
            </div>
        </div>
        <div class="row">
            <div class="logo"><!-- ICONE LIBRASCRAFT -->
            <a href="index.php"><img src="img/icones/menu/librascraft.png" style="width:27%; margin-top:-183px; margin-left:410px;"></a>
            </div>
        </div>
        <div class="row">
            <div class="voltar"><!-- ICONE VOLTAR -->
            <a href="mapa.php"><img src="img/icones/menu/voltar.png" style="width:3%; margin-top:-230px; margin-left:-50px;"></a>
            </div>
        </div>
        <div class="row">
            <div class="voltar"><!-- ICONE SCORE -->
            <a href="score.php"><img src="img/icones/menu/score.png" style="width:9%; margin-top:-275px; margin-left:125px;"></a>
            </div>
        </div>
    </div>


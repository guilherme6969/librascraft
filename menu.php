
<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Librascraft</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
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
            <a href="ajuda.php"><img src="img/icones/menu/ajuda.png" style="width:5%; margin-top:-85px; margin-left:1130px;"></a>
            </div>
        </div>

         <div class="row">
            <div class="voltar"><!-- ICONE VOLTAR -->
            <a href="javascript:history.back()"><img src="img/icones/menu/icone_sair.png" style="width:3%; margin-top:-135px; margin-left:1100px;"></a>
            </div>
        </div>
        <div class="row">
            <div class="logo"><!-- ICONE LIBRASCRAFT -->
            <a href="index.php"><img src="img/icones/librascraft.png" style="width:45%; margin-top:-177px; margin-left:-50px;"></a>
            </div>
        </div>
    </div>



    </body>
</html>
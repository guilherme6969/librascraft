<?php

    //local no qual o banco de dados está instalado
    $local = "db4free.net:3306";
    $usuario = "librascraft";
    $senha = "lib15900";
    $bd = "librascraft";

    $conexao = mysqli_connect($local,$usuario,$senha,$bd) 
                    or die("ERRO");
    mysqli_set_charset($conexao,"utf8");

?>
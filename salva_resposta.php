<?php
    session_start();
    include("conexao.php");
    $cod_usuario = $_SESSION["autorizado"];
    $cod_palavra = $_POST["correto"];
    $cod_resposta = $_POST["resposta"];
    $cod_subfase = $_POST["subfase"];

    $insert = "INSERT INTO resposta VALUES (
                                                    NULL,
                                                    '$cod_resposta',
                                                    '$cod_usuario',
                                                    '$cod_subfase',
                                                    '$cod_palavra'
                                                    )";
    mysqli_query($conexao,$insert)
            or die(mysqli_error($conexao).$insert);
    
    echo "1";
?>
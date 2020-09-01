<?php
    header("Content-type: application/json");

    include("conexao.php");

    $p= $_POST["pg"];

    $sql = "SELECT * FROM palavra_cadastrada 
            INNER JOIN fase ON palavra_cadastrada.cod_fase=fase.id_fase
            LEFT JOIN subfase ON palavra_cadastrada.cod_subfase=subfase.id_subfase 
            LEFT JOIN palavra ON palavra_cadastrada.cod_palavra=palavra.id_palavra";

    if(isset($_POST["nome_filtro"]))
    {
        $nome = $_POST["nome_filtro"];
        $sql .= " WHERE cod_nivel LIKE '%$nome%'";
    }

    $sql .= " ORDER BY cod_nivel LIMIT $p,5";
    $resultado = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
    while($linha=mysqli_fetch_assoc($resultado))
    {
        $matriz[]=$linha;
    }

    echo json_encode($matriz);




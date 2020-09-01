<?php
		
            include("conexao.php");
            
			$cod_subfase = $_POST["subnivel"];
			$enunciado = $_POST["enunciado"];
            $alternativa_a = $_POST["alternativa_a"];
            $alternativa_b = $_POST["alternativa_b"];
            $alternativa_c = $_POST["alternativa_c"];
            $alternativa_d = $_POST["alternativa_d"];
            $resposta = $_POST["resposta"];
			
			
			$insert =
			"INSERT INTO atividade_ouvinte(enunciado,alternativa_a,alternativa_b,alternativa_c,alternativa_d,cod_subfase)
				 VALUES
			 ('$enunciado','$alternativa_a','$alternativa_b','$alternativa_c','$alternativa_d','$cod_subfase')";

			mysqli_query($conexao,$insert) or die("ERRO AO INSERIR");
			
			
				echo "1";
?>
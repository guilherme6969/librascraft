<?php
		
            include("conexao.php");
			print_r($_POST);
			die();
			$cod_subfase = $_POST["subnivel"];
			$palavra = $_POST["palavra"];
			$figura = $_POST["figura"];
            $video_sinal = $_POST["video_sinal"];
          
			
			
			$insert =
			"INSERT INTO palavra(palavra,figura,video_sinal,datilologia,cod_subfase)
				 VALUES
			 ('$palavra','$figura','$video_sinal','$datilologia','$cod_subfase')";

			mysqli_query($conexao,$insert) or die("ERRO AO INSERIR");
			
			
				echo "1";
?>
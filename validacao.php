<?php

	include("conexao.php");
	
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	$con1= " SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
	$consultaA = mysqli_query($conexao,$con1);
		if(mysqli_num_rows($consultaA)==1)
		{  
			session_start();
			$linha = mysqli_fetch_assoc($consultaA);
			$_SESSION["autorizado"]=$linha["id_usuario"];
			if($linha["condicao_auditiva"]=="s"){
				$_SESSION["condicao_auditiva"]="surdo";
			}
			else{
				$_SESSION["condicao_auditiva"]="ouvinte";
			}
			header("location: index.php");
		} 
		else
			{
				
				header("location: login.php?erro=1");
				alert("Senha ou Usuario Incorretos!");
			} 
?>

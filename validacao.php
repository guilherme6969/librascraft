<?php

	include("conexao.php");
	?>
	<script>

	// PAI DE TODOS -----------------------------------------------------------------------------------
	$(function(
	){

		
		$(document).ready(function(
		){             
			
			// MODAL (mesma coisa) ---------------------------------------------------------------------------------
			
			$("#modal-mensagem-erro").modal('show');
			
		});    
	});
	</script>
<?php
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
				die("<div class='modal fade' id='modal-mensagem-erro'> 
				<div class='modal-dialog'>
					 <div class='modal-content'>
						 <div class='card-body'>
							<h4 class='card-title text-center'style='color:#828282;'>Senha ou Email incorretos</h4>
							
						 <div class='modal-footer'>
							 <button type='button' class='btn btn-default' data-dismiss='modal'>Fechar</button>
					   </div>
					 </div>
				 </div>
			 </div>");
			 );
			} 
?>

<?php
include("menu.php");
$palavra = "Atividades-ouvinte";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, inicial-scale=1, shrink-to-fit=no">
    <title>Librascraft</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	
	<script src='js/jquery-3.4.1.min.js'></script>
	<script src="js/bootstrap.min.js"></script>
	
	<style>
	
	</style>
</head>
<body>
	<!-- A - div principal-->
	<div class="container mt-5 align-middle" >
		<!-- B (filha da principal - A)-->
		<div class="row justify-content-center "style="margin-top:-100px;">
			<div class="row">
				<div class="col d-flex flex-column justify-content-center align-items-center">
					<!-- C (filha da div B) -->
					<div class="col-12 border bg-white">
						<!-- D (filha da div C) : LINHA -->
			
						<div class="row">
							<div class="col py-5 px-md-5 border bg-light d-flex flex-column justify-content-center align-items-center">
								
									<tr>
										<?php for($i=0;$i<strlen($palavra);$i++){ echo "<th>".$palavra[$i]."</th>"; } ?>
									</tr>
									<tr>
									
									</tr>
								
							</div>
						</div>
						
							<div class="col py-6 px-md-6 border bg-light">
								<iframe width="500" height="250" src="https://www.youtube.com/embed/BdwGb6OgomU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
								
				</div><div class="col d-flex justify-content-center mt-6 align-items-center">		
				<button type="button" src="" class="btn btn-lg btn-google btn-block w-50 text-uppercase" style="border-color:#828282;background-color:#828282;color:white; margin-left:50px;margin-top: 50px;">Cadeira</button>
				<button type="button" src="" class="btn btn-lg btn-google btn-block w-50 text-uppercase" style="border-color:#828282;background-color:#828282;color:white; margin-left:50px;margin-top: 50px;">Fogao</button>
				<button type="button" src="" class="btn btn-lg btn-google btn-block w-50 text-uppercase" style="border-color:#828282;background-color:#828282;color:white; margin-left:50px;margin-top: 50px;">Micro-Ondas</button>
				<button type="button" src="" class="btn btn-lg btn-google btn-block w-50 text-uppercase" style="border-color:#828282;background-color:#828282;color:white; margin-left:50px;margin-top: 50px;">Colher</button>
				<br />
				<button type="button" src="" class="btn btn-lg btn-google btn-block w-50 text-uppercase" style="border-color:#828282;background-color:#828282;color:white; margin-left:50px;margin-top: 50px;">Concluir</button>
		<p></p>
		</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
</body>
</html>
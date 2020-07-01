<?php
$img_palavra = "sofa.jpeg";
$palavra = "Sofa";
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
	body {
    background: url("img/sala.png") no-repeat center top fixed;

    -webkit-background-size: cover;
    -moz-background-size: cover; 
    -o-background-size: cover;
    background-size: cover;
}
	</style>
</head>
<body>
	<!-- A - div principal-->
	<div class="container mt-5 align-middle">
		<!-- B (filha da principal - A)-->
		<div class="row justify-content-center ">
			<div class="row">
				<div class="col d-flex flex-column justify-content-center align-items-center">
					<!-- C (filha da div B) -->
					<div class="col-12 border border-warning bg-white">
						<!-- D (filha da div C) : LINHA -->
			
						<div class="row">
							<div class="col py-3 px-md-3 border bg-light d-flex flex-column justify-content-center align-items-center">
								<table border="1">
									<tr>
										<?php for($i=0;$i<strlen($palavra);$i++){ echo "<td>".$palavra[$i]."</td>"; } ?>
									</tr>
									<tr>
									<?php for($i=0;$i<strlen($palavra);$i++){ echo "<td><img src='img/".$palavra[$i].".jpeg' /></td>"; } ?>
									</tr>
								</table>
							</div>
						</div>
						<div class="row mt-4 mx-md-n5">
							<div class="col py-3 px-md-3 border bg-light d-flex flex-column justify-content-center align-items-center">
								<img src="img/<?php echo $img_palavra;?>" class="rounded float-left">
							</div>
							<div class="col py-3 px-md-3 border bg-light">
								<iframe width="400" height="200" src="https://www.youtube.com/embed/Xxiry0x6jxE" class="rounded float-right" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col d-flex justify-content-center mt-2 align-items-center">
				<button type="button" src="" class="rounded ">Anterior</button>
				<button type="button" src="" class="rounded ml-5 ">Proxima</button>
		</div>
	</div>
</div>
</body>
</html>
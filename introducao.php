<?php
include("conexao.php");
include("menu.php");
$pagina = $_GET["pagina"]; // ???????????

$consulta = "SELECT palavra, video_sinal FROM palavra WHERE cod_subfase = $pagina";
$resultado = mysqli_query($conexao,$consulta) or die("Erro na consulta");
$vetor_palavra = "palavras = new Array("; // ??????????????????????????????????
$vetor_video = "videos = new Array("; // ??????????????????????????????????
$count = 0;
while($linha= mysqli_fetch_assoc($resultado)) // todas as palavras selecionadas na consulta
{
    if($count!=0) 
    {
        $vetor_palavra.=",";      
        $vetor_video.=",";      
	}
	else // pega o primeiro video/palavra	
	{
		$palavra=$linha["palavra"];
		$video=$linha["video_sinal"];
		$img_palavra=strtolower(str_replace(" ", "_",$linha["palavra"])).".png"; // transforma tudo em minusculo // str_replace substitui espaco por _ (só nesse caso)
		$video_sinal= "https://www.youtube.com/embed/".$video;
	}							
    $count++;
    $vetor_palavra.="'".$linha["palavra"]."'";
    $vetor_video.="'".$linha["video_sinal"]."'";
} 
$vetor_palavra.=");
";
$vetor_video.=");
";

$consulta2 = "SELECT nome FROM subfase WHERE id_subfase = $pagina";
$resultado2 = mysqli_query($conexao,$consulta2) or die("Erro na consulta2");
$linha = mysqli_fetch_assoc($resultado2);
?>
<style>
	body 
	{
		background: url("img/casa/comodo/<?php echo $linha["nome"];?>.png") no-repeat center top fixed;
		width:100%; 
        overflow: hidden;
	}
</style>
<script>
    posicao = 0;
    <?php
        echo $vetor_palavra;
        echo $vetor_video;
    ?>
     function troca_palavra(acao) // PROXIMA LETRA
        {
            posicao= posicao + acao;
            if(posicao!=0) 
            {
                $("#anterior").show();
            }
            else
            {
                $("#anterior").hide();// ESCONDE BOTAO ANTERIOR
            }
            if(posicao!=palavras.length) // tamanho do vetor
            {
                $("#proximo").show();
            }
            else
            {
                $("#proximo").hide();// ESCONDE BOTAO PROXIMO
            }
			palavra=palavras[posicao];
			video=videos[posicao];
		
			$("#texto_palavra").html(""); // limpa tabela 
			tr="<tr>"; // troca a letra da tabela
				for(i=0;i<palavra.length;i++) // faz a mesma coisa q strlen, pega o tamanho do vetor
				{							  // strlen é para php, lenght é para java
					tr+="<th>"+palavra[i]+"</th>";
				}
			tr+="</tr>";
			
			tr+="<tr>"; // troca a imagem da tabela
				for(i=0;i<palavra.length;i++)
				{
					if(palavra[i]==" ")
					{
						tr+="<td><div style='width:20px;'></div> </td>";
					}
					else
					{
						tr+="<td><img src= 'img/alfabeto/"+palavra[i]+".gif' style='width:70px;' /></td>";
					}
					
				}
			tr+="</tr>";
			$("#texto_palavra").html(tr);// muda o valor da tabela 
			palavra= palavra.toLowerCase(); // transforma palavra em minuscula
			palavra= palavra.normalize("NFD").replace(/[\u0300-\u036f]/g, ''); // transforma caracteres especiais de acentuação, tirando os acentos 	
			palavra= palavra.replace(" ","_"); // troca espaco por _
			
			link_img="img/objetos/"+palavra+".png";
			link_video="https://www.youtube.com/embed/"+video;
			console.log(link_img);
            $("#img_palavra").attr("src",link_img);
            $("#link_video").attr("src",link_video);
		}
		$(document).ready(function(){
			$("#proximo").click(function(){
				troca_palavra(1);
			});

			$("#anterior").click(function(){
				troca_palavra(-1);
			});

		});
		
</script>
</head>
<body>

	<div class="container mt-5 align-middle" >
		<div class="row justify-content-center "style="margin-top:-150px;">
			<div class="row">
				<div class="col d-flex flex-column justify-content-center align-items-center">
					<div class="col-12 border bg-white">
						<div class="row">
							<div class="col  px-md-3 border bg-light d-flex flex-column justify-content-center align-items-center">
							<!-- INICIO TABELA-->
								<table border="1" class ="table-bordered" id="texto_palavra" style="text-align:center;text-transform:uppercase;"> 
										<tr>
											<?php for($i=0;$i<strlen($palavra);$i++){ echo "<th>".$palavra[$i]."</th>"; } ?>
										</tr> <!-- strlen pega o tamanho da palavra -->
										<tr>
											<?php 
																						
												for($i=0;$i<strlen($palavra);$i++)
												{ 
													if($palavra[$i]==" ")
													{
														echo "<td><div style='width:20px;'></div></td>";
													}
													else
													{	
														echo "<td><img src='img/alfabeto/".$palavra[$i].".gif' style='width:70px;'/></td>"; 
													} 												
												}
											?>
										</tr>
								</table>
							</div>
						</div>
							<!-- IMAGEM DO OBJETO -->
							<div class="row mt-4 mx-md-n5">
								<div class="col py-3 px-md-3 border bg-light d-flex flex-column justify-content-center align-items-center">
									<img src="img/objetos/<?php echo $img_palavra;?>" class="rounded float-left" id="img_palavra" style="width:70%; margin-top:-30px;">
								</div>
								<!-- VIDEO EM LIBRAS -->
								<div class="col py-3 px-md-3 border bg-light"  style="margin-left:-10px;">
									<div class="video"  style="margin-left:10px;"><iframe id="link_video" width="360" height="200" src="<?php echo $video_sinal; ?>" class="rounded float-right" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
								</div>
									
							</div>
							<!-- BOTOES -->
							<div class="col d-flex justify-content-center mt-2 align-items-center">
								<button type="button" id="anterior" class="btn btn-lg btn-google btn-block w-50 text-uppercase" style="border-color:#828282;background-color:#828282;color:white; margin-left:-10px;">Anterior</button>
								<button type="button" id="proximo" class="btn btn-lg btn-google btn-block w-50 text-uppercase" style="border-color:#828282;background-color:#828282;color:white; margin-left:50px;margin-top:-1px;">Próxima</button>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
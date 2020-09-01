<?php
    include("conexao.php");
    include("menu.php");
?>

	<style>
	body 
    {
        background: url("img/submapa_abc.png") no-repeat;
        width:100%; 
        overflow: hidden;
    }
    </style>
    <script>
        posicao=0;
        letras=new Array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
        function troca_letra(acao) // PROXIMA LETRA
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
            if(posicao!=25) 
            {
                $("#proximo").show();
            }
            else
            {
                $("#proximo").hide();// ESCONDE BOTAO PROXIMO
            }
            letra=letras[posicao];
            $("#texto_letra").html(letra.toUpperCase());
            link_img="alfabeto/"+letra+".png";
            $("#img_letra").attr("src",link_img);
        }
        $(document).ready(function(
            ){             
               $("#proximo").click(
                   function(){
                       troca_letra(1);
                   }
               );
              
               $("#anterior").click(
                   function(){
                       troca_letra(-1);
                   }
               );
            }); 
          
        
    </script>
    </head>
    <body>

    <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-9 mx-auto" style="margin-top:-100px;">
                    <div class="card card-signin my-5" style="border-color:#828282;">
                        <div class="card-body">
                            <h4 class="card-title text-center"style="color:#828282;">Bem-vindo(a) a introdução do tema Alfabeto!</h4><br />
                        </div>
                        <div class="card-body">
                            <h1 class="card-title text-center" id="texto_letra" style="color:#828282;font-size:370px; margin-left:-400px; margin-top:-130px;">A</h1> <!-- LETRA -->
                            <img id="img_letra" src="alfabeto/a.png" style="width:35%; margin-left:400px; margin-top:-440px;"> <!--IMAGEM DA LETRA -->
                        </div>
                        <div class="card-body" style="margin-left:230px">
                        <button class="btn btn-lg btn-google btn-block w-50 text-uppercase" id="proximo" style="border-color:#828282;background-color:#828282;color:white; margin-left:200px; margin-top:-47px;">Próximo</button>
                        <button class="btn btn-lg btn-google btn-block w-50 text-uppercase" id="anterior" style="border-color:#828282;background-color:#828282;color:white; margin-left:-200px;margin-top:-47px;display:none;">Anterior</button>
                            
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </body>
<html>
<?php

include("menu.php");
include("conexao.php");
?>

    <style>
    body
    {
        background:url("img/login_cadastro.png")  no-repeat;
        background-size: 100%;

    }
    </style>
    <body>
        <form method ="POST" action="validacao.php">
        <div class="container">
            <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto" style="margin-top:-80px;">
                <div class="card card-signin my-5" style="border-color:#828282;">
                <div class="card-body">
                    <h5 class="card-title text-center"style="color:#828282;">Bem-vindo(a) ao LibrasCraft!</h5>
                    <form class="form-signin">
                    <div class="form-label-group" style="color:#828282;">
                        <input type="email" id="email" class="form-control text-danger" name = "email" placeholder="Email" required autofocus>
                        <label for="inputEmail">Endereço de email</label>
                    </div>

                    <div class="form-label-group" style="color:#828282;">
                        <input type="password" id="senha" class="form-control text-danger" name="senha" placeholder="Senha" required>
                        <label for="inputPassword">Senha</label>
                    </div>

                    
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" style="border-color:#828282;background-color:#828282;" type="submit">Entrar</button>
                    <hr class="my-4">
                    <div class= "" style="color:#828282; text-align:center;"<label for="cadastras ">Ainda não é cadastrado? Cadastre-se já!</label></div>
                    <button class="btn btn-lg btn-google btn-block text-uppercase" style="border-color:#828282;background-color:#828282;color:white;" type="submit" onclick = "location.href='form_cadastro.php'"><i class="fab fa-google mr-2"></i> Cadastrar-se</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
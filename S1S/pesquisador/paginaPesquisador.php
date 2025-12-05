<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
                     
        <h1 style="text-align: center; margin-bottom: 50px">Pesquisador</h1>
        
        
        
        <div class="container">
            <div class="row" style="margin-left: 70px">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="../imagens/doctor2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ser Pesquisador</h5>
                            <p class="card-text">Deseja ver ou alterar seu perfil de pesquisador? </p>
                            <a href="#" class="btn btn-primary">Ver perfil</a>
                            <a href="alterarPesquisador.php" class="btn btn-primary">Alterar</a>
                        </div>
                    </div>
                </div>
                <div class="col order-1">
                    <div class="card" style="width: 18rem;">
                        <img src="../imagens/running.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ser Sujeito</h5>
                            <p class="card-text">Deseja se cadastrar também como sujeito? </p>
                            <a href="../cadastraSujeito.php" class="btn btn-primary">Cadastrar</a>
                            <a href="#" class="btn btn-primary">Alterar perfil</a>
                        </div>
                    </div>
                </div>
                <div class="col order-5">
                    <div class="card" style="width: 18rem;">
                        <img src="../imagens/exchange.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pesquisar Sujeitos</h5>
                            <p class="card-text">Deseja pesquisar sujeitos na nossa base de dados para sua pesquisa?</p>
                            <a href="#" class="btn btn-primary">Pesquisar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        // put your code here
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

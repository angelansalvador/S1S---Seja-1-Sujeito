<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Redefina sua Senha</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>
        <br>
        <br>
        <div class="form-gap"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-center">
                                <h3><i class="fa fa-lock fa-4x"></i></h3>
                                <h2 class="text-center">Esqueceu sua senha?</h2>
                                <p> Redefina sua senha escrevendo seu e-mail abaixo:</p>
                                <div class="panel-body">

                                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                                <input id="email" name="email" placeholder="Seu email aqui" class="form-control"  type="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input style="background-color: blue" name="redefinir" class="btn btn-lg btn-primary btn-block" value="Redefina a Senha" type="submit">
                                        </div>
                                        <input type="hidden" class="hide" name="token" id="token" value=""> 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<?php
 $includeClasseSujeito           = "./includes/Sujeito.php";
   $includeClasseBancoDeDados    = "./includes/Banco.php";
   $includeClassePesquisador     = "./includes/Pesquisador.php";
 require_once $includeClassePesquisador;
 require_once $includeClasseBancoDeDados;
 require_once $includeClasseSujeito;

//acessando tabela do sujeito no BD

 $bancoSujeito = new BancoDeDados("localhost", "root", "lolo0", "S1S_005", "sujeito");

 $conexaoSujeito = $bancoSujeito->criarConexao();

 $bancoSujeito->criarBanco($conexaoSujeito);

 $bancoSujeito->abrirBanco($conexaoSujeito);

 $bancoSujeito->definirCharset($conexaoSujeito);

 $bancoSujeito->criarTabelaSujeito($conexaoSujeito);

// acessando tabela do pesquisador no BD

 $bancoPesquisador = new BancoDeDados("localhost", "root", "lolo0", "S1S_005", "pesquisador");

 $conexaoPesquisador = $bancoPesquisador->criarConexao();

 $bancoPesquisador->criarBanco($conexaoPesquisador);

 $bancoPesquisador->abrirBanco($conexaoPesquisador);

 $bancoPesquisador->definirCharset($conexaoPesquisador);

 $bancoPesquisador->criarTabelaPesquisador($conexaoPesquisador);

 $sujeito = new Sujeito();
 $pesquisador = new Pesquisador();

 if (isset($_POST["redefinir"])) {
     //este método recebe o email do formulário, criptografa este dado e depois os envia ao MySQL
     $email = trim($conexaoSujeito->escape_string($_POST['email']));
     $email = trim($conexaoPesquisador->escape_string($_POST['email']));

     // chamando a função para ver se email existe e if True: envia um email para sujeito ou pesquisador
     $sujeitoExiste = $sujeito->consultarEmail($conexaoSujeito, $bancoSujeito->nomeDaTabela, $email);
     $pesquisadorExiste = $pesquisador->consultarEmail($conexaoPesquisador, $bancoPesquisador->nomeDaTabela, $email);

     if ($pesquisadorExiste) {
         echo '<script> alert ("Enviamos um email para você Pesquisador redefinir sua senha"); location.href=("index.php")</script>';
         // enviar email para recadastrar senha
     } else if ($sujeitoExiste) {
         echo '<script> alert ("Enviamos um email para você Sujeito redefinir sua senha"); location.href=("index.php")</script>';
         //enviar email para recastrar senha
     } else {
         exit("<p> Dados de login incorretos. Tente novamente! </p>");
     }
 }
 ?>
    </body>
</html>

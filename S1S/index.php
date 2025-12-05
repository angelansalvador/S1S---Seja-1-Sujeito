
<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>Login S1S</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
                    
        <div class="container">
            <div class="container-login">
                <h1 class="container-title"> Bem vindo ao Seja Um Sujeito - S1S </h1>
                
                <div class="wrap-login">
                    <form class="login-form" action="index.php" method="post" id="login-form">

                        <span class="login-form-title">
                            Cadastre-se ou Faça o Login
                        </span>

                        <div class="wrap-input margin-top-35 margin-bottom-35">
                            <input class="input-form" type="text" name="login" autocomplete="off">
                            <span class="focus-input-form" data-placeholder="E-mail"></span>
                        </div>

                        <div class="wrap-input margin-bottom-35">
                            <input class="input-form" type="password" name="senha">
                            <span class="focus-input-form" data-placeholder="Senha"></span>
                        </div>

                        <div class="container-login-form-btn">
                            <button type="submit" name="logar" class="login-form-btn">
                                Login
                            </button>
                        </div>

                        <ul class="login-utils">
                            <li class="margin-bottom-8 margin-top-8">
                                <span class="text1">
                                    Esqueceu sua
                                </span>
                                <a href="esqueci_senha.php" class="text2">
                                    senha?
                                </a>
                            </li>
                            <li>
                                <span class="text1">
                                    Não tem cadastro?
                                </span>

                                <a href="escolherCadastro.php" class="text2">
                                    Criar
                                </a>
                            </li>
                        </ul>
                    </form>
                </div>
                <img src="imagens/figLogin.png" width="400" height="400" class="margin-left-50" />
            </div>
        </div>
        
        <?php 
   $includeClasseSujeito      = "./includes/Sujeito.php";
   $includeClasseBancoDeDados = "./includes/Banco.php";
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

    
   if(isset($_POST["logar"]))
    {
        //este método recebe o login e a senha do formulário, criptografa estes dados e depois os envia ao MySQL
        $login = trim($conexaoSujeito->escape_string($_POST['login']));
        $senha = trim($conexaoSujeito->escape_string($_POST['senha']));
        $login = trim($conexaoPesquisador->escape_string($_POST['login']));
        $senha = trim($conexaoPesquisador->escape_string($_POST['senha']));

        $estaLogadoPesquisador = $pesquisador->logar($conexaoPesquisador, $bancoPesquisador->nomeDaTabela, $login, $senha);
        $estaLogadoSujeito = $sujeito->logar($conexaoSujeito, $bancoSujeito->nomeDaTabela, $login, $senha);        

            if($estaLogadoPesquisador)
             {
             //redirecionamos o usuário para a página protegida de nossa aplicação
             header("location: ./pesquisador/paginaPesquisador.php");
             }
             
             else if($estaLogadoSujeito)
             {
             //redirecionamos o usuário para a página protegida de nossa aplicação
             header("location: ./usuarios/usuarios.php");
             
             }

            else 
             {
             echo '<script> alert ("Dados de Login Incorretos. Tente Novamente"); location.href=("index.php")</script>';
             exit();
             }
    }


   $bancoSujeito->desconectar($conexaoSujeito);
   $bancoPesquisador->desconectar($conexaoPesquisador); 
 ?> 

    </body>
<!--
    Para manter o estilo de desfocar os inputs 
-->
<script>
    let inputs = document.getElementsByClassName('input-form');
    for (let input of inputs) {
        input.addEventListener("blur", function () {
            if (input.value.trim() !== "") {
                input.classList.add("has-val");
        } else {
            input.classList.remove("has-val");
    }
});
}
        
let form = document.getElementsById('login-form');
form.addEventListener("submit", function(event) {
    let inputs = document.getElementsByClassName('input-form');
    for( let input of inputs){
        if(input.value.trim() === ""){
                        input.parentElement.classList.add("wrap-input-invalid");
                }
    }
    event.preventDefault();
     
});
             
           
</script>



</html>
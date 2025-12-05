<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> S1S - Seja 1 Sujeito </title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head> 

<body> 
 <h1 class="text-center"> Bem-vindo ao S1S </h1>
 <h2 class="text-center"> Altere seu perfil de Pesquisador </h2>
 
 <form action="alterarPesquisador.php" method="post">
     <fieldset style="margin-left: 50px">
         <legend class="fw-bold"> Alterar Perfil de Pesquisador </legend> 

         <div class="row mb-3" style="width: 500px">
             <label class="fw-bold" class="col-sm-2 col-form-label">Nome: </label>
             <div class="col-sm-10">
                 <input type="text" class="form-control" id="inputnome" name="nome" style="height: 30px; margin-top: 4px" required>
             </div>
         </div>
         <div class="row mb-3" style="width: 500px">
             <label class="fw-bold" for="inputEmail3" class="col-sm-2 col-form-label">Data de Nascimento: </label>
             <div class="col-sm-10">
                 <input type="date" class="form-control" id="inputnome" name="datanasc" style="height: 30px; margin-top: 4px" required>
             </div>
         </div>
         <fieldset class="row mb-3">
             <label class="fw-bold" class="col-form-label col-sm-2 pt-0">Sexo: </label>
             <div class="col-sm-10">
                 <div class="form-check">
                     <input class="form-check-input" type="radio" name="sexo" id="gridRadios1" value="feminino">
                     <label class="form-check-label" for="gridRadios1">
                         Feminino
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="radio" name="sexo" id="gridRadios2" value="masculino">
                     <label class="form-check-label" for="gridRadios2">
                         Masculino
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="radio" name="sexo" id="gridRadios3" value="nao-declarado">
                     <label class="form-check-label" for="gridRadios3">
                         Prefiro não declarar
                     </label>
                 </div>
         </fieldset>

         <div class="row mb-3" style="width: 500px">
             <label class="fw-bold" for="inputEmail3" class="col-sm-2 col-form-label">CEP: </label>
             <div class="col-sm-10">
                 <input type="number" class="form-control" id="Cep" name="cep" maxlength="8" placeholder="Somente Números" style="height: 30px; margin-top: 4px;">
             </div>
         </div>
         <div class="row mb-3" style="width: 500px">
             <label class="fw-bold" for="inputEmail3" class="col-sm-2 col-form-label">Endereço: </label>
             <div class="col-sm-10">
                 <input type="text" class="form-control" id="inputEndereco" name="endereco" style="height: 30px; margin-top: 4px" required>
             </div>
         </div>    

         <div class="row mb-3"style="width: 500px">
             <label class="fw-bold" for="inputEmail3" class="col-form-label">Cidade: </label>
             <div class="col-sm-6">
                 <input type="text" class="form-control" id="inputCidade" name="cidade" style="height: 30px; margin-top: 4px" required>
             </div>
         </div>

         <div class="row mb-3"style="width: 500px">
             <label class="fw-bold" for="inputEmail3" class="col-form-label">Estado: </label>
             <div class="col-sm-2">
                 <input type="text" class="form-control" id="inputEstado" name="estado" maxlength="2" style="height: 30px; margin-top: 4px" required>
             </div>
         </div>         

         <div class="row mb-3" style="width: 500px">
             <label class="fw-bold" class="col-sm-2 col-form-label">Instituição da Pesquisa: </label>
             <div class="col-sm-10">
                 <input type="text" class="form-control" id="inputnome" name="instituicao" style="height: 30px; margin-top: 4px" required>
             </div>
         </div>


         <div class="row mb-3" style="width: 500px">           
             <label class="fw-bold" class="col-sm-2 col-form-label" for="area-estudo">Área de Estudo:</label>
             <div class="col-sm-12"> 
                 <select name="area_estudo" id="area_estudo" style="height: 30px">
                     <option value=" ">Escolha a área</option>
                     <option value="educacao-fisica">Educação Física</option>
                     <option value="medicina">Medicina</option>
                     <option value="fisioterapia">Fisioterapia</option>
                     <option value="nutricao">Nutrição</option>
                     <option value="biomedicina">Biomedicina</option>
                     <option value="farmacia">Farmácia</option>
                     <option value="psicomotricidade">Psicomotricidade</option>
                     <option value="psicologia">Psicologia</option>
                     <option value="biologia">Biologia</option>
                     <option value="outra">Outra</option>                     
                 </select>
                 <input type="text" name="descricao_area_estudo" placeholder="Outra? Qual?" style="margin-left: 10px; width: 235px"> <br>
             </div>
         </div>
         
         <div class="card" style="width: 25rem; margin-top: 20px; margin-bottom: 20px; padding: 10px; background-color: aliceblue">
             <div class="row mb-3" style="width: 500px">
                 <label class="fw-bold" for="inputEmail3" class="col-sm-2 col-form-label" style="text-decoration: underline">Confirme seu Email e Senha: </label>
                 
                 <div class="row mb-3" style="width: 500px">
                     <label class="fw-bold" for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                     <div class="col-sm-10">
                         <input type="email" class="form-control" name="login-cadastro" id="inputEmail3" style="height: 30px; margin-top: 4px" required>
                     </div>
                 </div>

                 <div class="row mb-3" style="width: 500px">
                     <label class="fw-bold" for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
                     <div class="col-sm-10">
                         <input type="password" class="form-control" name="senha-cadastro" id="inputPassword3" style="height: 30px; margin-top: 4px" required>
                     </div>
                 </div>
             </div>
         </div>
         


         <div>
             <button type="submit" class="btn btn-primary" name="alterar"> Alterar Cadastro </button>

             <input class="btn btn-primary" type="reset" value="Limpar">
             
             <input  type="button" class="btn btn-primary" name="Voltar" value="Voltar" onClick=top.window.location="./paginaPesquisador.php";>
             
             <p></p>
         </div>



     </fieldset>


 </form> 
  

 <?php  
   $includeClasseBancoDeDados = "../includes/Banco.php";
   $includeClassePesquisador     = "../includes/Pesquisador.php";
   require_once $includeClasseBancoDeDados; 
   require_once $includeClassePesquisador;  
  
   $banco = new BancoDeDados("localhost", "root", "lolo0", "S1S_005", "pesquisador");

   $conexao = $banco->criarConexao(); 

   $banco->abrirBanco($conexao);

   $banco->definirCharset($conexao);  

   $banco->criarTabelaPesquisador($conexao);

   $pesquisador = new Pesquisador();

   if(isset($_POST['alterar']))
    {
    $email = trim($conexao->escape_string($_POST['login-cadastro']));
    $senha = trim($conexao->escape_string($_POST['senha-cadastro']));
    $pesquisador->receberDados($conexao);
    $pesquisador->alterar($conexao, $banco->nomeDaTabela,$email, $senha);
    echo "pesquisador alterado";
    //echo '<script> alert ("Pesquisador alterado com Sucesso!"); location.href=("./paginaPesquisador.php")</script>';
    }
  
     $banco->desconectar($conexao);  
 ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body> 
</html> 
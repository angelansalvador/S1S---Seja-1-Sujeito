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
 <h2 class="text-center"> Cadastre-se como Sujeito </h2>
 
 
 <form action="cadastraSujeito.php" method="post">
     <fieldset style="margin-left: 50px">
         <legend class="fw-bold"> Cadastro de Sujeito </legend> 

         <div class="row mb-3" style="width: 500px">
             <label class="fw-bold" for="inputEmail3" for="validationDefault01" class="col-sm-2 col-form-label">Nome: </label>
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
                     <input class="form-check-input" type="radio" name="sexo" id="gridRadios2" value="nao-declarado">
                     <label class="form-check-label" for="gridRadios2">
                         Prefiro não declarar
                     </label>
                 </div>
         </fieldset>

         <div class="row mb-3" style="width: 500px">
             <label class="fw-bold" for="inputEmail3" class="col-sm-2 col-form-label">CEP: </label>
             <div class="col-sm-10">
                 <input type="number" class="form-control" id="Cep" name="cep" maxlength="8" style="height: 30px; margin-top: 4px;">
             </div>
         </div>
         <div class="row mb-3" style="width: 500px">
             <label class="fw-bold" for="inputEmail3" class="col-sm-2 col-form-label">Endereço: </label>
             <div class="col-sm-10">
                 <input type="text" class="form-control" id="inputEndereco" name="endereco" style="height: 30px; margin-top: 4px" required>
             </div>
         </div>         
         <div class="row mb-3"style="width: 500px">
             <label class="fw-bold" for="inputEmail3" class="col-sm-2 col-form-label">Cidade: </label>
             <div class="col-sm-6">
                 <input type="text" class="form-control" id="inputCidade" name="cidade" style="height: 30px; margin-top: 4px" required>
             </div>
             <label class="fw-bold" for="inputEmail3" class="col-sm-2 col-form-label">Estado: </label>
             <div class="col-sm-2">
                 <input type="text" class="form-control" id="inputEstado" name="estado" maxlength="2" style="height: 30px; margin-top: 4px" required>
             </div>
         </div>
         <div class="row mb-3" style="width: 500px">
             <label class="fw-bold" for="inputEmail3" class="col-sm-2 col-form-label">Altura(cm): </label>
             <div class="col-sm-3">
                 <input type="number" class="form-control" id="inputEndereco" min="1" max="300" name="altura" style="height: 30px; margin-top: 4px">
             </div>
         </div>
         <div class="row mb-3" style="width: 500px">
             <label class="fw-bold" for="inputEmail3" class="col-sm-2 col-form-label">Peso(kg): </label>
             <div class="col-sm-3">
                 <input type="number" class="form-control" id="inputEndereco" name="peso" min="1" max="500" style="height: 30px; margin-top: 4px">
             </div>
         </div>
         <fieldset class="row mb-3">
             <label class="fw-bold" class="col-form-label col-sm-5 pt-0">Possui alguma doença crônica:</label>
             <div class="col-sm-10">
                 <div class="form-check">
                     <input class="form-check-input" type="radio" name="doenca-cronica" id="gridRadios1" value="sim" checked>
                     <label class="form-check-label" for="gridRadios1">
                         Sim
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="radio" name="doenca-cronica" id="gridRadios2" value="não">
                     <label class="form-check-label" for="gridRadios2">
                         Não
                     </label>
                 </div>
         </fieldset>
         <div class="row mb-3" style="width: 500px">
             <label class="fw-bold" class="col-sm-2 col-form-label">Qual: </label>
             <div class="col-sm-10">
                 <input type="text" class="form-control" name="descricao-doenca-cronica" style="height: 30px; margin-top: 4px">
             </div>
         </div>

         <div class="row mb-3">
             <label class="fw-bold" class="col-form-label col-sm-5"> Que exercício habitualmente você pratica: </label>
             <div class="col-sm-10">
                 <div class="form-check">
                     <input class="form-check-input" name="tipo-exercicio[]" value="natacao" type="checkbox" id="gridCheck1">
                     <label class="form-check-label" for="gridCheck1">
                         Natação
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" name="tipo-exercicio[]" value="ciclismo" type="checkbox" id="gridCheck1">
                     <label class="form-check-label" for="gridCheck1">
                         Ciclismo
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" name="tipo-exercicio[]" value="corrida" type="checkbox" id="gridCheck1">
                     <label class="form-check-label" for="gridCheck1">
                         Corrida
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" name="tipo-exercicio[]" value="musculacao" type="checkbox" id="gridCheck1">
                     <label class="form-check-label" for="gridCheck1">
                         Musculação
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" name="tipo-exercicio[]" value="outro" type="checkbox" id="gridCheck1">
                     <label class="form-check-label" for="gridCheck1">
                         Outro
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" name="tipo-exercicio[]" value="nao-pratica" type="checkbox" id="gridCheck1">
                     <label class="form-check-label" for="gridCheck1">
                         Não pratico
                     </label>
                 </div>
             </div>
         </div>
         <div class="row mb-3" style="width: 500px">
             <label class="fw-bold" for="inputEmail3" class="col-sm-8 col-form-label"> Pratica quantos dias na semana: </label>
             <div class="col-sm-4">
                 <input type="number" class="form-control" id="inputEndereco" name="quantos-dias" min="0" max="7" style="height: 30px; margin-top: 4px" required>
             </div>
         </div>
         <div class="row mb-3" style="width: 500px">
             <label class="fw-bold" for="inputEmail3" class="col-sm-8 col-form-label">Por quanto tempo em média pratica por dia (min): </label>
             <div class="col-sm-4">
                 <input type="number" class="form-control" id="inputEndereco" name="quanto-tempo" min="0" max="1440" style="height: 30px; margin-top: 4px">
             </div>
         </div>
         <fieldset class="row mb-3">
             <label style="font-weight: bold" class="col-form-label col-sm-5">Você tem consciência, através da sua própria experiência ou aconselhamento médico, 
                 de alguma razão que impeça sua prática de atividade física? </label>
             <div class="col-sm-10">
                 <div class="form-check">
                     <input class="form-check-input" type="radio" name="parq" id="gridRadios1" value="sim">
                     <label class="form-check-label" for="gridRadios1">
                         Sim
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="radio" name="parq" id="gridRadios2" value="nao">
                     <label class="form-check-label" for="gridRadios2">
                         Não
                     </label>
                 </div>
         </fieldset>

         <div class="row mb-3" style="width: 500px">
             <label class="fw-bold" for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
             <div class="col-sm-10">
                 <input type="email" class="form-control" name="login-cadastro" id="inputEmail3"style="height: 30px; margin-top: 4px" required>
             </div>
         </div>
         <div class="row mb-3" style="width: 500px">
             <label class="fw-bold" for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
             <div class="col-sm-10">
                 <input type="password" class="form-control" name="senha-cadastro" id="inputPassword3" style="height: 30px; margin-top: 4px" required>
             </div>
         </div>


         <div>
             <button type="submit" class="btn btn-primary" name="cadastrar"> Cadastre-se como Sujeito </button>

             <input class="btn btn-primary" type="reset" value="Limpar">

             <input  type="button" class="btn btn-primary" name="Voltar" value="Voltar" onClick=top.window.location="./index.php";>
             <p></p>
         </div>


     </fieldset>


 </form> 
  

 <?php 
   $includeClasseSujeito      = "./includes/Sujeito.php";
   $includeClasseBancoDeDados = "./includes/Banco.php";   
   require_once $includeClasseBancoDeDados; 
   require_once $includeClasseSujeito;  
  
   $banco = new BancoDeDados("localhost", "root", "lolo0", "S1S_005", "sujeito");

   $conexao = $banco->criarConexao();

   $banco->criarBanco($conexao); 

   $banco->abrirBanco($conexao);

   $banco->definirCharset($conexao);  

   $banco->criarTabelaSujeito($conexao);

   $sujeito = new Sujeito();

   if(isset($_POST['cadastrar']))
    {
    $sujeito->receberDados($conexao);
    $sujeito->cadastrar($conexao, $banco->nomeDaTabela);
    echo '<script> alert ("Sujeito cadastrado com Sucesso!"); location.href=("index.php")</script>'; 
    
    }
  
     $banco->desconectar($conexao);  
 ?>
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
</body> 
</html> 
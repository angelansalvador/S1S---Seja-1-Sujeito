<?php
 class Pesquisador
  {   
  public $nome;
  public $datanasc;
  public $sexo;
  public $cep;
  public $endereco;
  public $cidade;
  public $estado;
  public $instituicao;
  public $area_estudo;
  public $descricao_area_estudo;
  public $login;
  public $senha;
      
  
  function receberDados($conexao)
   {
   $nome                    = $conexao->escape_string(trim($_POST['nome']));
   $datanasc                = $conexao->escape_string(trim($_POST['datanasc']));
   $sexo                    = $conexao->escape_string(trim($_POST['sexo']));
   $cep                     = $conexao->escape_string(trim($_POST['cep']));
   $endereco                = $conexao->escape_string(trim($_POST['endereco']));
   $cidade                  = $conexao->escape_string(trim($_POST['cidade']));
   $estado                  = $conexao->escape_string(trim($_POST['estado']));   
   $instituicao             = $conexao->escape_string(trim($_POST['instituicao']));
   $area_estudo             = $conexao->escape_string(trim($_POST['area_estudo']));
   $descricao_area_estudo   = $conexao->escape_string(trim($_POST['descricao_area_estudo']));
   $loginUser               = $conexao->escape_string(trim($_POST['login-cadastro']));
   $senhaUser               = $conexao->escape_string(trim($_POST['senha-cadastro']));

   $this->nome                   = $nome;
   $this->datanasc               = $datanasc;
   $this->sexo                   = $sexo;
   $this->cep                    = $cep;
   $this->endereco               = $endereco;
   $this->cidade                 = $cidade;
   $this->estado                 = $estado;   
   $this->instituicao            = $instituicao;
   $this->area_estudo            = $area_estudo;
   $this->descricao_area_estudo  =$descricao_area_estudo;
   $this->login                  = $loginUser;
   $this->senha                  = $senhaUser;
   }

  function cadastrar($conexao, $nomeDaTabela)
   {
   //antes de enviarmos os dados do usuário ao banco de dados, devemos lembrar de criptografar o login e a senha do usuário
   $loginCriptografado = hash("sha512", $this->login);
   $senhaCriptografada = hash("sha512", $this->senha);

   $sql = "INSERT $nomeDaTabela VALUES(
              null,
              '$this->nome',
              '$this->datanasc',
              '$this->sexo',
              '$this->cep',
              '$this->endereco',
              '$this->cidade',
              '$this->estado',              
              '$this->instituicao', 
              '$this->area_estudo',
              '$this->descricao_area_estudo',    
              '$loginCriptografado',
              '$senhaCriptografada')";

   $conexao->query($sql) or die($conexao->error);
   }

   function alterar($conexao, $nomeDaTabela, $email, $senha)
    {
   //antes de enviarmos os dados do usuário ao banco de dados, devemos lembrar de criptografar o login e a senha do usuário
        $loginCriptografado = hash("sha512", $email);
        $senhaCriptografada = hash("sha512", $senha);

        $sql = "UPDATE $nomeDaTabela SET nome = '$this->nome',
              datanasc = '$this->datanasc',
              sexo = '$this->sexo',
              cep = '$this->cep',
              endereco = '$this->endereco',
              cidade = '$this->cidade',
              estado = '$this->estado',              
              instituicao = '$this->instituicao', 
              area_estudo = '$this->area_estudo',
              descricao_area_estudo = '$this->descricao_area_estudo' WHERE login_institu = '$loginCriptografado' AND senha = '$senhaCriptografada'";

        $conexao->query($sql) or die($conexao->error);

        if ($conexao->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function logar($conexao, $nomeDaTabela, $login, $senha)
   {
   $loginCriptografado = hash("sha512", $login);
   $senhaCriptografada = hash("sha512", $senha);

   $sql = "SELECT * FROM $nomeDaTabela WHERE login_institu = '$loginCriptografado' AND senha = '$senhaCriptografada'";

   $conexao->query($sql) or die($conexao->error);

   //testamos se a consulta acima foi (ou não) bem-sucedida
   if($conexao->affected_rows > 0)
    {       
       return true;
    }
  else
   {
   return false;
   }
  }

 function consultarEmail($conexao, $nomeDaTabela, $email)
   {
   $loginCriptografado = hash("sha512", $email);
   
   $sql = "SELECT * FROM $nomeDaTabela WHERE login_institu = '$loginCriptografado'";

   $conexao->query($sql) or die($conexao->error);

   //testamos se a consulta acima foi (ou não) bem-sucedida
   if($conexao->affected_rows > 0)
    {
    return true;
    }
  else
   {
   return false;
   }
  }
  
 }
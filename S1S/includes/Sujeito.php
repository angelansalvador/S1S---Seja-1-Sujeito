<?php
 class Sujeito
  {   
  public $nome;
  public $datanasc;
  public $sexo;
  public $cep;
  public $endereco;
  public $cidade;
  public $estado;
  public $altura;
  public $peso;  
  public $doenca_cronica;  
  public $descricao_doenca;
  public $tipo_exercicio;
  public $quantos_dias;
  public $quanto_tempo;
  public $par_q;
  public $login;
  public $senha;
  
  
  
  
  function receberDados($conexao)
   {
   $nome              = $conexao->escape_string(trim($_POST['nome']));
   $datanasc          = $conexao->escape_string(trim($_POST['datanasc']));
   $sexo              = $conexao->escape_string(trim($_POST['sexo']));
   $cep               = $conexao->escape_string(trim($_POST['cep']));
   $endereco          = $conexao->escape_string(trim($_POST['endereco']));
   $cidade            = $conexao->escape_string(trim($_POST['cidade']));
   $estado            = $conexao->escape_string(trim($_POST['estado']));
   $altura            = $conexao->escape_string(trim($_POST['altura']));
   $peso              = $conexao->escape_string(trim($_POST['peso']));   
   $doenca_cronica    = $conexao->escape_string(trim($_POST['doenca-cronica']));
   $descricao_doenca  = $conexao->escape_string(trim($_POST['descricao-doenca-cronica']));
   $tipo_exercicio_array    = $_POST['tipo-exercicio'];
   $tipo_exercicio_string    = implode(', ', $tipo_exercicio_array);
   $tipo_exercicio    = $conexao->escape_string(trim($tipo_exercicio_string));
   $quantos_dias      = $conexao->escape_string(trim($_POST['quantos-dias']));
   $quanto_tempo      = $conexao->escape_string(trim($_POST['quanto-tempo']));
   $par_q             = $conexao->escape_string(trim($_POST['parq']));   
   $loginUser         = $conexao->escape_string(trim($_POST['login-cadastro']));
   $senhaUser         = $conexao->escape_string(trim($_POST['senha-cadastro']));

   $this->nome                   = $nome;
   $this->datanasc               = $datanasc;
   $this->sexo                   = $sexo;
   $this->cep                    = $cep;
   $this->endereco               = $endereco;
   $this->cidade                 = $cidade;
   $this->estado                 = $estado;
   $this->altura                 = $altura;
   $this->peso                   = $peso;   
   $this->doenca_cronica         = $doenca_cronica;
   $this->descricao_doenca       = $descricao_doenca;
   $this->tipo_exercicio         = $tipo_exercicio;
   $this->quantos_dias           = $quantos_dias;
   $this->quanto_tempo           = $quanto_tempo;
   $this->par_q                  = $par_q;   
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
              '$this->altura',
              '$this->peso',               
              '$this->doenca_cronica',
              '$this->descricao_doenca',
              '$this->tipo_exercicio',
              '$this->quantos_dias', 
              '$this->quanto_tempo', 
              '$this->par_q',                                         
              '$loginCriptografado',
              '$senhaCriptografada')";

   $conexao->query($sql) or die($conexao->error);
   }

  function logar($conexao, $nomeDaTabela, $login, $senha)
   {
   $loginCriptografado = hash("sha512", $login);
   $senhaCriptografada = hash("sha512", $senha);

   $sql = "SELECT * FROM $nomeDaTabela WHERE login = '$loginCriptografado' AND senha = '$senhaCriptografada'";

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
   
   $sql = "SELECT * FROM $nomeDaTabela WHERE login = '$loginCriptografado'";

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
<?php
 class BancoDeDados {
  public $nomeDoBanco;
  public $nomeDaTabela; 
  public $servidor;
  public $usuario;
  public $senha;  
  

 function __construct($servidorBanco, $usuarioBanco, $senhaBanco, $nomeBanco, $nomeTabela) 
  {
  $this->servidor = $servidorBanco;
  $this->usuario  = $usuarioBanco;
  $this->senha    = $senhaBanco;
  $this->nomeDoBanco  = $nomeBanco;
  $this->nomeDaTabela = $nomeTabela;
  }

 function criarConexao()
  {
//   $conexao = new mysqli($this->servidor, $this->usuario, $this->senha) or exit($conexao->error); 
    $conexao = new mysqli($this->servidor, $this->usuario, $this->senha) or exit($conexao->error);
   return $conexao;
  }


 function criarBanco($conexao)
  {
  $sql = "CREATE DATABASE IF NOT EXISTS $this->nomeDoBanco";
  $conexao->query($sql) or exit($conexao->error);
  }

 function abrirBanco($conexao)
  {
  $conexao->select_db($this->nomeDoBanco); 
  }

 function definirCharset($conexao)
  {
  $conexao->set_charset("utf8"); 
  }

 function criarTabelaSujeito($conexao)
  {
  //criação da tabela usuarios - notar que, na consulta SQL, os campos que irão armazenar os dados criptografados devem ter um comprimento de, NO MÍNIMO, 128 caracteres
  $sql = "CREATE TABLE IF NOT EXISTS $this->nomeDaTabela (
                id INT AUTO_INCREMENT PRIMARY KEY,
                nome VARCHAR(500),
                endereco VARCHAR(500),
                cidade VARCHAR(500),
                estado VARCHAR(2),
                altura INT,
                peso INT,
                datanasc DATE,
                doenca_cronica varchar (3),
                descricao_doenca varchar (150),
                tipo_exercicio VARCHAR(500),
                quantos_dias INT,
                quanto_tempo INT,
                par_q VARCHAR (3),
                rede_social VARCHAR(500),
                login VARCHAR(128),
                senha VARCHAR(128)
                ) ENGINE=innoDB";
  $conexao->query($sql) or exit($conexao->error);
  } 
  
  function criarTabelaPesquisador($conexao)
  {
  //criação da tabela usuarios - notar que, na consulta SQL, os campos que irão armazenar os dados criptografados devem ter um comprimento de, NO MÍNIMO, 128 caracteres
  $sql = "CREATE TABLE IF NOT EXISTS $this->nomeDaTabela (
                id INT AUTO_INCREMENT PRIMARY KEY,
                nome VARCHAR(500),
                endereco VARCHAR(500),
                cidade VARCHAR(200),
                estado VARCHAR(2),
                datanasc DATE,
                instituicao varchar (500),
                area_estudo varchar (50),
                descricao_area_estudo VARCHAR(500),
                login_institu VARCHAR(128),
                senha VARCHAR(128)
                ) ENGINE=innoDB";
  $conexao->query($sql) or exit($conexao->error);
  } 

 function desconectar($conexao)
  {
  $conexao->close();
  }
 }
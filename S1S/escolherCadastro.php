<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> S1S - Seja 1 Sujeito </title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head> 
<body style="margin: 0">
    <!-- NavBar inicial -->
<!--    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">S1S</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="loginUsuario.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="loginUsuario.php">o que é S1S</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Para Sujeitos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">                                
                                <li><a class="dropdown-item" href="#">O que são os testes físicos</a></li>
                                <li><a class="dropdown-item" href="#">Quem pode ser um sujeito</a></li>                                
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Para Pesquisadores
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Quem se cadastra no S1S </a></li>
                                <li><a class="dropdown-item" href="#">Como faço para pesquisar Sujeitos</a></li>
                               
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">                       
                        <button class="btn btn-outline-primary" type="submit"><a href="loginUsuario.php">Sair</a></button>
                    </form>
                </div>
            </div>
        </nav> -->
    
<h1 class="text-center" style="margin-left: -30px"> Escolha como fazer seu cadastro?</h1>
        <br>
        
        <div class="container">
            <div class="row justify-content-center" style="padding-left: 80px">
                <div class="col-4">
                    <div class="card" style="width: 18rem" >                       
                        <img src="./imagens/running.png" class="card-img-top" class="img-fluid" alt="Duas pessoas correndo">
                        <div class="card-body">
                            <h5 class="card-title">Sujeito</h5>
                            <p class="card-text">Gostaria de se cadastrar para realizar testes físicos e conhecer mais sobre sua capacidade 
                                física?</p>
                            <a href="./CadastraSujeito/cadastraSujeito.php" class="btn btn-primary">Cadastre-se</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem">
                        <img src="./imagens/doctor2.png" class="card-img-top" alt="Duas pessoas correndo" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Pesquisador</h5>
                            <p class="card-text">Gostaria de se cadastrar e encontrar sujeitos para suas pesquisas e testes?</p>
                            <a href="cadastraPesquisador.php" class="btn btn-primary">Cadastre-se</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <?php
        // put your code here
        ?>
        
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
    </body>
</html>

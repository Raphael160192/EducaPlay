<?php
  include("dbcomentario.php");
  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ensino Criativo</title>
  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <!-- Scripts -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
  <!-- Progress Bar -->
  <script src="js/progressbar.min.js"></script>
  <link rel="stylesheet" href="style_materias/css/style.css">
    <link rel="stylesheet" href="style_materias/css/flexbox.css">
</head>
<body>
  

<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php">
          <img classe="logo" src="imagem/logoNovo.PNG" width="150px" alt="Educa Play">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" id="about-menu" href="usuarios.php">Usuários</a>
            </li>  
          <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(Página atual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="about-menu" href="#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastro.php">Cadastre-se</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Entrar</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>


<main >

<div class="" style="background-color: white ;height:900px">
        
            
              

              <div class="d-flex justify-content-between">

              <div style="background-color:	#606060; height:900px" class="col-md-3">

            <img class="container-fluid p-5" style="border-radius:200px" src="./imagem/professora.png" alt="">

            <h2 style="color:#F8F8F8; text-align:center; font weight: bold; text-shadow: black 0.1em 0.1em 0.2em">Marcela de Oliveira</h2>

            <h4 style="color:#F8F8F8; text-align:center; font weight: bold; text-shadow: black 0.1em 0.1em 0.2em">EMEF Manoel Bandeira</h4>

            <h4 style="color:#F8F8F8; text-align:center; font weight: bold; text-shadow: black 0.1em 0.1em 0.2em">Fortaleza - Ceará</h4>

              <div class="list-group mt-5">
              <button type="button" class="list-group-item list-group-item-action">Perfil</button>
              <button type="button" class="list-group-item list-group-item-action">Formação</button>
              <button type="button" class="list-group-item list-group-item-action">Disciplina</button>
              <button type="button" class="list-group-item list-group-item-action">Conteúdos</button>
              <button type="button" class="list-group-item list-group-item-action">Contato</button>
              </div>
              
              
              </div class="mb-5">

              <div class="col-md-8">
                
              <h2 class="m-5" style="color: black"> <strong><img style="width:7%; heigth:7%" src="./imagem/star.svg" alt="">Atividades e recursos utilizados<img style="width:7%; heigth:7%" src="./imagem/star.svg" alt=""></strong> </h2>
              
              
              <div class="m-4 d-flex align-items-center ">
              <img class="mr-4" style="width:4%; heigth:4%" src="./imagem/check.svg" alt="">
              <h5 class="mb-3" style="color: black"> <strong>Vídeo sobre danças típicas regionais</strong> </h5>
              </div>
  
              
              <div class="m-4 d-flex align-items-center ">
              <img class="mr-4" style="width:4%; heigth:4%" src="./imagem/check.svg" alt="">
              <h5 class="" style="color: black"> <strong>Observação dos movimentos e estilo musical épico, bem como roupas e máscaras características.</strong> </h5>
              </div>

              
              <div class="m-4 d-flex align-items-center ">
              <img class="mr-4" style="width:4%; heigth:4%" src="./imagem/check.svg" alt="">
              <h5 class="" style="color: black"> <strong>Pesquisa da dança bumba meu boi</strong> </h5>
              </div>

              
              <div class="m-4 d-flex align-items-center ">
              <img class="mr-4" style="width:4%; heigth:4%" src="./imagem/check.svg" alt="">
              <h5 class="" style="color: black"> <strong>Vídeo de dança Romeu e Julieta (Projeto Romeu e Julieta)</strong> </h5>
              </div>



              <div style="margin-top:115px" class="col-md-12 d-flex justify-content-between">

              <div>
              <img class="" style="width:30%; heigth:30%" src="./imagem/danca-de-rua.svg" alt="">
              <h4>Reconhecer diferentes formas de orientações no espaço </h4> 
              </div>

              <div>
              <img style="width:35%; heigth:35%" src="./imagem/danca.svg" alt="">
              <h4>Reconhecer os ritmos de movimentos </h4>  
              </div>

              <div>
              <img style="width:30%; heigth:30%" src="./imagem/literatura.svg" alt="">
              <h4>Reconhecer as culturas e as diferenças regionais </h4>  
              </div>

              
              </div>

              





              </div>


              


              </div>


              



              </div>
            </div>
            
  <div class="container-fluid bg-light" style="margin-left: 10px">
  <br>
  <h1>Comentários</h1>
 
  <form nome="comentario" action="pagina_conteudo.php" method="POST">
  Nome: <br>
  <input type="text" style="width:400px; border-radius: 4px; background-color: #F5F5F5;" name="nome"><br>
  Mensagem: <br>
  <textarea name="msg" style="width:400px; height: 100px; border-radius: 4px; background-color: #F5F5F5;"></textarea><br>
  <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
  </form>
  <br>
  <?php
    $sql = "select * from comentario";
    $result = $conexao->query($sql);

    if($result->num_rows > 0){
      while($rows = $result->fetch_assoc()){
        echo "Nome: ", $rows['nome'], "<br>";
        echo "Comentário: ", $rows['msg'], "<br>";
        echo "<hr>";
      }
    }
      else{
        echo "Nenhum comentário!";
      }
  ?>
 </div>
<br><br>
      



</main>




<?php 
   
    include('./components/footer.html')

   ?>


</body>
</html>
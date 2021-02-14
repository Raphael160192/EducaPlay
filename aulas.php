<?php
  include("dbcomentario.php");
  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Educa Play - aulas</title>
   <!-- Fonte -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
   <!-- Estilos -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="css/styles.css">
   <script src="js/progressbar.min.js"></script>
   <link rel="stylesheet" href="style_materias/css/flexbox.css">
</head>



<body>

  <header>
    <div class="container" id="nav-container">
        <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="index.html">
          <img id="logo" src="imagem/logo_educa_play-branco.png" alt="Educa Play">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
          <div class="navbar-nav">
          <a class="nav-item nav-link" id="home-menu" href="usuarios.php">Usuários</span></a>
            <a class="nav-item nav-link" id="home-menu" href="index.html">Home</span></a>
            <a class="nav-item nav-link" id="about-menu" href="#">Sobre</a> 
            <a class="divisor" role="separator" href="#"></a>       
            <a class="nav-item nav-link" id="subscribe-menu" href="cadastro.php">Cadastre-se</a>
            <a class="nav-item nav-link" id="login-menu" href="login.php">Entrar</a>
          </div>
        </div>
      </nav>
    </div>
  </header>

  
    <div class="container-fluid">
      <br><br><br><br>
      <h2>Curso de Português Básico</h2>
      <br>
    </div>

  
  <div class="container-sm">
    <br>
    <h4>Sobre o curso</h4>
    <br>
    <p>Neste curso, os alunos poderão revisar algumas das principais e mais básicas regras de ortografia na língua portuguesa.</p> 
    <p>O curso está disponível em vídeo e trabalha questões como o uso do H também quando é correto usar X ou CH nas palavras, entre outros.</p>
  </div>
  

  <section class="videoSobre" style="background-color: #7DC2F7; height: 430px;">
    <div class="container">
      <div class="videoSobre-sobre">
        <h2 class="videoSobre-sobre-title">Aulas</h2>
        <div class="videoSobre-sobre-list">
          
            <a href="#" class="list-group-item list-group-item-action active">Ortografia: INTRODUÇÃO - 6 aulas | 30 min</a>
            <a href="#" class="list-group-item list-group-item-action">O Uso do H - 2 aulas | 15 min</a>
            <a href="#" class="list-group-item list-group-item-action">O Uso do X e do CH - 3 aulas | 20 min</a>
            <a href="#" class="list-group-item list-group-item-action">Empregos de S e Z - 4 aulas | 25 min</a>
            <a href="#" class="list-group-item list-group-item-action">Empregos de C, Ç, S e SS - 5 aulas | 30 min</a> </li>
               
          </div>

      </div>
      <iframe style="padding-left: 40px;" width="560" height="315" src="https://www.youtube.com/embed/2UvKktR1EHs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
    </div>
  </section>
  <br>
  <div class="container-fluid bg-light">
  <h1>Comentários</h1>
  <form nome="comentario" action="aulas.php" method="POST">
  Nome: <br>
  <input type="text" style="width:400px;" name="nome"><br>
  Mensagem: <br>
  <textarea name="msg" style="width:400px;"></textarea><br>
  <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
  
  </form>
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
<footer class="page-footer font-small blue-grey lighten-5">
  <div style="background-color: #7DC2F7;">
    <div class="container">
      <div class="row py-4 d-flex align-items-center">
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Entre também nas nossas redes sociais</h6>
        </div>

        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>

          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>

          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
 
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>

          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>

      </div>


    </div>
  </div>

  <div class="container text-center text-md-left mt-5">

    <div class="row mt-3 dark-grey-text">

      <div class="col-md-3 col-lg-4 col-xl-3 mb-4">


        <h6 class="text-uppercase font-weight-bold">EducaPlay</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Uma plataforma digital para fortalecer seus conhecimentos, á um click de disntancia. Compromisso 
          máximo com o seu desenvolvimento escolar. Educação de qualidade para todos.
        </p>

      </div>

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <h6 class="text-uppercase font-weight-bold">Conheça também</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="https://www.gov.br/inep/pt-br">INEP</a>
        </p>
        <p>
          <a class="dark-grey-text" href="http://pne.mec.gov.br/">PNE</a>
        </p>
        <p>
          <a class="dark-grey-text" href="https://www.gov.br/mec/pt-br">Ministério da Educação</a>
        </p>
        <p>
          <a class="dark-grey-text" href="https://todospelaeducacao.org.br/">Todos Pela Educação</a>
        </p>

      </div>



      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">


        <h6 class="text-uppercase font-weight-bold">Parceiros</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#">Instituto Cacau Gool</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#">Instituto Ayrton Pena</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#">Casa Roberto Virginho</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#">Italol Cultural</a>
        </p>

      </div>



      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">


        <h6 class="text-uppercase font-weight-bold">Contato</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Av. Paulista, 1500 - São Paulo</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> contato@educaplay.com.br</p>
        <p>
          <i class="fas fa-phone mr-3"></i> (11) 98500-1000</p>
        <p>
          <i class="fas fa-print mr-3"></i> (11) 4688-0000</p>

      </div>


    </div>


  </div>


  <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
    <a class="dark-grey-text" href="https://mdbootstrap.com/"> EducaPlay.com</a>
  </div>


</footer>
  
  </body>
 </html> 

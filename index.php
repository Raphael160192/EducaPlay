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
  <header style="background-color: #7DC2F7;">
    
    <?php
      include('./components/navbar.html')
    ?>

    <!-- 
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.html">
        <img id="logo" src="imagem/logo_educa_play-branco.png" alt="Educa Play">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(Página atual)</span></a>
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
            <a class="nav-item nav-link" id="home-menu" href="index.html">Home</span></a>
            <a class="nav-item nav-link" id="about-menu" href="#">Sobre</a> 
            <a class="divisor" role="separator" href="#"></a>       
            <a class="nav-item nav-link" id="subscribe-menu" href="cadastro.php">Cadastre-se</a>
            <a class="nav-item nav-link" id="login-menu" href="login.php">Entrar</a>
          </div>
        </div>
      </nav>
    </div> 
    -->
  </header>

  
  <main>
    <div class="container-fluid">
      <div id="mainSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
          <li data-target="#mainSlider" data-slide-to="1"></li>
          <li data-target="#mainSlider" data-slide-to="2"></li>
        </ol>
      <div class="carousel-inner">
          <div class="carousel-item active">             
            <img src="img/teach.jpg" class="d-block w-100">
            <div class="carousel-caption d-md-block">  
              <h2>Um novo jeito de educar</h2>                               
            </div>
           </div>
           <div class="carousel-item">
            <img src="img/2.jpg" class="d-block w-100">
            <div class="carousel-caption d-md-block">  
              <p>Uma nova forma de trabalhar<p>
            </div>
           </div>
           <div class="carousel-item">
            <img src="img/mesa.jpg" class="d-block w-100">
            <div class="carousel-caption d-md-block">             
            </div>
           </div>
        </div>
       <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> 


      <div id="about-area">
        <div class="container">
            <div class="row">
              <div class="col-12"> 
                <h3 class="main-title">Sobre a plataforma</h3>
              </div>
              <div class="col-md-6">
                <img class="img-fluid" src="img/7.jpeg">
              </div>
              <div class="col-md-6">
                
                <p>Educa Play é uma plataforma que tem por foco oferecer educação de qualidade em período integral para todos.
                  Utiliza elementos tecnológicos, como a Gamificação, promovendo a motivação e incentivando o engajamento dos alunos, 
                  por meio de atividades realizadas em grupo. Além disso, o Educa Play conta com um espaço interativo para os professores postarem videoaulas, 
                  às quais o aluno pode consultar sempre que precisar!

                </p>
 
                <p>Aqui temos:</p>
                <ul id="about-list">
                  <li><i class="fas fa-check"></i> Reforço escolar </li>
                  <li><i class="fas fa-check"></i> Melhora da sua memória </li>
                  <li><i class="fas fa-check"></i> Trabalho em Equipe </li>
                  <li><i class="fas fa-check"></i> Conquistas </li>
                  <li><i class="fas fa-check"></i> Muitos Desafios </li>
                </ul>
              </div>
            </div>
          </div>
      </div>


<section class="videoSobre" style="background-color: #7DC2F7">
    <div class="container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/E8NlU_07XRI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
      <div class="videoSobre-sobre">
        <h2 class="videoSobre-sobre-title">Ensino Híbrido – Personalização e Tecnologia na educação</h2>
        <div class="videoSobre-sobre-list">
          <p class="videoSobre-sobre-item">Hoje, com a internet, as informações estão disponíveis para qualquer pessoa, em qualquer lugar.<br> 
             Novas formas de aprender e ensinar, levam o educador a refletir<br>sobre as possibilidades de integração das novas tecnologias digitais ao ensino. <br>
              Assista ao vídeo para entender melhor sobre o assunto.</p>
               
          </div>

      </div>
    </div>
  </section>


          <div id="login-area">
            <div class="container">
                <div class="row">
                  <div class="col-md-12 d-flex justify-content-around flex-wrap" >
                    
                    <div class="card" style="width: 17rem;">
                      <img class="card-img-top" src="https://happycodeschool.com/wp-content/uploads/2019/01/271590-escola-de-tecnologia-para-crianca-entenda-porque-e-importante-1080x675.jpg" alt="Imagem de capa do card">
                      <div class="card-body">
                        <h5 class="card-title">A tecnologia a favor da educação</h5>
                        <p class="card-text">As ferramentas de tecnologia tem a capacidade de oferecer a qualidade na educação, além de aproximar a escola do universo do aluno.</p></br></br>
                        <a href="#" class="btn btn-primary">Visitar</a>
                      </div>
                    </div>

                    <div class="card" style="width: 16rem;">
                      <img class="card-img-top" src="img/shoulder.jpg" alt="Imagem de capa do card">
                      <div class="card-body">
                        <h5 class="card-title">Lições da pandemia: 73% dos professores querem usar mais tecnologia em aula</h5>
                        <p class="card-text">O Brasil tem hoje 2,6 milhões de docentes. A maioria teve que se adaptar aos novos formatos de trabalho impostos pela pandemia.
                          </p>
                        <a href="#" class="btn btn-primary">Visitar</a>
                      </div>
                    </div>

                    <div class="card" style="width: 16rem;">
                      <img class="card-img-top" src="img/children.jpg" alt="Imagem de capa do card">
                      <div class="card-body">
                        <h5 class="card-title">Tecnologia na sala de aula proporciona educação inovadora</h5>
                        <p class="card-text">
Neste período de pandemia, as instituições de ensino que já utilizavam os recursos tecnológicos integrados às suas metodologias se destacaram. </p>
                        <a href="#" class="btn btn-primary">Visitar</a>
                      </div>
                    </div>
                    
                    </div>
                  </div>     
                </div>
            </div>
  </main>       
  

<footer class="page-footer font-small blue-grey lighten-5">
  <div style="background-color: #7DC2F7;">
    <div class="container">
      <div class="row py-4 d-flex align-items-center">
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Nos acompanhe nas redes sociais</h6>
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


        <h6 class="text-uppercase font-weight-bold">Ensino Criativo</h6>
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
          <i class="fas fa-envelope mr-3"></i> contato@ensinocriativo.com.br</p>
        <p>
          <i class="fas fa-phone mr-3"></i> (11) 98500-1000</p>
        <p>
          <i class="fas fa-print mr-3"></i> (11) 4688-0000</p>

      </div>


    </div>


  </div>


  <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
    <a class="dark-grey-text" href="https://mdbootstrap.com/"> ensinocriativo.com</a>
  </div>


</footer>




  <script src="js/scripts.js"></script>
</body>
</html>

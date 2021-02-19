<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Educa Play - educação a um clique</title>
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

  </header>

  
  <main>
    <div class="container-fluid">
      <!-- slider -->
      <div id="mainSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
          <li data-target="#mainSlider" data-slide-to="1"></li>
          <li data-target="#mainSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1.jpg" class="d-block w-100">
            <div class="carousel-caption d-md-block">                         
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/2.jpg" class="d-block w-100">
            <div class="carousel-caption d-md-block">                         
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/3.jpg" class="d-block w-100">
            <div class="carousel-caption d-md-block">             
            </div>
          </div>
        </divs>
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
        
            <div class=" container row d-flex justify-space-between">
              <div class="col-12"> 
                <h3 class="main-title">Sobre a Ensino Criativo</h3>
              </div>

              <div class="col-md-6">
                <img class="img-fluid" src="imagem/20945183.jpg">
              </div>

              <div class="col-md-6">
                
              <h2 class="mb-3"> <strong><img style="width:7%; heigth:7%" src="./imagem/star.svg" alt="">Quem me dera ao menos<img style="width:7%; heigth:7%" src="./imagem/star.svg" alt=""></strong> </h2>

              <div class="mb-3">
            <p style="font-size: 16px; font-weight: bold"> A Plataforma Ensino Criativo é uma rede colabotiva para professores de escolas públicas e privadas.
                Se conecte com docentes de todo o Brasil e tenha dentro da sua sala de aula, as melhores práticas educacionais </p>
                </div>

                <div class="mb-3 d-flex align-items-center">
            <img class="pr-2" style="width:7%; heigth:7%" src="./imagem/share.svg" alt="">
            <p  style="font-size: 16px; font-weight: bold"> Compartilhe suas atividades pedagógicas para que outros professores apliquem, e dê feedback sobre os resultados. </p>
                </div>

                <div class="mb-3 d-flex align-items-center">
            <img class="pr-2" style="width:7%; heigth:3%" src="./imagem/growth.svg" alt="">
            <p style="font-size: 16px; font-weight: bold"> Aproveite atvidades com melhores avaliações, e aumente a qualidade das suas aulas. </p>
                </div>

                <div class="mb-3 d-flex align-items-center">
            <img class="pr-2" style="width:7%; heigth:7%" src="./imagem/graduate.svg" alt="">
            <p style="font-size: 16px; font-weight: bold"> Conheça as práticas dos professores das melhores escolas, da sua região e de todo o Brasil. </p>
                </div>
                


              </div>
            </div>
          
      </div>


  <section class="videoSobre" style="background-color: #7DC2F7">
    <div class="container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/jEX9-hS_Fdw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
      <div class="videoSobre-sobre">
        <h2 class="videoSobre-sobre-title">Por que os videogames são bons para o <br> cérebro e para o corpo</h2>
        <div class="videoSobre-sobre-list">
          <p class="videoSobre-sobre-item">Dizem que videogame não faz bem para você. Dizem que é ruim para os olhos, <br>
             a coluna e a vida social. Mas, ei, aproveite para mostrar à esses estraga-prazeres <br>
              este vídeo, e prove à eles que existem muitas razões pelas quais eles estariam <br>
               melhor se jogassem videogame!</p>
               
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
    <a class="dark-grey-text" href="https://mdbootstrap.com/"> educaplay.com</a>
  </div>


</footer>




  <script src="js/scripts.js"></script>
</body>
</html>

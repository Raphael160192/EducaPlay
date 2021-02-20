<?php
session_start();

 if(!isset($_SESSION['senha']) && !isset($_SESSION['email'])){
//   echo $_SESSION['nome'];
//  echo $_SESSION['email'];

 header('Location:login.php');
exit;
}
//  session_destroy();
?>



<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educa Play - educação a um clique</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>

    <script src="js/progressbar.min.js"></script>
    <link rel="stylesheet" href="style_materias/css/style.css">
      <link rel="stylesheet" href="style_materias/css/flexbox.css">
  </head>
<body>

  <?php
  
    include('./components/navbar.html')
  
  ?>


<h2><a href= "logout.php">Sair</a></h2>


      <main class="conteudoPrincipal">

      <h2 class="subtitulo" style="color:#7DC2F7;">Suas Matérias</h2>

		<div class="container d-flex justify-content-between flex-wrap  ">
			

      <div class="card mb-5" style="width: 18rem;">
      <div>
      <img class="card-img-top" src="./imagem/losa19.jpeg" alt="Imagem de capa do card">
      </div>
  <div class="card-body">
    <h5 class="card-title">Título do card</h5>
    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
    <a href="pagina_conteudo.php" class="btn btn-primary">Visitar</a>
  </div>
    </div>

<div class="card mb-5" style="width: 18rem;">
  <img class="card-img-top" src="./imagem/losa20.jpeg" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Título do card</h5>
    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
    <a href="#" class="btn btn-primary">Visitar</a>
  </div>
</div>

<div class="card mb-5" style="width: 18rem;">
  <img class="card-img-top" src="./imagem/losa13.jpeg" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Título do card</h5>
    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
    <a href="#" class="btn btn-primary">Visitar</a>
  </div>
</div>

<div class="card mb-5" style="width: 18rem;">
  <img class="card-img-top" src="./imagem/losa18.jpeg" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Título do card</h5>
    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
    <a href="#" class="btn btn-primary">Visitar</a>
  </div>
</div>

<div class="card mb-5" style="width: 18rem;">
  <img class="card-img-top" src="./imagem/losa15.jpeg" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Título do card</h5>
    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
    <a href="#" class="btn btn-primary">Visitar</a>
  </div>
</div>

<div class="card mb-5" style="width: 18rem;">
  <img class="card-img-top" src="./imagem/losa16.jpeg" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Título do card</h5>
    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
    <a href="#" class="btn btn-primary">Visitar</a>
  </div>
</div>

<div class="card mb-5" style="width: 18rem;">
  <img class="card-img-top" src="./imagem/losa21.jpeg" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Título do card</h5>
    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
    <a href="#" class="btn btn-primary">Visitar</a>
  </div>
</div>

<div class="card mb-5" style="width: 18rem;">
  <img class="card-img-top" src="./imagem/losa22.jpeg" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Título do card</h5>
    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
    <a href="#" class="btn btn-primary">Visitar</a>
  </div>
</div>

<div class="card mb-5" style="width: 18rem;">

  <img class="card-img-top" src="./imagem/losa23.jpeg" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">Título do card</h5>
    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
    <a href="#" class="btn btn-primary">Visitar</a>
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
            <a class="dark-grey-text" href="https://www.institutocacaushow.org.br/">Instituto Cacau Show</a>
          </p>
          <p>
            <a class="dark-grey-text" href="https://www.institutoayrtonsenna.org.br/pt-br/apoie.html?gclid=Cj0KCQiAhZT9BRDmARIsAN2E-J1683W3-Rme_mwja3_CZ8jwqcipVw9fQpqmybOpH-g-2ngUN8HhnCUaAvBxEALw_wcB#doe-pela-educacao-doar">Instituto Ayrton Senna</a>
          </p>
          <p>
            <a class="dark-grey-text" href="http://www.casarobertomarinho.org.br/">Casa Roberto Marinho</a>
          </p>
          <p>
            <a class="dark-grey-text" href="https://www.itaucultural.org.br/?utm_source=google-search&utm_medium=cpc&utm_campaign=F2_GOOGLE_SEARCH_Institucional&gclid=Cj0KCQiAhZT9BRDmARIsAN2E-J3VlMpfxjeoNqAp6FmyBbG5w9YRvZJelGQalMOTBX45D49B0skUshUaAk5aEALw_wcB">Itaú Cultural</a>
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
  
<script src="js/scripts.js"></script>
    
</body>
</html>



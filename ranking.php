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
  

<?php
      include('./components/navbar2.html')
    ?>


<main >
<div class="container-fluid" style="background-color: #778899;">
<h4 class="text-white p-4">RANKING</h4>
</div>
<br>
<div class="container bg-light">
<div class="btn-group-responsive p-3" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-light text-secondary">Ranking semanal</button>
  <button type="button" class="btn btn-light text-secondary">Ranking mensal</button>
  <button type="button" class="btn btn-light text-secondary">Ranking geral</button>
  <button type="button" class="btn btn-info text-white">Pontuação</button>
</div>
<div class="table-responsive">
<table class="table table-borderless table-primary">
  <thead>
    <tr>
      <th scope="col">10.000xp</th>
      <td>Renato Marinho</td>
      <td>100 tópicos</td>
      <td>0 ponts</td>
      <td>100 ponts</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">5.000xp</th>
      <td>Roseli Ferreira</td>
      <td>50 tópicos</td>
      <td>0 ponts</td>
      <td>100 ponts</td>
    </tr>
    <tr>
      <th scope="row">3.000xp</th>
      <td>Allan Gabriell</td>
      <td>30 tópicos</td>
      <td>0 ponts</td>
      <td>100 ponts</td>
    </tr>
    <tr>
      <th scope="row">1.000xp</th>
      <td>Rosana Silva</td>
      <td>10 tópicos</td>
      <td>0 ponts</td>
      <td>100 ponts</td>
    </tr>
    <tr>
      <th scope="row">1.000xp</th>
      <td>Mariana Santos</td>
      <td>10 tópicos</td>
      <td>0 ponts</td>
      <td>100 ponts</td>
    </tr>
    <tr>
      <th scope="row">1.000xp</th>
      <td>Joaquim Ferreira</td>
      <td>10 tópicos</td>
      <td>0 ponts</td>
      <td>100 ponts</td>
    </tr>
    <tr>
      <th scope="row">900xp</th>
      <td>Fernanda Oliveira</td>
      <td>9 tópicos</td>
      <td>0 ponts</td>
      <td>100 ponts</td>
    </tr>
    <tr>
      <th scope="row">800xp</th>
      <td>Marta Meneses</td>
      <td>8 tópicos</td>
      <td>0 ponts</td>
      <td>100 ponts</td>
    </tr>
    <tr>
      <th scope="row">600xp</th>
      <td>Marcos Antônio</td>
      <td>6 tópicos</td>
      <td>0 ponts</td>
      <td>100 ponts</td>
    </tr>
    <tr>
      <th scope="row">500xp</th>
      <td>Moises Henrique</td>
      <td>5 tópicos</td>
      <td>0 ponts</td>
      <td>100 ponts</td>
    </tr>
    
  </tbody>
</table>
</div>
</div>
</div>
<br>
  </main>
  <?php 
   
   include('./components/footer.html')

  ?>




  <script src="js/scripts.js"></script>
</body>
</html>

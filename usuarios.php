<?php
$localhost = "localhost";
$user ="root";
$senha ="";
$database= "educaplay";


$conexao = mysqli_connect($localhost,$user,$senha,$database);


if(isset($_GET['id'])){
$id = $_GET['id'];
$apagar = mysqli_query($conexao, "DELETE FROM usuario WHERE id='$id'");
 
if($apagar){
  echo'Dados excluidos com sucesso!';
}

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Usuarios</title>
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

  <br><br><br>

  <h1 class="text-info text-center">Lista de usuários</h1>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME</th>
      <th scope="col">SOBRENOME</th>
      <th scope="col">CIDADE</th>
      <th scope="col">CEP</th>
      <th scope="col">EMAIL</th>
      <th scope="col">DADOS</th>


    </tr>
  </thead>
  <tbody>
  <?php
    $resultado = mysqli_query($conexao, "SELECT * FROM usuario");
    while ($linha = mysqli_fetch_array($resultado)){
  ?>
    <tr>
      <td><?php echo $linha['id'];?></td>
      <td><?php echo $linha['nome'];?></td>
      <td><?php echo $linha['sobrenome'];?></td>
      <td><?php echo $linha['cidade'];?></td>
      <td><?php echo $linha['cep'];?></td>
      <td><?php echo $linha['email'];?></td>
      <td><a href="atualizar.php?id= <?php echo $linha['id'];?>"><img src="./imagem/lapis.png" alt="editar" width="25px;"></a>  <a href="?id=<?php echo $linha['id'];?>"><img src="./imagem/lixeira.png" alt="lixeira" width="40px;"></td>
    </tr>
<?php  } ?>
  </tbody>
 
</table>

  </body>
  </html>
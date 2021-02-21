<?php
session_start();
include_once("db_connect.php");


if(isset($_POST['atualizar'])){
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf =  $_POST['cpf'];
$rg =  $_POST['rg'];
$endereco =  $_POST['endereco'];
$cidade =  $_POST['cidade'];
$cep =  $_POST['cep'];
$email =  $_POST['email'];
$senha = md5($_POST['senha']);
$confirmaSenha =md5($_POST['confirmaSenha']);
$id = $_POST['atualizar'];

    $query = mysqli_query($conexao, "UPDATE usuario SET nome='$nome', sobrenome='$sobrenome', cpf='$cpf', rg='$rg', endereco='$endereco', cidade='$cidade', cep='$cep', email='$email', senha='$senha', confirmaSenha='$confirmaSenha' WHERE id='$id'"); 
    echo "<script> alert('Dados atualizados com sucesso!')
    window.location.href='usuarios.php'
    
    </script>";
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
    <title>Alteração dos dados</title>
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
  

    <section id="section-cadastro">
      <div class="div-texto-cadastro">
        <h1 class="div-texto-cadastro1">Atualize seu cadastro</h1>
        <h2 class="div-texto-cadastro2">no Ensino Criativo</h2>
      </div>

      <div class="div-img-cadastro">
        <img class="img-login-cadastro" src="imagem/undraw_Login_re_4vu2.png" alt="Imagem representa o cadastro uma entrada">
      </div>

    </section>
    <section id="section-form-cadastro">
        <div class="div-form-cadastro">


        <?php  if(isset($_GET['id'])){
            $id = $_GET['id'];
            $resultado = mysqli_query($conexao, "SELECT * FROM usuario WHERE id='$id' ");
            foreach ($resultado as $linha){
        ?>
        

        <form method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                Nome<input name="nome" value="<?php echo $linha['nome']; ?>" type="text" class="form-control" placeholder="Antonio"required>
              </div>
              <div class="form-group col-md-6">
                Sobrenome<input name="sobrenome" value="<?php echo $linha['sobrenome']; ?>" type="text" class="form-control" placeholder="Aparecido de Oliveira" required>
              </div>
            </div>
            
            
            
            <div class="form-row">
              <div class="form-group col-md-6">
                
                CPF<input name="cpf" value="<?php echo $linha['cpf']; ?>" type="text" class="form-control" placeholder="Digite seu CPF" required>
              </div>
              <div class="form-group col-md-6">
                RG<input name="rg" value="<?php echo $linha['rg']; ?>" type="text" class="form-control" placeholder="Digite seu RG" required>
              </div>
            </div>

            <div class="form-group">
              
              Endereço<input name="endereco" value="<?php echo $linha['endereco']; ?>" type="text" class="form-control"  placeholder="Rua dos Bobos, nº 0" required>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                
                Cidade<input name="cidade" value="<?php echo $linha['cidade']; ?>" type="text" class="form-control" required>
              </div>
              <div class="form-group col-md-2">
                CEP<input name="cep" value="<?php echo $linha['cep']; ?>" type="text" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="form-group col-md-6">
                  Email<input name="email" value="<?php echo $linha['email']; ?>" type="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group col-md-6">
                  Senha<input name="senha" value="<?php echo $linha['senha']; ?>" type="password" class="form-control" placeholder="Senha" required>
                </div>
                <div class="form-group col-md-6">
                  Confirmar Senha<input name="confirmaSenha" value="<?php echo $linha['confirmaSenha']; ?>" type="password" class="form-control" placeholder="Senha" required>
                </div>
              </div>
              
            </div>
            <button name="atualizar" value="<?php echo $id; ?>" class="btn btn-primary">Enviar</button>




          </form>

        <?php
        }}
        ?>

</div> 
</section>




    

   

</body>
</html>

<?php

session_start();

// pegar os dados do formulario
$email = $_POST['email'];
$senha = md5($_POST['senha']);

// validacao da senha e do email

if (strlen($email) > 3 && strlen($senha) >3){

    $conexao = mysqli_connect("localhost","root","","educaplay");

    $sql = "SELECT * from usuario where senha = '$senha' AND email ='$email'";

$resultado = mysqli_query($conexao,$sql);

$usuarios = mysqli_fetch_assoc($resultado);

echo '<pre>';
print_r($usuarios);
echo '</pre> <hr />';

// //recuperar dados

$_SESSION['nome'] = $usuarios[nome];
$_SESSION['email'] = $usuarios[email];
$_SESSION['senha'] = $usuarios[senha];
header ('Location: materias.php');

}
else {
  echo "
   <script>
        alert('E-mail ou senha inválidos')
        location.href='login.php'
   </script>
";

}



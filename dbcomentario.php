<?php
include("db_connect.php");

$localhost = "localhost";
$user ="root";
$senha ="";
$database= "educaplay";


$conexao = mysqli_connect($localhost,$user,$senha,$database);

  if(isset($_POST['nome']) && isset($_POST['msg'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

    $sql = "insert into comentario (nome, msg) values ('$nome', '$msg')";
    $result = $conexao -> query($sql);
    
}
?>
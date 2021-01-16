<?php
$localhost = "localhost";
$user ="root";
$senha ="";
$database= "educaplay";


$conexao = mysqli_connect($localhost,$user,$senha,$database);

if(!$conexao){

    echo "falha na conexao";
}

?>

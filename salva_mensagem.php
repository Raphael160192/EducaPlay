<?php
include_once("db_connect.php");

// $nome = $_POST['nome'];
// $sobrenome =$_POST['sobrenome'];
// $cpf =$_POST['cpf'];
// $rg =$_POST['rg'];
// $endereco =$_POST['endereco'];
// $cidade =$_POST['cidade'];
// $cep =$_POST['cep'];
// $email =$_POST['email'];
// $senha = md5($_POST['senha']);
// $confirmaSenha =md5($_POST['confirmaSenha']);


//  $sql = "INSERT INTO usuario (nome,sobrenome,cpf,rg,endereco,cidade,cep,email,senha,confirmaSenha)
//   values('$nome','$sobrenome','$cpf','$rg','$endereco','$cidade','$cep','$email','$senha','$confirmaSenha')";
//  $resuldado = mysqli_query($conexao,$sql);

// // select dados

 $sql = "SELECT nome, cpf,cidade FROM usuario";
 $resultado=mysqli_query($conexao,$sql);


  print_r(json_encode($resultado->fetch_all(MYSQLI_ASSOC)));

// // deletar dados

//  $sql = "DELETE FROM usuario where id ='2'";
//   $resultado=mysqli_query($conexao,$sql);

//  //atualizar dados
//  $sql = "UPDATE usuario SET nome= 'felipe' WHERE id=10";
// $resultado=mysqli_query($conexao,$sql);

// if($resultado){
//     echo "cadastro atualiado com sucesso";
//  }else{
//     echo "cadastro nao atualizado";
// };




mysqli_close($conexao);


?>
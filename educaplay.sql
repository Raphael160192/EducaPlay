create schema educaplay;

CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `sobrenome` varchar(75) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `endereco` varchar(150) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `cep` varchar(12) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `senha` char(32),
  `confirmaSenha` char(32),
  PRIMARY KEY (`id`)
);

<<<<<<< HEAD
create table materias(
idmateria int not null auto_increment,
disciplina varchar(50) not null,
professor varchar(50),
primary key(idmateria)
);

=======
>>>>>>> a319069774855b73320cccd950adaa57af77c20c
CREATE TABLE `comentario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `msg` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
<<<<<<< HEAD
);
=======
)

>>>>>>> a319069774855b73320cccd950adaa57af77c20c

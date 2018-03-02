create database pdo;
use pdo;

create table usuario(
 idUsuario int not null auto_increment primary key,
 nomeUsuario varchar(100),
 senhaUsuario varchar(100)
);
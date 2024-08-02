create database projeto02;
use projeto02;

create table produtoEstoque(
idProduto int not null auto_increment,
nomeProduto varchar(255),
marcaProduto varchar(255),
precoProduto varchar(6),
quantidadeProduto varchar(5),
tipoProduto varchar(20),
primary key(idProduto)
);


/*
create table fornecedores(
idForn int not null auto_increment,
nomeForn varchar(30),
produtoForn

);
create table produtoCompra(
ps

);

create table produtoSaida(
pc

);

*/

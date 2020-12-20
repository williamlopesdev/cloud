# API_loja_geek_master

Codigo usado para criar o banco de dados

create database mgeek2;
use mgeek2;

create table produtos(
id_produto int auto_increment primary key,
categoria varchar(150),
descricao varchar(150),
imagem varchar(150),
produto_codigo int

);

create table precos(
id_precos int auto_increment primary key,
preco_unitario decimal(8,2),
preco_total decimal(8,2)
);

alter table produtos add foreign key(
produto_codigo
) references precos(id_precos);

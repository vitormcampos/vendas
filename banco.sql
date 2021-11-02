create database if not exists vendas;
use vendas;
create table if not exists cliente(
id int primary key auto_increment,
nome varchar(20),
sobrenome varchar(20),
data_nascimento date,
cpf varchar(11),
rg varchar(15),
email varchar(100),
endereco varchar(120),
complemento varchar(120),
bairro varchar(50),
cidade varchar(50),
estado varchar(50),
cep varchar(8)
);
create table if not exists fornecedor 
(
id int primary key auto_increment,
nome varchar(40),
razao_social varchar(40),
cnpj varchar(20),
email varchar(100),
telefone varchar(14),
site varchar(100),
endereco varchar(120),
complemento varchar(120),
bairro varchar(50),
cidade varchar(50),
estado varchar(50),
cep varchar(8)
);

create table if not exists produto (
id int primary key auto_increment,
descricao varchar(120),
gtin varchar(20),
quantidade mediumint,
preco decimal(6,2),
fornecedor_id int,
foreign key(fornecedor_id) references fornecedor(id)
);

create table if not exists venda (
id int auto_increment primary key,
valor double,
cliente_id int,
movimento_id int
);

create table if not exists movimento (
id int auto_increment primary key,
datahora_inicio datetime,
datahora_fim datetime,
venda_id int
);

create table if not exists venda_produtos (
id int auto_increment primary key,
produto_id int,
venda_id int
);


create database if not exists vendas;
use vendas;
create table if not exists cliente
(
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

create table if not exists produto 
(
id int primary key auto_increment,
descricao varchar(120),
gtin varchar(20),
quantidade mediumint,
preco decimal(6,2),
fornecedor_id int,
foreign key(fornecedor_id) references fornecedor(id)
);

create table if not exists venda_cabecalho 
(
    id int PRIMARY KEY AUTO_INCREMENT,
    observacao VARCHAR(100),
    data_hora DATETIME NOT NULL,
    cliente_id int,
    FOREIGN KEY(cliente_id) REFERENCES cliente(id)
);


create table if not exists venda_detalhe
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    quantidade INT NOT NULL,
    valor INT NOT NULL,
    venda_id INT,
    produto_id INT,
    FOREIGN KEY(venda_id) REFERENCES venda_cabecalho(id),
    FOREIGN KEY(produto_id) REFERENCES produto(id)
);


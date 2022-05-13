create database cardapio;
 
use cardapio;

create table cardapio(
id int not null AUTO_INCREMENT PRIMARY KEY,
dia date not null,
tipo varchar (15)
);

create table refeicao(
id_refeicao int AUTO_INCREMENT NOT NULL PRIMARY KEY,
descricao varchar(100) not null,
id_ingredientes int NOT NULL
);

create table ingredientes(
id_ingredientes int not null AUTO_INCREMENT PRIMARY KEY,
id_refeicao int not null ,
nome varchar(100) not null,
calorias int not null
);

create table nutricionista(
id int not null AUTO_INCREMENT PRIMARY KEY,
nome varchar(100),
crn varchar(50),
usuario varchar(100) not null,
senha varchar(100) not null
);

create table usuario(
id int not null AUTO_INCREMENT PRIMARY KEY,
nome varchar(100),
email varchar(100) not null,
senha varchar(100) not null
);

 
ALTER TABLE ingredientes ADD CONSTRAINT FK_RefeicaoIngrediente FOREIGN KEY (id_ingredientes) REFERENCES refeicao (id_refeicao);
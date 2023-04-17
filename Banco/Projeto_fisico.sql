create database Banco_Digital;
use Banco_Digital;

create table Conta
( id int auto_increment,
 tipo varchar(45),
 saldo double,
 limite double,
 primary key(id)
);

create table ChavePix
( id int auto_increment,
tipo varchar(45),
chave char(32),
 primary key(id)
);

create table Correntista
( id int auto_increment,
cpf int(11),
senha varchar(45),
data_nasc timestamp(14),
nome varchar(45),
 primary key(id)
);

create table Transacao
( id int auto_increment,
data_hora varchar(45),
valor double,
id_transacao_enviar INT,
id_transacao_receber INT,
 primary key(id)
);
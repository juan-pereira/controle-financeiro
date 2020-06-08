create database financeiro;

use financeiro;

create table usuario (	id int primary key auto_increment,
						usuario varchar(50) not null unique,
						nome varchar(50) not null,
						senha varchar(255), 
						sexo char(1),
						idade varchar(3));
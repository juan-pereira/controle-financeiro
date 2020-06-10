create database financeiro;

use financeiro;

create table usuario (	id int primary key auto_increment,
						usuario varchar(50) not null unique,
						nome varchar(50) not null,
						senha varchar(255), 
						sexo char(1),
						idade varchar(3));

create table parcelas(	id int primary key auto_increment,
						mes varchar(6),
						salario float(10,2),
						gastoFixo float(10,2),
						gastoTemporario float(10,2),
						idusu int,
						FOREIGN KEY (idusu) REFERENCES usuario(id)
						);
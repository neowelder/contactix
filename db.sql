create database contactix;
use contactix;
create table contactos (
	id int not null auto_increment primary key,
	nombre varchar(30) not null,
	apellido varchar(30) not null,
	numero varchar(12) not null
);

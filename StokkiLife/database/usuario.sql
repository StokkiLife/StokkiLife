DROP DATABASE IF EXISTS usuario;
CREATE DATABASE usuario;
USE usuario;

Create table usuario (
	email varchar(50) primary key,
    senha varchar(50)
);

insert into usuario (email, senha)
values ('admin@email.com', 'admin1234');
SELECT * FROM usuario;
DROP DATABASE IF EXISTS usuarios;
CREATE DATABASE usuarios;
USE usuarios;

Create table usuarios (
	email varchar(50) primary key,
    senha varchar(50)
);

insert into usuarios (email, senha)
values ('admin@email.com', 'admin1234');
SELECT * FROM usuarios;
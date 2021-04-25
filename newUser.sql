CREATE DATABASE newUser;

USE newUser;

CREATE TABLE tb_user (nome varchar(20), senha varchar(8), checks varchar(10), admins(3));

INSERT INTO tb_user VALUES('Taynara', '1234', 'female', 'sim');
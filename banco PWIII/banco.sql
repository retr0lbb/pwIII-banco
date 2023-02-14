CREATE DATABASE contato;
USE contato;
CREATE TABLE contatos(
    id int AUTO_INCREMENT PRIMARY KEY,
    nome varchar(100) NOT NULL,
    tekefone varchar(14) NOT NULL,
    cpf varchar(14) NOT NULL
)
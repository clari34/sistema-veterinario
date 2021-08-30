CREATE DATABASE veterinaria;
USE veterinaria;

CREATE TABLE usuarios
(
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    cpf VARCHAR(14) UNIQUE,
    nome VARCHAR(200),
    email VARCHAR(200) UNIQUE,
    senha VARCHAR(200)
);

CREATE TABLE agendamento
(
    data_agendamento VARCHAR(10),
    hora VARCHAR(13),
    vacina VARCHAR(20),
    CONSTRAINT usuario_agenda_fk FOREIGN KEY (ID_Pessoa) REFERENCES usuario (id_usuario)
);

CREATE TABLE veterinario
(
    id_veterinario INT AUTO_INCREMENT PRIMARY KEY,
    cpf VARCHAR(14) UNIQUE,
    nome VARCHAR(200),
    email VARCHAR(200) UNIQUE,
    senha VARCHAR(200),
    usuario varchar(40) UNIQUE,
    crmv varchar(20) UNIQUE,
    email varchar(60) UNIQUE,
);

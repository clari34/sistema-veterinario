CREATE DATABASE veterinaria;
USE veterinaria;

CREATE TABLE usuarios
(
    id_usuario VARCHAR(14) PRIMARY KEY,
    nome VARCHAR(200),
    email VARCHAR(200),
    senha VARCHAR(200)
);

CREATE TABLE agendamento
(
    data_agendamento VARCHAR(10),
    hora VARCHAR(13),
    vacina VARCHAR(20),
    CONSTRAINT usuario_agenda_fk FOREIGN KEY (ID_Pessoa) REFERENCES usuario (id_usuario)
);
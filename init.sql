CREATE DATABASE IF NOT EXISTS BancoTrabalho;
USE BancoTrabalho;

CREATE TABLE IF NOT EXISTS usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

INSERT INTO usuario (nome, email) VALUES ('Joao Moyses', 'joao@exemplo.com');
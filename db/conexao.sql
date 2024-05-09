CREATE DATABASE IF NOT EXISTS conexao_cadastro;
DROP DATABASE conexao_cadastro;
USE conexao_cadastro;

CREATE TABLE novo_cliente (
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nome_completo VARCHAR(100),
    tipo_cliente ENUM('Pessoa Física', 'Pessoa Jurídica'),
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    dt_nasc DATE NOT NULL,
    email VARCHAR (60) NOT NULL,
    tel VARCHAR (20) NOT NULL,
    cpf VARCHAR (12) NOT NULL,
    rg VARCHAR (15) NOT NULL,
    bairro VARCHAR (30) NOT NULL,
    cidade VARCHAR (25) NOT NULL,
    rua VARCHAR(25) NOT NULL,
    num NUMERIC NOT NULL
);

SELECT * FROM novo_cliente; 


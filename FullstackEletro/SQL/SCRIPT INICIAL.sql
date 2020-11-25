CREATE DATABASE IF NOT EXISTS fullstackeletro;

USE fullstackeletro;

CREATE TABLE IF NOT EXISTS produtos(
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    categoria VARCHAR(200),
    descricao VARCHAR(500),
    preco DECIMAL(10, 2),
    imagem VARCHAR(200)
);

INSERT INTO produtos VALUES(null, 'Fogão 001', 'Fogão', 'É um bom fogão 001', '400,00', 'fogão_001.jpg');
INSERT INTO produtos VALUES(null, 'Fogão 002', 'Fogão', 'É um bom fogão 002', '450,00', 'fogão_002.jpg');
INSERT INTO produtos VALUES(null, 'Fogão 003', 'Fogão', 'É um bom fogão 003', '500,00', 'fogão_003.png');
INSERT INTO produtos VALUES(null, 'Fogão 004', 'Fogão', 'É um bom fogão 004', '650,00', 'fogão_004.jpg');
INSERT INTO produtos VALUES(null, 'Fogão 005', 'Fogão', 'É um bom fogão 005', '600,00', 'fogão_005.jpg');

INSERT INTO produtos VALUES(null, 'Geladeira 001', 'Geladeira', 'É uma boa Geladeira 001', '400,00', 'geladeiras_001.jpg');
INSERT INTO produtos VALUES(null, 'Geladeira 002', 'Geladeira', 'É uma boa Geladeira 002', '450,00', 'geladeiras_002.jpg');
INSERT INTO produtos VALUES(null, 'Geladeira 003', 'Geladeira', 'É uma boa Geladeira 003', '500,00', 'geladeiras_003.jpg');
INSERT INTO produtos VALUES(null, 'Geladeira 004', 'Geladeira', 'É uma boa Geladeira 004', '650,00', 'geladeiras_004.jpg');
INSERT INTO produtos VALUES(null, 'Geladeira 005', 'Geladeira', 'É uma boa Geladeira 005', '600,00', 'geladeiras_005.jpg');

INSERT INTO produtos VALUES(null, 'Microondas 001', 'Microondas', 'É um bom Microondas 001', '400,00', 'microondas_001.jpeg');
INSERT INTO produtos VALUES(null, 'Microondas 002', 'Microondas', 'É um bom Microondas 002', '450,00', 'microondas_002.jpg');
INSERT INTO produtos VALUES(null, 'Microondas 003', 'Microondas', 'É um bom Microondas 003', '500,00', 'microondas_003.png');
INSERT INTO produtos VALUES(null, 'Microondas 004', 'Microondas', 'É um bom Microondas 004', '650,00', 'microondas_004.jpg');
INSERT INTO produtos VALUES(null, 'Microondas 005', 'Microondas', 'É um bom Microondas 005', '600,00', 'microondas_005.jpg');

CREATE TABLE IF NOT EXISTS pedidos(
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome_cliente VARCHAR(50),
    endereco VARCHAR(200),
    telefone VARCHAR(20),
    nome_produto VARCHAR(100),
    valor_unit DECIMAL(10, 2),
    quantidade INTEGER,
    valor_total DECIMAL(10, 2)
);
CREATE TABLE IF NOT EXISTS Produtos(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    descricao VARCHAR(500),
    preco DECIMAL(10, 2),
    nome_imagem VARCHAR(200)
);

CREATE TABLE IF NOT EXISTS Pedidos(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome_cliente VARCHAR(100),
    endereco VARCHAR(200),
    telefone VARCHAR(20),
    nome_produto VARCHAR(100),
    valor_unitario decimal(10, 2),
    quantidade INTEGER,
    valor_total decimal(10, 2)
);
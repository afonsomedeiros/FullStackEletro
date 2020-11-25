<?php

    require_once 'db_connect.php';

    if(isset($_POST['cadastrar'])) {
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['fone'];
        $produto = $_POST['produto'];
        $valor_unit = $_POST['valor_unit'];
        $qtd = $_POST['qtd'];
        $valorfinal = $_POST['preco_final'];

        $sql = "INSERT INTO pedidos VALUES (null, '$nome', '$endereco', '$telefone', '$produto', '$valor_unit', $qtd, '$valorfinal');";

        nonquery($sql);

        header("Location: ../produtos.php");
    }

?>
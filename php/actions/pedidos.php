<?php

    require_once "db_connect.php";

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $nome_produto = $_POST['nome_produto'];
        $vUnit = $_POST['vUnit'];
        $qtd = $_POST['qtd'];
        $vTot = $_POST['vTot'];

        $sql = "INSERT INTO pedidos VALUES(null, '$nome', '$endereco', '$telefone', '$nome_produto', '$vUnit', $qtd, '$vTot');";

        mysqli_query($connect, $sql);

        header("Location: ../../index.php");
    }

?>
<?php

    $titulo_pagina = "Pedidos";
    include_once "./includes/cabecalho.php"
?>

<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h4>Cadastrar Pedidos</h4>
            <form action="./actions/pedidos.php" method="POST">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" name="endereco">
                </div>
                <div class="form-group">
                    <label for="fone">Telefone:</label>
                    <input type="text" class="form-control" id="fone" name="fone">
                </div>
                <div class="form-group">
                    <label for="produto">Produto:</label>
                    <input type="text" class="form-control" id="produto" name="produto">
                </div>
                <div class="form-group">
                    <label for="valor_unit">Valor Unitário:</label>
                    <input type="text" onkeyup="calc_valor_final()" class="form-control" id="valor_unit" name="valor_unit">
                </div>
                <div class="form-group">
                    <label for="qtd">Quantidade:</label>
                    <input type="text" onkeyup="calc_valor_final()" class="form-control" id="qtd" name="qtd">
                </div>
                <div class="form-group">
                    <label for="preco_final">Preço Final:</label>
                    <input type="text" class="form-control" disabled id="preco_final" name="preco_final">
                </div>
                <button type="submit" name="cadastrar" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
    include_once "./includes/rodape.php";
?>
<?php

    $titulo_pagina = "Produtos";
    include_once "./includes/cabecalho.php"
?>

<main class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-12 mx-auto">
            <h4>Categorias</h4>
            <ul class="categorias">
                <li onclick="show_all();">Todos</li>
                <li onclick="show_categoria('Fogão');">Fogões</li>
                <li onclick="show_categoria('Geladeira');">Geladeiras</li>
                <li onclick="show_categoria('Microondas');">Microondas</li>
            </ul>
        </div>

        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-12">
            <h4>Produtos</h4>
            <div class="grid-prod row">
                <?php

                    require_once "./actions/db_connect.php";

                    $data = query("SELECT * FROM produtos;");
                    
                    while($row = mysqli_fetch_assoc($data)){
                ?>
                <figure class="<?php echo $row['categoria']; ?> produto col-lg-3 col-md-4 col-sm-6 col-xs-12" onmouseover="show_info(this)" onmouseout="hide_info(this)">
                    <img src="../img/produtos/<?php echo $row['imagem']; ?>" />
                    <figcaption>
                        <p class="nome-prod">
                            <?php echo $row['nome']; ?>
                        </p>
                        <p class="precofinal-prod">
                            R$ <?php echo $row['preco']; ?>
                        </p>
                    </figcaption>
                </figure>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</main>

<?php
    include_once "./includes/rodape.php"
?>
<?php

    include_once "./includes/cabecalho.php";
    include_once "./includes/menu.php";

?>

    <div class="container-categoria">
        <h4>Categorias</h4>
        <ul class="lista-categorias">
            <li>Geladeira</li>
            <li>Microondas</li>
            <li>Fogão</li>
            <li>Forno</li>
            <li>Celulares</li>
        </ul>
    </div>

    <div class="produtos">
    <?php
    
        require_once "./actions/db_connect.php";

        $sql = "SELECT * FROM produtos";
        $resultado = mysqli_query($connect, $sql);

        while($row=mysqli_fetch_assoc($resultado)){
    ?>
        <div class="produto">
            <figure onmouseover="visualiza_info(this);"
            onmouseout="esconde_info(this);"
            onclick="exibir_mensagem(this);">
                <img srcset="../imagens/<?php echo $row['nome_imagem']; ?>">
                <figcaption class="legenda">
                    <p><?php echo $row['nome']; ?></p>
                    <p><?php echo $row['preco']; ?></p>
                </figcaption>
            </figure>
        </div>
    <?php
        }
    ?>
    </div>

<?php
    include_once "./includes/rodape.php";
?>
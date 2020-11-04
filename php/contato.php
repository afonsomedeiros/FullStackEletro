<?php

    include_once "./includes/cabecalho.php";
    include_once "./includes/menu.php";

?>

    <form class="formulario-contato">
        <div class="formulario-grupo">
            <label>Nome: </label>
            <input type="text">
        </div>
        <div class="formulario-grupo">
            <label>Mensagem: </label>
            <textarea></textarea>
        </div>
        <input type="submit" value="Enviar">
    </form>

<?php

    include_once "./includes/rodape.php";

?>
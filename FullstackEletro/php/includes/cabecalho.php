<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/estilo.css" />

    <title><?php echo $titulo_pagina ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
        <a href="#" class="navbar-brand">
            <img class="d-lg-block d-md-block d-sm-none d-none" src="../img/public/logo_transparent.png" />
            <img class="d-lg-none d-md-none d-sm-block d-block" src="../img/public/logo_transparent.png" style="width: 200px;" />
        </a>
        <button class="navbar-toggler" type="button" , data-toggle="collapse" data-target="#navbarMobile"
            aria-controls="#navbarMobile" aria-expanded="false" aria-label="Botão de Navegação mobile">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMobile">
            <ul class="navbar-nav ml-auto mr-3" id="navbarMobile">
                <li class="nav-item">
                    <a class="nav-link" href="../index.html">Página Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./produtos.php">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contatos.php">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pedidos.php">Pedidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./lojas.php">Nossas Lojas</a>
                </li>
            </ul>
        </div>
    </nav>
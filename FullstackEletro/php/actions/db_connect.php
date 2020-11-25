<?php

    function query($sql) {
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "fullstackeletro";

        $connect = mysqli_connect($servidor, $usuario, $senha, $banco);
        $resultado = mysqli_query($connect, $sql);
        mysqli_close($connect);
        return $resultado;
    }

    function nonquery($sql) {
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "fullstackeletro";

        $connect = mysqli_connect($servidor, $usuario, $senha, $banco);
        $resultado = mysqli_query($connect, $sql);
        mysqli_close($connect);
    }

?>
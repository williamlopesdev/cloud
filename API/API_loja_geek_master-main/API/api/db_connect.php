<?php

    function query($sql) {
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        /*$banco = "mgeek";*/
        $banco = "mgeek2";

        $connect = mysqli_connect($servidor, $usuario, $senha, $banco);
        $resultado = mysqli_query($connect, $sql);
        mysqli_close($connect);
        return $resultado;
    }

    function nonquery($sql) {
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
       /* $banco = "mgeek";*/
       $banco = "mgeek2";


        $connect = mysqli_connect($servidor, $usuario, $senha, $banco);
        $resultado = mysqli_query($connect, $sql);
        mysqli_close($connect);
    }

?>
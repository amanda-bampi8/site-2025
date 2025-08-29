<?php
        session_start();

        if(!$_SESSION['email']) {
            header('location: login.php');
            exit();
        }


        $usuario   = $_SESSION['id_operadores'];
        $noperador = $_SESSION['nome_operadores'];
        $soperador = $_SESSION['sobrenome_operadores'];
        $nivel     = $_SESSION['nivel'];

        $mestre      = 1;
        $colaborador = 2;
        $cliente     = 3;

    ?>

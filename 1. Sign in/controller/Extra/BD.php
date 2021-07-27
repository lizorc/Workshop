<?php

    session_start();

    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $DBname = 'Actividades_Topicos';

    $connection = mysqli_connect($host, $user, $password, $DBname);

    if(!$connection){

        $_SESSION['MSM'][] = "Conexión Fallida";
        exit;
    }
?>
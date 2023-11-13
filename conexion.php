<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "usuarios";

    $conex = new mysqli($servidor, $usuario, $password, $db);

    if($conex->connect_error){
        echo '<script>alert("No se pudo conectar a la base de datos")</script>';
    }else{
        echo '<script>alert("Conectado con la base de datos ")</script>';

    }
    /*$sql = "CREATE DATABASE usuarios";

    if ($conex->query($sql) === true){
        echo '<script>alert("Base de datos creada con exito  ")</script>';
    }else{
        echo '<script>alert("No se pudo crear la base de datos ")</script>';
    }*/

    /*$sql = "CREATE TABLE registro (
        id INT (11) AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(120) NOT NULL,
        apellido VARCHAR(120) NOT NULL,
        correo CHAR(120) NOT NULL,
        contrasena VARCHAR(120) NOT NULL,
        fecha DATE
    )";
    if($conex->query($sql) === true){
        echo '<script>alert("tabla de datos creada con exito  ")</script>';
    }else{
        echo '<script>alert("tabla de datos creada con exito  ")</script>';
    }*/
?>
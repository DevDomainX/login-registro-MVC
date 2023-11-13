<?php
include("conexion.php");


if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['correo']) && isset($_POST['pass'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $fecha = date("Y-m-d");
        
    $sql = "INSERT INTO registro (id, nombre, apellido, correo, contrasena, fecha) VALUES (NULL, '$nombre', '$apellido', '$correo', '$pass', '$fecha')";

    if($conex->query($sql) === true){
            echo '<script>alert("datos guardados con exito")</script>';
            echo'<h1><a href="login.html">volver al login</a></h1>';
    }else{
        echo '<script>alert("Error datos No gurdados")</script>';
    }
}else{
    echo 'No puede aver campos vacios';
}
?>
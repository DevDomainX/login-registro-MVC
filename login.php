<?php

include("conexion.php");
session_start();

$nombre = $_POST['nombre'];
$password = $_POST['pass'];

// añadiría un limit 1 a la consulta pues solo esperamos un registro
$sql = "SELECT * FROM registro WHERE nombre = '$nombre' AND contrasena = '$password'";  

$resultado = $conex->query($sql);

if($resultado->num_rows > 0){ 
    header("Location: index.php");
} else { 
    echo'<center><h1>Usuario No Existe</h1></center>';
    echo '<center><a href="login.html">Login</a></center>';
    
} 
?>
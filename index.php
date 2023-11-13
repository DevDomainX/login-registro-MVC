<?php

    
    session_start();
    $nombre = $_SESSION['nombre'];
    if(!empty($_SESSION['nombre'])){
        header("Location: login.html");
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Axeso entrada</title>
</head>
<body>
    <center><h1>Bienvenido ingresaste... felicitaciones</h1></center>

    <center><h1>Informacion confidencial</h1></center>
    <br>
    <br>
    <center><a href="login.html">salir</a></center>


    
</body>
</html>




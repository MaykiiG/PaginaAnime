<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/crear.css">
    <title>Registro kawie</title>
</head>
<body>
    <h1>tienda kawie</h1>
    <form method="POST" action="registrar.php">
        <label for="nombre">Indicar nombre del usuario</label><br>
        <input 
            type="text" 
            id="nombre" 
            name="nombre" 
            required
            max length="100"/><br>
            <label for="nombre">Indicar el apellido del usuario</label><br>
        <input 
            type="text" 
            id="apellido" 
            name="apellido" 
            required
            max length="100"/><br>
        
        <label for="nombre">Indicar dni del usuario</label><br>
        <input 
            type="text" 
            id="dni" 
            name="dni" 
            required
            max length="100"/><br>

            <label for="nombre">Indicar correo del usuario</label><br>
        <input 
            type="text" 
            id="correo" 
            name="correo" 
            required
            max length="100"/><br>

            <label for="nombre">Indicar telefono del usuario</label><br>
        <input 
            type="text" 
            id="telefono" 
            name="telefono" 
            required
            max length="100"/><br>
            
            <label for="nombre">Indicar direccion del usuario</label><br>
        <input 
            type="text" 
            id="direccion" 
            name="direccion" 
            required
            max length="100"/><br>

            <label for="nombre">Indicar contraseña del usuario</label><br>
        <input 
            type="password" 
            id="clave" 
            name="clave" 
            required
            max length="100"/><br>
            <input type="submit" value="registrar" name="registrar">
            <a href="index.php"><p>Volver</p></a>
            
    </form>
</body>
</html>
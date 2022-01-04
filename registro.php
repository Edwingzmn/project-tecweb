<?php
include('conexion.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="/project/css/main.css" type="text/css"/>
</head>
<body class="fondo-registro">
    <div class="registro">
    <form action="/project/add-user.php" method="POST" class="form-registro">
        <img src="/project/src/logo.png" width="160px" height="100px" alt="">
        <label for="">Nombre completo:</label>
        <input type="text" name="nombre" required>
        <label for="">Usuario:</label>
        <input type="text" name="usuario" required>
        <label for="">Tipo de usuario:</label>
        <select name="tipo_usuario" id="tipo_usuario" required>
            <option value="Administrador">Administrador</option>
            <option value="Alumno" selected>Alumno</option>
            <option value="Profesor">Profesor</option>
        </select>
        <label for="">Correo electrónico:</label>
        <input type="email" name="correo" required>
        <label for="">Contraseña:</label>
        <input type="password" name="contrasena">
        <button type="submit" class="enviar-datos" onclick="alert('Datos enviados satisfactoriamente...')" name="guardar-datos">Registrarme</button><br>      
        <button type="reset" class="limpiar-datos">Limpiar datos</button>   
    </form>
    </div>
</body>
</html>
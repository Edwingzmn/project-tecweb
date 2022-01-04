<?php
include('conexion.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Usuario alumno</title>
    <link rel="stylesheet" href="/project/css/main-alumno.css" type="text/css" />
</head>

<body>
    <header>
    <img class="logo"
            src="/project/src/logo.png"
            alt="logo" />
        <h1>Sistema de Gestión Escolar</h1>
    </header>
        <nav>
            <ul class="nav">
                <li><a href="/project/usuario-alumno.php" style="background-color: blue;">Bloque</a>
                    <ul>
                        <li><a href="/project/usuario-alumno-bloque_uno.php">Bloque 1</a></li>
                        <li><a href="/project/usuario-alumno-bloque_dos.php">Bloque 2</a></li>
                        <li><a href="#">Bloque 3</a></li>
                    </ul>
                </li>
                <li><a href="/project/usuario-alumno-temas.php">Temas</a></li>
                <li><a href="/project/usuario-alumno-materia.php">Materia</a></li>
                <li><a href="">Actividad</a></li>
                <li><a href="">Tipo de material</a>
                    <ul>
                        <li><a href="/project/usuario-alumno-videos.php">Video</a></li>
                        <li><a href="">Material para imprimir</a></li>
                        <li><a href="">Actividad en línea</a></li>
                        <li><a href="">Examen o evaluación</a></li>
                    </ul>
                </li>
                <li><a href="">Actualización</a></li>
                <li><a href="">Soporte</a></li>
                <li><a href="#">Ayuda</a></li>
            </ul>
        </nav>
    <section name="area-desplegar">
    <h2>Sección de ayuda</h2>
        <p>Si tienes alguna duda o comentario, puedes enviarnos un correo a <a href="mailto:edwiingzmn@gmail.com">contacto@equipo3.com.mx</a> y con gusto
            podemos ayudarte, o si lo prefieres llámanos al <b>55 1311 7958</b>.
        </p>
    </section>
    <aside>
        <h2>Inicio de sesión</h2>
        <form action="" class="login-form">
            <label for="">Usuario:</label>
            <input type="email" disabled>
            <label for="">Contraseña:</label>
            <input type="email" disabled>
            <button type="submit" class="inactive" disabled>Iniciar sesión</button>

            <!-- <a href="#">Registrarse</a>
            <a href="#">Recuperar contraseña</a> -->
            <p style="margin-top: 7rem;"><b>
            <?php
            date_default_timezone_set('America/Mexico_City');
            $DateAndTime = date('m-d-Y h:i:s a', time());  
            echo  $DateAndTime;
            ?></b>
            </p>
        </form>
    </aside>
    <footer>
        <h4>Copyright © 2021 Equipo 3 | Todos los derechos reservados.</h4> 
        <h4>equipo3_tecweb@mail.com</h4>
    </footer>
</body>
</html>
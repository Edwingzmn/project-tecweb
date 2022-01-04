<?php
include('conexion.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Usuario alumno | Temas</title>
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
                <li><a href="/project/usuario-alumno.php">Bloque</a>
                    <ul>
                        <li><a href="/project/usuario-alumno-bloque_uno.php">Bloque 1</a></li>
                        <li><a href="/project/usuario-alumno-bloque_dos.php">Bloque 2</a></li>
                        <li><a href="#">Bloque 3</a></li>
                    </ul>
                </li>
                <li><a href="/project/usuario-alumno-temas.php" style="background-color: blue;">Temas</a></li>
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
                <li><a href="/project/usuario-alumno-ay.php">Ayuda</a></li>
            </ul>
        </nav>
    <section name="area-desplegar">
        <h2>Temas de la unidad 1</h2>
        <table class="tabla" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID_tema</th>
                            <th>Bloque:</th>
                            <th>Tema:</th>
                            <th>Subtema:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM bloque_uno";
                            $result_data = mysqli_query($conexion,$query);
                            while($row = mysqli_fetch_array($result_data)){
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row['id_mat'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['bloque'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['tema'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['subtema'] ?>
                                    </td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
                <h2 style="margin-top: 2rem;">Temas de la unidad 2</h2>
                <table class="tabla" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID_mat</th>
                            <th>Bloque:</th>
                            <th>Tema:</th>
                            <th>Subtema:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM bloque_dos";
                            $result_data = mysqli_query($conexion,$query);
                            while($row = mysqli_fetch_array($result_data)){
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row['id_mat'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['bloque'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['tema'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['subtema'] ?>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
    </section>
    <aside>
        <h2>Inicio de sesión</h2>
        <form action="" class="login-form">
            <label for="">Usuario:</label>
            <input type="email" required>
            <label for="">Contraseña:</label>
            <input type="email" required>
            <button type="submit">Iniciar sesión</button>

            <a href="#">Registrarse</a>
            <a href="#">Recuperar contraseña</a>
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
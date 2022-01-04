<?php
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
session_start();
$_SESSION['usuario'] = $usuario;
include('conexion.php');

$consulta = "SELECT*FROM usuarios where usuario = '$usuario' and contrasena = '$contrasena' ";
$result = mysqli_query($conexion,$consulta);
$rows = mysqli_num_rows($result);

if($rows){
    include("usuario-noregistrado.html");
    header("location:usuario-alumno.php");
}else{
    ?>
    <?php
    include("usuario-noregistrado.html");
    ?>
    <script>
        alert('Usuario y/o contraseña inválidos. ¡Intente de nuevo!')
    </script>    
    <?php
}
mysqli_free_result($result);
mysqli_close($conexion);
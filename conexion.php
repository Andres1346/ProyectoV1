<?php
$servidor = "localhost";
$usuario = "root";       // o el usuario que tengas
$password = "";          // pon tu contraseña si tiene
$bd = "sistema_login";

$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>

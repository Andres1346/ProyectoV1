<?php
$servidor = "localhost";
$usuario = "u342021155_NOMBREBASE2";
$password = "CamiloA10!"; // tu contraseña real
$bd = "u342021155_BASE1";

// Crear conexión con MySQLi
$conexion = new mysqli($servidor, $usuario, $password, $bd);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>

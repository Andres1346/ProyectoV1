<?php
session_start();

if (!isset($_SESSION['correo'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body>
    <div class="formulario">
        <h1>¡Bienvenido!</h1>
        <p>Has iniciado sesión como: <strong><?= $_SESSION['correo'] ?></strong></p>
        
        <form action="logout.php" method="post">
            <input type="submit" value="Cerrar sesión">
        </form>
    </div>
</body>
</html>
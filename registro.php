<?php
include('conexion.php');

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $correo = validate($_POST['correo']);
    $clave = validate($_POST['contraseña']);

    if (empty($correo) || empty($clave)) {
        $mensaje = "Todos los campos son obligatorios.";
    } else {
        // Verifica si el correo ya existe
        $verificar = "SELECT * FROM correo WHERE loginusuarios = '$correo'";
        $resultado = mysqli_query($conexion, $verificar);

        if (mysqli_num_rows($resultado) > 0) {
            $mensaje = "Este correo ya está registrado.";
        } else {
            $clave_encriptada = md5($clave); // Usa password_hash en producción

            $sql = "INSERT INTO correo (loginusuarios, contraseña, correo)
                    VALUES ('$correo', '$clave_encriptada', '$correo')";

            if (mysqli_query($conexion, $sql)) {
                $mensaje = "¡Registro exitoso! <a href='login.php'>Iniciar sesión</a>";
            } else {
                $mensaje = "Error al registrar: " . mysqli_error($conexion);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body>
    <div class="formulario">
        <h1>Registro de Usuario</h1>

        <?php if (!empty($mensaje)): ?>
            <p style="color:<?= strpos($mensaje, 'exitoso') !== false ? 'green' : 'red'; ?>;">
                <?= $mensaje ?>
            </p>
        <?php endif; ?>

        <form method="post" action="">
            <div>
                <input type="email" name="correo" required placeholder="Correo electrónico">
            </div>
            <div>
                <input type="password" name="contraseña" required placeholder="Contraseña">
            </div>
            <input type="submit" value="Registrarse">
            <div class="login">
                ¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a>
            </div>
        </form>
    </div>
</body>
</html>

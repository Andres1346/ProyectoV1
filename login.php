<?php
session_start();
include('conexion.php');

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Correo']) && isset($_POST['Contraseña'])) {
        function validate($data) {
            return htmlspecialchars(stripslashes(trim($data)));
        }

        $usuario = validate($_POST['Correo']);
        $clave = validate($_POST['Contraseña']);

        if (empty($usuario) || empty($clave)) {
            $error = "Todos los campos son requeridos.";
        } else {
            $clave_encriptada = md5($clave);
            $sql = "SELECT * FROM correo WHERE loginusuarios = '$usuario' AND contraseña = '$clave_encriptada'";
            $result = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['correo'] = $row['correo'];
                $_SESSION['id'] = $row['id'];
                header("Location: index.php");
                exit();
            } else {
                $error = "Usuario o contraseña incorrectos.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body>
    <div class="formulario">
        <h1>Iniciar Sesión</h1>

        <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

        <form method="post">
            <input type="text" name="Correo" placeholder="Correo" required>
            <input type="password" name="Contraseña" placeholder="Contraseña" required>
            <input type="submit" value="Ingresar">
            <div class="volver">
                ¿No tienes cuenta? <a href="registro.php">Registrarse</a>
            </div>
        </form>
    </div>
</body>
</html>

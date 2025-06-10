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

    $correo = validate($_POST['Correo']);
    $clave = validate($_POST['Contraseña']);

    if (empty($correo) || empty($clave)) {
        $mensaje = "Todos los campos son obligatorios.";
    } else {
        $verificar = "SELECT * FROM correo WHERE loginusuarios = '$correo'";
        $resultado = mysqli_query($conexion, $verificar);

        if (mysqli_num_rows($resultado) > 0) {
            $mensaje = "Este correo ya está registrado.";
        } else {
            $clave_encriptada = md5($clave); // En producción, usar password_hash
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
  <meta charset="utf-8">
  <title>Registro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      background-color: #000;
      font-family: Arial, sans-serif;
      overflow: hidden;
      position: relative;
    }

    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(270deg, #ff9900, #000000, #ff9900);
      background-size: 600% 600%;
      animation: wave 20s ease infinite;
      z-index: 0;
      opacity: 0.1;
    }

    @keyframes wave {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .login-root {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      position: relative;
      z-index: 1;
    }

    .formbg {
      background: rgba(0, 0, 0, 0.85);
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(255,165,0,0.6);
      width: 350px;
      color: white;
    }

    h1 {
      color: orange;
      text-align: center;
      margin-bottom: 20px;
    }

    .formbg-inner span {
      display: block;
      text-align: center;
      color: #ff9900;
      margin-bottom: 20px;
      font-size: 18px;
    }

    .form-input-material {
      position: relative;
      margin-bottom: 25px;
    }

    .form-control-material {
      width: 100%;
      padding: 10px 0;
      background: transparent;
      border: none;
      border-bottom: 1px solid orange;
      color: white;
      font-size: 16px;
      outline: none;
    }

    .form-input-material label {
      position: absolute;
      top: 0;
      left: 0;
      padding: 10px 0;
      color: orange;
      pointer-events: none;
      transition: 0.3s;
    }

    .form-control-material:focus ~ label,
    .form-control-material:valid ~ label {
      top: -20px;
      font-size: 12px;
      color: #ff9900;
    }

    .btn {
      width: 100%;
      padding: 12px;
      background-color: orange;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      color: black;
      cursor: pointer;
      transition: background 0.3s;
    }

    .btn:hover {
      background-color: #ff8800;
    }

    .volver {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }

    .volver a {
      color: orange;
      text-decoration: none;
    }

    .volver a:hover {
      text-decoration: underline;
    }

    .error {
      color: red;
      text-align: center;
      margin-bottom: 15px;
    }

    .success {
      color: limegreen;
      text-align: center;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

  <div class="login-root">
    <div class="formbg">
      <form method="post" class="formbg-inner">
        <h1>Registro</h1>
        <span>Crea una nueva cuenta</span>

        <?php if (!empty($mensaje)): ?>
          <p class="<?= strpos($mensaje, 'exitoso') !== false ? 'success' : 'error'; ?>">
            <?= $mensaje ?>
          </p>
        <?php endif; ?>

        <div class="form-input-material">
          <input type="email" name="Correo" id="Correo" placeholder=" " autocomplete="off" class="form-control-material" required>
          <label for="Correo">Correo electrónico</label>
        </div>

        <div class="form-input-material">
          <input type="password" name="Contraseña" id="Contraseña" placeholder=" " autocomplete="off" class="form-control-material" required>
          <label for="Contraseña">Contraseña</label>
        </div>

        <button type="submit" class="btn">Registrarse</button>

        <div class="volver">
          ¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a>
        </div>
      </form>
    </div>
  </div>

</body>
</html>

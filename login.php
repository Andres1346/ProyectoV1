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


                setcookie("usuario", $row['correo'], time() + 3600, "/"); // dura 1 hora

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
  <meta charset="utf-8">
  <title>Iniciar Sesión</title>
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
  </style>
</head>
<body>

  <div class="login-root">
    <div class="formbg">
      <form method="post" class="formbg-inner">
        <h1>Bienvenido</h1>
        <span>Inicia sesión en tu cuenta</span>

        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>

        <div class="form-input-material">
          <input type="text" name="Correo" id="Correo" placeholder=" " autocomplete="off" class="form-control-material" required>
          <label for="Correo">Correo</label>
        </div>

        <div class="form-input-material">
          <input type="password" name="Contraseña" id="Contraseña" placeholder=" " autocomplete="off" class="form-control-material" required>
          <label for="Contraseña">Contraseña</label>
        </div>

        <button type="submit" class="btn">Ingresar</button>

        <div class="volver">
          ¿No tienes cuenta? <a href="registro.php">Registrarse</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

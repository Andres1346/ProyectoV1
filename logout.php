<?php
session_start();
session_unset();
session_destroy();

// Eliminar cookie del usuario
setcookie("usuario", "", time() - 3600, "/");

header("Location: login.php");
exit();
?>


<?php
session_start();
if (!isset($_SESSION['correo'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    $producto = [
        'nombre' => $nombre,
        'precio' => $precio,
        'cantidad' => 1
    ];

    // Si no hay carrito, lo creamos
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    // Buscar si ya existe el producto en el carrito
    $encontrado = false;
    foreach ($_SESSION['carrito'] as &$item) {
        if ($item['nombre'] === $nombre) {
            $item['cantidad']++;
            $encontrado = true;
            break;
        }
    }

    if (!$encontrado) {
        $_SESSION['carrito'][] = $producto;
    }

    header('Location: index.php');
    exit();
}
?>


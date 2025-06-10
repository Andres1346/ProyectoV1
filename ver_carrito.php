<?php
session_start();
if (!isset($_SESSION['correo'])) {
    header("Location: login.php");
    exit();
}

// Eliminar producto
if (isset($_GET['eliminar'])) {
    $nombre = $_GET['eliminar'];
    foreach ($_SESSION['carrito'] as $i => $producto) {
        if ($producto['nombre'] === $nombre) {
            unset($_SESSION['carrito'][$i]);
            $_SESSION['carrito'] = array_values($_SESSION['carrito']);
            break;
        }
    }
}

// Vaciar carrito
if (isset($_GET['vaciar'])) {
    unset($_SESSION['carrito']);
    header("Location: ver_carrito.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Segoe+UI:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #1a1a1a 0%, #2c2c2c 100%);
            color: #ffffff;
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        header {
            background-color: #ff6f00;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .contenedor {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }

        h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            color: #000;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        th {
            background-color: #ff6f00;
            color: white;
            padding: 1rem;
            font-weight: bold;
        }

        td {
            padding: 1rem;
            text-align: center;
            border-top: 1px solid #eee;
        }

        tr:hover {
            background-color: #f0f0f0;
        }

        .btn {
            padding: 0.6rem 1rem;
            background-color: #ff6f00;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #e65c00;
        }

        .acciones {
            margin-top: 20px;
            display: flex;
            justify-content: flex-end;
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
        }

        .acciones p {
            font-size: 1.2rem;
            margin-right: auto;
            font-weight: bold;
        }

        .mensaje-vacio {
            background: #fff;
            color: #000;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .mensaje-vacio p {
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>

<header>
    <h1><span style="color: white;">QUE</span><span style="color: #ffeb3b;">DELI</span></h1>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="menu.php">Menú</a>
        <a href="reseñas.php">Reseñas y Ubicación</a>
        <a href="nosotros.php">Nosotros</a>
        <a href="ver_carrito.php">Carrito</a>
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</header>

<div class="contenedor">
    <h2>Tu carrito de compras</h2>

    <?php if (!empty($_SESSION['carrito'])): ?>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                foreach ($_SESSION['carrito'] as $producto):
                    $subtotal = $producto['precio'] * $producto['cantidad'];
                    $total += $subtotal;
                ?>
                <tr>
                    <td><?= htmlspecialchars($producto['nombre']) ?></td>
                    <td>$<?= number_format($producto['precio'], 0, ',', '.') ?></td>
                    <td><?= $producto['cantidad'] ?></td>
                    <td>$<?= number_format($subtotal, 0, ',', '.') ?></td>
                    <td><a href="ver_carrito.php?eliminar=<?= urlencode($producto['nombre']) ?>" class="btn">Eliminar</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="acciones">
            <p>Total: $<?= number_format($total, 0, ',', '.') ?></p>
            <a href="ver_carrito.php?vaciar=1" class="btn">Vaciar carrito</a>
            <a href="index.php" class="btn">Seguir comprando</a>
        </div>
    <?php else: ?>
        <div class="mensaje-vacio">
            <p>No hay productos en el carrito.</p>
            <a href="menu.php" class="btn">Ir al menú</a>
        </div>
    <?php endif; ?>
</div>

</body>
</html>

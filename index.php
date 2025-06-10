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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>QueDeli</title>

  <!-- Favicon -->
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #1a1a1a;
      color: #ffffff;
    }

    .header {
      background-color: #ff6f00;
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo p {
      font-size: 24px;
      font-weight: bold;
      margin: 0;
      color: white;
    }

    .logo span {
      color: #ffc107;
    }

    .menu ul {
      list-style: none;
      display: flex;
      gap: 20px;
      margin: 0;
      padding: 0;
    }

    .menu a {
      text-decoration: none;
      color: white;
      font-weight: bold;
      transition: color 0.3s;
    }

    .menu a:hover {
      color: #ffc107;
    }

    .bienvenida {
      position: fixed;
      bottom: -100px;
      left: 50%;
      transform: translateX(-50%);
      background-color: #ff6f00;
      color: #fff;
      padding: 15px 25px;
      border-radius: 8px;
      font-weight: bold;
      font-size: 1.1rem;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      z-index: 999;
      opacity: 0;
      animation: slideUpFadeIn 1s forwards, fadeOutDown 1s 4s forwards;
    }

    @keyframes slideUpFadeIn {
      to {
        bottom: 20px;
        opacity: 1;
      }
    }

    @keyframes fadeOutDown {
      to {
        bottom: 0px;
        opacity: 0;
      }
    }

    .contenedor {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .presentacion {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      margin-top: 20px;
    }

    .informacion {
      flex: 1 1 45%;
    }

    .informacion h1 {
      font-size: 2.2rem;
      color: #ff6f00;
    }

    .informacion p {
      font-size: 1.1rem;
      margin: 10px 0;
    }

    .btn-explorar {
      display: inline-block;
      padding: 10px 20px;
      margin-top: 15px;
      background-color: #ff6f00;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    .btn-explorar:hover {
      background-color: #e65c00;
    }

    .presentacion--imagen {
      flex: 1 1 45%;
      text-align: center;
    }

    .presentacion--imagen img {
      max-width: 100%;
      height: auto;
    }

    .comida--titulo {
      text-align: center;
      font-size: 2rem;
      margin: 40px 0 20px;
      color: #ff6f00;
    }

    .platos {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
      gap: 20px;
    }

    .plato {
      background-color: #2c2c2c;
      border-radius: 10px;
      padding: 15px;
      text-align: center;
      opacity: 0;
      transform: translateY(50px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .plato.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .plato img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 10px;
    }

    .plato h1 {
      font-size: 1.2rem;
      margin: 15px 0 10px;
      color: #ffc107;
    }

    .plato p {
      font-size: 0.95rem;
      margin-bottom: 10px;
    }

    .plato--info {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .plato--info p {
      font-weight: bold;
      color: #fff;
    }

    .plato--info button {
      padding: 5px 10px;
      background-color: #ff6f00;
      color: white;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }

    .plato--info button:hover {
      background-color: #e65c00;
    }

    @media screen and (max-width: 768px) {
      .presentacion {
        flex-direction: column;
        text-align: center;
      }

      .informacion,
      .presentacion--imagen {
        flex: 1 1 100%;
      }

      .menu ul {
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
      }
    }
  </style>
</head>
<body>

  <header class="header">
    <div class="logo">
      <p>QUE<span>DELI</span></p>
    </div>
    <nav class="menu">
      <ul class="navegacion">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="menu.php">Menú</a></li>
        <li><a href="reseñas.php">Reseñas y Ubicación</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="ver_carrito.php">Carrito</a></li>
        <li><a href="logout.php">Cerrar sesión</a></li>
      </ul>
    </nav>
  </header>

  <?php if (isset($_COOKIE['usuario'])): ?>
    <div class="bienvenida" id="bienvenida">
      ¡Hola, <?= htmlspecialchars($_COOKIE['usuario']) ?>! Bienvenido 👋
    </div>
  <?php endif; ?>

  <div class="contenedor">
    <aside class="presentacion">
      <div class="informacion">
        <h1>¡Lo mejor para ti te espera!</h1>
        <p>El mejor sabor con el mejor sazón...</p>
        <p>Somos los número 1 en toda COLOMBIA con envíos RÁPIDOS Y EFICIENTES</p>
        <a href="menu.php" class="btn-explorar">Explorar menú</a>
      </div>
      <div class="presentacion--imagen">
        <img src="Imagenes/design.png" alt="Imagen presentacion">
      </div>
    </aside>

    <main class="comida">
      <h2 class="comida--titulo">Platos populares</h2>
      <div class="platos">
        <?php
        $platos = [
            ["img" => "hamburguesa.png", "nombre" => "Hamburguesa de Carne", "descripcion" => "Pan brioche, carne de res 150gr, queso cheddar, cebolla caramelizada, lechuga, tomate, bbq maple y mayonesa de pimentón.", "precio" => 18000],
            ["img" => "pollo-frito.png", "nombre" => "Pollo grande frito", "descripcion" => "8 piezas de pollo de 120gr frito a la broaster con miel, salsa de tomate, y picante", "precio" => 15000],
            ["img" => "papas-fritas.png", "nombre" => "Papas grandes fritas", "descripcion" => "Papas a la francesa con salsa de tomate", "precio" => 12000],
            ["img" => "hamburguesa-grande.png", "nombre" => "Hamburguesa XL", "descripcion" => "Pan brioche, carne de res 150 gr, queso philadelphia, queso cheddar, tocineta caramelizada en bbq maple, lechuga, tomate, bbq maple y mayonesa de pimentón.", "precio" => 18000],
        ];

        foreach ($platos as $plato) {
            echo '<article class="plato">';
            echo '<img src="Imagenes/' . $plato["img"] . '" alt="' . $plato["nombre"] . '">';
            echo '<h1>' . $plato["nombre"] . '</h1>';
            echo '<p>' . $plato["descripcion"] . '</p>';
            echo '<div class="plato--info">';
            echo '<p>$' . number_format($plato["precio"], 0, ",", ".") . '</p>';
            echo '<form method="POST" action="carrito.php">';
            echo '<input type="hidden" name="nombre" value="' . $plato["nombre"] . '">';
            echo '<input type="hidden" name="precio" value="' . $plato["precio"] . '">';
            echo '<button type="submit">+</button>';
            echo '</form>';
            echo '</div>';
            echo '</article>';
        }
        ?>
      </div>
    </main>
  </div>

  <script>
    // Animación de platos al hacer scroll
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });

    document.querySelectorAll('.plato').forEach(plato => {
      observer.observe(plato);
    });
  </script>
</body>
</html>

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
  <title>Reseñas y Ubicación</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f4f4f4;
      color: #333;
      min-height: 100vh;
    }

    /* Header */
    .header {
      background-color: #ffbc2c;
      padding: 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }
    .logo p {
      font-size: 24px;
      font-weight: bold;
      color: white;
      margin: 0;
    }
    .logo span {
      color: #ffad31;
    }
    .hamburguesa img {
      width: 30px;
      cursor: pointer;
    }
    .menu {
      flex-grow: 1;
      display: flex;
      justify-content: flex-end;
    }
    .menu ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      gap: 20px;
      align-items: center;
    }
    .menu a {
      text-decoration: none;
      color: white;
      font-weight: bold;
    }

    /* Sección de testimonios */
    .testimonials-section {
      padding: 40px 20px;
      background-color: #fff;
      text-align: center;
    }

    .testimonials {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .testimonial {
      display: flex;
      align-items: center;
      gap: 20px;
      padding: 20px;
      background-color: #e9ecef;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .testimonial.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .testimonial img {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      object-fit: cover;
    }

    .stars {
      color: #FFD700;
      font-size: 1.2em;
    }

    /* Mapa */
    .map-container {
      width: 100%;
      height: 400px;
      background-color: #e9ecef;
      margin-top: 30px;
      text-align: center;
    }

    iframe {
      width: 100%;
      height: 100%;
      border: none;
    }
  </style>
</head>
<body>

<header class="header">
  <div class="logo">
    <p>QUE<span>DELI</span></p>
  </div>
  <div class="hamburguesa">
    <img src="Imagenes/menu.png" alt="Menu hamburguesa">
  </div>
  <nav class="menu">
    <ul class="navegacion">
      <li><a href="index.php">Inicio</a></li>
      <li><a href="menu.php">Menu</a></li>
      <li><a href="reseñas.php">¿Dónde estamos?</a></li>
      <li><a href="nosotros.php">Nosotros</a></li>
      <li><a href="logout.php">Cerrar sesión</a></li>
    </ul>
  </nav>
</header>

<section class="testimonials-section">
  <h2>Lo que dicen nuestros clientes</h2>
  <div class="testimonials">
    <div class="testimonial">
      <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Cliente 1" />
      <div>
        <h3>Juan Pérez</h3>
        <p>"Servicio excelente, 100% recomendado."</p>
        <div class="stars">★★★★★</div>
      </div>
    </div>
    <div class="testimonial">
      <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Cliente 2" />
      <div>
        <h3>María González</h3>
        <p>"Muy profesionales y atentos."</p>
        <div class="stars">★★★★★</div>
      </div>
    </div>
    <div class="testimonial">
      <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Cliente 3" />
      <div>
        <h3>Carlos Ramírez</h3>
        <p>"Un equipo increíble, excelente trabajo."</p>
        <div class="stars">★★★★★</div>
      </div>
    </div>
    <div class="testimonial">
      <img src="https://randomuser.me/api/portraits/women/4.jpg" alt="Cliente 4" />
      <div>
        <h3>Laura Fernández</h3>
        <p>"Totalmente satisfecho con el servicio."</p>
        <div class="stars">★★★★★</div>
      </div>
    </div>
    <div class="testimonial">
      <img src="https://randomuser.me/api/portraits/men/5.jpg" alt="Cliente 5" />
      <div>
        <h3>Roberto López</h3>
        <p>"Atención de primera, gracias!"</p>
        <div class="stars">★★★★★</div>
      </div>
    </div>
  </div>
</section>

<section class="map-container">
  <h2>Encuéntranos en el mapa</h2>
  <iframe src="https://www.google.com/maps/embed?pb=YOUR_MAP_URL_HERE" allowfullscreen loading="lazy"></iframe>
</section>

<script>
  function revealOnScroll() {
    const elements = document.querySelectorAll(".testimonial");
    elements.forEach(el => {
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight * 0.85) {
        el.classList.add("visible");
      }
    });
  }

  // Ejecutar al cargar y al hacer scroll
  document.addEventListener("DOMContentLoaded", revealOnScroll);
  document.addEventListener("scroll", revealOnScroll);
</script>

</body>
</html>

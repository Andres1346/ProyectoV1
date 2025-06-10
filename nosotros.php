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
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>¿Quiénes Somos?</title>
  <style>
    body {
      font-family: 'Helvetica', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #1a1a1a;
      color: white;
    }

    header {
      background-color: #ff6f00;
      color: white;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      margin: 0;
      font-size: 24px;
      color: white;
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

    main {
      padding: 30px;
    }

    .contenido {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      margin-bottom: 40px;
      align-items: center;
      justify-content: center;
    }

    .slider {
      flex: 1 1 40%;
      max-width: 500px;
      position: relative;
      overflow: hidden;
      border-radius: 10px;
    }

    .slides {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .slide {
      min-width: 100%;
      box-sizing: border-box;
    }

    .slide img {
      width: 100%;
      height: auto;
      display: block;
      border-radius: 8px;
    }

    .prev, .next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
      font-size: 18px;
      border-radius: 50%;
      z-index: 10;
    }

    .prev { left: 10px; }
    .next { right: 10px; }

    .texto {
      flex: 1 1 50%;
      min-width: 300px;
    }

    .titulo-texto {
      text-align: center;
      font-size: 32px;
      color: white;
      margin-bottom: 20px;
    }

    .texto h2 {
      color: #ffbc2c;
      margin-bottom: 15px;
      text-align: left;
    }

    .texto p {
      color: #ddd;
      text-align: justify;
      line-height: 1.6;
      margin-bottom: 15px;
    }

    .team {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      margin-bottom: 40px;
    }

    .team-member {
      text-align: center;
      max-width: 200px;
      flex: 1 1 150px;
    }

    .team-member img {
      width: 150px;
      height: 200px;
      object-fit: cover;
      border-radius: 15px;
    }

    .team-member h3 {
      margin-top: 10px;
      color: white;
    }

    .team-member p {
      color: #ccc;
    }

    .vision {
      background-color: #ff6f00;
      padding: 20px 30px;
      margin: 20px auto;
      max-width: 900px;
      border-radius: 10px;
      box-sizing: border-box;
    }

    .vision h2 {
      color: white;
      margin-bottom: 20px;
      text-align: center;
    }

    .vision p {
      color: white;
      line-height: 1.6;
      margin: auto;
      text-align: justify;
    }

    @media screen and (max-width: 768px) {
      .contenido {
        flex-direction: column;
      }
      .slider, .texto {
        max-width: 100%;
      }
    }

    .animacion-scroll {
      opacity: 0;
      transform: translateY(50px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .animacion-scroll.visible {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body>

  <header>
    <h1>QUEDELI</h1>
    <nav>
      <a href="index.php">Inicio</a>
      <a href="menu.php">Menú</a>
      <a href="reseñas.php">Reseñas y Ubicación</a>
      <a href="nosotros.php">Nosotros</a>
      <a href="ver_carrito.php">Carrito</a>
      <a href="logout.php">Cerrar Sesión</a>
    </nav>
  </header>

  <main>
    <div class="contenido">
      <div class="slider">
        <div class="slides">
          <div class="slide">
            <img src="Imagenes/a657a3wv.png" alt="Interior del restaurante con clientes">
          </div>
          <div class="slide">
            <img src="https://ristorantepizzeriailbu.it/wp-content/uploads/2020/11/ristorante-pizzeria-gorlago.jpg" alt="Vista exterior del restaurante">
          </div>
        </div>
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>

      <div class="texto animacion-scroll">
        <h1 class="titulo-texto">¿Quiénes Somos?</h1>
        <h2>Nuestra Misión</h2>
        <p>
          Somos más que una empresa de comidas rápidas: somos una experiencia gastronómica creada para aquellos que buscan sabor, calidad y rapidez en cada bocado.

Nuestra historia nace del deseo de ofrecer a nuestros clientes platos deliciosos, preparados con ingredientes frescos y cuidadosamente seleccionados. Combinamos lo mejor de la cocina urbana con un toque casero que nos diferencia, apostando por recetas tradicionales con un enfoque moderno y dinámico.

Creemos que comer rápido no significa comer mal. Por eso, cada uno de nuestros productos es elaborado con pasión y compromiso, garantizando frescura, sabor auténtico y satisfacción en cada visita.

Desde hamburguesas artesanales hasta papas crocantes, pasando por alitas, wraps y bebidas refrescantes, nuestra misión es ofrecer un menú variado que se adapte a todos los gustos y estilos de vida.

Ya sea que vengas por una comida rápida o por un momento especial con amigos y familia, en [Nombre del Restaurante] te esperamos con las puertas abiertas, una sonrisa y un servicio pensado para ti.
      </div>
    </div>

    <h2 style="text-align: center; color: white;">Conoce al Equipo</h2>
    <div class="team">
      <div class="team-member animacion-scroll">
        <img src="CEOS/CEO1.jpg" alt="Miembro 1">
        <h3>Juan Pérez</h3>
        <p>CEO y Fundador</p>
      </div>
      <div class="team-member animacion-scroll">
        <img src="CEOS/CEO2.jpg" alt="Miembro 2">
        <h3>Ana Gómez</h3>
        <p>Directora de Marketing</p>
      </div>
      <div class="team-member animacion-scroll">
        <img src="CEOS/CEO3.jpg" alt="Miembro 3">
        <h3>Carlos López</h3>
        <p>Desarrollador Web</p>
      </div>
    </div>

    <div class="vision animacion-scroll">
      <h2>Nuestra Visión</h2>
      <p>
        Ser reconocidos como la cadena de comidas rápidas preferida por su sabor auténtico, calidad constante y atención cercana al cliente.

Aspiramos a crecer de forma sostenible, llevando nuestra propuesta gastronómica a cada rincón del país, sin perder la esencia que nos caracteriza: rapidez, sabor, frescura y compromiso con la experiencia del cliente.

Nos proyectamos como una marca innovadora, capaz de adaptarse a las nuevas tendencias del mercado sin sacrificar nuestros valores: pasión por la comida, respeto por el tiempo del cliente y responsabilidad social en cada paso que damos.
      </p>
    </div>
  </main>

  <script>
    let slideIndex = 0;
    function showSlides() {
      const slides = document.querySelectorAll('.slide');
      if (slideIndex >= slides.length) slideIndex = 0;
      if (slideIndex < 0) slideIndex = slides.length - 1;
      document.querySelector('.slides').style.transform = `translateX(-${slideIndex * 100}%)`;
    }

    document.querySelector('.next').addEventListener('click', () => {
      slideIndex++;
      showSlides();
    });

    document.querySelector('.prev').addEventListener('click', () => {
      slideIndex--;
      showSlides();
    });

    setInterval(() => {
      slideIndex++;
      showSlides();
    }, 4000);

    showSlides();

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2 });

    document.querySelectorAll('.animacion-scroll').forEach(element => {
      observer.observe(element);
    });
  </script>

</body>
</html>

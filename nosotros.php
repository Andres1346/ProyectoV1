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
      background-color: #f4f4f4;
    }

    header {
      background-color: #ffbc2c;
      color: white;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
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

    main {
      padding: 30px;
    }

    /* Ocultamos el título global */
    .titulo-principal {
      display: none;
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

    /* Título ¿Quiénes Somos? justo arriba del texto y centrado */
    .titulo-texto {
      text-align: center;
      font-size: 32px;
      color: #333;
      margin-bottom: 20px;
    }

    /* Nuestra Misión alineado a la izquierda */
    .texto h2 {
      color: #000;
      margin-bottom: 15px;
      text-align: left;
    }

    .texto p {
      color: #000;
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
      color: #535b64;
    }

    /* Cuadro naranja más pequeño y centrado */
    .vision {
      background-color: #ffad31;
      padding: 20px 30px;
      margin: 20px auto;
      max-width: 900px;
      border-radius: 10px;
      box-sizing: border-box;
    }

    .vision h2 {
      color: #000;
      margin-bottom: 20px;
      text-align: center;
    }

    .vision p {
      color: #000;
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
  </style>
</head>
<body>

  <header>
    <h1>Mi Restaurante</h1>
    <nav>
      <a href="index.php">Inicio</a>
      <a href="menu.php">Menú</a>
      <a href="contacto.php">Contacto</a>
      <a href="nosotros.php">¿Quiénes Somos?</a>
      <a href="logout.php">Cerrar Sesión</a>
    </nav>
  </header>

  <main>

    <div class="contenido">
      <div class="slider">
        <div class="slides">
          <div class="slide">
            <img src="Imagenes/a657a3wv.png" alt="Imagen 1">
          </div>
          <div class="slide">
            <img src="https://ristorantepizzeriailbu.it/wp-content/uploads/2020/11/ristorante-pizzeria-gorlago.jpg" alt="Imagen 2">
          </div>
        </div>
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
      </div>

      <div class="texto">
        <h1 class="titulo-texto">¿Quiénes Somos?</h1>
        <h2>Nuestra Misión</h2>
        <p>
          Nos dedicamos a ofrecer una auténtica experiencia gastronómica callejera a través de nuestra propuesta. Nos apasiona brindar a nuestros clientes una variedad de platos tradicionales y representativos de la rica cultura culinaria, adaptados al ritmo y conveniencia de la vida moderna, sin perder la esencia de sus sabores originales.
        </p>
        <p>
          Cada uno de nuestros ingredientes es cuidadosamente seleccionado para garantizar frescura y calidad, con un enfoque en productos locales que apoyen a nuestros agricultores y productores nacionales.
        </p>
        <p>
          Nos esforzamos por crear un ambiente acogedor y cálido donde cada cliente se sienta como en casa. A través de cada bocado, buscamos que nuestros clientes disfruten no solo de la comida, sino también de una pequeña parte de la calidez y alegría que nos caracteriza.
        </p>
      </div>
    </div>

    <h2 style="text-align: center;">Conoce al Equipo</h2>
    <div class="team">
      <div class="team-member">
        <img src="CEOS/CEO1.jpg" alt="Miembro 1">
        <h3>Juan Pérez</h3>
        <p>CEO y Fundador</p>
      </div>
      <div class="team-member">
        <img src="CEOS/CEO2.jpg" alt="Miembro 2">
        <h3>Ana Gómez</h3>
        <p>Directora de Marketing</p>
      </div>
      <div class="team-member">
        <img src="CEOS/CEO3.jpg" alt="Miembro 3">
        <h3>Carlos López</h3>
        <p>Desarrollador Web</p>
      </div>
    </div>

    <div class="vision">
      <h2>Nuestra Visión</h2>
      <p>
        Convertirnos en el restaurante de comida rápida más reconocido y preferido en Colombia, ofreciendo una propuesta gastronómica auténtica, innovadora y accesible para todos. Buscamos ser un referente en la industria, manteniendo la tradición de la comida colombiana, al tiempo que nos adaptamos a las necesidades y expectativas de un público moderno y diverso. Nuestra visión es expandir nuestra presencia, promoviendo el orgullo por la cultura colombiana y brindando a nuestros clientes una experiencia memorable en cada visita.
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
  </script>

</body>
</html>

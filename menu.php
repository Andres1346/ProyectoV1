<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Restaurante - Carrusel y Productos</title>
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      background-color: #1a1a1a;
      color: #ffffff;
    }

    .header {
      background-color: #ff6f00;
      padding: 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .logo p {
      font-size: 24px;
      font-weight: bold;
      color: #ffffff;
      margin: 0;
    }

    .logo span {
      color: #1a1a1a;
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
      color: #ffffff;
      font-weight: bold;
    }

    .carousel {
      position: relative;
      max-width: 850px;
      height: 350px;
      overflow: hidden;
      margin: 30px auto 40px auto;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(255, 111, 0, 0.5);
      background: #000;
    }

    .carousel-images {
      display: flex;
      transition: transform 0.5s ease-in-out;
      height: 100%;
    }

    .carousel-images img {
      width: 100%;
      flex-shrink: 0;
      object-fit: cover;
      height: 350px;
    }

    .carousel-button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(255, 111, 0, 0.8);
      border: none;
      padding: 10px;
      cursor: pointer;
      border-radius: 50%;
      font-size: 20px;
      user-select: none;
      color: #fff;
    }

    .carousel-button:hover {
      background-color: #ff6f00;
    }

    .carousel-button.prev { left: 15px; }
    .carousel-button.next { right: 15px; }

    section.products-section {
      max-width: 1100px;
      margin: 0 auto 50px auto;
      padding: 0 15px;
    }

    section.products-section h2 {
      text-align: center;
      margin-bottom: 20px;
      font-weight: 700;
      font-size: 1.8rem;
      color: #ffffff;
    }

    .products-grid {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
    }

    .product-card {
      background: #1a1a1a;
      border: 2px solid #ff6f00;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(255, 111, 0, 0.2);
      max-width: 200px;
      padding: 12px;
      text-align: center;
      transition: transform 0.3s ease;
    }

    .product-card:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 16px rgba(255, 111, 0, 0.3);
    }

    .product-image {
      width: 140px;
      height: 140px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    .product-title {
      font-size: 1.1rem;
      font-weight: 600;
      color: #ffffff;
    }

    .product-description {
      font-size: 0.9rem;
      color: #cccccc;
      min-height: 45px;
      margin-bottom: 10px;
    }

    .product-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .price {
      font-weight: 700;
      color: #ff6f00;
    }

    .product-card form button {
      background-color: #ff6f00;
      border: none;
      padding: 6px 10px;
      border-radius: 5px;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
    }

    .product-card form button:hover {
      background-color: #e65c00;
    }

    @media (max-width: 600px) {
      .carousel {
        height: 220px;
        max-width: 100%;
        margin: 20px 10px;
      }

      .carousel-images img {
        height: 220px;
      }

      .product-card {
        max-width: 140px;
      }

      .product-image {
        width: 120px;
        height: 120px;
      }

      .menu ul {
        flex-direction: column;
        align-items: flex-end;
        gap: 10px;
        margin-top: 10px;
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

<!-- Carrusel -->
<div class="carousel" aria-label="Carrusel de imágenes">
  <div class="carousel-images" id="carousel-images">
    <img src="Imagenes/pollo2.jpeg" alt="Platillo destacado 1" />
    <img src="Imagenes/burger.jpeg" alt="Platillo destacado 2" />
    <img src="Imagenes/pizza.jpeg" alt="Platillo destacado 3" />
  </div>
  <button class="carousel-button prev" aria-label="Anterior">&#10094;</button>
  <button class="carousel-button next" aria-label="Siguiente">&#10095;</button>
</div>

<!-- Productos Destacados -->
<section class="products-section">
  <h2>Productos Destacados</h2>
  <div class="products-grid">
    <?php
    $productos = [
        ["img" => "hamburguesa.png", "nombre" => "Hamburguesa de Carne", "descripcion" => "Pan brioche, carne de res, cheddar y vegetales.", "precio" => 18000],
        ["img" => "pollo-frito.png", "nombre" => "Pollo Frito", "descripcion" => "8 piezas broaster con salsa y miel.", "precio" => 15000],
        ["img" => "papas-fritas.png", "nombre" => "Papas Fritas", "descripcion" => "Papas a la francesa con salsa de tomate.", "precio" => 12000],
        ["img" => "hamburguesa-grande.png", "nombre" => "Hamburguesa XL", "descripcion" => "Con queso philadelphia, tocineta y bbq maple.", "precio" => 20000],
        ["img" => "pizza.jpeg", "nombre" => "Pizza Personal", "descripcion" => "Masa artesanal con pepperoni y queso mozzarella.", "precio" => 16000],
        ["img" => "tacos.jpg", "nombre" => "Tacos Mexicanos", "descripcion" => "Tortillas suaves con carne, cebolla y guacamole.", "precio" => 14000],
        ["img" => "ensalada cesar.jpg", "nombre" => "Ensalada César", "descripcion" => "Pechuga de pollo, lechuga y salsas.", "precio" => 15000],
        ["img" => "arepaa.jpg", "nombre" => "Arepa", "descripcion" => "Arepa rellena de queso y carne esmechada.", "precio" => 5000],
    ];

    $delay = 0;
    foreach ($productos as $producto) {
        echo '<div class="product-card" data-aos="fade-up" data-aos-delay="' . $delay . '">';
        echo '<img src="Imagenes/' . $producto["img"] . '" class="product-image" alt="' . $producto["nombre"] . '">';
        echo '<div class="product-title">' . $producto["nombre"] . '</div>';
        echo '<div class="product-description">' . $producto["descripcion"] . '</div>';
        echo '<div class="product-footer">';
        echo '<span class="price">$' . number_format($producto["precio"], 0, ",", ".") . '</span>';
        echo '<form method="POST" action="carrito.php">';
        echo '<input type="hidden" name="nombre" value="' . $producto["nombre"] . '">';
        echo '<input type="hidden" name="precio" value="' . $producto["precio"] . '">';
        echo '<button type="submit">Agregar</button>';
        echo '</form>';
        echo '</div></div>';
        $delay += 100;
    }
    ?>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();

  const carouselImages = document.getElementById('carousel-images');
  const imagesCount = carouselImages.children.length;
  let currentIndex = 0;

  const prevBtn = document.querySelector('.carousel-button.prev');
  const nextBtn = document.querySelector('.carousel-button.next');

  function updateCarousel() {
    const offset = -currentIndex * 100;
    carouselImages.style.transform = `translateX(${offset}%)`;
  }

  prevBtn.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + imagesCount) % imagesCount;
    updateCarousel();
  });

  nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % imagesCount;
    updateCarousel();
  });

  setInterval(() => {
    currentIndex = (currentIndex + 1) % imagesCount;
    updateCarousel();
  }, 5000);
</script>

</body>
</html>

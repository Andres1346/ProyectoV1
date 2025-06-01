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
            background: #fff;
            color: #333;
        }

        /* --- Header --- */
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

        /* --- Carrusel --- */
        .carousel {
            position: relative;
            max-width: 850px;
            height: 350px;
            overflow: hidden;
            margin: 30px auto 40px auto;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(179, 124, 7, 0.77);
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
            background-color: rgba(255,255,255,0.7);
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 50%;
            font-size: 20px;
            user-select: none;
            transition: background-color 0.3s ease;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }
        .carousel-button:hover {
            background-color: rgba(255,255,255,0.95);
        }
        .carousel-button.prev {
            left: 15px;
        }
        .carousel-button.next {
            right: 15px;
        }

        /* --- Sección productos --- */
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
            color: #222;
        }
        .products-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 16px;
        }
        .product-card {
            background: #fafafa;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgb(0 0 0 / 0.1);
            max-width: 180px;
            flex: 1 1 180px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 12px;
            text-align: center;
            transition: transform 0.2s ease;
        }
        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 16px rgb(0 0 0 / 0.2);
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
            margin-bottom: 6px;
            color: #111;
        }
        .product-description {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 10px;
            min-height: 45px;
        }
        .product-footer {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
        }
        .price {
            font-weight: 700;
            color: #2b8a3e;
            font-size: 1rem;
        }
        .buy-icon {
            width: 20px;
            height: 20px;
            fill: #2b8a3e;
            cursor: pointer;
            transition: fill 0.3s ease;
        }
        .buy-icon:hover {
            fill: #19692c;
        }

        @media (max-width: 600px) {
            .carousel {
                height: 220px;
                max-width: 100%;
                margin: 20px 10px 30px 10px;
                border-radius: 6px;
            }
            .carousel-images img {
                height: 220px;
            }
            .product-card {
                max-width: 140px;
                flex: 1 1 140px;
            }
            .product-image {
                width: 120px;
                height: 120px;
            }
            .menu ul {
                flex-direction: column;
                align-items: flex-end;
            }
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
            <li><a href="reseñas.php">¿Donde estamos?</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="logout.php">Cerrar sesión</a></li>
        </ul>
    </nav>
</header>

<!-- Aquí puedes insertar el carrusel y la sección de productos -->

</body>
</html>



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

<!-- Sección primeros 6 productos -->
<section class="products-section" aria-label="Primeros seis productos">
    <h2>Productos Destacados</h2>
    <div class="products-grid">
        <!-- Producto 1 -->
        <div class="product-card" data-aos="fade-up" data-aos-delay="50">
            <img src="Imagenes/picada.jpg" alt="Picada Mixta" class="product-image" />
            <h3 class="product-title">Picada Mixta</h3>
            <p class="product-description">Variedad de carnes, chorizo, papas y yuca frita para compartir con amigos.</p>
            <div class="product-footer">
                <span class="price">$25,000</span>
                <svg class="buy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-12.83-2.75l.94-2.812 11.33.047-1.272 3.725c-.09.263-.343.44-.625.44H7.6c-.316 0-.602-.18-.65-.5l-.48-1.32zM5 4h2l3.6 7.59-1.35 2.44c-.18.31-.26.67-.26 1.02 0 1.1.9 2 2 2h9v-2h-8.42c-.14 0-.25-.11-.25-.25s.11-.25.25-.25H19a1 1 0 0 0 .91-.59l3.2-6.81-1.76-1.06-3.2 6.8h-10L5 4z"/>
                </svg>
            </div>
        </div>
        <!-- Producto 2 -->
        <div class="product-card" data-aos="fade-up" data-aos-delay="100">
            <img src="Imagenes/paella.jpg" alt="Paella Valenciana" class="product-image" />
            <h3 class="product-title">Paella Valenciana</h3>
            <p class="product-description">Arroz con mariscos frescos, pollo, vegetales y azafrán tradicional.</p>
            <div class="product-footer">
                <span class="price">$30,000</span>
                <svg class="buy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-12.83-2.75l.94-2.812 11.33.047-1.272 3.725c-.09.263-.343.44-.625.44H7.6c-.316 0-.602-.18-.65-.5l-.48-1.32zM5 4h2l3.6 7.59-1.35 2.44c-.18.31-.26.67-.26 1.02 0 1.1.9 2 2 2h9v-2h-8.42c-.14 0-.25-.11-.25-.25s.11-.25.25-.25H19a1 1 0 0 0 .91-.59l3.2-6.81-1.76-1.06-3.2 6.8h-10L5 4z"/>
                </svg>
            </div>
        </div>
        <!-- Producto 3 -->
        <div class="product-card" data-aos="fade-up" data-aos-delay="150">
            <img src="Imagenes/burger.jpeg" alt="Hamburguesa Clásica" class="product-image" />
            <h3 class="product-title">Hamburguesa Clásica</h3>
            <p class="product-description">Carne jugosa, queso cheddar, lechuga, tomate y nuestra salsa especial.</p>
            <div class="product-footer">
                <span class="price">$18,000</span>
                <svg class="buy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-12.83-2.75l.94-2.812 11.33.047-1.272 3.725c-.09.263-.343.44-.625.44H7.6c-.316 0-.602-.18-.65-.5l-.48-1.32zM5 4h2l3.6 7.59-1.35 2.44c-.18.31-.26.67-.26 1.02 0 1.1.9 2 2 2h9v-2h-8.42c-.14 0-.25-.11-.25-.25s.11-.25.25-.25H19a1 1 0 0 0 .91-.59l3.2-6.81-1.76-1.06-3.2 6.8h-10L5 4z"/>
                </svg>
            </div>
        </div>
        <!-- Producto 4 -->
        <div class="product-card" data-aos="fade-up" data-aos-delay="200">
            <img src="Imagenes/pollo1.jpeg" alt="Pollo Asado" class="product-image" />
            <h3 class="product-title">Pollo Asado</h3>
            <p class="product-description">Pollo marinado con especias, acompañado de papas y ensalada fresca.</p>
            <div class="product-footer">
                <span class="price">$20,000</span>
                <svg class="buy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-12.83-2.75l.94-2.812 11.33.047-1.272 3.725c-.09.263-.343.44-.625.44H7.6c-.316 0-.602-.18-.65-.5l-.48-1.32zM5 4h2l3.6 7.59-1.35 2.44c-.18.31-.26.67-.26 1.02 0 1.1.9 2 2 2h9v-2h-8.42c-.14 0-.25-.11-.25-.25s.11-.25.25-.25H19a1 1 0 0 0 .91-.59l3.2-6.81-1.76-1.06-3.2 6.8h-10L5 4z"/>
                </svg>
            </div>
        </div>
        <!-- Producto 5 -->
        <div class="product-card" data-aos="fade-up" data-aos-delay="250">
            <img src="Imagenes/pizza.jpeg" alt="Pizza Hawaiana" class="product-image" />
            <h3 class="product-title">Pizza Hawaiana</h3>
            <p class="product-description">Base crujiente con jamón, piña y queso mozzarella fundido.</p>
            <div class="product-footer">
                <span class="price">$22,000</span>
                <svg class="buy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-12.83-2.75l.94-2.812 11.33.047-1.272 3.725c-.09.263-.343.44-.625.44H7.6c-.316 0-.602-.18-.65-.5l-.48-1.32zM5 4h2l3.6 7.59-1.35 2.44c-.18.31-.26.67-.26 1.02 0 1.1.9 2 2 2h9v-2h-8.42c-.14 0-.25-.11-.25-.25s.11-.25.25-.25H19a1 1 0 0 0 .91-.59l3.2-6.81-1.76-1.06-3.2 6.8h-10L5 4z"/>
                </svg>
            </div>
        </div>
        <!-- Producto 6 -->
        <div class="product-card" data-aos="fade-up" data-aos-delay="300">
            <img src="Imagenes/ensalada.jpeg" alt="Ensalada César" class="product-image" />
            <h3 class="product-title">Ensalada César</h3>
            <p class="product-description">Lechuga fresca, crutones, queso parmesano y aderezo César.</p>
            <div class="product-footer">
                <span class="price">$12,000</span>
                <svg class="buy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-12.83-2.75l.94-2.812 11.33.047-1.272 3.725c-.09.263-.343.44-.625.44H7.6c-.316 0-.602-.18-.65-.5l-.48-1.32zM5 4h2l3.6 7.59-1.35 2.44c-.18.31-.26.67-.26 1.02 0 1.1.9 2 2 2h9v-2h-8.42c-.14 0-.25-.11-.25-.25s.11-.25.25-.25H19a1 1 0 0 0 .91-.59l3.2-6.81-1.76-1.06-3.2 6.8h-10L5 4z"/>
                </svg>
            </div>
        </div>
        <div class="product-card" data-aos="fade-up" data-aos-delay="300">
            <img src="Imagenes/ensalada.jpeg" alt="Ensalada César" class="product-image" />
            <h3 class="product-title">Ensalada César</h3>
            <p class="product-description">Lechuga fresca, crutones, queso parmesano y aderezo César.</p>
            <div class="product-footer">
                <span class="price">$12,000</span>
                <svg class="buy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-12.83-2.75l.94-2.812 11.33.047-1.272 3.725c-.09.263-.343.44-.625.44H7.6c-.316 0-.602-.18-.65-.5l-.48-1.32zM5 4h2l3.6 7.59-1.35 2.44c-.18.31-.26.67-.26 1.02 0 1.1.9 2 2 2h9v-2h-8.42c-.14 0-.25-.11-.25-.25s.11-.25.25-.25H19a1 1 0 0 0 .91-.59l3.2-6.81-1.76-1.06-3.2 6.8h-10L5 4z"/>
                </svg>
            </div>
        </div>
        <div class="product-card" data-aos="fade-up" data-aos-delay="300">
            <img src="Imagenes/ensalada.jpeg" alt="Ensalada César" class="product-image" />
            <h3 class="product-title">Ensalada César</h3>
            <p class="product-description">Lechuga fresca, crutones, queso parmesano y aderezo César.</p>
            <div class="product-footer">
                <span class="price">$12,000</span>
                <svg class="buy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-12.83-2.75l.94-2.812 11.33.047-1.272 3.725c-.09.263-.343.44-.625.44H7.6c-.316 0-.602-.18-.65-.5l-.48-1.32zM5 4h2l3.6 7.59-1.35 2.44c-.18.31-.26.67-.26 1.02 0 1.1.9 2 2 2h9v-2h-8.42c-.14 0-.25-.11-.25-.25s.11-.25.25-.25H19a1 1 0 0 0 .91-.59l3.2-6.81-1.76-1.06-3.2 6.8h-10L5 4z"/>
                </svg>
            </div>
        </div>
        <div class="product-card" data-aos="fade-up" data-aos-delay="300">
            <img src="Imagenes/ensalada.jpeg" alt="Ensalada César" class="product-image" />
            <h3 class="product-title">Ensalada César</h3>
            <p class="product-description">Lechuga fresca, crutones, queso parmesano y aderezo César.</p>
            <div class="product-footer">
                <span class="price">$12,000</span>
                <svg class="buy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-12.83-2.75l.94-2.812 11.33.047-1.272 3.725c-.09.263-.343.44-.625.44H7.6c-.316 0-.602-.18-.65-.5l-.48-1.32zM5 4h2l3.6 7.59-1.35 2.44c-.18.31-.26.67-.26 1.02 0 1.1.9 2 2 2h9v-2h-8.42c-.14 0-.25-.11-.25-.25s.11-.25.25-.25H19a1 1 0 0 0 .91-.59l3.2-6.81-1.76-1.06-3.2 6.8h-10L5 4z"/>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Sección Más productos -->
<section class="products-section" aria-label="Más productos">
    <h2>Más productos</h2>
    <div class="products-grid">
        <!-- Producto 7 -->
        <div class="product-card" data-aos="fade-up" data-aos-delay="50">
            <img src="Imagenes/sopa.jpg" alt="Sopa de Mariscos" class="product-image" />
            <h3 class="product-title">Sopa de Mariscos</h3>
            <p class="product-description">Caldo caliente con camarones, calamares y pescado fresco.</p>
            <div class="product-footer">
                <span class="price">$18,500</span>
                <svg class="buy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-12.83-2.75l.94-2.812 11.33.047-1.272 3.725c-.09.263-.343.44-.625.44H7.6c-.316 0-.602-.18-.65-.5l-.48-1.32zM5 4h2l3.6 7.59-1.35 2.44c-.18.31-.26.67-.26 1.02 0 1.1.9 2 2 2h9v-2h-8.42c-.14 0-.25-.11-.25-.25s.11-.25.25-.25H19a1 1 0 0 0 .91-.59l3.2-6.81-1.76-1.06-3.2 6.8h-10L5 4z"/>
                </svg>
            </div>
        </div>
        <!-- Producto 8 -->
        <div class="product-card" data-aos="fade-up" data-aos-delay="100">
            <img src="Imagenes/tacos.jpg" alt="Tacos Mexicanos" class="product-image" />
            <h3 class="product-title">Tacos Mexicanos</h3>
            <p class="product-description">Tortillas con carne, cebolla, cilantro y salsa picante al gusto.</p>
            <div class="product-footer">
                <span class="price">$14,000</span>
                <svg class="buy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-12.83-2.75l.94-2.812 11.33.047-1.272 3.725c-.09.263-.343.44-.625.44H7.6c-.316 0-.602-.18-.65-.5l-.48-1.32zM5 4h2l3.6 7.59-1.35 2.44c-.18.31-.26.67-.26 1.02 0 1.1.9 2 2 2h9v-2h-8.42c-.14 0-.25-.11-.25-.25s.11-.25.25-.25H19a1 1 0 0 0 .91-.59l3.2-6.81-1.76-1.06-3.2 6.8h-10L5 4z"/>
                </svg>
            </div>
        </div>
        <!-- Producto 9 -->
        <div class="product-card" data-aos="fade-up" data-aos-delay="150">
            <img src="Imagenes/helado.jpg" alt="Helado Artesanal" class="product-image" />
            <h3 class="product-title">Helado Artesanal</h3>
            <p class="product-description">Sabores naturales, hechos a mano con ingredientes frescos.</p>
            <div class="product-footer">
                <span class="price">$9,000</span>
                <svg class="buy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-12.83-2.75l.94-2.812 11.33.047-1.272 3.725c-.09.263-.343.44-.625.44H7.6c-.316 0-.602-.18-.65-.5l-.48-1.32zM5 4h2l3.6 7.59-1.35 2.44c-.18.31-.26.67-.26 1.02 0 1.1.9 2 2 2h9v-2h-8.42c-.14 0-.25-.11-.25-.25s.11-.25.25-.25H19a1 1 0 0 0 .91-.59l3.2-6.81-1.76-1.06-3.2 6.8h-10L5 4z"/>
                </svg>
            </div>
        </div>
        <!-- Producto 10 -->
        <div class="product-card" data-aos="fade-up" data-aos-delay="200">
            <img src="Imagenes/arepa.jpg" alt="Arepa Rellena" class="product-image" />
            <h3 class="product-title">Arepa Rellena</h3>
            <p class="product-description">Arepa crujiente rellena con queso, carne mechada o pollo.</p>
            <div class="product-footer">
                <span class="price">$13,000</span>
                <svg class="buy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-12.83-2.75l.94-2.812 11.33.047-1.272 3.725c-.09.263-.343.44-.625.44H7.6c-.316 0-.602-.18-.65-.5l-.48-1.32zM5 4h2l3.6 7.59-1.35 2.44c-.18.31-.26.67-.26 1.02 0 1.1.9 2 2 2h9v-2h-8.42c-.14 0-.25-.11-.25-.25s.11-.25.25-.25H19a1 1 0 0 0 .91-.59l3.2-6.81-1.76-1.06-3.2 6.8h-10L5 4z"/>
                </svg>
            </div>
        </div>
        <!-- Producto 10 -->
        <div class="product-card" data-aos="fade-up" data-aos-delay="200">
            <img src="Imagenes/arepa.jpg" alt="Arepa Rellena" class="product-image" />
            <h3 class="product-title">Arepa Rellena</h3>
            <p class="product-description">Arepa crujiente rellena con queso, carne mechada o pollo.</p>
            <div class="product-footer">
                <span class="price">$13,000</span>
                <svg class="buy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-12.83-2.75l.94-2.812 11.33.047-1.272 3.725c-.09.263-.343.44-.625.44H7.6c-.316 0-.602-.18-.65-.5l-.48-1.32zM5 4h2l3.6 7.59-1.35 2.44c-.18.31-.26.67-.26 1.02 0 1.1.9 2 2 2h9v-2h-8.42c-.14 0-.25-.11-.25-.25s.11-.25.25-.25H19a1 1 0 0 0 .91-.59l3.2-6.81-1.76-1.06-3.2 6.8h-10L5 4z"/>
                </svg>
            </div>
        </div>
        <!-- Producto 10 -->
        <div class="product-card" data-aos="fade-up" data-aos-delay="200">
            <img src="Imagenes/arepa.jpg" alt="Arepa Rellena" class="product-image" />
            <h3 class="product-title">Arepa Rellena</h3>
            <p class="product-description">Arepa crujiente rellena con queso, carne mechada o pollo.</p>
            <div class="product-footer">
                <span class="price">$13,000</span>
                <svg class="buy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-12.83-2.75l.94-2.812 11.33.047-1.272 3.725c-.09.263-.343.44-.625.44H7.6c-.316 0-.602-.18-.65-.5l-.48-1.32zM5 4h2l3.6 7.59-1.35 2.44c-.18.31-.26.67-.26 1.02 0 1.1.9 2 2 2h9v-2h-8.42c-.14 0-.25-.11-.25-.25s.11-.25.25-.25H19a1 1 0 0 0 .91-.59l3.2-6.81-1.76-1.06-3.2 6.8h-10L5 4z"/>
                </svg>
            </div>
        </div>
        <!-- Producto 10 -->
        <div class="product-card" data-aos="fade-up" data-aos-delay="200">
            <img src="Imagenes/arepa.jpg" alt="Arepa Rellena" class="product-image" />
            <h3 class="product-title">Arepa Rellena</h3>
            <p class="product-description">Arepa crujiente rellena con queso, carne mechada o pollo.</p>
            <div class="product-footer">
                <span class="price">$13,000</span>
                <svg class="buy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-12.83-2.75l.94-2.812 11.33.047-1.272 3.725c-.09.263-.343.44-.625.44H7.6c-.316 0-.602-.18-.65-.5l-.48-1.32zM5 4h2l3.6 7.59-1.35 2.44c-.18.31-.26.67-.26 1.02 0 1.1.9 2 2 2h9v-2h-8.42c-.14 0-.25-.11-.25-.25s.11-.25.25-.25H19a1 1 0 0 0 .91-.59l3.2-6.81-1.76-1.06-3.2 6.8h-10L5 4z"/>
                </svg>
            </div>
        </div>
        <!-- Producto 10 -->
        <div class="product-card" data-aos="fade-up" data-aos-delay="200">
            <img src="Imagenes/arepa.jpg" alt="Arepa Rellena" class="product-image" />
            <h3 class="product-title">Arepa Rellena</h3>
            <p class="product-description">Arepa crujiente rellena con queso, carne mechada o pollo.</p>
            <div class="product-footer">
                <span class="price">$13,000</span>
                <svg class="buy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-12.83-2.75l.94-2.812 11.33.047-1.272 3.725c-.09.263-.343.44-.625.44H7.6c-.316 0-.602-.18-.65-.5l-.48-1.32zM5 4h2l3.6 7.59-1.35 2.44c-.18.31-.26.67-.26 1.02 0 1.1.9 2 2 2h9v-2h-8.42c-.14 0-.25-.11-.25-.25s.11-.25.25-.25H19a1 1 0 0 0 .91-.59l3.2-6.81-1.76-1.06-3.2 6.8h-10L5 4z"/>
                </svg>
            </div>
        </div>
        <!-- Producto 10 -->
        <div class="product-card" data-aos="fade-up" data-aos-delay="200">
            <img src="Imagenes/arepa.jpg" alt="Arepa Rellena" class="product-image" />
            <h3 class="product-title">Arepa Rellena</h3>
            <p class="product-description">Arepa crujiente rellena con queso, carne mechada o pollo.</p>
            <div class="product-footer">
                <span class="price">$13,000</span>
                <svg class="buy-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-12.83-2.75l.94-2.812 11.33.047-1.272 3.725c-.09.263-.343.44-.625.44H7.6c-.316 0-.602-.18-.65-.5l-.48-1.32zM5 4h2l3.6 7.59-1.35 2.44c-.18.31-.26.67-.26 1.02 0 1.1.9 2 2 2h9v-2h-8.42c-.14 0-.25-.11-.25-.25s.11-.25.25-.25H19a1 1 0 0 0 .91-.59l3.2-6.81-1.76-1.06-3.2 6.8h-10L5 4z"/>
                </svg>
            </div>
        </div>
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

    // Cambio automático cada 5 segundos
    setInterval(() => {
        currentIndex = (currentIndex + 1) % imagesCount;
        updateCarousel();
    }, 5000);
</script>

</body>
</html>

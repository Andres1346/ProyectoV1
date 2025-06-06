<?php
session_start();
if (!isset($_SESSION['correo'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QueDeli</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="index.css">
    <style>
        /* Estilos básicos */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Sección de la cabecera */
        .header {
            background-color: #ffbc2c;
            padding: 20px;
            text-align: center;
        }

        .logo p {
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        .logo span {
            color: #ffad31;
        }

        .hamburguesa img {
            width: 30px;
            cursor: pointer;
        }

        /* Menú de navegación */
        .menu ul {
            list-style: none;
            padding: 0;
        }

        .menu li {
            display: inline-block;
            margin-right: 20px;
        }

        .menu a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        /* Sección de presentación */
        .presentacion {
            display: flex;
            justify-content: space-between;
            padding: 50px;
            background-color: #f8f8f8;
        }

        .informacion {
            width: 50%;
        }

        .informacion h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .informacion p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .informacion--boton a.btn-explorar {
            background-color: #ffad31;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            display: inline-block;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .informacion--boton a.btn-explorar:hover {
            background-color: #e69e2a;
        }

        .presentacion--imagen img {
            max-width: 100%;
            height: auto;
        }

        /* Sección de comida */
        .comida {
            text-align: center;
            padding: 40px;
            background-color: #fff;
        }

        .comida--titulo {
            font-size: 30px;
            margin-bottom: 30px;
        }

        .platos {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .plato {
            width: 22%;
            text-align: center;
            padding: 20px;
            margin-bottom: 30px;
            background-color: #f1f1f1;
            border-radius: 10px;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .plato.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .plato img {
            max-width: 100%;
            height: auto;
        }

        .plato h1 {
            margin-top: 20px;
            font-size: 20px;
        }

        .plato p {
            font-size: 14px;
            margin-top: 10px;
        }

        .plato--info {
            margin-top: 15px;
        }

        .plato--info p {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .plato--info button {
            background-color: #ffad31;
            color: white;
            border: none;
            padding: 8px 15px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="contenedor">
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
        <aside class="presentacion">
            <div class="informacion">
                <h1>Lo mejor para ti te espera!</h1>
                <div>
                    <p>El mejor sabor con el mejor sason...</p>
                    <p>Somos los numero 1 en toda COLOMBIA con envios RAPIDOS Y EFICIENTES</p>
                </div>
                <div class="informacion--boton">
                    <a href="menu.php" class="btn-explorar">Explorar menú</a>
                </div>
            </div>
            <div class="presentacion--imagen">
                <img src="Imagenes/design.png" alt="Imagen presentacion">
            </div>
        </aside>
        <main class="comida">
            <h2 class="comida--titulo">Platos populares</h2>
            <div class="platos">
                <article class="plato">
                    <img src="Imagenes/hamburguesa.png" alt="Hamburguesa">
                    <h1>Hamburguesa de Carne</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="plato--info">
                        <p>$12.99</p>
                        <button type="button">+</button>
                    </div>                    
                </article>
                <article class="plato">
                    <img src="Imagenes/pollo-frito.png" alt="Pollo frito">
                    <h1>Pollo grande frito</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="plato--info">
                        <p>$10.99</p>
                        <button type="button">+</button>
                    </div>                    
                </article>
                <article class="plato">
                    <img src="Imagenes/papas-fritas.png" alt="Papas fritas">
                    <h1>Papas grandes fritas</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="plato--info">
                        <p>$10.99</p>
                        <button type="button">+</button>
                    </div>                    
                </article>
                <article class="plato">
                    <img src="Imagenes/hamburguesa-grande.png" alt="Hamburguesa XL">
                    <h1>Hamburguesa XL</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="plato--info">
                        <p>$10.99</p>
                        <button type="button">+</button>                
                </article>
                <article class="plato">
                    <img src="Imagenes/hamburguesa.png" alt="Hamburguesa">
                    <h1>Hamburguesa de Carne</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="plato--info">
                        <p>$12.99</p>
                        <button type="button">+</button>
                    </div>                    
                </article>
                <article class="plato">
                    <img src="Imagenes/hamburguesa.png" alt="Hamburguesa">
                    <h1>Hamburguesa de Carne</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="plato--info">
                        <p>$12.99</p>
                        <button type="button">+</button>
                    </div>                    
                </article>
                <article class="plato">
                    <img src="Imagenes/hamburguesa.png" alt="Hamburguesa">
                    <h1>Hamburguesa de Carne</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="plato--info">
                        <p>$12.99</p>
                        <button type="button">+</button>
                    </div>                    
                </article>
                <article class="plato">
                    <img src="Imagenes/hamburguesa.png" alt="Hamburguesa">
                    <h1>Hamburguesa de Carne</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="plato--info">
                        <p>$12.99</p>
                        <button type="button">+</button>
                    </div>                    
                </article>
            </div>
        </main>
    </div>

    <script>
        // Usamos Intersection Observer para detectar cuando los elementos están en la vista
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');  // Añadimos la clase 'visible' cuando el elemento entra en la vista
                    observer.unobserve(entry.target);  // Deja de observar el elemento
                }
            });
        }, { threshold: 0.5 });  // El 50% del elemento debe estar visible

        // Observar todos los artículos de la clase 'plato'
        document.querySelectorAll('.plato').forEach(plato => {
            observer.observe(plato);
        });
    </script>
</body>
</html>
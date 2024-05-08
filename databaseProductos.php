<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StylesProductos.css">
    <link rel="icon" href="Images/LogoButterfly.png" type="image/x-icon">
    <title>Tienda</title>
</head>
<body>
    <div class="Header">
        <nav>
            <img src="Images/LogoTiendaButterfly.png" class="LogoHeader">
            <ul class="NavLinks">
            <?php
        if (isset($_SESSION['nombre_usuario'])) {
            echo '<li><span class="usuario">' . $_SESSION['UsernameLogin'] . '</span></li>';
        } else {
            echo '<li><a class="enlace" href="Login.html">Inicia Sesión/Regístrate</a></li>';
        }
            ?>
                <li><a class="enlace" href="index.html">Inicio</a></li>
                <li><a class="enlace" href="Logout.php">Cerrar Sesión</a></li>  
                  
            </ul>
        </nav>
    </div>
    
    <div class="TiendaIntro">
            <img src="Images/LogoWebButterfly.png">
            <h3>Tienda oficial del juego</h3>
    </div>

    <h1 class="Titulo">Dale un vistazo a nuestro catalogo</h1>

    <section class="Seccion">
        
        <div class="Productos">
            <div class="VentanaProducto">
                <div class="ImagenProducto"><img src="Images/Catalogo1.png" style="width: 100%; height: 100%;"></div>
                <div class="DescripcionProducto">Sueter naranja con el logo de Lena</div>
                <div class="NombreProducto">Sueter con logo de Lena</div>
                <div class="Caja">
                    <div class="Precio">$200</div>
                    <div class="BotonCompra">Agregar al carrito</div>
                </div>
            </div>
        </div>

        <div class="Productos">
            <div class="VentanaProducto">
                <div class="ImagenProducto"><img src="Images/Catalogo1.png" style="width: 100%; height: 100%;"></div>
                <div class="DescripcionProducto">Sueter naranja con el logo de Lena</div>
                <div class="NombreProducto">Sueter con logo de Lena</div>
                <div class="Caja">
                    <div class="Precio">$200</div>
                    <div class="BotonCompra">Agregar al carrito</div>
                </div>
            </div>
        </div>

        <div class="Productos">
            <div class="VentanaProducto">
                <div class="ImagenProducto"><img src="Images/Catalogo1.png" style="width: 100%; height: 100%;"></div>
                <div class="DescripcionProducto">Sueter naranja con el logo de Lena</div>
                <div class="NombreProducto">Sueter con logo de Lena</div>
                <div class="Caja">
                    <div class="Precio">$200</div>
                    <div class="BotonCompra">Agregar al carrito</div>
                </div>
            </div>
        </div>

        <div class="Productos">
            <div class="VentanaProducto">
                <div class="ImagenProducto"><img src="Images/Catalogo1.png" style="width: 100%; height: 100%;"></div>
                <div class="DescripcionProducto">Sueter naranja con el logo de Lena</div>
                <div class="NombreProducto">Sueter con logo de Lena</div>
                <div class="Caja">
                    <div class="Precio">$200</div>
                    <div class="BotonCompra">Agregar al carrito</div>
                </div>
            </div>
        </div>

        <div class="Productos">
            <div class="VentanaProducto">
                <div class="ImagenProducto"><img src="Images/Catalogo1.png" style="width: 100%; height: 100%;"></div>
                <div class="DescripcionProducto">Sueter naranja con el logo de Lena</div>
                <div class="NombreProducto">Sueter con logo de Lena</div>
                <div class="Caja">
                    <div class="Precio">$200</div>
                    <div class="BotonCompra">Agregar al carrito</div>
                </div>
            </div>
        </div>

    </section>
</body>
</html>
<?php
session_start();

if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    header("Location: Productos.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imagen = $_POST["imagenProducto"];
    $descripcion = $_POST["descripcionProducto"];
    $nombre = $_POST["nombreProducto"];
    $precio = $_POST["precioProducto"];

    $nuevoProducto = '
        <div class="Productos">
            <div class="VentanaProducto">
                <div class="ImagenProducto"><img src="' . $imagen . '" style="width: 100%; height: 100%;"></div>
                <div class="DescripcionProducto">' . $descripcion . '</div>
                <div class="NombreProducto">' . $nombre . '</div>
                <div class="Caja">
                    <div class="Precio">' . $precio . '</div>
                    <div class="BotonCompra">Agregar al carrito</div>
                </div>
            </div>
        </div>
    ';

    file_put_contents("productos.html", $nuevoProducto, FILE_APPEND);
    header("Location: administracion.php");
    exit;
}
?>

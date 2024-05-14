<?php
session_start();

include("com.php");


$imagenproducto = $_POST['ImagenProducto'];
$descripcionproducto = $_POST['DescripcionProducto'];
$nombreproducto = $_POST['NombreProducto'];
$precioproducto = $_POST['PrecioProducto'];

$imagenproducto = htmlspecialchars($imagenproducto);
$descripcionproducto = htmlspecialchars($descripcionproducto);
$nombreproducto = htmlspecialchars($nombreproducto);
$precioproducto = htmlspecialchars($precioproducto);

$tabla_html = '<tr>
                    <td><img src=" . $imagenproducto . "></td>
                    <td>' . $descripcionproducto . '</td>
                    <td>' . $nombreproducto . '</td>
                    <td>' . $precioproducto . '</td>  
              </tr>';

$div_html = '
            <div class="VentanaProducto">
                <div class="ImagenProducto"><img src=" . $imagenproducto . " style="width: 100%; height: 100%;"></div>
                <div class="DescripcionProducto">' . $descripcionproducto . '</div>
                <div class="NombreProducto">' . $nombreproducto . '</div>
                <div class="Caja">
                    <div class="Precio">' . $precioproducto . '</div>
                    <div class="BotonCompra">Agregar al carrito</div>
                </div>
            </div>';

$archivo_html1 = 'ProductosAdmin.html';
$archivo_html2 = 'Productos.php';
$archivo_html3 = 'Productos.html';

file_put_contents($archivo_html1, $tabla_html, FILE_APPEND);
file_put_contents($archivo_html2, $div_html, FILE_APPEND);
file_put_contents($archivo_html3, $div_html, FILE_APPEND);

header('Location: formulario.html');
exit;
?>

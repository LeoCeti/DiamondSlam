<?php
 include "com.php";

$imagenproducto= $_POST['ImagenProducto'];
$descripcionproducto= $_POST['DescripcionProducto'];
$nombreproducto= $_POST['NombreProducto'];
$precioproducto= $_POST['PrecioProducto'];
$sql = mysqli_query ($com,"INSERT INTO productos(ImagenProducto, DescripcionProducto, NombreProducto, PrecioProducto) values('$imagenproducto','$descripcionproducto', '$nombreproducto', '$precioproducto')");

if($sql){
    echo "Producto Registrado";
    Header("Location:ProductosAdmin.html");
}else{
    echo "Error al registrar";
}

?>
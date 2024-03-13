<?php
 include "com.php";

$Username= $_POST['Username'];
$Correo= $_POST['Mail'];
$Password= $_POST['Password']
$sql= mysqli_query ($com,"INSERT INTO usuario(id, nombre, correo) values(0,'$Username','$Mail', 'Password')");

if($sql){
    echo "Usuario Registrado";
}else{
    echo "Error al registrar";
}

?>
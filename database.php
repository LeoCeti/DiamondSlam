<?php
 include "com.php";

$username= $_POST['Username'];
$mail= $_POST['Mail'];
$password= $_POST['Passwordd'];
$sql = mysqli_query ($com,"INSERT INTO usuarios(Username, Mail, Passwordd) values('$username','$mail', '$password')");

if($sql){
    echo "Usuario Registrado";
    Header("Location:Login.html");
}else{
    echo "Error al registrar";
}

?>

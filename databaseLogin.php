<?php
 include "com.php";

$username= $_POST['UsernameLogin'];
$mail= $_POST['Mail'];
$password= $_POST['PassworddLogin'];
$sql = mysqli_query ($com,"SELECT * FROM usuarios WHERE Username = '$username' AND Passwordd = '$passwordd'");

if($sql){
    Header("Location:inicio.php");
}else{
    echo "Error al iniciar sesión";
}

?>
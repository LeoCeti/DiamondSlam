<?php
include "com.php";

$usernamelogin= $_POST['UsernameLogin'];
$passworddlogin= $_POST['PassworddLogin'];


$query = "SELECT * FROM usuarios WHERE username = ? AND passwordd = ?";
$stmt = mysqli_prepare($com, $query);
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);


if (mysqli_num_rows($result) > 0) {
    header("Location: inicio.php");
    exit;

} else {
    echo "Usuario y/o contraseña inválidos";
}

mysqli_stmt_close($stmt);
mysqli_close($com);

?>


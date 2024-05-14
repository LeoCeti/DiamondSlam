<?php
session_start();

if (isset($_SESSION["admin"]) && $_SESSION["Admin"] === true) {
    header("Location: databaseProductosAdmin.php");
    exit;
} else {
    header("Location: Productos.php");
    exit;
}
?>

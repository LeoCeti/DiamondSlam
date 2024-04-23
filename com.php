<?php

    $server = "localhost";
    $data = "dsstore";
    $user = "root";
    $pass = "";

    $com = mysqli_connect($server, $user, $pass, $data);
    if (!$com){
            die("Fallo en la conexion".mysqli_connect_error());
    } else {
        echo "Conexion Exitosa!";
    }

?>
<?php
    $servidor="localhost";
    $user="root";
    $clave="";
    $bbdd="restaurante";


    $conn= mysqli_connect($servidor, $user, $clave);

    mysqli_set_charset($conn, "utf8");

    mysqli_select_db($conn,$bbdd);
    echo mysqli_error($conn);


?>
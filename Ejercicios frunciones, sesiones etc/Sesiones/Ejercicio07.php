<!DOCTYPE html>
<?php
    session_start();


    $login = $_COOKIE['NombreDeUsuario'];
    $password = "password333";

    $_SESSION['login']=$login;
    $_SESSION['password']=$password;



    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <a hreF="Ejercicio08.php">Ejercicio08</a>
</body>
</html>
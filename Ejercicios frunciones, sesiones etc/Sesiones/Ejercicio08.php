<!DOCTYPE html>
<?php
    session_start();

    if(isset($_SESSION['login'])&&isset($_SESSION['password'])){
        $login = $_SESSION['login'];
        $password = $_SESSION['password'];

        print("El usuario esta conectado");
        print("<br>");
        print("Login: ".$_SESSION['login']);
        print("<br>Password: ".$_SESSION['password']);
    }else{
        print("El usuario no esta conectado");
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    include("../Seguridad.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lentejas los Jueves</title>
</head>
<body>
    <header>
        <h1>Lentejas los jueves</h1>
        <figure>
            <img src="" alt="">
        </figure>
    </header>
    <nav>
        <ul>
            <li><a href="">Carta</a></li>
            <li><a href="">Usuarios</a></li>
            <li><a href="">Empleados</a></li>
            <li><a href="">Pedidos</a></li>
        </ul>
    </nav>
    <?php
        echo "Holaaaaaaa admin";
        echo '<br>';
        echo $_SESSION['name'];
        ?>
</body>
</html>
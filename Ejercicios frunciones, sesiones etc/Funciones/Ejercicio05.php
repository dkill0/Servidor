<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    setcookie("NombreUsuario", Juan, time() + 31536000);

    print("Las cookies se han guardado correctamente");

    ?>
</body>
</html>
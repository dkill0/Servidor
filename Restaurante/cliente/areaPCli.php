<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/EstilosIndex.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
    include("headerCli.php");
    ?>
    
    <section>
        <article>
            <h3>Datos Personales</h3>
            <div>
                <p>Nombre</p>
                <p><?php echo $_SESSION['name']?></p>
                <p>Email</p>
                <p><?php echo $_SESSION['email']?></p>
                <p>Contraseña</p>
                <p><?php echo $_SESSION['password']?></p>
            </div>
        </article>
        <article>
            <h3>Pedidos</h3>
            <div>
                <p>Total pedidos:</p>
                <p></p>
                <p>Pedidos en curso:</p>
                <p></p>
                <p>Pedidos finalizados: </p>
                <p></p>
            </div>
        </article>

    </section>
</body>
</html>
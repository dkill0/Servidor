<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("../cliente/meta2.php");?>
    <title>Area Personal</title>

</head>
<body>
    <?php include("headerCam.php");?>
       
    <section>
        <article>
            <h3>Datos Personales</h3>
            <div class="inicioS">
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
            <div class="inicioS">
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
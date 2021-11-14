<?php
    session_start();
   ?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php   include("meta.php");?>
    <title>Regístrate</title>

    <?php
//Estableciendo la conexión
include ("conexion.php");
//recogida de datos
if(isset($_POST['nombre'])&& isset($_POST['email']) && isset($_POST['contra'])){
    $nom=$_POST['nombre'];
    $email=$_POST['email'];
    $pass=$_POST['contra'];
    $tipo=3;
    $consulta = "INSERT INTO usuario (email,nombre,contrasena,tipo) 
    VALUES ('$email','$nom','$pass','$tipo')";
    //ejecutamos la sentencia SQL
    mysqli_query($conn,$consulta);
    echo mysqli_error($conn );
    
    header ("LOCATION:areaPIndex.php");
}

?>


</head>
<body>
    <?php
    include("headerIndex.php");
    ?>
    <section>
        <article>
            <div class="inicioS">
                <form action="" method="post">
                    <p>Nombre</p>
                    <input type="text" name="nombre">
                    <p>Correo Electronico</p>
                    <input type="text" name="email">
                    <p>Contraseña</p>
                    <input type="password" name="contra">
                    <br><br>
                    <input type="submit" name="enviar">
                </form>
            </div>
        </article>
    </section>
</body>
</html>
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
    <?php
//Estableciendo la conexión
include ("../conexion.php");
//recogida de datos
if(isset($_POST['nombre'])&& isset($_POST['email']) && isset($_POST['contra'])){
    $nom=$_POST['nombre'];
    $email=$_POST['email'];
    $pass=$_POST['contra'];
    $idUs=$_SESSION['idUsuario'];
    $consulta = "UPDATE usuario SET (email='$email',nombre= '$nom', contrasena='$pass') WHERE idUser='$idUs'";
    //ejecutamos la sentencia SQL
    mysqli_query($conn,$consulta);
   
    echo mysqli_error($conn );
    
    header ("LOCATION:areaPCli.php");
}

?>
</head>
<body>
<?php
    include("headerCli.php");
    ?>

    <section>
        <article>
            <div>
         
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
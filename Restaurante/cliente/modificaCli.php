<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("meta2.php");?>
    <title>Editar</title>

    <?php
//Estableciendo la conexión
include ("../conexion.php");
//recogida de datos
if(isset($_POST['nombre'])&& isset($_POST['email']) && isset($_POST['contra'])){
    $nom=$_POST['nombre'];
    $email=$_POST['email'];
    $pass=$_POST['contra'];
    $idUs=$_SESSION['idUsuario'];
    $consulta = "UPDATE usuario SET nombre='$nom' WHERE idUser='$idUs'";
    //ejecutamos la sentencia SQL
    mysqli_query($conn,$consulta);
   
    echo mysqli_error($conn );
    $_SESSION['name']=$nom;
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
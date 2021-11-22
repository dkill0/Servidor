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
    $result =mysqli_query($conn,$consulta);
    
    if (mysqli_error($conn )) {
        echo "<script>alert(Usuario no encontrado, vuelva a intentarlo o registrese.);</script>";
    }
    header ("LOCATION:areaPIndex.php");
}

?>


</head>
<body>
    <div class="container-fluid">
    <?php
    include("headerIndex.php");
    ?>
    <section class="row">
        <article class="col-12">
                <form action="" method="post" class="row  justify-content-center"">
                <div class="col-auto mt-5">
                    <h1 class="mb-3">Regístrate</h1>
                    <hr>
                    <label for="us" class="form-label">Nombre</label>
                    <input class="form-control" id="us" type="text" name="nombre">
                    <label class="form-label" for="ema">Email </label>
                    <input id="ema" class="form-control" type="text" name="email">
                    <label class="form-label" for="pas">Contraseña </label>
                    <input  id="pas"class="form-control" type="password" name="contra">
                    <br><br>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
                </form>
            
        </article>
        
    </section>
    
   
    </div>
    
</body>
</html>
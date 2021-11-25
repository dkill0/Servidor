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
    <?php
    include("headerIndex.php");
    ?>
    <div class="container-fluid">
    <section class="row">
        <article class="iniS col-12">
                <form action="" method="post" class="row  justify-content-center"">
                <div class="col-6 mt-5">
                    <h1 class="row mb-3">Regístrate</h1>
                    <hr>
                    <div class="row form-floating mb-3">
                    <input class="form-control" id="us" type="text" name="nombre" placeholder="nombre" required>
                    <label for="us" class="texto form-label">Nombre</label>
                    </div>
                    <div class="row form-floating mb-3">
                    <input id="ema" class="form-control" type="text" placeholder="email" name="email" required>
                    <label class="texto form-label" for="ema">Email </label>
                    </div>
                    <div class="row form-floating">
                    <input  id="pas"class="form-control" type="password" placeholder="contra" name="contra" required>
                    <label class="texto form-label" for="pas">Contraseña </label>
                    </div>
                    <br><br>
                    <div class="row d-grid">
                    <button class="d-grid btn btn-primary" type="submit">Enviar</button>
                    </div>
                </div>
                </form>
            
        </article>
        
    </section>
    
   
    </div>
    
</body>
</html>
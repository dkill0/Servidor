<?php
   session_start();
   ?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php   include("meta.php");?>
    <title>Inicio Sesión</title>
    <?php
    include("conexion.php");

            if(isset($_POST['email'])&& isset($_POST['contrasena'])){
    
                $usu=$_POST['email'];
                $contra=$_POST['contrasena'];

                /* Tabla de equivalencias:
                    - 1 --> Admin
                    - 2 --> Camarero
                    - 3 --> Cliente  
               */

                $consulta1 = "SELECT * FROM usuario WHERE email='$usu' AND contrasena='$contra';";
                echo $consulta1;

                $result = mysqli_query($conn ,$consulta1);
                echo mysqli_error($conn );               
                
                mysqli_close($conn);
                echo '<br>';
                //Obtengo el número de registros de la bbdd
                $toEmp=mysqli_num_rows($result);
                if ($toEmp==1){
                    $rowUsu = mysqli_fetch_assoc($result);
                    //Guardamos lo que nos interese para todo el portal en variables de sesión
                    $_SESSION['idUsuario']=$rowUsu['idUser'];
                    $_SESSION['name']=$rowUsu['nombre'];
                    $_SESSION['email']=$rowUsu['email'];
                    $_SESSION['password']=$rowUsu['contrasena'];

                    $tipo=$rowUsu['tipo'];

                    if ($tipo==1) {
                        header("Location:./admin/mesasAd.php");
                    }
                    elseif ($tipo==2){
                        header("Location:./camarero/mesasCam.php");

                    }
                    elseif ($tipo==3){
                        header("Location:./cliente/indexCli.php");
                        
                    }
                     else {
                        echo "Usuario no registrado";
                    }
                    


                }
            }
    
        ?>
</head>
<body>
    <?php
    include("headerIndex.php");
    ?>
<section>
            <article>
            <form action="" method="POST">
                <div>
                <p>Email</p>
                <input name="email" type="text" maxlength="25" size="30"> 
                <p>Contraseña</p>
                <input name="contrasena" type="password" maxlength="25" size=30>
                <br><br>
                <input type="submit" value="Enviar">
                <a href="registroCli.php">Registrarse</a>
                </div>
                </form>
            </article>

        </section>
     
</body>
</html>
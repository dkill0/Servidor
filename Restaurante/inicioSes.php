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
                if (mysqli_error($conn )){
                    echo "Error. Registrese";
                }
                
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
<div class="container-fluid">
    <?php
    include("headerIndex.php");
    ?>
<section class="row">
            <article class="iniS col-12">
                
            <form action="" method="POST" class="row  justify-content-around">
                <div class="col-auto mt-5">
                <h1 class="mb-3">Inicio</h1>
                <hr>
               
                <div class="form-floating mb-3 mt-3">
				<input type="text" name="email" class="form-control" id="email" placeholder="Enter email" name="email">
 
				<label for="email" class="texto form-label">Email</label>
		
                
                </div>

                <div class="form-floating mb-3 mt-3">
				<input  maxlength="25" size=30 type="text" name="contrasena" class="form-control" id="pass" placeholder="Enter email" name="email">
				<label class="texto form-label" for="pass">Contraseña</label>
 
		
                
                </div>
               
                
                
                <button class=" btn btn-primary" type="submit">Iniciar sesión</button>
                <a class="" href="registroCli.php">Registrarse</a>
                </div>
                </form>
            </article>

        </section>

        <footer>
            
        </footer>
</div>
</body>
</html>
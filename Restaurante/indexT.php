<?php
   session_start();
   ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lentejas los Jueves</title>

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

                    $tipo=$rowUsu['tipo'];

                    if ($tipo==1) {
                        header("Location:./admin/admin.php");
                    }
                    elseif ($tipo==2){
                        header("Location:./camarero/camarero.php");

                    }
                    elseif ($tipo==3){
                        header("Location:./cliente/cliente.php");
                        
                    }
                     else {
                        echo "Usuario no registrado";
                    }
                    


                }
            }
    
        ?>
</head>
<body>
    <header>
        <h1>Lentejas los jueves</h1>
        <figure>
            <img src="" alt="">
        </figure>
    </header>
    <h2>Iniciar sesión</h2>
    <form action="" method="POST">
        <section>
            <article>
                <div>
                <p>Email</p>
                <input name="email" type="text" maxlength="25" size="30"> 
                <p>Contraseña</p>
                <input name="contrasena" type="password" maxlength="25" size=30>
                <br><br>
                <input type="submit" value="Enviar">
                <a href="registroCliente.php">Registrarse</a>
                </div>
            </article>

        </section>
     

    </form>
    <p></p>
</body>
</html>
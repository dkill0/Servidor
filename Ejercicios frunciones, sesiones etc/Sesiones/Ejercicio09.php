<!DOCTYPE html>
<?php
session_start();
        if(isset($_POST['usuario'])&& isset($_POST['contrasena'])){

            $_SESSION['login']=$_POST['usuario'];
            $_SESSION['password']=$_POST['contrasena'];

            if(($_POST['usuario']=="admin")&&($_POST['contrasena']=="admin")){
               
                header("Location: paginaAdmin.php");
            }else{
                header("Location: paginaError.php");
             
            }
           

        }

      

    ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
    <h3>Nombre de usuario</h3>
    <input name="usuario" type="text" maxlength="30" size="40" required>
    <br>
    <h3>Contraseña</h3>
    <input name="contrasena" type="password" maxlength="30" size="40" required>
    <br><br>
    <input type="submit" value="Enviar">
    </form>

    
</body>
</html>
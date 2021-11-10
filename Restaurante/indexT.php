<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

    <?php
    include("conexion.php");
   
    session_start();
            if(isset($_POST['email'])&& isset($_POST['password'])){
    
                $_SESSION['login']=$_POST['email'];
                $_SESSION['password']=$_POST['contrasena'];
                
                $usu = $_POST['email'];
                $contra = $_POST['contrasena'];

                $consulta1 = "SELECT tipo FROM usuario WHERE email=$usu AND contrasena=$contra";
                    
                $result = mysqli_query($conn ,$consulta);
                
                $consulta2 = "SELECT descripcion FROM tipo WHERE idTipo=$result";

                if ($consulta2=="camarero" || $consulta2=="admin" || $consulta2=="cliente") {
                    echo "<script>alert('Hola')</script>";
                }else{
                    echo "<script>alert('no estas registrado')</script>";
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
    <form>
        <section>
            <article>
                <div>
                <p>Email</p>
                <input id="email" type="text" maxlength="25" size="30"> 
                <p>Contraseña</p>
                <input id="contrasena" type="password" maxlength="25" size=30>
                <br><br>
                <input type="submit" value="Enviar">
                <a href="#">Registrarse</a>
                </div>
            </article>

        </section>
     

    </form>
    <p></p>
</body>
</html>
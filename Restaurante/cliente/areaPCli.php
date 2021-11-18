<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("meta2.php");?>
    <title>Area Personal</title>

    <script type="text/javascript">
        function cambioNom() {
           
         var nombre1 = prompt("Nuevo nombre:");
         <?php
            $nombre1=$_SESSION['name'];
            //Meter la variable de sesion como valor predeterminado del prompt para k o sea nulo o vacio al cancelar
            //No se si funciona xd
            //Tremenda inventada
            //Meter todo el codigo de js dentro de uno de php a ver si suena la campana
            echo "<script>"
            ?>
         window.location.href = window.location.href + "?w1=" + nombre1;
       
        }
        function cambioEmail() {
         var correo = prompt("Nuevo email:");
         window.location.href = window.location.href + "?w2=" + correo;
       
        }
        function cambioContra() {
         var contra = prompt("Nueva contraseña:");
         window.location.href = window.location.href + "?w3=" + contra;
       
        }
    </script>
    
</head>
<body>
<?php
    include("headerCli.php");
    ?>


    <?php

    $idUs=$_SESSION['idUsuario'];
    $nombre1=$_SESSION['name'];
    $email1=$_SESSION['email'];
    $contra1=$_SESSION['password'];

    include ("../conexion.php");

    if(isset($_GET['w1'])){
       
        $nom=$_GET['w1'];
        if (empty($nom) || is_null($nom)) {
            $_SESSION['name']=$nombre1;
            header ("LOCATION:areaPCli.php");
        }else{
            

           $consulta = "UPDATE usuario SET nombre='$nom' WHERE idUser='$idUs'";
           //ejecutamos la sentencia SQL
           mysqli_query($conn,$consulta);
           $_SESSION['name']=$nom;
           
           
           echo mysqli_error($conn );
           
           header ("LOCATION:areaPCli.php");
        }

       
    }


if(isset($_GET['w2'])){
       
        $email=$_GET['w2'];
       

        $consulta = "UPDATE usuario SET email='$email' WHERE idUser='$idUs'";
   //ejecutamos la sentencia SQL
   mysqli_query($conn,$consulta);
   $_SESSION['email']=$email;
   
   
   echo mysqli_error($conn );
   
   header ("LOCATION:areaPCli.php");
    }else{
        $_SESSION['email']=$email1;
       
       // header ("LOCATION:areaPCli.php");
        
    }
    if(isset($_GET['w3'])){
       
        $contra=$_GET['w3'];
       

        $consulta = "UPDATE usuario SET contrasena='$contra' WHERE idUser='$idUs'";
   //ejecutamos la sentencia SQL
   mysqli_query($conn,$consulta);
   $_SESSION['password']=$contra;
   
   
   echo mysqli_error($conn );
   
   header ("LOCATION:areaPCli.php");
    }else{
        
        $_SESSION['password']=$contra1;
       // header ("LOCATION:areaPCli.php");
    }
   
    ?>
    
    <section>
        <article>
            <h3>Datos Personales</h3>
            <div>
                
                <p>Nombre</p>
                <p><?php echo $_SESSION['name']?></p>
                <button name="edita" onclick="cambioNom()" >Editar</button>
                <p>Email</p>
                <p><?php echo $_SESSION['email']?></p>
                <button name="edita" onclick="cambioEmail()" >Editar</button>
                <p>Contraseña</p>
                <p><?php echo $_SESSION['password']?></p>
                <button name="edita" onclick="cambioContra()" >Editar</button>
                

            </div>
        </article>
<footer></footer>
        
    </section>
</body>
</html>
<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("../cliente/meta2.php");?>
    <title>Area Personal</title>
    <script type="text/javascript">
        function cambioNom() {
           
         var nombre1 = prompt("Nuevo nombre:","");
      
         window.location.href = window.location.href + "?w1=" + nombre1;
       
        }
        function cambioEmail() {
         var correo = prompt("Nuevo email:","");
         window.location.href = window.location.href + "?w2=" + correo;
       
        }
        function cambioContra() {
         var contra = prompt("Nueva contraseña:","");
         window.location.href = window.location.href + "?w3=" + contra;
       
        }
</script>
</head>
<body>
<?php
    include("headerCam.php");

    $idUs=$_SESSION['idUsuario'];
    $nombre1=$_SESSION['name'];
    $email1=$_SESSION['email'];
    $contra1=$_SESSION['password'];
  
    include ("../conexion.php");

    if(isset($_GET['w1'])){
       
        $nom=$_GET['w1'];
        if (empty($nom) || is_null($nom) || $nom=="null") {
            $_SESSION['name']=$nombre1;
            header("LOCATION: areaPCam.php");
            }
        else{
            

           $consulta = "UPDATE usuario SET nombre='$nom' WHERE idUser='$idUs'";
           //ejecutamos la sentencia SQL
           mysqli_query($conn,$consulta);
           $_SESSION['name']=$nom;
           
           
           echo mysqli_error($conn );
           
           header("LOCATION: areaPCam.php");
        }

    }   
    

if(isset($_GET['w2'])){
       
    $email=$_GET['w2'];
    if (empty($email) || is_null($email) || $email=="null") {
        $_SESSION['email']=$email1;
        header("LOCATION: areaPCam.php");
    }else{
        

       $consulta = "UPDATE usuario SET email='$email' WHERE idUser='$idUs'";
       //ejecutamos la sentencia SQL
       mysqli_query($conn,$consulta);
       $_SESSION['email']=$email;
       
       
       echo mysqli_error($conn );
       
       header("LOCATION: areaPCam.php");
    }
}

if(isset($_GET['w3'])){
       
    $contra=$_GET['w3'];
    if (empty($contra) || is_null($contra) || $contra=="null") {
        $_SESSION['password']=$contra1;
        header("LOCATION: areaPCam.php");
    }else{
        

       $consulta = "UPDATE usuario SET contrasena='$contra' WHERE idUser='$idUs'";
       //ejecutamos la sentencia SQL
       mysqli_query($conn,$consulta);
       $_SESSION['contrasena']=$contra;
       
       
       echo mysqli_error($conn );
       
       header("LOCATION: areaPCam.php");
    }
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
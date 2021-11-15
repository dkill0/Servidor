<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("meta2.php");?>
    <title>Area Personal</title>

    <script type="text/javascript">
        function muestra() {
         var nombre1 = prompt("Nuevo nombre:");
         window.location.href = window.location.href + "?w1=" + nombre1;
       
        }
    </script>
    
</head>
<body>
<?php
    include("headerCli.php");
    ?>
    <?php

    include ("../conexion.php");
    if(isset($_GET['w1'])){
       
        $nom=$_GET['w1'];
        $idUs=$_SESSION['idUsuario'];

        $consulta = "UPDATE usuario SET nombre='$nom' WHERE idUser='$idUs'";
   //ejecutamos la sentencia SQL
   mysqli_query($conn,$consulta);
   $_SESSION['name']=$nom;
   
   
   echo mysqli_error($conn );
   
   header ("LOCATION:areaPCli.php");
    }
   
    ?>
    
    <section>
        <article>
            <h3>Datos Personales</h3>
            <div>
                
                <p>Nombre</p>
                <p><?php echo $_SESSION['name']?></p>
                <button name="edita" onclick="muestra()" >Editar</button>
                <p>Email</p>
                <p><?php echo $_SESSION['email']?></p>
                <p>Contraseña</p>
                <p><?php echo $_SESSION['password']?></p>
                
                <a href="modificaCli.php">Modificar datos</a>
            </div>
        </article>
<footer></footer>
        
    </section>
</body>
</html>
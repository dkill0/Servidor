<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/EstilosIndex.css" rel="stylesheet" type="text/css">
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

        $consulta = "UPDATE usuario SET (nombre='$nom') WHERE idUser='$idUs'";
   //ejecutamos la sentencia SQL
   mysqli_query($conn,$consulta);
   
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
        <article>
            <h3>Pedidos</h3>
            <div>
                <p>Total pedidos:</p>
                <p></p>
                <p>Pedidos en curso:</p>
                <p></p>
                <p>Pedidos finalizados: </p>
                <p></p>
            </div>
        </article>

        
    </section>
</body>
</html>
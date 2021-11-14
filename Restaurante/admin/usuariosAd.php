<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("../cliente/meta2.php");?>
    <title>Usuarios</title>
</head>
<body>
<?php
include("headerAd.php");
?>  
<article class="usuarios2">
<h2>Empleados</h2>
<div>
<?php
            include("../conexion.php");
          $consulta= "SELECT idUser, nombre FROM usuario WHERE tipo=2";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          while($row = mysqli_fetch_array($result)){
            print('<div class="usuarios"');
            print("<p>".$row['idUser']." - ");
            print("".$row['nombre']."</p>");
            print('</div>');
              }
              
          
    ?>
    </div>
</article>

<article class="usuarios2">
    <h2>Clientes</h2>
    <div>
    <?php
            include("../conexion.php");
          $consulta= "SELECT idUser, nombre FROM usuario WHERE tipo=3";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          while($row = mysqli_fetch_array($result)){
                print('<div class="usuarios"');
                print("<p>".$row['idUser']." - ");
                print("".$row['nombre']."</p>");
                print('</div>');
              }
              
          
    ?>
    </div>
</article>

</body>
</html>
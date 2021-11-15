<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("meta2.php");?>
    <title>Carta</title>
</head>
<body>
<?php
    include("headerCli.php");
?>
<section>
    <?php
            include("../conexion.php");
          $consulta= "SELECT * FROM productos WHERE tipo=7";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          
                  
          
          while($row = mysqli_fetch_array($result)){
              
              
            print('<div class="productos">');
                print("<h3>".$row['nombre']."</h3>");
                print("<h4>Descripción</h4>");
                print("<p>".$row['descripcion']."</p>");
                print("<p>".$row['precio']."</p>");
                print("</div>");
              }
              
          
    ?>
    <a href="cartaCli.php">Volver</a>
</section>
</body>
</html>
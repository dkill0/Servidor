<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("../cliente/meta2.php");?>
    <title>Carta</title>
    <script>
      function prueba() {
       
  window.open("https://javascript.info");
};
 
    </script>
</head>
<body>
<?php
include("headerAd.php");
?>
<section>

<article>
    <h2>Entrantes</h2>
    <button name="edita" onclick="">Editar</button>
    <div>
    <?php
            include("../conexion.php");
          $consulta= "SELECT * FROM productos WHERE tipo=5";
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
    </div>
</article>
<article>
    <h2>Platos</h2>
    <button name="edita" onclick="">Editar</button>
    <div>
    <?php
            include("../conexion.php");
          $consulta= "SELECT * FROM productos WHERE tipo=6";
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
    </div>
</article>
<article>
    <h2>Postres</h2>
    <button name="edita" onclick="">Editar</button>
    <div>
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
    </div>
</article>
<article>
    <h2>Bebidas</h2>
    <button name="edita" onclick="">Editar</button>
    <div>
    <?php
            include("../conexion.php");
          $consulta= "SELECT * FROM productos WHERE tipo=4";
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
    </div>
</article>

</section>


</body>
</html>
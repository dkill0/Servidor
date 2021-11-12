<?php
            include("conexion.php");
          $consulta= "SELECT * FROM productos";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          
                  
          
          while($row = mysqli_fetch_array($result)){
              
              
                print("<div>");
                print("<h3>".$row['nombre']."</h3>");
                print("<h4>Descripción</h4>");
                print("<p>".$row['descripcion']."</p>");
                print("<p>".$row['precio']."</p>");
                print("</div>");
              }
              
          
    ?>

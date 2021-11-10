<?php
            include("conexion.php");
          $consulta= "SELECT * FROM productos";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          
                  print("<table border=1>");
                  print("<tr>
               
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Precio</th>
                  </tr>");
          
          while($row = mysqli_fetch_array($result)){
              
              print("<tr>");
             
              print("<td>".$row['nombre']."</td>");
              print("<td>".$row['descripcion']."</td>");
              print("<td>".$row['precio']."</td>");
              print("</tr>");
              }
              print("</table>");
          
    ?>

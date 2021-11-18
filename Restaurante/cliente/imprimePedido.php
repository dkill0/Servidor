<?php
        include("../conexion.php");

            
            $idUs=$_SESSION['idUsuario'];
          $consulta= "SELECT DISTINCT l.idProducto as prod, nombre, SUM(cantidad) AS cant, t.descripcion,  pr.precio as precioIn, (pr.precio*SUM(cantidad)) as precioFin
          FROM lineapedido l, pedido p,  productos pr, tipo t
          WHERE l.idPedido='$codPed' AND p.idPedido=l.idPedido  and pr.idProducto=l.idProducto and cliente='$idUs' and pr.tipo=t.idTipo
          GROUP BY l.idProducto
          ORDER BY t.descripcion";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          echo "<h3>Pedido numero: ".$codPed."</h3>";

          $consulta4 = "SELECT fecha from pedido where idPedido='$codPed'";
         //Ejecutamos la sentencia SQL
         $result4 = mysqli_query($conn ,$consulta4);
         //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
        echo mysqli_error($conn);
          while($row = mysqli_fetch_array($result4)){
            $fechaPed=$row['fecha'];
            echo "<h4>Fecha: ".$fechaPed."</h4>";
          }
          
          
          echo " <table border=1>
          <tr>
          <th>Nombre</th>
          <th>Cantidad</th>
          <th>Precio individual</th>
          <th>Total producto</th>
          </tr>";
                  
          
          while($row = mysqli_fetch_array($result)){
                
           
    
                print("<tr>
                <td>".$row['nombre']."</td>
                <td>".$row['cant']."</td>
                <td>".$row['precioIn']."</td>
                <td>".$row['precioFin']."</td>    
                    </tr>
                    ");
               
              }
      
              $consulta2="SELECT DISTINCT SUM(pr.precio*cantidad) as precioTotal
              FROM lineapedido l, pedido p,  productos pr, tipo t
              
              WHERE l.idPedido='$codPed' AND p.idPedido=l.idPedido AND pr.idProducto=l.idProducto AND cliente='$idUs' and pr.tipo=t.idTipo
              GROUP BY l.idPedido   
              HAVING SUM(cantidad)
              ORDER BY t.descripcion";
              $result = mysqli_query($conn ,$consulta2);
            //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
            echo mysqli_error($conn);
            while($row = mysqli_fetch_array($result)){
                $TOTAL=$row['precioTotal'];
            }
    
            echo '<tr >
                <th>Total:</th>
                <td align="right" colspan=3>'.$TOTAL.'</td>
                </table>
            ';
        
    ?>
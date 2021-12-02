<?php
        include("../conexion.php");

          echo '<h3 style="color:white;" class="text-center">Pedido numero: '.$codPed.'</h3>';

          $consulta4 = "SELECT fecha from pedido where idPedido='$codPed'";
         //Ejecutamos la sentencia SQL
         $result4 = mysqli_query($conn ,$consulta4);
         //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
        echo mysqli_error($conn);
          while($row2 = mysqli_fetch_array($result4)){
            $fechaPed=$row2['fecha'];
            echo '<h4 class="text-center"style="color:white;">Fecha: '.$fechaPed.'</h4>';
           
          }
   
          $idUs=$_SESSION['idUsuario'];
          $consulta= "SELECT DISTINCT l.idProducto as prod, nombre, SUM(cantidad) AS cant, t.descripcion,  pr.precio as precioIn, (pr.precio*SUM(cantidad)) as precioFin
          FROM lineapedido l, pedido p,  productos pr, tipo t
          WHERE l.idPedido='$codPed' AND p.idPedido=l.idPedido  and pr.idProducto=l.idProducto and cliente='$idUs' and pr.tipo=t.idTipo
          GROUP BY l.idProducto
          ORDER BY t.descripcion";
          //Ejecutamos la sentencia SQL
          $result5 = mysqli_query($conn ,$consulta);
          $numeritoCarlos = mysqli_num_rows($result5);

          if ($numeritoCarlos!=0){

            echo ' <table class="table table-dark table-responsive">
            <tr>
            <th>Nombre</th>
            <th class=text-end>Cantidad</th>
            <th class=text-end>Precio individual</th>
            <th class=text-end>Total producto</th>
            </tr>';
  
            while($row3 = mysqli_fetch_array($result5)){

              print("<tr>
              <td>".$row3['nombre']."</td>
              <td class=text-end>".$row3['cant']."</td>
              <td class=text-end>".$row3['precioIn']."€</td>
              <td class=text-end>".$row3['precioFin']."€</td>    
                  </tr>
                  ");
            }
              mysqli_error($conn);

              $consulta2="SELECT DISTINCT SUM(pr.precio*cantidad) as precioTotal
              FROM lineapedido l, pedido p,  productos pr, tipo t
              WHERE l.idPedido='$codPed' AND p.idPedido=l.idPedido AND pr.idProducto=l.idProducto AND cliente='$idUs' and pr.tipo=t.idTipo
              GROUP BY l.idPedido   
              HAVING SUM(cantidad)
              ORDER BY t.descripcion";
              $result2 = mysqli_query($conn ,$consulta2);
              //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
              echo mysqli_error($conn);
            
              while($row4 = mysqli_fetch_array($result2)){
                $TOTAL=$row4['precioTotal'];
             
                  echo '<tr >
                  <th>Total:</th>
                  <td align="right" colspan=3>'.$TOTAL.'€</td>
                  </tr>
                 ';
              }
           echo "</table>"; 
            } else {
              
              echo"Sin productos.";
            }
    ?>
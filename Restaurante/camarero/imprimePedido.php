<?php

echo '<h3 style="color:white;" class="text-center">Pedido numero: '.$codPed.'</h3>';

$consulta4 = "SELECT fecha from pedido where idPedido='$codPed' and enviado=0";
//Ejecutamos la sentencia SQL
$result4 = mysqli_query($conn ,$consulta4);
//Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
mysqli_error($conn);
while($row2 = mysqli_fetch_array($result4)){
  $fechaPed=$row2['fecha'];
  echo '<h4 class="text-center"style="color:white;">Fecha: '.$fechaPed.'</h4>';
 
}

$consulta7= "SELECT DISTINCT l.idProducto as prod, nombre, SUM(cantidad) AS cant, l.fecha as fecha
FROM lineapedido l, pedido p,  productos pr, tipo t
WHERE l.idPedido='$codPed' AND p.idPedido=l.idPedido  and pr.idProducto=l.idProducto and camarero='$idUs' and enviado=0 and pr.tipo=t.idTipo
GROUP BY l.idProducto
ORDER BY t.descripcion";
//Ejecutamos la sentencia SQL
$result5 = mysqli_query($conn ,$consulta7);
$numeritoCarlos = mysqli_num_rows($result5);

if ($numeritoCarlos!=0){

  echo ' <table class="table table-dark table-responsive">
  <tr>
  <th>Nombre</th>
  <th class=text-end>Cantidad</th>
  <th class=text-end>Servido</th>
  </tr>';

  $conta=0;
  while($row3 = mysqli_fetch_array($result5)){
    $idProd= $row3['prod'];
    $fecha= $row3['fecha'];
    $fecha1=strval($fecha);

    print("<tr>
    <td>".$row3['nombre']."</td>
    <td class=text-end>".$row3['cant']."</td>
    
        ");
        print'<td class="text-end"> <button class="btn btn-primary" type="button" onclick=sirve('.$idProd.','.$codPed.','.$fecha1.','.$conta.')>Servir</button> <p id="servido'.$conta.'">No servido</p></td>
    
        </tr>';
        $conta++;
        
  }
    mysqli_error($conn);

 echo "</table>"; 
  } else {
    
    echo"Sin productos.";
  }
?>

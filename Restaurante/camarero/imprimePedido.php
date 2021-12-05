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

$consulta7= "SELECT DISTINCT l.idProducto as prod, nombre, SUM(cantidad) AS cant, l.servido as servido
FROM lineapedido l, pedido p,  productos pr, tipo t
WHERE l.idPedido='$codPed' AND p.idPedido=l.idPedido AND p.servido=0 and pr.idProducto=l.idProducto and camarero='$idUs' and enviado=1 and pr.tipo=t.idTipo
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
    $servido= $row3['servido'];
    
    

    print("<tr>
    <td>".$row3['nombre']."</td>
    <td class=text-end>".$row3['cant']."</td>
    <td class=text-end>
        ");
        
        
        if($servido == 1){
          print'<p id="servido'.$conta.'">Ya servido</p>';
        } else{
          print'<form action="servido.php" method="post"> 
          <input type=hidden name=prod value='.$idProd.'>
          
         
          <input type=hidden name=codPed value='.$codPed.'>

          <button class="btn btn-primary" type="submit">Servir</button></form>';
        }
        print'
        </td>
    
        </tr>';
        $conta++;
  }
    mysqli_error($conn);


    $consulta8 = "SELECT servido from lineapedido where idPedido='$codPed' and servido=0; "; 
    $result6 = mysqli_query($conn ,$consulta8);
    $numero = mysqli_num_rows($result6);
    if ($numero == 0){
      print '
        <tr class="text-end">
        <form action="servido.php" method="post">
        
        <input type=hidden name=codigo value='.$codPed.'>
          <td colspan=3><button type="submit" class="btn btn-success">Pedido finalizado</button></td>
          </form>
        </tr>
      ';
    }



 echo "</table>"; 
  } else {
    
    echo"Sin productos.";
  }
?>

<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("meta2.php");?>
    <title>Document</title>
</head>
<body>
        
<?php
    include("headerCli.php");
?>
    <?php
        include("../conexion.php");

            $codPed=$_GET['codPed'];
            $idUs=$_SESSION['idUsuario'];
          $consulta= "SELECT DISTINCT l.idProducto as prod, nombre, SUM(cantidad) AS cant, t.descripcion,  pr.precio as precioIn, (pr.precio*SUM(cantidad)) as precioFin
          FROM lineapedido l, pedido p,  productos pr, tipo t
          WHERE l.idPedido='$codPed'  and pr.idProducto=l.idProducto and cliente='$idUs' and pr.tipo=t.idTipo
          GROUP BY l.idProducto
          ORDER BY t.descripcion";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          echo "<h1>Pedido numero: ".$codPed."</h1>";
          echo " <table>
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
      
    ?>
</body>
</html>
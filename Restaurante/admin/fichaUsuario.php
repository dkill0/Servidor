<?php
  include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    include("../cliente/meta2.php");
    ?>
    <title>Usuarios</title>
</head>
<body>
  <?php

include("headerAd.php");
  ?>
<div class="container-fluid">
    <?php
        $identificador = $_GET['usuario'];

        include("../conexion.php");
        $consulta= "SELECT idUser, nombre, email, contrasena, descripcion  FROM usuario u, tipo t WHERE idUser='$identificador' AND t.idTipo=u.tipo";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          while($row = mysqli_fetch_array($result)){
            $idUs=$row['idUser'];
            $nom=$row['nombre'];
            print("<div class=row>");
            print('<div class="usuarios col-auto"');
            print("<p>Identificador: ".$row['idUser']."</p> ");
            print("<p>Email: ".$row['email']."</p>");
            print("<p>Nombre: ".$row['nombre']."</p>");
            print("<p>Contrasena: ".$row['contrasena']."</p>");
            print("<p>Tipo: ".$row['descripcion']."</p>");
            print('</div>');
            print("</div>");
            $descri=$row['descripcion'];
           
         
          }
              //Muestra los pedidos asignados al camarero
              if ($descri=="camarero") {
                echo "<h2>Pedidos del usuario</h2>";
                $consulta2="SELECT idPedido
                FROM pedido
                WHERE camarero='$identificador'
                ORDER BY idPedido DESC";
                $result2 = mysqli_query($conn ,$consulta2);
            
              echo mysqli_error($conn);
              $idUs=$identificador;
              while ($row2 = mysqli_fetch_array($result2)) {
                
                $codPed=$row2['idPedido'];
                include("imprimePedido.php");
                
              }
              }

              //Muestra los pedidos pagados de los clientes
              if ($descri=="cliente") {
                echo "<h2>Pedidos del usuario</h2>";
                $consulta2="SELECT idPedido
                FROM pedido
                WHERE cliente='$identificador' AND pagado=1
                ORDER BY idPedido DESC";
                
                $resultCarlos = mysqli_query($conn ,$consulta2);
                $numerito = mysqli_num_rows($resultCarlos);

              echo mysqli_error($conn);
              $idUs=$identificador;
              while ($rowCarlos = mysqli_fetch_array($resultCarlos)) {
                
                $codPed=$rowCarlos['idPedido'];
                include("imprimePedido.php");
                
              }
              }
             
            
              
              
    ?>
    <a href="usuariosAd.php">Volver</a>
            </div>
</body>
</html>
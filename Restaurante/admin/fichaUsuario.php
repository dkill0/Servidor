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
          
          while($row28 = mysqli_fetch_array($result)){
            $idUs=$row28['idUser'];
            $nom=$row28['nombre'];
            print('<div class="row justify-content-center">');
            print('<div class="text-center bg-secondary col-5"');
            print("<p>Identificador: ".$row28['idUser']."</p> ");
            print("<p>Email: ".$row28['email']."</p>");
            print("<p>Nombre: ".$row28['nombre']."</p>");
            print("<p>Contrasena: ".$row28['contrasena']."</p>");
            print("<p>Tipo: ".$row28['descripcion']."</p>");
            print('</div>');
            print("</div>");
            $descri=$row28['descripcion'];
           
         
          }
              //Muestra los pedidos asignados al camarero
              if ($descri=="camarero") {
                echo ' <div class="row justify-content-around">
                
                <h2 style="color:white;"class="text-center fondoT">Pedidos del usuario</h2>';
                $consulta27="SELECT idPedido, cliente, camarero
                FROM pedido
                WHERE camarero='$identificador'
                ORDER BY idPedido DESC";
                $result27 = mysqli_query($conn ,$consulta27);
            
              echo mysqli_error($conn);
              
              while ($row27 = mysqli_fetch_array($result27)) {
                $idCam=$row27['camarero'];
                $idUs=$row27['cliente'];
                $codPed=$row27['idPedido'];
                echo '<div class="mt-4 col-12 col-md-5 bg-secondary">';
                
                include("imprimePedido.php");
                echo"</div>";
                
              }
              echo"</div>";
              }

              //Muestra los pedidos pagados de los clientes
              if ($descri=="cliente") {
                echo ' <div class="row justify-content-around">
                
                <h2 style="color:white;"class="text-center fondoT">Pedidos del usuario</h2>';
                $consulta2="SELECT idPedido, camarero
                FROM pedido
                WHERE cliente='$identificador' AND pagado=1
                ORDER BY idPedido DESC";
                
                $resultCarlos = mysqli_query($conn ,$consulta2);
                $numerito = mysqli_num_rows($resultCarlos);

              echo mysqli_error($conn);
              $idUs=$identificador;
              
              while ($rowCarlos = mysqli_fetch_array($resultCarlos)) {
                $idCam=$rowCarlos['camarero'];
                echo '<div class="mt-4 col-12 col-md-5 bg-secondary">';
                $codPed=$rowCarlos['idPedido'];
                include("imprimePedido.php");
                echo"</div>";
              }
              echo"</div>";

              }
             
            
              
              
    ?>
    <a href="usuariosAd.php">Volver</a>
            </div>
</body>
</html>
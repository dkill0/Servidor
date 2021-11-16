<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("meta2.php");?>
<script>
    function insertaProducto(param) {
        var cant = prompt("Inserte la cantidad:");
        window.location.href = window.location.href + "?w2=" + param;
        window.location.href = window.location.href + "?w1=" + cant;
       
    }
</script>
    <title>Carta</title>
</head>
<body>
<?php
    include("headerCli.php");
?>
<section>
    <?php
      if(isset($_GET['w1']) && isset($_GET['w2'])){
       
        $canti=$_GET['w1'];
        $idPro=$_GET['w2'];
        
        include("../conexion.php");


        $consulta= "INSERT INTO lineapedido (idPedido,idProducto,cantidad) VALUES (null,'$idPro','$canti')";
        //Ejecutamos la sentencia SQL
        $result = mysqli_query($conn ,$consulta);
        //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
        echo mysqli_error($conn);
    }
    ?>
    
    <?php
            include("../conexion.php");

          


          $consulta= "SELECT * FROM productos WHERE tipo=4";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          
            $i=0;
          
          while($row = mysqli_fetch_array($result)){
            $idPro[$i]=$row['idProducto'];

            $idParaGuardar=$row['idProducto'];

            print('<div class="productos">');
            print("<h3>".$row['idProducto']."</h3>");
            print(' <button value="');
            print("$idPro[$i]");
            print('" onclick="insertaProducto('.$idParaGuardar.')">');
            print("<h3>".$row['nombre']."</h3>");
            print("<h4>Descripción</h4>");
            print("<p>".$row['descripcion']."</p>");
            print("<p>".$row['precio']."</p>");
            //print("<a href=anadirLineaProductos.php?idPro=$idParaGuardar>Añadir el carrito.php</a>");
            print("</button></div>");
            //print("</div>");

                
                $i++;
              }
              
          
    ?>
   
    <a href="cartaCli.php">Volver</a>

</section>
</body>
</html>
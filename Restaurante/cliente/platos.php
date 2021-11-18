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
        window.location.href = window.location.href + "&w2=" + param + "&w1=" + cant;
     
       
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
        $codPed=$_GET['codPed'];
        $sitio=$_SERVER['REQUEST_URI'];
        header("LOCATION: insertaProd.php?codPed=$codPed&canti=$canti&idPro=$idPro&sitio=$sitio");
       
    }
    ?>
    <?php
            include("../conexion.php");
          $consulta= "SELECT * FROM productos WHERE tipo=6";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          $i=0;
                  
          while($row = mysqli_fetch_array($result)){
            $idPro[$i]=$row['idProducto'];

            $idParaGuardar=$row['idProducto'];
            $codPed=$_GET['codPed'];
            print('<div class="productos">');
            print(' <button value="');
            print("$idPro[$i]");
            print('" onclick="insertaProducto('.$idParaGuardar.')">');
            print("<h3>".$row['nombre']."</h3>");
            print("<h4>Descripción</h4>");
            print("<p>".$row['descripcion']."</p>");
            print("<p>".$row['precio']."</p>");
           
            print("</button></div>");
    
           $i++;
              }
              echo"<a href=cartaCli.php?codPed=$codPed>Volver</a>"; 
          
    ?>

</section>
</body>
</html>

<?php
//Estableciendo la conexión
include ("conexion.php");
//recogida de datos

$cod=$_POST['codigo'];
$pro=$_POST['producto'];
$det=$_POST['detalle'];
$pre=$_POST['precio'];
$des=$_POST['descuento'];
$ima="images/".$cod.".jpg";
$consulta = "UPDATE productos SET (producto='$pro',detalle='$det', precio='$pre',descuento='$des',imagen='$ima') WHERE codigo='$cod'";
//ejecutamos la sentencia SQL
mysqli_query($conn,$consulta);
//copiamos la imagen que nos ha llegado a su carpeta.
echo mysqli_error($conn );
$ruta=$ima;
COPY($_FILES["imagen"]["tmp_name"],$ruta);
//redireccionamos a la web listados (este fichero lo debeis de crar vosotros)
header ("LOCATION:listado.php");
?>




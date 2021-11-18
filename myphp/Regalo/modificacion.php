
<?php
//Estableciendo la conexión
include ("conexion.php");
//recogida de datos
// Cambiar las variables
if(isset($_POST['codC'])&& !empty($_POST['codC'])){
    $codC=$_POST['codigoCambio'];
}
if(isset($_POST['codC'])&& !empty($_POST['codC'])){
$pro=$_POST['producto'];
}
if(isset($_POST['codC'])&& !empty($_POST['codC'])){
$det=$_POST['detalle'];
}
if(isset($_POST['codC'])&& !empty($_POST['codC'])){
$pre=$_POST['precio'];
}
if(isset($_POST['codC'])&& !empty($_POST['codC'])){
$des=$_POST['descuento'];
}
if(isset($_POST['codC'])&& !empty($_POST['codC'])){
$ima="images/".$cod.".jpg";
}
$consulta = "UPDATE productos SET (codigoCambio= '$codC',producto='$pro', detalle='$det', precio='$pre', descuento='$des', imagen='$ima') WHERE codigo='$cod'";
//ejecutamos la sentencia SQL
mysqli_query($conn,$consulta);
//copiamos la imagen que nos ha llegado a su carpeta.
echo mysqli_error($conn );
$ruta=$ima;
COPY($_FILES["imagen"]["tmp_name"],$ruta);
//redireccionamos a la web listados (este fichero lo debeis de crar vosotros)
header ("LOCATION:listado.php");
?>


UPDATE usuario SET (email= cliente,nombre= Victoria, contrasena=123, tipo=3) WHERE codigo=12;





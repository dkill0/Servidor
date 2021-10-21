<?php
//Estableciendo la conexión
include ("conexion.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
</head>
<body>
   <?php

$consulta= "SELECT * FROM productos";
//Ejecutamos la sentencia SQL
$result = mysqli_query($conn ,$consulta);
//Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
echo mysqli_error($conn);


        print("<table border=1>");
        print("<tr>
        <th>Codigo</th>
        <th>Producto</th>
        <th>Detalle</th>
        <th>Precio</th>
        <th>Descuento</th>
        <th>Imagen</th>
        </tr>");

while($row = mysqli_fetch_array($result)){
	
	print("<tr>");
	print("<td>".$row['codigo']."</td>");
	print("<td>".$row['producto']."</td>");
	print("<td>".$row['detalle']."</td>");
	print("<td>".$row['precio']."</td>");
	print("<td>".$row['descuento']."</td>");
	print("<td>".$row['imagen']."</td>");
	print("</tr>");
    

    
    }
    print("</table>");
?>
   <p><a href="menu.php"> Volver al menu</a></p>
</body>
</html>
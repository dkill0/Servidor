<html>
<head>
<title>Realizamos una consulta</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</head>

<body>
<?php
//creamos la conexion
$conn = mysqli_connect('localHost','root','');
//Imprimos el error si se ha producido
echo mysqli_error($conn);


//Seleccionamos la base de datos
mysqli_select_db($conn ,'pruebas');
//Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
echo mysqli_error($conn);


//Me creo la consulta que voy a ejecutar. En este caso voy a obtener todas las personas de la base de datos
$consulta = "SELECT * FROM PERSONAS";

$result = mysqli_query($conn ,$consulta);
//Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
echo mysqli_error($conn);


print("<table border='1'>");
print("<caption> Pruebas <caption>");
print("<tr>");
	print("<th>NOMBRE</th>");
	print("<th>APELLIDOS</th>");
	print("<th>PROVINCIA</th>");
	print("<th>EDAD</th>");
	print("<th>PROFESION</th>");
	print("<th>SEXO</th>");
	
	
	print("</tr>");
	
while($row = mysqli_fetch_array($result))
{
	
	print("<tr>");
	print("<td>" . $row['NOMBRE']."</td>");
	print("<td>" . $row['APELLIDOS']."</td>");
	print("<td>" . $row['PROVINCIA']."</td>");
	print("<td>" . $row['EDAD']."</td>");
	print("<td>" . $row['PROFESION']."</td>");
	print("<td>" . $row['SEXO']."</td>");
	
	
	print("</tr>");
	
	

	
	//Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
	mysqli_error($conn);
	
}
print("</table>");

mysqli_close($conn);


?>

</body>
</html>
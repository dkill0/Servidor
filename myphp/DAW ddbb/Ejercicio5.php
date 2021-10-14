<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    //creamos la conexion
$conn = mysqli_connect('localHost','root','');
//Imprimos el error si se ha producido
echo mysqli_error($conn);


//Seleccionamos la base de datos
mysqli_select_db($conn ,'DAW');
//Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
echo mysqli_error($conn);


//Me creo la consulta que voy a ejecutar. En este caso voy a obtener todas las personas de la base de datos
$consulta = "SELECT * FROM usuarios WHERE edad=35";

$result = mysqli_query($conn ,$consulta);
//Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
echo mysqli_error($conn);


        print("<table border=1>");
        print("<tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Telefono</th>
        <th>Admin</th>
        <th>Edad</th>
        </tr>");

while($row = mysqli_fetch_array($result)){
	
	print("<tr>");
	print("<td>".$row['id']."</td>");
	print("<td>".$row['nombre']."</td>");
	print("<td>".$row['apellidos']."</td>");
	print("<td>".$row['numTlf']."</td>");
	print("<td>".$row['admin']."</td>");
	print("<td>".$row['edad']."</td>");
	print("</tr>");
    print("</table>");

    
    }
    ?>
</body>
</html>
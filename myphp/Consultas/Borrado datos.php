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
echo mysqli_error($conn );


//Seleccionamos la base de datos
mysqli_select_db($conn,'pruebas');
//Imprimos el error si se ha producido. mysqli_error siempre va 
//a mostrar el error de la última función mysqli ejecutada
echo mysqli_error($conn);


//Me creo la consulta que voy a ejecutar. En este caso voy a obtener todas las personas de la base de datos
$consulta = "DELETE";

$result = mysqli_query($conn,$consulta);

if ( mysqli_error($conn)){
    echo mysqli_error($conn);
} else{
    print ("<h4>Inserción realizada correctamente</h4>");
}




mysqli_close($conn);


?>
</body>
</html>
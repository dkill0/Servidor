<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="Formulario insercion.php">
    <p>ID</p>
    <input name="id" type="text" maxlength="30" size="40" required>
    <br>
    <p>Nombre</p>
    <input name="nombre" type="text" maxlength="30" size="40" required>
    <br>
    <p>Apellidos</p>
    <input name="apellidos" type="text" maxlength="30" size="40" required>
    <br>
    <p>Numero de telefono</p>
    <input name="numtelf" type="text" maxlength="30" size="40" required>
    <br>
    <p>Rol admin(0 no, 1 si)</p>
    <input name="admin" type="text" maxlength="30" size="40" required>
    <br>
    <p>Edad</p>
    <input name="edad" type="text" maxlength="30" size="40" required>
    <br>
    <input type="submit" value="Enviar"> 
    <input type="reset" value="Borrar"> 
    <br><br>
</form>


<?php
//creamos la conexion
$conn = mysqli_connect('localHost','root','');
//Imprimos el error si se ha producido
echo mysqli_error($conn );


//Seleccionamos la base de datos
mysqli_select_db($conn,'DAW');
//Imprimos el error si se ha producido. mysqli_error siempre va 
//a mostrar el error de la última función mysqli ejecutada
echo mysqli_error($conn);


$id=0;
$nombre=0;
$apellidos=0;
$numtelf=0;
$admin=0;
$edad=0;

 if(isset ($_POST['id']) && !empty($_POST['id'])){
    $id=$_POST['id']; 
}
if(isset ($_POST['nombre']) && !empty($_POST['nombre'])){
    $nombre=$_POST['nombre'];
}
if(isset ($_POST['apellidos']) && !empty($_POST['apellidos'])){
    $apellidos=$_POST['apellidos'];
}
if(isset ($_POST['numtelf']) && !empty($_POST['numtelf'])){
    $numtelf=$_POST['numtelf'];
}
if(isset ($_POST['admin']) && !empty($_POST['admin'])){
    $admin= $_POST['admin'];
}
if(isset ($_POST['edad']) && !empty($_POST['edad'])){
    $edad=$_POST['edad'];
}

//Me creo la consulta que voy a ejecutar. En este caso voy a obtener todas las personas de la base de datos
$consulta = "INSERT INTO usuarios VALUES ('$id','$nombre', '$apellidos','$numtelf','$admin','$edad')";

$result = mysqli_query($conn,$consulta);
//Imprimos el error si se ha producido. mysqli_error siempre va a mostrar el error de la última función mysqli ejecutada
if ( mysqli_error($conn)){
    echo mysqli_error($conn);
} else{
    print ("<h4>Inserción realizada correctamente</h4>");
}




mysqli_close($conn);


?>

    
</body>
</html>
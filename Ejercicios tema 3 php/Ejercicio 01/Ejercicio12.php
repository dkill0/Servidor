<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Introduce la primera letra de un dia de la semana (en mayusculas)</h3>
<form method="post" action="Ejercicio12.php">
    <input name="letra1" type="text" maxlength="30" size="40">
    <br>
    <input type="submit" value="Enviar"> 
    <input type="reset" value="Borrar"> 
    <br><br>
</form>

<?php

$letra = ' ';
if(isset ($_POST['letra1']) && !empty($_POST['letra1'])){
    $letra= $_POST['letra1']; 

}

    switch ($letra) {
        case 'L':
            echo ("Laboral");
            break;
        case 'M':
            echo ("Laboral");
            break;
        case 'X':
            echo ("Laboral");
            break;
        case 'J':
            echo ("Laboral");
            break;
        case 'V':
            echo ("Laboral");
            break;
        case 'S':
            echo ("Fin de semana");
            break;
        case 'D':
            echo ("Fin de semana");
            break;

        default:
            echo ("No es un dia valido.");
            break;
    }

?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Introduce la base y la altura de un triangulo</h3>
<form method="post" action="Ejercicio20.php">
    <h4>Base</h4>
    <input name="num1" type="text" maxlength="30" size="40">
    <br>
    <h4>Altura</h4>
    <input name="num2" type="text" maxlength="30" size="40">
    <br><br>
    <input type="submit" value="Enviar"> 
    <input type="reset" value="Borrar"> 
    <br><br>
</form>
<?php
$base=0;
$altura=0;
 if(isset ($_POST['num1']) && !empty($_POST['num1'])){
    $base= $_POST['num1']; 

}

if(isset ($_POST['num2']) && !empty($_POST['num2'])){
    $altura= $_POST['num2'];
}


    if(is_numeric($base) && is_numeric($altura)){
        echo("El area es: ".($base*$altura)/2);

    }



?>


</body>
</html>
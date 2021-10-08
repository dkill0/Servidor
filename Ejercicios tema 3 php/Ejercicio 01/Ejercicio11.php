<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Introduce dos numeros reales</h3>
<form method="post" action="Ejercicio11.php">
    <input name="num1" type="text" maxlength="30" size="40">
    <br>
    <input name="num2" type="text" maxlength="30" size="40">
    <br>
    <input type="submit" value="Enviar"> 
    <input type="reset" value="Borrar"> 
    <br><br>
</form>

<?php    
 $numero1=0;
$numero2=0;
 if(isset ($_POST['num1']) && !empty($_POST['num1'])){
    $numero1= $_POST['num1']; 

}

if(isset ($_POST['num2']) && !empty($_POST['num2'])){
    $numero2= $_POST['num2'];
}

if (is_numeric($numero1) && is_numeric($numero2)) {
    echo("Numero 1: ".$numero1);
echo("<br>Numero 2: ".$numero2);

$cambio=$numero2;
$numero2=$numero1;
$numero1=$cambio;
echo("<br>Se intercambian: <br>");
echo("Numero 1: ".$numero1."<br>");
echo("Numero 2: ".$numero2);
}


    ?>
</body>
</html>
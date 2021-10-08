<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Introduce un numero del 1 al 9</h3>
<form method="post" action="Ejercicio21.php">
    <input name="num1" type="text" maxlength="30" size="40">
    <br>
    <input type="submit" value="Enviar"> 
    <input type="reset" value="Borrar"> 
    <br><br>
</form>
    <?php

$numero1=0;

 if(isset ($_POST['num1']) && !empty($_POST['num1'])){
    $numero1= $_POST['num1']; 

}
    for ($i=0; $i <=10 ; $i++) { 
        echo ("<br>$numero1"." x "."$i = ".($numero1*$i));
    }

    ?>


    
</body>
</html>
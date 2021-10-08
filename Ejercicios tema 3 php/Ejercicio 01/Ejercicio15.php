<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Introduce un numero</h3>
<form method="post" action="Ejercicio15.php">
    <input name="num1" type="text" maxlength="30" size="40">
    <br>
    <input type="submit" value="Enviar"> 
    <input type="reset" value="Borrar"> 
    <br><br>
</form>
    <?php
$a=0;
if(isset ($_POST['num1']) && !empty($_POST['num1'])){
    $a= $_POST['num1']; 

}
if(is_numeric($a)){
    for ($i=0; $i < $a; $i++) { 
        for ($j=0; $j < $a ; $j++) { 
            echo ("* ");
        }
        echo("<br>");
    }
}




    ?>




</body>
</html>
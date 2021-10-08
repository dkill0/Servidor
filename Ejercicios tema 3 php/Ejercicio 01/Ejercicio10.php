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
<form method="post" action="Ejercicio10.php">
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


if (is_numeric($numero2) && is_numeric($numero1)) {
   echo ("Suma: ".($numero1+$numero2));
   echo ("<br>Resta: ".($numero1-$numero2));
   if ($numero2!=0) {
    echo ("<br>Division: ".($numero1/$numero2));
   } else {
       echo ("<br>No se puede dividir entre 0");
   }
   
   echo ("<br>Multiplicacion: ".($numero1*$numero2));
   
}






?>
</body>
</html>
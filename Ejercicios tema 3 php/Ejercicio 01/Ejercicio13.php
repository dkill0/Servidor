<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Introduce 7 numeros</h3>
<form method="post" action="Ejercicio13.php">
    <input name="num1" type="text" maxlength="30" size="40" required>
    <br>
    <input name="num2" type="text" maxlength="30" size="40" required>
    <br>
    <input name="num3" type="text" maxlength="30" size="40" required>
    <br>
    <input name="num4" type="text" maxlength="30" size="40" required>
    <br>
    <input name="num5" type="text" maxlength="30" size="40" required>
    <br>
    <input name="num6" type="text" maxlength="30" size="40" required>
    <br>
    <input name="num7" type="text" maxlength="30" size="40" required>
    <br>
    <input type="submit" value="Enviar"> 
    <input type="reset" value="Borrar"> 
    <br><br>
</form>

    <?php
    $numero1=0;
    $numero2=0;
    $numero3=0;
    $numero4=0;
    $numero5=0;
    $numero6=0;
    $numero7=0;
     if(isset ($_POST['num1']) && !empty($_POST['num1'])){
        $numero1= $_POST['num1']; 
    }
    if(isset ($_POST['num2']) && !empty($_POST['num2'])){
        $numero2= $_POST['num2'];
    }
    if(isset ($_POST['num3']) && !empty($_POST['num3'])){
        $numero3= $_POST['num3'];
    }
    if(isset ($_POST['num4']) && !empty($_POST['num4'])){
        $numero4= $_POST['num4'];
    }
    if(isset ($_POST['num5']) && !empty($_POST['num5'])){
        $numero5= $_POST['num5'];
    }
    if(isset ($_POST['num6']) && !empty($_POST['num6'])){
        $numero6= $_POST['num6'];
    }
    if(isset ($_POST['num7']) && !empty($_POST['num7'])){
        $numero7= $_POST['num7'];
    }




    $ar1= array($numero1,$numero2,$numero3,$numero4,$numero5,$numero6,$numero7);


    foreach ($ar1 as $valor) {
        echo ("El valor es $valor<br>");
    }

?>


    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Escribe un numero</h3>
<form method="post" action="Ejercicio 03.php">
<input name="num1" type="text" maxlength="10" size="15">
<input type="submit" value="Enviar informacion"> 
   
    <br><br>
    </form>

    <?php
    $num1 = 0;
    if(isset ($_POST['num1']) && !empty($_POST['num1'])){
        if(is_numeric($_POST['num1'])){
            $num1= $_POST['num1']; 
            if($num1%2!=0){
                echo 'Es impar';
            } else {
                echo 'Es par';
            }
           
        }
    }


    ?>
</body>
</html>
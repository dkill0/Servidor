<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    function sumaCinco($num1, $num2, $num3, $num4, $num5){
        $resultado = $num1+$num2+$num3+$num4+$num5;
        print("El resultado de la suma $num1+$num2+$num3+$num4+$num5 es: $resultado");
       
    }



    ?>
</head>
<body>
    <?php
    sumaCinco(3,4,5,6,7);


    ?>
</body>
</html>
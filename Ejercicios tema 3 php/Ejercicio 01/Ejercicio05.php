<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $num1 = 4;
    $num2 = 6;

    if($num1<$num2){
        echo 'El primer numero es menor<br>';
    } elseif ($num1>$num2) {
        echo 'El segundo numero es menor<br>';
    }

    $conta =0;
    while($conta <$num2){
        echo $conta;
        $conta= $conta +1;
    }
    echo '<br>';
    for ($i=0; $i <=$num1 ; $i++) { 
        echo $i;
    }
    echo '<br>';






?>

    
</body>
</html>
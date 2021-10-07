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
    $palabra = substr("Holamundo",4,3);
    echo $palabra."<br>";

    $cadena1 = "Hola mundo";
    $cadena2 = trim($cadena1);
    echo $cadena2."<br>";

    $longitudCadena = strlen("Hola Mundo");
    echo $longitudCadena."<br>";
    
    $minusculas = strtolower("HoLa muNDo");
    echo $minusculas."<br>";

    $mayusculas = strtoupper("hola mUndo");
    echo $mayusculas."<br>";

    $valor = substr_count("Hola Mundo Hola Mundo Hola", "Hola");
    echo $valor."<br>";

    $cadenaRemplazo = str_replace("Mundo","Universo","Hola Mundo");
    echo $cadenaRemplazo."<br>";

    $datosPersonales=explode("-","pepito-perez-61234567-murcia");
        echo $datosPersonales[0]."<br>";

    

    ?>



</body>
</html>
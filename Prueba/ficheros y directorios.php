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

    $archivo = fopen("ejemplo.txt", "w");
    fputs($archivo, "Hola Mundo");
    fclose($archivo);

    $archivo=fopen("ejemplo.txt","a");
    fputs($archivo,"Hola Mundo");
    fclose($archivo);



    $archivo = fopen("ejemplo.txt", "r");

    while (!feof($archivo)) {
        $contenido = fgets($archivo,100);
        printf($contenido);
        printf("<br>");
    }

    fclose($archivo);



?>

    
</body>
</html>
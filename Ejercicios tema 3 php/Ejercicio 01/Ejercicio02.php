<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Escribe una frase</h3>
<form method="post" action="Ejercicio02.php">
    <input name="frase" type="text" maxlength="30" size="40">
    <input type="submit" value="Enviar informacion"> 
    <input type="reset" value="borrar informacion"> 
    <br><br>
</form>

    <?php
    $fraseIntro = ' ';
    if(isset ($_POST['frase']) && !empty($_POST['frase'])){
        $fraseIntro= $_POST['frase'];
        echo $fraseIntro;
    }
   


    ?>
</body>
</html>
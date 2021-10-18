<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //Funcion que muestra por pantalla una matriz que recibe como parametro la dimension de la matriz
        function matriz($num){
            if(is_numeric($num)){
                for ($i=0; $i < $num; $i++) { 
                    for ($j=0; $j < $num ; $j++) { 
                        echo ("* ");
                    }
                    echo("<br>");
                }
            }
        }
    ?>
</head>
<body>
<h3>Introduce un numero</h3>
<form method="post" action="Ejercicio 04.php">
    <input name="num1" type="text" maxlength="30" size="40">
    <br>
    <input type="submit" value="Enviar"> 
    <input type="reset" value="Borrar"> 
    <br><br>
</form>
    <?php
        $num=0;
        if(isset ($_POST['num1']) && !empty($_POST['num1'])){
            $num= $_POST['num1']; 
        
        }

        matriz($num);
    ?>

</body>
</html>
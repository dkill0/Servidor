<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //Funciones para hacer las operaciones futuras
    function suma($num1,$num2){
        return $num1+$num2;
    }
    function resta($num1,$num2){
        return $num1-$num2;
    }
    function multi($num1,$num2){
        return $num1*$num2;
    }
    function div($num1,$num2){
        
           return $num1*$num2; 
        }
        
    
    ?>
</head>
<body>
<form method="post" action="Ejercicio02.php">
    <h1>Introduce dos numeros reales</h1>
    <p>Primer numero:</p>
    <input name="num1" type="text" maxlength="30" size="40">
    <br>
    <p>Segundo numero:</p>
    <input name="num2" type="text" maxlength="30" size="40">
    <br><br>
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
    
    print("Los números son: $numero1 y $numero2 <br>");
    print("La suma es: ".suma($numero1,$numero2)."<br>");
    print("La resta es: ".resta($numero1,$numero2)."<br>");
    print("La multiplicación es: ".multi($numero1,$numero2)."<br>");

    //Control de excepciones, si el dividendo es 0, no se ejecuta
    //la division y se imprime un mensaje de error
      
    if($numero2!=0){
    print("La división es: ".div($numero1,$numero2)."<br>");
    }
    else{
        print("No se puede dividir entre 0");
    }

    ?>
</body>
</html>
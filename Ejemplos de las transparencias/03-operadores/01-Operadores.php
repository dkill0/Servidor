<?php


//En este ejemplo se utilizan los operadores aritmeticos. 

//A continuacion vamos a sumar,restar, multiplicar y dividir dos numero.

//Creamos las variables que contiene los numeros
$numero1 = 40;
$numero2 = 20;

//Estas variables son cadenas
$cadena1 = "10";
$cadena2 = "20";

//realizamos la concatenación
echo ($cadena1 . $cadena2); //1020
print("<br>");
//realizamos la suma
echo ($cadena1 + $cadena2); //30
print("<br>");

//realizamos la suma
$suma = $numero1 + $numero2;
//realizamos la resta
$resta = $numero1 - $numero2;
//realizamos la multiplicación
$multiplicacion = $numero1 * $numero2;
//realizamos la división
$division = $numero1 / $numero2;
 

?>
<html>
<body>
<h1>En este ejemplo se muestran por pantalla la suma, resta, multiplicacion, division de los numeros </h1>
<h3>Numero 1: <?= $numero1?></h3>
<h3>Numero 2: <?= $numero2?></h3>
<h4><b>La suma de los dos numeros es:</b><?= $suma?></h3>
<h4><b>La resta de los dos numeros es:</b><?= $resta?></h3>
<h4><b>La multiplicacion de los dos numeros es:</b><?= $multiplicacion?></h3>
<h4><b>La division de los dos numeros es:</b><?= $division?></h3>
</body>
</html>















<html>
<head>
<?php
/*
En el siguiente ejercicio utilizamos el fichero que hemos creado en el ejercicio anterior. Vamos a insertar 5 frases que van a estar
en variables. La frase que ya contiene el fichero no se puede modificar. Cada frase debe de ir seguida de un retorno de carro, es decir 
que debe aparacer en una linea diferente. 
Si todo ha ido todo correctamente se debe mostrar un mensaje por pantalla y si no tambien.
*/

//A continuacion nos declaramos los frases:
$frase1 = "Esta es mi frase 1 \n";
$frase2 = "Esta es mi frase 2 \n";
$frase3 = "Esta es mi frase 3 \n";
$frase4 = "Esta es mi frase 4 \n";
$frase5 = "Esta es mi frase 5 \n";

//Variable para controlar si el fichero se abre correctamente. La inicializamos con el valor "false".
$controlFichero = false; 

//Escribimos cada frase en el fichero.
$archivo = fopen("ejemplo.txt" , "a");
if ($archivo) 
{
	//el fichero se ha abierto correctamente;
	$controlFichero = true; 
	
	fputs ($archivo, "\n");
	fputs ($archivo, $frase1);
	fputs ($archivo, $frase2);
	fputs ($archivo, $frase3);
	fputs ($archivo, $frase4);
	fputs ($archivo, $frase5);
}
else
{
	//el fichero NO se ha abierto correctamente;
	$controlFichero = false; 
}
fclose ($archivo);
?>
</head>

<body>
<?php
if ($controlFichero)
{
	printf("<h3>La frases se han insertado correctamente</h3>");
}
else
{
	printf("<h3>La frases NO se han insertado correctamente</h3>");
}
?>

</body>
</html>

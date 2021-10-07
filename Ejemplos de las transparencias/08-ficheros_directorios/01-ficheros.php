<html>
<head>
<?php
//En este ejercicio escribimos la frase "Hola Mundo" en un fichero. El nombre del fichero va a ser: "datos.txt".
//Una vez se haya terminado de escribir en el fichero ha de cerrarse. Se debe de mostrar un mensaje por pantalla, informando
//que todo ha ido correctamente

//Variable para controlar si el fichero se abre correctamente. La inicializamos con el valor "false".
$controlFichero = false;

//abre un archivo y escribe en él
$archivo = fopen("ejemplo.txt" , "w");
if ($archivo) 
{
	$controlFichero = true; 
	fputs ($archivo, "Hola Mundo");
}
else
{
	$controlFichero = false; 
}
fclose ($archivo);
 
?>

</head>

<body>
<?php
if ($controlFichero)
{
	printf("<h3>La frase 'Hola Mundo' se ha insertado correctamente</h3>");
}
else
{
	printf("<h3>La frase 'Hola Mundo' NO se ha insertado correctamente</h3>");
}
?>

</body>
</html>

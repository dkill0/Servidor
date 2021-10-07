<html>
<head>
<?php
/*
En el siguiente ejercicio se muestra por pantalla todo el contenido del ejercicio 2.
*/

//Variable para controlar si el fichero se abre correctamente. La inicializamos con el valor "false".
$controlFichero = false; 
$contenido = "";

//Escribimos cada frase en el fichero. 
/*¿Para que utilizamos la '@' delante de la linea de codigo?. Esto es para evitar que salte el error y lo muestre por pantalla.
En este caso no nos interesa que salte error porque ya lo controlamos con la variable '$controlFichero'. 
Para que salte el error simplemente tenemos que borrar el fichero de esta manera no puede leerlo ya que el fichero no existe.

*NOTA: Probarlo de las dos maneras, con '@' y sin '@', y asi veis los dos resultados y lo que ocurre.
*/

$archivo = fopen("ejemplo.txt" , "r");
if ($archivo) 
{
	$controlFichero = true; 
	while (!feof($archivo))
	{
		$contenido = fgets($archivo, 1000);
		printf($contenido);
		printf("<br>");
	}
	//$contenido=fgets($archivo, 255);
	
	
	//cerramos el fichero
	fclose ($archivo);

}
else
{
	$controlFichero = false; 
}
?>
</head>

<body>
<?php
if ($controlFichero)
{
	//printf("<h3>" . $contenido . "</h3>");
}
else
{
	printf("<h3>No se ha podido leer del fichero: 'datos.txt'</h3>");
}
?>
</body>
</html>








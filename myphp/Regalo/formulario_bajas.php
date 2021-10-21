<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario bajas</title>
</head>
<body>
    <form action="bajas.php" method="post">
    <table width="400" border="0">
	<tr>
		<td colspan="4">BAJA DE PRODUCTOS </td>
	</tr>
	<tr>
		<td>Codigo</td> <td><input type="text" name="codigo" required /></td>
	
	</tr>
    <tr>
        <td></td>
    <td colspan="2"><input type="submit" name="button" value="enviar"/></td>

    </tr>
</table>
<?php
include("listado.php");
?>
</form>
</body>
</html>
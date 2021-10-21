<html>
<head></head>
<body>
<form action="formulario_modificacion.php" method="post">
    <table width="400" border="0">
	<tr>
		<td colspan="4">FORMULARIO DE REGISTRO </td>
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
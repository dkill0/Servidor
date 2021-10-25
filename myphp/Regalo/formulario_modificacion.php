<html>
<head></head>
<body>
<form action="modificacion.php" method="post" enctype="multipart/form-data">
	<table width="400" border="0">
	<tr>
		<td colspan="4">MODIFICACION DE PRODUCTOS </td>
	</tr>
	<tr>
		<td>Codigo</td> <td><input type="text" name="codigoCambio"/></td>
		<td>Producto</td> <td><input type="text" name="producto"/></td>
	</tr>
	<tr>
		<td>Detalle</td> <td><input type="text" name="detalle"/></td>
	</tr>	
	<tr>
		<td>Precio</td> <td><input type="text" name="precio"/></td>
		<td>Descuento</td> <td><input type="text" name="descuento"/></td>
	</tr>
	<tr> 
		<td> Imagen </td> <td><input type="file" name="imagen"/></td>
	</tr>	
	<tr>
		<td colspan="2"><input type="submit" name="button" value="Enviar"/></td>
		<td colspan="2"><input type="reset" name="button2" value="Restablecer"/></td>
	</tr>
	</table>
	</form>
	<?php
include("listado.php");
?>
</body>
</html>
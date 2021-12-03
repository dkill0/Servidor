<?php
include("../Seguridad.php");

?>
<!DOCTYPE html>
<html lang="es">

<head>
	<?php
	include("meta2.php");
	?>
	<style>


	</style>
</head>

<body>
	<?php
	include("headerCli.php");
	?>

	<div class="container-fluid">
		<?php
		$codPed = $_GET['codPed'];
		echo '<form method="POST" action="cierrePedido.php?codPed='.$codPed.'" class="iniS row justify-content-between columna">' ?>

		<div class="col-12  mb-3">
			<h1 class="text-center">Tarjeta de crédito o débito</h1>
			<hr>
		</div>

		<div class="col-12 mb-3">
			<input class="form-control" type="text" placeholder="Titular" required>
		</div>

		<div class="col-12  mb-3">
			<input class="form-control" type="text" placeholder="Nº de tarjeta" required>
		</div>



		<div class="col-4 mb-3">
			<small class="form-text">Mes de expiración:</small>
			<input class="form-control" type="number" pattern="[0-9]{2}" placeholder="MM" required>
		</div>

		<div class="col-4 mb-3">
			<small class="form-text">Año de expiración:</small>
			<input class="col-3 form-control" type="text" required placeholder="AA">
			<?php 
			//echo"<input type=hidden id=codPed value=$codPed>";
			
			?>
		</div>


		<div class="col-4 mb-3">
			<small class="form-text">CCV:</small>
			<input class="col-3 form-control" type="text" required placeholder="CCV">
		</div>

		<div class="col-12 mb-3">
			<label class="form-label" for="tipo">Tipo de tarjeta</label>
			<select class="form-select" name="tipo" id="tipo">
				<option value="visa">Visa</option>
				<option value="master">Mastercard</option>
				<option value="america">American Express</option>
			</select>
		</div>



		<div class="form-check mb-3">
			<input type="checkbox" class="form-check-input" id="opc" value="factura">
			<label class="form-check-label" for="opc">Necesito factura</label>
		</div>

		<div class="ms-auto form-check mb-3">
			<input type="checkbox" class="form-check-input" required id="terminos" value="factura" checked>
			<label class="form-check-label" for="terminos">He leído y acepto las condiciones de uso y compra</label>
		</div>
		<div class="d-grid col-5 float-start">
			<button type="submit" class=" btn btn-warning">COMPRAR</a>
		</div>
		<?php

		$codPed = $_GET['codPed'];


		print '
				
			<div class="col-2">
				<a href="pedidosCli.php?codPed='. $codPed .'"  class=" float-end btn btn-danger">CANCELAR</a>

			</div>';
		//href="cierrePedido.php?codPed=' . $codPed . '"
		?>

	</div>

	</form>


	</div>
</body>

</html>
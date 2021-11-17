<?php
    require_once('vendor/autoload.php');
    $mpdf  = new \Mpdf\Mpdf([]);
    $html = "
    <h4>Titulo principal</h4>
	<p align='center'>Titulo del documento</p>

	<hr>

	<table border=1>
		<th>
			<tr>
				<td>Encabezado 1</td>
				<td>Encabezado 2</td>
			</tr>
		</th>

		<tbody>
			<tr>
				<td>Cotenido 1</td>
				<td>Contenido 2</td>
			</tr>
		</tbody>
	</table>
    ";

    $mpdf->writeHtml($html);
    $mpdf->Output();
?>
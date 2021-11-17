<?php
    require_once('vendor/autoload.php');
    include("conexion.php");
    $mpdf= new \Mpdf\Mpdf([]);

    function selectTable($conn){

        $consulta= "select * from productos";

        $result = mysqli_query($conn, $consulta);

        echo mysqli_error($conn);

        $tabla="";
        $tabla.="<table border=1 align='center'>
        <tr>
            <th>Num Prodc</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Tipo</th>
        </tr>
    
    
    ";

    while ($row = mysqli_fetch_array($result)) {
        $tabla.="
        <tr>
        <td align='center'>".$row['idProducto']."</td>
        <td align='center'>".$row['nombre']."</td>
        <td align='center'>".$row['descripcion']."</td>
        <td align='center'>".$row['precio']."</td>
        <td align='center'>".$row['tipo']."</td>
    </tr>
        ";

       
    }
    $tabla.="</table>";
    mysqli_close($conn);
    return $tabla;

    }

    $html="
    <style>
	body{
		background-color: #949ca4 ;
	}

</style>
    
    ";

    $html.=selectTable($conn);
    $mpdf->writeHtml($html);
    $mpdf->Output();



?>
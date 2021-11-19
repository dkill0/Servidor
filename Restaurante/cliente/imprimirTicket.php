<?php
require_once('../vendor/vendor/autoload.php');
include("../Seguridad.php");
include("../conexion.php");

$mpdf= new \Mpdf\Mpdf([]);
function selectTabla($conn){
    $codPed=$_GET['codPed'];
   $tabla= include("imprimePedido.php");
   
   
    mysqli_close($conn);
    return $tabla;
}
$html=selectTabla($conn);
$mpdf->writeHtml($html);
$mpdf->Output();
?>
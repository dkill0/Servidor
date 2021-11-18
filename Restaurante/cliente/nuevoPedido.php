<script>
   alert("kdf");
    
</script>

<?php 
    include("../Seguridad.php");
    include("../conexion.php");

    $idUs= $_SESSION['idUsuario'];
    //consulta
    $consulta= "INSERT INTO pedido (cliente,fecha,pagado) VALUES ('$idUs', NOW(),false)";
    $result = mysqli_query($conn ,$consulta);
    $consulta2="SELECT idPedido FROM pedido WHERE cliente='$idUs' AND pagado=false";
    $result2=mysqli_query($conn ,$consulta2);
    //Ejecutamos la sentencia SQL
    
    //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
    echo mysqli_error($conn);
    while($row = mysqli_fetch_array($result2)){
        $codPed=$row['idPedido'];
    }

    header ("LOCATION: cartaCli.php?codPed=$codPed");
?>
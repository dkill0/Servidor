<script>
   alert("kdf");
    
</script>

<?php 
    include("../Seguridad.php");
    include("../conexion.php");

    $idUs= $_SESSION['idUsuario'];
    //consulta
    $consulta= "INSERT INTO pedido (cliente,fecha,pagado) VALUES ('$idUs', NOW(),false)";
    //Ejecutamos la sentencia SQL
    $result = mysqli_query($conn ,$consulta);
    //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
    echo mysqli_error($conn);

    header("LOCATION: cartaCli.php");
?>
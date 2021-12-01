

<?php 
    include("../Seguridad.php");
    include("../conexion.php");

    $idUs= $_SESSION['idUsuario'];
    $consulta3 = "SELECT idUsuario FROM usuario WHERE tipo=2 GROUP BY tipo";
    $result3 = mysqli_query($conn ,$consulta3);
    $numero = mysqli_num_rows($result3);
    $numero_aleatorio = mt_rand(1,$numero);
    $consulta4 = "SELECT id";
    
   
    $consulta= "INSERT INTO pedido (cliente,camarero,fecha,pagado) VALUES ('$idUs','$numero_aleatorio', NOW(),false)";
    $result = mysqli_query($conn ,$consulta);
    
   
    $consulta2="SELECT idPedido FROM pedido WHERE cliente='$idUs' AND pagado=false";
    $result2=mysqli_query($conn ,$consulta2);

    //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
   echo mysqli_error($conn);

    while($row = mysqli_fetch_array($result2)){
        $codPed=$row['idPedido'];
    }

  // header ("LOCATION: cartaCli.php?codPed=$codPed");
?>

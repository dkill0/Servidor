<?php
include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../cliente/meta2.php"); ?>
    <title>Pedidos</title>

</head>

<body>
    <?php
    include("headerAd.php");
    ?>




    <div class="row justify-content-around">



        <h2 style="color: white;" class="text-center fondoT">Pedidos en marcha</h2>
        <?php

        include("../conexion.php");
        $consulta2 = "SELECT idPedido, cliente, camarero
FROM pedido
WHERE enviado=1 AND servido=0
ORDER BY fecha DESC";
        $result9 = mysqli_query($conn, $consulta2);
        echo mysqli_error($conn);
        while ($row9 = mysqli_fetch_array($result9)) {
            $codPed = $row9['idPedido'];
            $idCam = $row9['camarero'];
            $idUs = $row9['cliente'];
            echo '<div style="background-color:grey;" class="mb-4 col-12 col-lg-5">';
            include("imprimePedido.php");
            echo '</div>';
        }
        ?>

    </div>
    <div class="row justify-content-around">
        <h2 style="color: white;" class="text-center fondoT">Pedidos sin pagar</h2>
        <?php

        include("../conexion.php");
        $consulta2 = "SELECT idPedido, cliente, camarero
FROM pedido
WHERE pagado=0 AND enviado=1 AND servido=1
ORDER BY fecha DESC";
        $result9 = mysqli_query($conn, $consulta2);
        echo mysqli_error($conn);
        while ($row9 = mysqli_fetch_array($result9)) {

            $codPed = $row9['idPedido'];
            $idCam = $row9['camarero'];
            $idUs = $row9['cliente'];
            echo '<div style="background-color:grey;" class="mb-4 col-12 col-lg-5">';
            include("imprimePedido.php");
            echo '</div>';
        }
        ?>

    </div>

    <div class="row justify-content-around">
        <h2 style="color: white;" class="text-center fondoT">Pedidos Finalizados</h2>
        <?php

        include("../conexion.php");
        $consulta2 = "SELECT idPedido, cliente, camarero
FROM pedido
WHERE pagado=1
ORDER BY fecha DESC";
        $result9 = mysqli_query($conn, $consulta2);
        echo mysqli_error($conn);
        while ($row9 = mysqli_fetch_array($result9)) {

            $codPed = $row9['idPedido'];
            $idCam = $row9['camarero'];
            $idUs = $row9['cliente'];
            echo '<div style="background-color:grey;" class="mb-4 col-12 col-lg-5">';
            include("imprimePedido.php");
            echo '</div>';
        }
        ?>
    </div>
    </div>
</body>

</html>
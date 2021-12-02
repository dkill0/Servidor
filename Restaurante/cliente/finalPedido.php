<?php
include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("meta2.php"); ?>
    <title>Pedidos</title>
</head>

<body>
    <?php
    include("headerCli.php");

    ?>
    <div class="container-fluid">


        <div class="row justify-content-center m-auto">
            <div class="col rounded mt-4" style="background-color: grey;">

                <div class="row">
                    <?php
                    $codPed = $_GET['codPed'];
                    include("imprimePedido.php"); ?>
                </div>

                <div class="row justify-content-between">
                    <div class="col-5  g-0">
                        <a class="d-grid btn btn-info" href="pedidosCli.php">Volver</a>
                    </div>



                    <?php
                    $codPed = $_GET['codPed'];

                    include("../conexion.php");
                    $consulta = "SELECT enviado FROM pedido WHERE idPedido='$codPed' ";
                    $result4 = mysqli_query($conn, $consulta);
                    mysqli_error($conn);
                    $numero;
                    while ($row = mysqli_fetch_array($result4)) {
                        $numero = $row['enviado'];
                    }

                    if ($numero == 1) {
                        echo '<div class="col-5 g-0">
                            <a class=" d-grid btn btn-warning" href=tarjeta.php?codPed=' . $codPed . '>Tarjeta</a>
                            </div>';
                    } else {

                        echo '<div class="col-5 g-0">
                            <a class=" d-grid btn btn-success" href=enviaPedido.php?codPed=' . $codPed . '>Enviar pedido</a>
                            </div>';
                    }






                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
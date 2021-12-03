<?php
include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("meta2.php"); ?>
    <title>Mis pedidos</title>
</head>

<body>
    <?php
    include("headerCli.php");




    ?>
    <div class="container-fluid">
        <div class="row   justify-content-center">
            <?php

            if (isset($_GET['error'])) {
                $error = $_GET['error'];
                if ($error = 1) {
                    print '
                   <div class="alert alert-danger" role="alert">
                    Error. No hay camareros disponibles, consulte con el encargado.
                    </div>
                   ';
                }
            }

            if (isset($_GET['sitio'])) {
                print '
               <div class="row ">
               <div class="alert alert-info text-center alert-dismissible" role="alert">
               <span>¡Pedido pagado correctamente!</span>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
             </div>
             </div>
               ';
            }



            ?>

            <div class=" mt-3 mb-3 d-grid  col-12"><a class="btn btn-success" href="verCarta.php">Ver carta</a></div>


            <?php
            include("../conexion.php");

            $idCli = $_SESSION['idUsuario'];

            $consulta = "SELECT idPedido FROM pedido WHERE cliente='$idCli' AND pagado=false";

            $result = mysqli_query($conn, $consulta);

            $NumFilas = mysqli_num_rows($result);
            echo mysqli_error($conn);
            while ($row = mysqli_fetch_array($result)) {
                $codPed = $row['idPedido'];
            }

            if ($NumFilas == 0) {
                echo '<div class=" mt-3 mb-3 d-grid  col-12"><a class="btn btn-success" href="nuevoPedido.php">Nuevo pedido</a></div>';
                echo '<div class=" mt-3 mb-3 d-grid  col-12"><a class="btn btn-success" href=verPedidos.php>Historial de pedidos</a></div>';
            } else {
                $consulta = "SELECT enviado FROM pedido WHERE idPedido='$codPed' ";
                $result4 = mysqli_query($conn, $consulta);
                mysqli_error($conn);
                $numero;
                while ($row = mysqli_fetch_array($result4)) {
                    $numero = $row['enviado'];
                }
                if ($numero == 0) {

                    echo '<div class="productos mt-3 mb-3 d-grid  col-12"><a class="btn btn-success" href=cartaCli.php?codPed=' . $codPed . '>Continuar pedido</a></div>';
                    $consulta= "SELECT DISTINCT l.idProducto as prod, nombre, SUM(cantidad) AS cant, t.descripcion,  pr.precio as precioIn, (pr.precio*SUM(cantidad)) as precioFin
                    FROM lineapedido l, pedido p,  productos pr, tipo t
                    WHERE l.idPedido='$codPed' AND p.idPedido=l.idPedido  and pr.idProducto=l.idProducto and cliente='$idCli' and pr.tipo=t.idTipo
                    GROUP BY l.idProducto
                    ORDER BY t.descripcion";
                    //Ejecutamos la sentencia SQL
                    $result5 = mysqli_query($conn ,$consulta);
                    $numeritoCarlos = mysqli_num_rows($result5);
          
                    if ($numeritoCarlos!=0){
                        echo '<div class="productos mt-3 mb-3 d-grid  col-12"><a class="btn btn-success" href=finalPedido.php?codPed=' . $codPed . '>Enviar pedido</a></div>';
                    }
          
                    echo '<div class="productos mt-3 mb-3 d-grid  col-12"><a class="btn btn-success" href=verPedidos.php?codPed=' . $codPed . '>Historial de pedidos</a></div>';
                } else {

                    echo '<div class="productos mt-3 mb-3 d-grid  col-12"><a class="btn btn-success" href=finalPedido.php?codPed=' . $codPed . '>Finalizar Pedido</a></div>';
                    echo '<div class="productos mt-3 mb-3 d-grid  col-12"><a class="btn btn-success" href=verPedidos.php?codPed=' . $codPed . '>Historial de pedidos</a></div>';
                }
            }

            ?>

        </div>


        </section>
    </div>
</body>

</html>
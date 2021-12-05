<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("../cliente/meta2.php");?>
    <title>incidencias</title>
</head>
<body>
    <?php
include("headerAd.php");
?>
<div class="container-fluid">
    <?php
    $idUsu=$_SESSION['idUsuario'];
    include("../conexion.php");

    $consulta ="SELECT * FROM incidencias WHERE resuelta=0 AND idAdmin='$idUsu'";
    $result = mysqli_query($conn, $consulta);

    $numero = mysqli_num_rows($result);

    if ($numero !=0) {
        
        while ($row = mysqli_fetch_array($result)) {
            print'
            
            <div class="col">
                <p>Numero de incidencia:'.$row['idIncidencia'].' </p>
                <p>Motivo:'.$row['motivo'].'</p>
                <p>Mensaje: '.$row['mensaje'].'</p>
                <p>Cliente: '.$row['usuario'].'</p>
                <p>Fecha: '.$row['fecha'].'</p>

            </div>
            ';
        }
    }else{
        echo '<h2 style="color:white;">No hay incidencias</h2>';
    }
    ?>
</div>
</body>
</html>
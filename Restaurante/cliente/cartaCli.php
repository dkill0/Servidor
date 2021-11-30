<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("meta2.php");?>
    <title>Carta</title>

</head>
<body>
<?php
         include("headerCli.php");
    ?>
    <div class="container-fluid">
        <div class="row  justify-content-center">
<?php
   
    $codPed = $_GET['codPed'];
    echo '
    <div class="productos mt-3 mb-3 d-grid  col-12"><a class="btn btn-success" href=entrantes.php?codPed='.$codPed.'>
    <h2>Entrantes</h2>
    </a>
    </div>

    
    <div class="productos mb-3 d-grid col-12"><a class="btn btn-success" href=platos.php?codPed='.$codPed.'>
    <h2>Platos</h2>
    </a>
    </div>


    
    <div class="productos mb-3 d-grid col-12"><a class="btn btn-success" href=postres.php?codPed='.$codPed.'>
    <h2>Postres</h2>
    </a>
    </div>

    
    <div class="productos mb-3 d-grid col-12"><a class="btn btn-success"  href=bebidas.php?codPed='.$codPed.'>
    <h2>Bebidas</h2>
    </a>
    </div>

    
';
    ?>
    </div>
<a class="btn btn-info" href="pedidosCli.php">Volver</a>

</div>
</body>
</html>
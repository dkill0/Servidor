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
    $codPed = $_GET['codPed'];
    echo "<section>
    <div class=productos><a href=entrantes.php?codPed=$codPed>
    <h2>Entrantes</h2>
    </a>
    </div>

    
    <div class=productos><a href=platos.php?codPed=$codPed>
    <h2>Platos</h2>
    </a>
    </div>


    
    <div class=productos><a href=postres.php?codPed=$codPed>
    <h2>Postres</h2>
    </a>
    </div>

    
    <div class=productos><a href=bebidas.php?codPed=$codPed>
    <h2>Bebidas</h2>
    </a>
    </div>

    
</section>";
    ?>
    

 
</body>
</html>
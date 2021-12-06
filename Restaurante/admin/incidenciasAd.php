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
    <div>
        <h2 style="color:white">Incidencias clientes</h2>
        <?php
    $idUsu=$_SESSION['idUsuario'];
    include("../conexion.php");

    $consulta ="SELECT * from incidencias where resuelta=0 AND idAdmin='$idUsu' and usuario in (select idUser from usuario where tipo in (SELECT idTipo FROM tipo WHERE descripcion='cliente'))";
   
    $result = mysqli_query($conn, $consulta);

    $numero = mysqli_num_rows($result);

    if ($numero !=0) {
        print '<table class="mt-4 table table-responsive table-dark">
        
        <tr>
        <th>Nº incidencia</th>
        <th>Motivo</th>
        <th>Mensaje</th>
        <th>Usuario</th>
        <th>Fecha</th>
        <th>Estado</th>
        </tr>

        ';

        while ($row = mysqli_fetch_array($result)) {
            print'
            
            
                <tr>
                <td>'.$row['idIncidencia'].' </td>
                <td>'.$row['motivo'].'</td>
                <td> '.$row['mensaje'].'</td>
                <td> '.$row['usuario'].'</td>
                <td>'.$row['fecha'].'</td>
                <td>'.$row['resuelta'].'</td>
            </tr>
            
            ';
        }

        print '</table>';
    }else{
        echo '<h2 style="color:white;">No hay incidencias</h2>';
    }
    ?>
    </div>
  
    <div>
        <h2 style="color:white">Incidencias camareros</h2>
        <?php
    $idUsu=$_SESSION['idUsuario'];
    include("../conexion.php");

    $consulta= "SELECT * from incidencias where resuelta=0 AND idAdmin='$idUsu' and usuario in (select idUser from usuario where tipo in (SELECT idTipo FROM tipo WHERE descripcion='camarero'))";
    $result = mysqli_query($conn, $consulta);

    $numero = mysqli_num_rows($result);

    if ($numero !=0) {
        print '<table class="mt-4 table table-responsive table-dark">
        
        <tr>
        <th>Nº incidencia</th>
        <th>Motivo</th>
        <th>Mensaje</th>
        <th>Usuario</th>
        <th>Fecha</th>
        <th>Estado</th>
        </tr>

        ';

        while ($row = mysqli_fetch_array($result)) {
            print'
            
            
                <tr>
                <td>'.$row['idIncidencia'].' </td>
                <td>'.$row['motivo'].'</td>
                <td> '.$row['mensaje'].'</td>
                <td> '.$row['usuario'].'</td>
                <td>'.$row['fecha'].'</td>
                <td>'.$row['resuelta'].'</td>
            </tr>
            
            ';
        }

        print '</table>';
    }else{
        echo '<h2 style="color:white;">No hay incidencias</h2>';
    }
    ?>
    </div>
</div>
</body>
</html>
<?php
include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../cliente/meta2.php"); ?>
    <title>Incidencias</title>

</head>

<body>
    <?php
    include("headerCam.php");



    ?>
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div style="background-color: white" class="col-6">
                <h1>Contacto con los encargados</h1>
                <form action="insertaComentario.php" method="POST">
                    <div>
                        <h3>Motivo de la consulta</h3>
                        <input type="radio" name="motivo" id="motivo" value="pedido"> Error en el pedido<br>
                        <input type="radio" name="motivo" id="motivo" value="plato" required> Error en el plato<br>
                        <input type="radio" name="motivo" id="motivo" value="pago" required> Fallo en el pago<br>
                        <input type="radio" name="motivo" id="motivo" value="accidenteL" required> Accidente laboral<br>
                        <input type="radio" name="motivo" id="motivo" value="material" required> Rotura de material<br>
                        <input type="radio" name="motivo" id="motivo" value="producto" required> Falta de producto<br>
                        
                        <input type="radio" name="motivo" id="motivo" value="reclamacion " required> Incidencias con clientes<br>
                        <input type="radio" name="motivo" id="motivo" value="otro" required> Otro<br>
                        <textarea class="form-control" name="comentario2" id="comentario" placeholder="Introduzca el motivo..."></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </form>


            </div>
        </div>
    </div>
</body>

</html>
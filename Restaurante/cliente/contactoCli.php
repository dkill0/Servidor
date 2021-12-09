<?php
include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("meta2.php"); ?>
    <title>Contacto</title>

</head>

<body>
    <?php
    include("headerCli.php");

   

    ?>
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div style="background-color: white" class="col-6">
               
                <form action="insertaComentario.php" method="POST">
                    <div>
                        <h3>Motivo de la consulta</h3>
                        <input type="radio" name="motivo" id="motivo" value="pedido">Error en el pedido <br>

                        <input type="radio" name="motivo" id="motivo" value="plato" required>Error en el plato<br>
                        <input type="radio" name="motivo" id="motivo" value="pago" required>Fallo en el pago<br>
                        <input type="radio" name="motivo" id="motivo" value="reclamacion" required>Solicitud de la hoja de reclamaciones<br>
                        
                        <input type="radio" name="motivo" id="motivo" value="otro" required>Otro<br>
                        <textarea class="form-control" name="comentario" id="comentario" cols="30" rows="10" placeholder="Introduzca el motivo..."></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </form>

              
            </div>
        </div>
    </div>
</body>

</html>

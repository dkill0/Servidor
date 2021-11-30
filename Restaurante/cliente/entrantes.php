<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("meta2.php");?>
<script>
    function insertaProducto(param) {
        var cant = parseInt(document.getElementById('cantidad').value);
        window.location.href = window.location.href + "&w2=" + param + "&w1=" + cant;
     
       
    }
</script>
    <title>Carta</title>
</head>
<body>
<?php
    include("headerCli.php");
    
?>
<div class="container-fluid">
<?php
    if(isset($_GET['w1']) && isset($_GET['w2'])){
     
        $canti=$_GET['w1'];
        $idPro=$_GET['w2'];
        $codPed=$_GET['codPed'];
        $sitio=$_SERVER['REQUEST_URI'];
        header("LOCATION: insertaProd.php?codPed=$codPed&canti=$canti&idPro=$idPro&sitio=$sitio");
       
    }
    ?>
    <div class="row">
    <?php
            include("../conexion.php");
          $consulta= "SELECT * FROM productos WHERE tipo=5";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          
          $codPed=$_GET['codPed'];
          $i=0;
          while($row = mysqli_fetch_array($result)){
            $idPro=$row['idProducto'];

           

            print('<div class="col-auto">');
            print(' <button data-bs-toggle="modal" data-bs-target="#producto'.$idPro.'" class="btn btn-success">');
            print("<h3>".$row['nombre']."</h3>");
            print("<h4>Descripción</h4>");
            print("<p>".$row['descripcion']."</p>");
            print("<p>".$row['precio']."</p>");
            print("</button></div>");


            print'<div class="modal fade" data-bs-backdrop="static" id="producto'.$idPro.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">'.$row['nombre'].'</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form role="form">
                    <div class="mb-3">
                        
                      <label for="cantidad" class="col-form-label">Cantidad:</label>
                      <input  type="number" class="form-control" pattern="[1-20]{1-2}" id="cantidad" required>
                    </div>
                   
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <input type="submit" class="btn btn-success" onclick="insertaProducto('.$idPro.')" >
                </div>
              </div>
            </div>
          </div>';
                
                $i++;
              }
              
              echo"<a href=cartaCli.php?codPed=$codPed>Volver</a>"; 
    ?>
   </div>
   </div>
</body>
</html>
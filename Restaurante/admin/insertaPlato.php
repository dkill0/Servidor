<?php
include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    include("../cliente/meta2.php");
    ?>
    <title>Nuevo plato</title>
</head>
<body>
<?php

include("headerAd.php");
  ?>
  <div class="container-fluid">
    <div class="row justify-content-between">

      <div class="rounded mt-3 mb-3 m-auto col-auto" style="width: 400px; background-color:white;">
            <p>Introduce los datos:</p>
            <form action="" method="post"> 
            <p>Nombre:</p>
            <input type="text" name="nombre"class="form-control" required><br>
            <p>Descripcion:</p>
            <input type="text" name="descripcion"class="form-control" required><br>
            <p>Ruta imagen:</p>
            <input type="text" name="imagen" class="form-control" required><br>

            <p>Precio:</p>
            <input min="0" type="number" name="precio" class="form-control" required><br>


            <p>Tipo:</p>
            <select name="tipo" id="tipo" required>
                <option value="4">Bebida</option>
                <option value="5">Entrante</option>
                <option value="6">Plato</option>
                <option value="7">Postre</option>

            </select>
            
            <br><br>
            <button type="submit" class="btn btn-primary">Modificar</button>
            </form>
           </div>
            
           
         
          
             
            
              
              
    
    </div>
    <a href="cartaAd.php" class="btn btn-info">Volver</a>
        </div>
</body>
</html>

<?php
echo "hola";
    if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['imagen']) && isset($_POST['precio']) && isset($_POST['tipo'])) {
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $imagen=$_POST['imagen'];
        $tipo=$_POST['tipo'];
        $precio=$_POST['precio'];
        
        include("../conexion.php");

        $consulta="INSERT INTO productos (nombre, descripcion, precio, tipo, imagen) values ('$nombre','$descripcion','$precio','$tipo','$imagen')";
        echo $consulta;
        $result = mysqli_query($conn, $consulta);   
    }
?>
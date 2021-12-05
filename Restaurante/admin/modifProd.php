<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("../cliente/meta2.php");?>
    <title>Document</title>
</head>
<body>
<?php 
    include("headerAd.php");
?>
<div class="container-fluid">
    <div class="row justify-content-between">
<?php
    //Igual que ficha usuario pero con productos cambialo makina
        $identificador = $_GET['idProd'];

        include("../conexion.php");
        $consulta= "SELECT p.*, t.descripcion as tipo  FROM productos p, tipo t WHERE p.tipo=t.idtipo and idProducto='$identificador'";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          
          mysqli_error($conn);
          
          while($row = mysqli_fetch_array($result)){
            $idProd=$row['idProducto'];
            
            print('<div class="rounded mt-3 mb-3 m-auto col-auto" style="width: 400px; background-color:white;">');
            print("<p>Identificador: ".$row['idProducto']."</p> ");
            print'<form action="" method="post"> ';
            print("<p>Nombre: ".$row['nombre']."</p>");
            print'<input type="text" name="nombre" class="form-control"><br>';
            print("<p>Descripcion: ".$row['descripcion']."</p>");
            print'<input type="text" name="descripcion" class="form-control"><br>';
            print("<p>Ruta imagen: ".$row['imagen']."</p>");
            print'<input type="text" name="imagen" class="form-control"><br>';

            print("<p>Precio: ".$row['precio']."</p>");
            print'<input type="text" name="precio"class="form-control"><br>';


            print("<p>Tipo: ".$row['tipo']."</p>");
            print '
            <select name="tipo" id="tipo" required>
                <option value="4">Bebida</option>
                <option value="5">Entrante</option>
                <option value="6">Plato</option>
                <option value="7">Postre</option>

            </select>
            ';
            print'<button type="submit" class="btn btn-primary">Modificar</button>';
            print'</form> ';
            print('</div>');
            
           
         
          }


          if(isset($_POST['nombre'])){
              $nombre=$_POST['nombre'];

              $consulta="UPDATE productos SET nombre='$nombre' WHERE idProducto='$identificador'";
              $result = mysqli_query($conn, $consulta);
              header("LOCATION: cartaAd.php");
              
          }
          if(isset($_POST['descripcion'])){
            $nombre=$_POST['descripcion'];

            $consulta="UPDATE productos SET descripcion='$descripcion' WHERE idProducto='$identificador'";
            
            $result = mysqli_query($conn, $consulta);
            header("LOCATION: cartaAd.php");
            
        }
        if(isset($_POST['imagen'])){
            $imagen=$_POST['imagen'];

            $consulta="UPDATE productos SET imagen='$imagen' WHERE idProducto='$identificador'";
            
            $result = mysqli_query($conn, $consulta);
            header("LOCATION: cartaAd.php");
            
        }
        if(isset($_POST['precio'])){
            $precio=$_POST['precio'];

            $consulta="UPDATE productos SET precio='$precio' WHERE idProducto='$identificador'";
            
            $result = mysqli_query($conn, $consulta);
            header("LOCATION: cartaAd.php");
            
        }
        if(isset($_POST['tipo'])){
            $tipo=$_POST['tipo'];

            $consulta="UPDATE productos SET tipo='$tipo' WHERE idProducto='$identificador'";
            
            $result = mysqli_query($conn, $consulta);
            header("LOCATION: cartaAd.php");
            
        }
             
            
              
              
    ?>
    </div>
    <a href="cartaAd.php" class="btn btn-info">Volver</a>
        </div>
</body>
</html>
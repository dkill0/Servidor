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
            $idUs=$row['idProducto'];
            
            print('<div class="rounded mt-3 mb-3 m-auto col-auto" style="width: 400px; background-color:white;">');
            print("<p>Identificador: ".$row['idProducto']."</p> ");
            print'<form action="" method="post"> ';
            print("<p>Nombre: ".$row['nombre']."</p>");
            print'<input type="text" class="form-control"><br>';
            print("<p>Descripcion: ".$row['descripcion']."</p>");
            print'<input type="text" class="form-control"><br>';
            print("<p>Ruta imagen: ".$row['imagen']."</p>");
            print'<input type="text" class="form-control"><br>';

            print("<p>Precio: ".$row['precio']."</p>");
            print'<input type="text" class="form-control"><br>';


            print("<p>Tipo: ".$row['tipo']."</p>");
            print'<button type="submit" class="btn btn-primary">Modificar</button>';
            print'<form action="" method="post"> ';
            print('</div>');
            
           
         
          }
             
            
              
              
    ?>
    </div>
    <a href="cartaAd.php">Volver</a>
        </div>
</body>
</html>
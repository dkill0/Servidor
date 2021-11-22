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

<div class="container-fluid">
<?php
    //Igual que ficha usuario pero con productos cambialo makina
include("headerAd.php");
        $identificador = $_GET['idProd'];

        include("../conexion.php");
        $consulta= "SELECT idUser, nombre, email, contrasena, descripcion  FROM usuario u, tipo t WHERE idUser='$identificador' AND t.idTipo=u.tipo";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          while($row = mysqli_fetch_array($result)){
            $idUs=$row['idUser'];
            $nom=$row['nombre'];
            print('<div class="usuarios"');
            print("<p>Identificador: ".$row['idUser']."</p> ");
            print("<p>Email: ".$row['email']."</p>");
            print("<p>Nombre: ".$row['nombre']."</p>");
            print("<p>Contrasena: ".$row['contrasena']."</p>");
            print("<p>Tipo: ".$row['descripcion']."</p>");
            print('</div>');
            $descri=$row['descripcion'];
           
         
          }
             
            
              
              
    ?>
    <a href="cartaAd.php">Volver</a>
        </div>
</body>
</html>
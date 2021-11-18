<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    include("../cliente/meta2.php");
    ?>
    <title>Document</title>
</head>
<body>
    <?php
    include("headerAd.php");
        $identificador = $_GET['usuario'];

        include("../conexion.php");
        $consulta= "SELECT * FROM usuario WHERE idUser='$identificador'";
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
            print("<p>Tipo: ".$row['tipo']."</p>");
            print('</div>');
              }
              
    ?>
</body>
</html>
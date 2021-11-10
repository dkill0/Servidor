<?php
    include("../Seguridad.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lentejas los Jueves</title>
</head>
<body>
    <?php
        echo "Holaaaaaaa cliente";
        echo '<br>';
        echo $_SESSION['name'];
    ?>

    <p>Productos</p>
   <?php
    include("../productos.php");
    ?>

    
  
          

</body>
</html>
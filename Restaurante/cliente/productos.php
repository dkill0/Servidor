
    <?php
    include("../conexion.php");
    
    if($ordena == "tipo"){
      $consulta = "SELECT * FROM productos WHERE tipo='$tipo'";
    }else{
      $consulta = "SELECT * FROM productos ORDER BY $ordena ";

    }
    
    //Ejecutamos la sentencia SQL
    $result = mysqli_query($conn, $consulta);
    //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
    echo mysqli_error($conn);




    while ($row = mysqli_fetch_array($result)) {


      print('<div class="rounded mt-3 mb-3 m-auto prod col-auto" style="width: 400px;"> ');


      print('<h2 class="fw-bold text-center">');
      print($row['nombre'] . "</h2>");

      print("<div class=row>");
      print("<h6>Ingredientes</h6>");
      print('<p class="mb-4" style="height: 50px;">');
      print($row['descripcion'] . "</p>");
      print("</div>");


      print('<img class=" m-auto row rounded float-end img-fluid" style="width: 400px; height: 250px;" src=..' . $row['imagen'] . '>');


      print("<div class=row>");
      print("<p class=text-end>" . $row['precio'] . "€</p>");
      print("</div>");
      print("</div>");
    }


    ?>
  
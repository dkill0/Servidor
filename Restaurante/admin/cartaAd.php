<?php
include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include("../cliente/meta2.php"); ?>
  <title>Carta</title>
  <script>
    function prueba() {

      window.open("https://javascript.info");
    };
  </script>
</head>

<body>
  <?php
  include("headerAd.php");
  ?>
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="row justify-content-around">
        <a href="insertaPlato.php" class="btn btn-primary">Añadir platos</a>
      </div>
      <article class=" col-12">
        <div style="position: sticky; top:65px; z-index: 2;" class=" fondoT row mb-3">
          <h2 class=" fw-bold titulo text-center text-uppercase">Productos</h2>
        </div>
        <div class="row justify-content-around g-3 ">
          <?php
          include("../conexion.php");
          $consulta = "SELECT * FROM productos ORDER BY nombre";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn, $consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);

          while ($row = mysqli_fetch_array($result)) {
            print('<div class=" prod col-auto" style="width: 400px;"> ');
            print('<h2 class="fw-bold text-center">');
            print($row['nombre'] . "</h2>");
            print("<div class=row>");
            print("<h6>Descripcion</h6>");
            print('<p class="mb-4" style="height: 50px;">');
            print($row['descripcion'] . "</p>");
            print("</div>");
            print('<img class=" m-auto row rounded float-end img-fluid" style="width: 400px; height: 250px;" src=..' . $row['imagen'] . '>');
            print("<div class=row>");
            print("<p class=text-end>" . $row['precio'] . "€</p>");
            print("</div>");
            $idProd = $row['idProducto'];
            print("<a href=modifProd.php?idProd=$idProd>Editar producto</a>");
            print("</div>");
          }
          ?>
        </div>
      </article>
    </div>
</body>

</html>
<article class=" col-12">
<div class="sticky-top-navbar fondoT row mb-3">
    <h2 class="fw-bold titulo text-center text-uppercase">Entrantes</h2>
</div>
    <div class="row justify-content-between g-3 ">
    <?php
            include("conexion.php");
          $consulta= "SELECT * FROM productos WHERE tipo=5";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          
              
          
          while($row = mysqli_fetch_array($result)){
              

                print('<div class="rounded mt-3 mb-3 prod col-11 col-md-5 col-lg-5 col-xxl-5>');
               // print("<div class=row>");
                print('<h3 class="row fw-bold text-center">');
                print($row['nombre']."</h3>");
               
                //print("</div>");
                print("<div class=row>");
                print("<h6>Ingredientes</h6>");
                print("<p>".$row['descripcion']."</p>");
                print("</div>");
                print("<figure class=row>");
                print('<img class="rounded float-end img-fluid"src=.'.$row['imagen'].'>');
                print("</figure>");
                print("<div class=row>");
                print("<p class=text-end>".$row['precio']."€</p>");
                print("</div>");
                print("</div>");
                
              }
              
          
    ?>
    </div>
  
</article>
<article class=" col-12 mt-3">
<div class="fondoT  row">
<h2 class="fw-bold titulo text-center text-uppercase">Platos</h2>
    
</div>
    <div class="row justify-content-between">
    <?php
            include("conexion.php");
          $consulta= "SELECT * FROM productos WHERE tipo=6";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          
                  
          
          while($row = mysqli_fetch_array($result)){
              
              
            print('<div class=" rounded mt-3 mb-3 m-auto prod col-11 col-md-4 col-lg-5">');
                print("<h3>".$row['nombre']."</h3>");
                print("<h6>Ingredientes</h6>");
                print("<p>".$row['descripcion']."</p>");
                print('<img class="rounded float-end img-fluid"src=.'.$row['imagen'].'>');
                print("<p class=text-end>".$row['precio']."€</p>");
                print("</div>");
              }
              
          
    ?>
    </div>
</article>
<article class=" col-12 mt-3">
<div class="titulo  row">
    <h2>Postres</h2>
    <hr>
</div>
    <div class="row justify-content-between">
    <?php
            include("conexion.php");
          $consulta= "SELECT * FROM productos WHERE tipo=7";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          
                  
          
          while($row = mysqli_fetch_array($result)){
              
              
            print('<div class=" rounded mt-3 mb-3 m-auto prod col-11 col-md-4 col-lg-5">');
                print("<h3>".$row['nombre']."</h3>");
                print("<h6>Ingredientes</h6>");
                print("<p>".$row['descripcion']."</p>");
                print("<footer class=text-end>".$row['precio']."€</footer>");
                print("</div>");
              }
              
          
    ?>
    </div>
</article>
<article class=" col-12 mt-3">
  <div class="titulo  row">
  <h2>Bebidas</h2>
    <hr>
  </div>
    
    <div class="row justify-content-between">
    <?php
            include("conexion.php");
          $consulta= "SELECT * FROM productos WHERE tipo=4";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          
                  
          
          while($row = mysqli_fetch_array($result)){
              
              
                print('<div class=" rounded mt-3 mb-3 m-auto prod col-11 col-md-4 col-lg-5">');
                print("<h3>".$row['nombre']."</h3>");
                print("<h6>Descripción</h6>");
                print("<p>".$row['descripcion']."</p>");
                print("<p class=text-end>".$row['precio']."€</p>");
                print("</div>");
              }
              
          
    ?>
    </div>
</article>

<article class="col-12">
    <h2>Entrantes</h2>
    <hr>
    <div class="row justify-content-between">
    <?php
            include("conexion.php");
          $consulta= "SELECT * FROM productos WHERE tipo=5";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          
                  
          
          while($row = mysqli_fetch_array($result)){
              
             
                print('<div class="mb-3 ml-3 prod col-5 col-sm-4 col-md-2">');
                print("<h3>".$row['nombre']."</h3>");
                print("<h6>Descripción</h6>");
                print("<p>".$row['descripcion']."</p>");
                print("<p>".$row['precio']."</p>");
                print("</div>");
                
              }
              
          
    ?>
    </div>
</article>
<article class="col-12">
    <h2>Platos</h2>
    <hr>
    <div class="row justify-content-around">
    <?php
            include("conexion.php");
          $consulta= "SELECT * FROM productos WHERE tipo=6";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          
                  
          
          while($row = mysqli_fetch_array($result)){
              
              
            print('<div class="mb-3 ml-3 prod col-5 col-sm-4 col-md-2">');
                print("<h3>".$row['nombre']."</h3>");
                print("<h6>Descripción</h6>");
                print("<p>".$row['descripcion']."</p>");
                print("<p>".$row['precio']."</p>");
                print("</div>");
              }
              
          
    ?>
    </div>
</article>
<article class="col-12">
    <h2>Postres</h2>
    <hr>
    <div class="row justify-content-around">
    <?php
            include("conexion.php");
          $consulta= "SELECT * FROM productos WHERE tipo=7";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          
                  
          
          while($row = mysqli_fetch_array($result)){
              
              
            print('<div class="mb-3 ml-3 prod col-5 col-sm-4 col-md-2">');
                print("<h3>".$row['nombre']."</h3>");
                print("<h6>Descripción</h6>");
                print("<p>".$row['descripcion']."</p>");
                print("<p>".$row['precio']."</p>");
                print("</div>");
              }
              
          
    ?>
    </div>
</article>
<article class="col-12">
    <h2>Bebidas</h2>
    <hr>
    <div class="row justify-content-around">
    <?php
            include("conexion.php");
          $consulta= "SELECT * FROM productos WHERE tipo=4";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          
                  
          
          while($row = mysqli_fetch_array($result)){
              
              
            print('<div class="mb-3 ml-3 prod col-5 col-sm-4 col-md-2">');
                print("<h3>".$row['nombre']."</h3>");
                print("<h6>Descripción</h6>");
                print("<p>".$row['descripcion']."</p>");
                print("<p>".$row['precio']."</p>");
                print("</div>");
              }
              
          
    ?>
    </div>
</article>

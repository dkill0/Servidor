<?php
    include("../Seguridad.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("meta2.php");?>
    <title>Carta</title>
</head>
<body>
<?php
    include("headerCli.php");
    
?>
<div class="container-fluid">
<?php
   if(isset($_GET['w1']) && isset($_GET['w2'])){
     
        $canti=$_GET['w1'];
        $idPro=$_GET['w2'];
        $codPed=$_GET['codPed'];
        $sitio=$_SERVER['REQUEST_URI'];
        header("LOCATION: insertaProd.php?codPed=$codPed&canti=$canti&idPro=$idPro&sitio=$sitio");
   }  
    ?>
    <div class="row justify-content-around g-3 mt-2">
      
    <?php
            include("../conexion.php");
          $consulta= "SELECT * FROM productos WHERE tipo=5";
          //Ejecutamos la sentencia SQL
          $result = mysqli_query($conn ,$consulta);
          //Imprimos el error si se ha producido. mysql_error siempre va a mostrar el error de la última función mysql ejecutada
          echo mysqli_error($conn);
          
          
          $codPed=$_GET['codPed'];
          $sitio=$_SERVER['REQUEST_URI'];
          while($row = mysqli_fetch_array($result)){
            $idPro=$row['idProducto'];
            $conta="cantidad".$idPro;
            

           

            print('<div class="rounded col-auto"><button style="width: 400px; height:450px ;" data-bs-toggle="modal" data-bs-target="#producto'.$idPro.'" class="btn btn-success">');


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
            print("</button></div>");

            
            print'<div class="modal fade" data-bs-backdrop="static" id="producto'.$idPro.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">'.$row['nombre'].'</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body  justify-content-between">
                        <div class="row mb-3">
                           <label for="cantidad" class="col-form-label">Cantidad:</label>
                        </div>
                        <div class="row mb-3">

                          <div class="col-4">
                            <button style="width: 80px;" class="btn btn-success" type="button" onclick="resta('.$idPro.')"><span class="badge text-light"><img style="color: white;"width="15" src="../img/menos.svg"></span></button>
                          </div>
                          <div class="col-4 text-center">
                            <label class="col-form-label" id="cantidad'.$idPro.'">1</label>
                          </div>
                          <div class="col-4">
                           <button style="width: 80px;" class="btn btn-success " type="button" onclick="suma('.$idPro.')" ><span class="badge text-dark"><img width="15" src="../img/mas.svg"></span></button>
                          </div>
                          
                        </div>
                </div>
                          
                          <div class="modal-footer justify-content-between">
                          <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                          <button type="button" class="btn btn-success " onclick=insertaProducto('.$idPro.')>Pedir</button>
                          
                          </div>
                          </div>
                          </div>
                          </div>';
                         
            

            
                      
               
              }

              
            print ' </div>
            <a class="btn btn-info"href=cartaCli.php?codPed='.$codPed.'>Volver</a>
            </div>';
                      
              
              
              ?>
 
</body>
</html>

<script>
    function insertaProducto(param) {
      let cantidadCompleta="cantidad"+param;

       var cant = parseInt(document.getElementById(cantidadCompleta).innerHTML);
        window.location.href = window.location.href + "&w2=" + param + "&w1=" + cant;
      
       
    }

    function suma(param){
      let cantidadCompleta="cantidad"+param;
      var numero = parseInt(document.getElementById(cantidadCompleta).innerHTML);
      numero++;
      if (numero >=1 && numero<=10) {
        
      document.getElementById(cantidadCompleta).innerHTML = numero;
      }else if(numero>10){
        alert("Son demasiados, solo pedir de 1 a 10 unidades.");
      }
    }

    function resta(param){
      let cantidadCompleta="cantidad"+param;
      var numero = parseInt(document.getElementById(cantidadCompleta).innerHTML);
      numero--;
      console.log(numero);
      if (numero >=1 && numero<=10) {
        
      document.getElementById(cantidadCompleta).innerHTML = numero;
      }else if (numero<1){
        alert("Qué listo eres.");
      }
     
    }
</script>
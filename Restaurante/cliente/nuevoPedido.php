

<?php 
    //Incluimos la seguridad y la conexion a la bbdd
    include("../Seguridad.php");
    include("../conexion.php");
    //Guardamos el id de usuario
    $idUs= $_SESSION['idUsuario'];

    //Miramos todos los camareros que hay
    $consulta6 = "SELECT idUser FROM usuario WHERE tipo=2";
    $result6 = mysqli_query($conn ,$consulta6);
    //Contamos cuantos hay
    $numero = mysqli_num_rows($result6);
    //Si existen camareros, se ejecuta el codigo, en caso contrario se cierra
    if($numero != 0){
     //Se crea un contador
      $i=0;
      //Se declara el array
     $camareros=array();
      while ($row = mysqli_fetch_array($result6)) {
        //Guardamos en el array los id de los camareros existentes
        $camareros[$i]=$row['idUser'];    
        $i++;  
      }
       
        $numero= $numero - 1;
        //Se elige de manera aleatoria una posicion del array de camareros y se guarda el resultado
        $idCamarero= $camareros[mt_rand(0, $numero)];
    
       
        //Insertamos los datos obtenidos
    $consulta= "INSERT INTO pedido (cliente,camarero,fecha,pagado,enviado) VALUES ('$idUs','$idCamarero', NOW(),false, false)";
    $result = mysqli_query($conn ,$consulta);
    //Se comprueba el error
    mysqli_error($conn);
    
   //Guardamos la id del pedido para poder trabajar con ella mas adelante
    $consulta2="SELECT idPedido FROM pedido WHERE cliente='$idUs' AND pagado=false";
    $result2=mysqli_query($conn ,$consulta2);
    //Comprobamos si hay error.
   echo mysqli_error($conn);
      //Se guarda y se envia
    while($row = mysqli_fetch_array($result2)){
        $codPed=$row['idPedido'];
    }

    //Redireccion a la carta con el id del pedido
    header ("LOCATION: cartaCli.php?codPed=$codPed");

    
    }else{
      //Si no existen camareros mostrara un errors
      $error=1;
      header ("LOCATION: pedidosCli.php?error=$error");
    }
 
    
    ?>

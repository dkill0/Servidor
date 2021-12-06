<?php
include("../Seguridad.php");
include("../conexion.php");
if (isset($_POST['motivo'])) {
    
    $tipo=$_POST['motivo'];
    $motivo="";
    switch ($tipo) {
        case 'pedido':
            $motivo="Error en el pedido";
           break;
           case 'plato':
            $motivo="Error en un plato";
           break;
           case 'pago':
            $motivo="Error en el pago";
           break;
           case 'reclamacion':
            $motivo="Reclamacion (hoja)";
           break;
           case 'otro':
            $motivo="Otro (ver mensaje)";
           break;
        default:
            $motivo="Error";
            break;
    }


    $idUser=$_SESSION['idUsuario'];
  
    $consulta6 = "SELECT idUser FROM usuario WHERE tipo=1";
    $result6 = mysqli_query($conn, $consulta6);
    //Contamos cuantos hay
    $numero = mysqli_num_rows($result6);
    //Si existen admins, se ejecuta el codigo, en caso contrario se cierra
    if ($numero != 0) {
    //Se crea un contador
    $i = 0;
    //Se declara el array
    $admin = array();
    while ($row = mysqli_fetch_array($result6)) {
        //Guardamos en el array los id de los admins existentes
        $admin[$i] = $row['idUser'];
        $i++;
    }

    $numero = $numero - 1;
    //Se elige de manera aleatoria una posicion del array de admin y se guarda el resultado
    $idAdmin = $admin[mt_rand(0, $numero)];
    

    if (isset($_POST['comentario'])) {
        $mensaje=$_POST['comentario'];
        
    }

    if(empty($mensaje)){
        $mensaje="No introducido";
        
    }

    
    $consulta2="INSERT INTO incidencias VALUES (null,'$idAdmin','$idUser', '$mensaje','$motivo', false, NOW())";
    echo $consulta2;
  
    mysqli_query($conn, $consulta2);
    

}else{
    echo"No hay admins disponibles";
}
}

header("LOCATION: contactoCli.php");
?>
<?php
include("../Seguridad.php");
include("../conexion.php");
if (isset($_POST['motivo'])) {
    
    $motivo=$_POST['motivo'];

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
        echo "Hola";
    } 
    if (isset($_POST['codPed'])) {
        $mensaje=$_POST['codPed'];
        echo "Hola1";
    }

    if(empty($mensaje)){
        $mensaje="No introducido";
        echo "Hola2";
    }

    
    $consulta2="INSERT INTO notificacion VALUES ('$idAdmin','$idUser', '$mensaje','$motivo', false, NOW())";
  
    $result = mysqli_query($conn, $consulta2);

}else{
    echo"No hay admins disponibles";
}
}

header("LOCATION: contactoCli.php");
?>
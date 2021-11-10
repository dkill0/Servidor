<?php
   session_start();
   if (!isset($_SESSION['idUsuario'])&&!isset($_SESSION['name'])){
    header("Location:indexT.php");
   }
?>
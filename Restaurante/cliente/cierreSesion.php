<?
  session_start();
  unset ($_SESSION['idUsuario']);
  unset ($_SESSION['name']);
  unset ($_SESSION['email'];)
  unset ($_SESSION['password']);
  session_destroy();
  header("Location: ../indexT.php");
  exit;
?>
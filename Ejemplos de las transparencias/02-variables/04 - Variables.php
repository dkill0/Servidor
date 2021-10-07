<html>
<body>
<?php
//comprueba si la variable es numerica
$x = 5985;
echo is_numeric($x);
echo "<br>";
$x = "5985";
echo is_numeric($x);
echo "<br>";
$x = "59.85" + 100;
echo is_numeric($x);
echo "<br>";
$x = "hello";
echo is_numeric($x);
?>
</body>
</html>
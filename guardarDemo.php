<html>
<head>
</head>
<body>

<div id="main">

<?php
$valor = $_POST["nombre"];

echo 'Hola ' .htmlspecialchars($valor) . '!';
include_once("DemoCollector.php");

$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj->createDemo($valor);

echo "Se ha guardado correctamente </br>";

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

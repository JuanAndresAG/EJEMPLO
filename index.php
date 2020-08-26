<!DOCTYPE html>
<html>
<body class="fondo">
	<link rel="stylesheet" type="text/css" href="estilos.css">
<div class="d1">
<?php
echo "<h1>ME LLAMO ANDRÉS</h1>";
?>
</div>
<div class="d2">
<?php
$x="y jugar futbol con mis amigos";
echo "<center><h2>Me gusta pasar tiempo con mi familia $x</h2></center>";
?>
</div>
<div class="d3">
<?php
$t=date("H");
if ($t>12) {
	echo "<center<h2>todavia es la mañana</h2></center>";
}
else
{
	echo "<center><h2>ya es la tarde</h2></center>";
}
?>
</div>
</body>
</html>
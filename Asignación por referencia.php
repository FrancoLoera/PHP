<?php
// ASIGNACIÓN POR REFERENCIA
$texto = "El Salvador";

$var1 = $texto;
$var2 = &$texto;

echo $var1;
echo "<br>" . $var2;

$texto = "México";

echo "<br><br>" .$var1;
echo "<br>" . $var2;
?>
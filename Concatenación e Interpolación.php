<?php
// CONCATENACIÓN
$nombre = "Franco";
$pais = "México";

echo "Datos random: " . $nombre . $pais . 7 . TRUE;

// INTERPOLACIÓN (solamente funciona en comillas dobles y con datos definidos, no se aceptan métodos que realicen cálculos)
echo "<br>Mi nombre es: $nombre";
?>
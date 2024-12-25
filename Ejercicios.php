<?php
// EJERCICIOS PHP

# EJERCICIO 1
# Tema: Condicional IF simple.

$compra = 1000;

if ($compra > 100):
    $descuento = $compra * 0.2;
    $compra -= $descuento;

    echo "Total de compra original: " . $compra + $descuento;
    echo "<br>20% de Descuento: " . $descuento;
    echo "<br>Total de compra final: " . $compra;
    
endif;

# EJERCICIO 2
# Tema: Condicional If else.
# Redacción: Determinar si un alumno aprueba o reprueba un curso, sabiendo que aprobrará si su promedio de tres calificaciones es mayor o igual a 7.0; reprueba en caso contrario.

$calificaciones = [4, 8, 7];

$promedio = array_sum($calificaciones) / 3;
echo "<br>" . round($promedio, 2);

# EJERCICIO 3
# Tema: Operador ternario.
# Redacción: Calcular el total a pagar por la compra de camisas. Si se compran tres camisas o más, se aplica un descuento del 20% sobre el total de la compra, y si son menos de tres camisas, un descuento del 10%.

$camisas = [120, 200, 300, 250];

(count($camisas) >= 3) ? $descuento = array_sum($camisas) * 0.2:
                         $descuento = array_sum($camisas) * 0.1;

echo "<br>Total a pagar original: " . array_sum($camisas);
echo "<br>Descuento: " . $descuento;
echo "<br>Total a pagar final: " . array_sum($camisas) - $descuento;
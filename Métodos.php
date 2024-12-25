<?php
$maestro = [
    "nombre" => "Pedro",
    "apellido" => "Sola",
    "edad" => 32,
    "cursos" => ["Introducción a PHP", "Introducción a Python", "Introducción a CSS"]
];

// var_dump(X). Muestra el tipo de dato del objeto X.
var_dump($maestro["nombre"]);

// count(X [, COUNT_RECURSIVE]). Cuenta el número de elementos contenidos en un arreglo. El parámetro COUNT_RECURSIVE cuenta aquellos elementos que puedan encontrarse dentro de arreglos contenidos en nuestro arreglo principal.
echo "<br>" . count($maestro);
echo "<br>" . count($maestro, COUNT_RECURSIVE);

// array_sum(X). Realiza la sumatoria de todos los valores contenidos en un arreglo X.
$arreglo = [10, 20, 30];
echo "<br>Total del arreglo: " . array_sum($arreglo);

// round(X, Y). Redondea el flotante X con precisión Y.
// Hay 3 casos para la precisión:
// 1. Precisión positiva. Establece la cantidad de décimales especificada.
// 2. Precisión cero. Redondea al entero más cercano.
// 3. Precisión negativa. Redondea la parte entera a potencias de 10.
$pi = 39.141615;

// Caso 1.
echo "<br>Valor con precisión 2: " . round($pi, 2);

// Caso 2.
echo "<br>Valor redondeado con precisión 0: " . round($pi, 0);

// Caso 3 (potencia 1 del número 10).
# Redondeará a 50 debido a que los valores de la potencia 1 de 10 a evaluar serían 40 y 50, de las cuales, 50 es más próxima al número  45.
$valor = 45;
echo "<br>Valor redondeado con precisión -1 (10^1): " . round($valor, -1);

// Caso 3 (potencia 2 del número 10).
# Redondeará a 0 debido a que los valores de la potencia 2 de 10 a evaluar sería 100, pero también se tomaría en cuenta el 0. De estos valores, 0 es más próximo al número 45.
echo "<br>Valor redondeado con precisión -2 (10^2): " . round($valor, -2);
?>
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
?>
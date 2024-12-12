<?php
// ARREGLOS
# Escalares (semejantes a listas en Python)
$estudiantes = array("Franco", "Alan", "Ana", "Amy", "Cloud");
echo $estudiantes[0];

$exestudiantes = ["Denis", "Pedro", "José", 6];
echo $exestudiantes[3];

# Asociativos (semejantes a diccionarios en Python)
$maestro = [
    "nombre" => "Joaquín",
    "apellido" => "Pérez",
    "edad" => 50
];

echo "<br>El nombre completo del profesor es ", $maestro["nombre"], " ", $maestro["apellido"], " y tiene ", $maestro["edad"], " años de edad.";

echo "<br>El nombre completo del profesor es {$maestro['nombre']} {$maestro['apellido']} y tiene {$maestro['edad']} años de edad.";

# Multidimensionales
$maestro = [
    "nombre" => "Pedro",
    "apellido" => "Sola",
    "edad" => 32,
    "cursos" => ["Introducción a PHP", "Introducción a Python", "Introducción a CSS"]
];

echo "<br>El profesor {$maestro['nombre']} {$maestro['apellido']} de {$maestro['edad']} años de edad, como primer curso, imparte {$maestro['cursos'][0]}.";
?>
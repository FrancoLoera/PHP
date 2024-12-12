<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Básicos de PHP</title>
    </head>
    <body>
        <h1> <?php echo "Hola mundo";?> </h1>
    </body>
</html>

<?php
// Comentario de una línea

# Comentario de una línea

/*
Comentario multilínea
*/
?>

<?php
// TIPOS DE DATOS
# Tipo Booleano
var_dump(TRUE);
var_dump(FALSE);

# Tipo Entero
var_dump(10);

# Tipo Flotante
var_dump(1.2);

# Tipo Cadena
var_dump("1");
var_dump('2');
?>

<?php
// VARIABLES
$variable = "Hola";
echo $variable;

$variable = 2;
echo $variable;
?>

<?php
// Constatnes
const PI = 3.1416;
echo PI;

define("ALUMNOS", array("Denis", "Franco", "Alan"));
echo ALUMNOS[1];
?>
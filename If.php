<?php
// ESTRUCTURA CONDICIONAL IF

# CONDICIONAL IF SIMPLE
# Es obligatorio el uso de paréntesis para las condiciones
if (1 == 1){
    echo "1 es igual a 1.";
}

# Recomendado para integraciones en HTML
if (2 == 2):
    echo "<br>2 Es igual a 2.";
endif;
?>

<!DOCTYPE html>
<html lang="ewn">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php if (1 == 1): ?>
            <h1> Contenido HTML mostrado mediante condiciones PHP. </h1>
        <?php endif; ?>
    </body>
</html>

<?php
# CONDICIONAL IF ELSE
if (1 > 2){
    echo "El número 1 es mayor a 2.";
} else {
    echo "El número 1 no es mayor a 2.";
}

if (2 > 3):
    echo "<br>El número 2 es mayor a 3.";

else:
    echo "<br>El número 2 no es mayor a 3.";

endif;

# CONDICIONAL IF ELSEIF ELSE
$variable = 3;
if ($variable > 3):
    echo "<br>El número " . $variable . " es mayor a 3.";
elseif ($variable > 2):
    echo "<br>El número " . $variable . " es mayor a 2.";
else:
    echo "<br>El número " . $variable . " es menor a 2 y 3.";
endif;
?>
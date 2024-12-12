<?php
// OPERADORES DE INCREMENTO/DECREMENTO
# Incremento (primero incrementa, después muestra)
$numero = 10;
echo ++$numero;

# Post-incremento (primero muestra, después incrementa)
echo "<br>Variable 'numero' antes del incremento: " . $numero;
echo "<br>Incrementando variable 'numero': " . $numero++;
echo "<br>Variable 'numero' después del incremento: " . $numero;

# Decremento (primero decrementa, después muestra)
$numero = 10;
echo --$numero;

# Post-decremento (primero muestra, después decrementa)
echo "<br><br>Variable 'numero' antes del decremento: " . $numero;
echo "<br>Decrementando variable 'numero': " . $numero--;
echo "<br>Variable 'numero' después del decremento: " . $numero;
?>
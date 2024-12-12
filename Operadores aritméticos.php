<?php
// OPERADORES LÓGICOS
# AND
echo var_dump(1 == 1 and 2 == 3);
echo var_dump(1 == 1 && 2 == 2);

# OR
echo var_dump(1 == 1 or 2 == 3);
echo var_dump(1 == 1 || 2 == 2);

# NOT
echo var_dump(!(1 == 2) and !(2 != 2));
echo var_dump(!1 == 2);
?>
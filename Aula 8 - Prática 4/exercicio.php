<?php
$salario1 = 3000;
$salario2 = 3500;

for ($i = 1; $i <= 100; $i++) {
    $salario1++;
    if ($i == 50) {
        break;
    }
}

if ($salario1 < $salario2) {
    echo "O valor de SALARIO1 é $salario1, e ele é menor que SALARIO2.\n";
}

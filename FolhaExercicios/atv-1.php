<?php
$a = 12;
$b = 5;
$c = 3;

$soma = $a + $b + $c;

if ($a > 10) {
    echo "<p style='color:blue;'>A soma é: $soma</p>";
}

if ($b < $c) {
    echo "<p style='color:green;'>A soma é: $soma</p>";
}

if ($c < $a && $c < $b) {
    echo "<p style='color:red;'>A soma é: $soma</p>";
}
?>

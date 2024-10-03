<?php
$valor_a_vista = 22500.00;

$valor_parcela = 489.65;
$numero_parcelas = 60;

$valor_total_financiamento = $valor_parcela * $numero_parcelas;

$valor_juros = $valor_total_financiamento - $valor_a_vista;

echo "Mariazinha pagará R$ $valor_juros só de juros no financiamento.";
?>

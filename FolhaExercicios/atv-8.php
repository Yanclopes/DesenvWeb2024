<?php
function calcularParcelas($valor, $parcelas, $taxaJuros) {
    $taxaDecimal = $taxaJuros / 100;

    $valorTotal = $valor * (1 + ($taxaDecimal * ($parcelas / 12)));

    $valorParcela = $valorTotal / $parcelas;

    return number_format($valorParcela, 2, ',', '.'); // Formata para valor monetário
}

$valorMoto = 8654.00;

$opcoesParcelas = [
    24 => 1.5,
    36 => 2.0,
    48 => 2.5,
    60 => 3.0
];

foreach ($opcoesParcelas as $parcelas => $taxaJuros) {
    $valorParcela = calcularParcelas($valorMoto, $parcelas, $taxaJuros);
    echo "Para $parcelas vezes com juros de $taxaJuros%: R$ $valorParcela por parcela.<br>";
}
?>

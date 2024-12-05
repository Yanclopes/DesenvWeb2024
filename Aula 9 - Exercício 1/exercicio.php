<?php
function calcularMedia($notas) {
    $soma = array_sum($notas);
    return $soma / count($notas);
}

function verificarAprovacaoPorNota($media) {
    return $media > 7 ? "Aprovado por Nota" : "Reprovado por Nota";
}

function calcularFrequencia($faltas, $totalDias) {
    $diasFaltados = count($faltas);
    $frequencia = (($totalDias - $diasFaltados) / $totalDias) * 100;
    return $frequencia;
}

function verificarAprovacaoPorFrequencia($frequencia) {
    return $frequencia > 70 ? "Aprovado por Frequência" : "Reprovado por Frequência";
}

// Declaração de arrays
$notas = [8, 9, 7, 6];
$faltas = [1, 3]; // Representa os dias de falta (exemplo)
$totalDias = 30;

// Chamadas das funções
$media = calcularMedia($notas);
$statusNota = verificarAprovacaoPorNota($media);
$frequencia = calcularFrequencia($faltas, $totalDias);
$statusFrequencia = verificarAprovacaoPorFrequencia($frequencia);

// Exibição dos resultados
echo "Média das notas: $media\n";
echo "Status por Nota: $statusNota\n";
echo "Frequência: $frequencia%\n";
echo "Status por Frequência: $statusFrequencia\n";

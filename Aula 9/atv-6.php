<?php
$dinheiro = 50.00;

$preco_maca = 5.00;
$preco_melancia = 3.50;
$preco_laranja = 4.00;
$preco_repolho = 2.50;
$preco_cenoura = 3.00;
$preco_batatinha = 2.80;

$kg_maca = 2;
$kg_melancia = 1;
$kg_laranja = 3;
$kg_repolho = 1.5;
$kg_cenoura = 2;
$kg_batatinha = 1.2;

$total_maca = $preco_maca * $kg_maca;
$total_melancia = $preco_melancia * $kg_melancia;
$total_laranja = $preco_laranja * $kg_laranja;
$total_repolho = $preco_repolho * $kg_repolho;
$total_cenoura = $preco_cenoura * $kg_cenoura;
$total_batatinha = $preco_batatinha * $kg_batatinha;

$total_compra = $total_maca + $total_melancia + $total_laranja + $total_repolho + $total_cenoura + $total_batatinha;

if ($total_compra > $dinheiro) {
    $falta = $total_compra - $dinheiro;
    echo "<p style='color:red;'>O valor da compra foi R$ $total_compra. Joãozinho precisa de mais R$ $falta para pagar a conta.</p>";
} elseif ($total_compra < $dinheiro) {
    $sobra = $dinheiro - $total_compra;
    echo "<p style='color:blue;'>O valor da compra foi R$ $total_compra. Joãozinho ainda pode gastar R$ $sobra.</p>";
} else {
    echo "<p style='color:green;'>O valor da compra foi exatamente R$ 50.00. O saldo para compras foi esgotado.</p>";
}
?>

<?php
$pastas = array(
    "bsn" => array(
        "3a Fase" => array(
            "desenvWeb",
            "bancoDados 1",
            "engSoft 1"
        ),
        "4a Fase" => array(
            "Intro Web",
            "bancoDados 2",
            "engSoft 2"
        )
    )
);

function imprimirArvore($array, $nivel = 0) {
    foreach ($array as $key => $value) {
        echo str_repeat('  ', $nivel) . "- $key\n";
        if (is_array($value)) {
            imprimirArvore($value, $nivel + 1);
        }
    }
}

imprimirArvore($pastas);
?>

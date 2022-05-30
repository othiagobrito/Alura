<?php

$peso = 82;
$altura = 1.87;

$imc = $peso / ($altura ** 2);
$imc = number_format($imc, 2);

echo "Seu peso é $peso e você mede $altura. IMC:\n";

if ($imc < 18.5) {
    echo "$imc - Abaixo do peso normal.";
} elseif ($imc < 24.9) {
    echo "$imc - Peso normal.";
} elseif ($imc < 29.9) {
    echo "$imc - Excesso de Peso.";
} elseif ($imc < 34.9) {
    echo "$imc - Obesidade classe I";
} elseif ($imc < 39.9) {
    echo "$imc - Obesidade classe II";
} elseif ($imc >= 40) {
    echo "$imc - Obesidade classe III";
}

?>
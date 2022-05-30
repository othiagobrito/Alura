<?php

$idade = 24;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver 18 anos ou mais, porém você pode entrar acompanhado a partir de 16 anos.\n\n";

echo "Você tem $idade anos.\n";

if ($idade >= 18) {
    echo "Pode entrar.";
} else {
    echo "Não pode entrar.";
}

echo "\nAdeus!";

?>
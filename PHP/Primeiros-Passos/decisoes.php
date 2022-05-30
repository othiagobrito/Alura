<?php

$idade = 24;

echo "Você só pode entrar se tiver 18 anos ou mais.\n\n";

echo "Você tem $idade anos.\n";

if ($idade >= 18) {
    echo "Pode entrar.";
} else {
    echo "Não pode entrar.";
}

?>
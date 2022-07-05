<?php

$arquivo = fopen("cursos-php.txt", "w");

$curso = "Curso de HTML";
fwrite($arquivo, $curso);

fclose($arquivo);

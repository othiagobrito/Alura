<?php

$arquivo = fopen("cursos-php.txt", "a");

$curso = "\nCurso de CSS";
fwrite($arquivo, $curso);

fclose($arquivo);

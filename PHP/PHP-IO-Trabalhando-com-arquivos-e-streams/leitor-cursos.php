<?php

$nome_arquivo = "lista-cursos.txt";
$arquivo = fopen($nome_arquivo, "r");

$tamanhoDoArquivo = filesize($nome_arquivo);
$cursos = fread($arquivo, $tamanhoDoArquivo);

echo $cursos;

fclose($arquivo);

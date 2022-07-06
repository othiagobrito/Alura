<?php

require "MeuFiltro.php";

$arquivosCursos = fopen("lista-cursos.txt", "r");

stream_filter_register("alura.partes", MeuFiltro::class);
stream_filter_append($arquivosCursos, "alura.partes");

echo fread($arquivosCursos, filesize("lista-cursos.txt"));

fclose($arquivosCursos);

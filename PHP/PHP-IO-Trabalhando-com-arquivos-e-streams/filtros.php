<?php

$arquivosCursos = fopen("lista-cursos.txt", "r");

stream_filter_append($arquivosCursos, "string.toupper");

echo fread($arquivosCursos, filesize("lista-cursos.txt"));

fclose($arquivosCursos);

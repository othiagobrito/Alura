<?php

$link = "https://www.123i.com.br/apartamento/sp-sao-paulo";
$content = file_get_contents($link);
echo $content;

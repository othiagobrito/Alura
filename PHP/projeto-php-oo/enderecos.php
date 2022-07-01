<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco1 = new Endereco("São Paulo", "Irineu", "Você não sabe nem eu", "55C");
$endereco2 = new Endereco("Curitiba", "Juca", "Aquele mesmo", "15");

echo $endereco1->rua  . PHP_EOL;
echo $endereco1->rua = "Barracão de Londres";
echo PHP_EOL;

echo $endereco1  . PHP_EOL;
echo $endereco2  . PHP_EOL;

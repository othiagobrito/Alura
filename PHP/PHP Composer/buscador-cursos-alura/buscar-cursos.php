#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client([
    'base_uri' => 'https://www.alura.com.br/',
    'verify' => false
]);

$crawler = new Crawler();

$searcher = new Buscador($client, $crawler);

$courses = $searcher->search('/cursos-online-programacao/php');

foreach ($courses as $course) {
    echo $course . PHP_EOL;
}

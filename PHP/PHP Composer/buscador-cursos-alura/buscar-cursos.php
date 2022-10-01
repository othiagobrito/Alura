<?php

require 'vendor/autoload.php';
require_once 'src/Buscador.php';

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

<?php

use GuzzleHttp\Client;

$client = new Client();
$response = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');

$html = $response->getBody();
print_r($html);

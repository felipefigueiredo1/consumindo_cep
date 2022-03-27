<?php

//Chama o autoload para utilizar namespace
require __DIR__ . '/vendor/autoload.php';

//Instancia o controller
use \App\Controller\Controller;

//Declara o numero do CEP
$numero = '45992502';

//Chama o controller para instanciar a classe que contem a API
$cep = new Controller;

//Instancia e imprime a consulta
echo '<pre>';
print_r($cep->pegarCep($numero));
echo '</pre>';




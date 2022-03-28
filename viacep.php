<?php

//Array com valores indefinidos, esperando serem preenchidos 
$dados = [
    'cep'        => '',
    'logradouro' => '',
    'bairro'     => '',
    'localidade' => '',
    'uf'         => ''

];
//Chama o autoload para utilizar namespace
require __DIR__ . '/vendor/autoload.php';

//Instancia o controller
use \App\Controller\Controller;

//Declara o numero do CEP setado no formulario
$numero = isset($_POST['cep']) ? $_POST['cep'] : null;

//Chama o controller para instanciar a classe que contem a API, se o CEP foi setado.
if ($numero) {
    $cep = new Controller;
    if ($cep->pegarCep($numero)) {
        $dados = $cep->pegarCep($numero);
    } else {
        echo '<script>alert("Cep inválido")</script>';
    }
}



//Instancia e imprime a consulta




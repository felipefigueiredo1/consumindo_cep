<?php

//Array com valores indefinidos, esperando serem preenchidos 
$dados = [
    'code'         => '',
    'address'      => '',
    'district'     => '',
    'city'         => '',
    'state'        => ''

];
//Chama o autoload para utilizar namespace
require __DIR__ . '/vendor/autoload.php';

//Instancia o controller
use \App\Controller\Controller;

//Declara o numero do CEP setado no formulario
$numero = isset($_POST['cep']) ? $_POST['cep'] : null;

if ($numero) {
    if (!preg_match('/^[0-9]{5,5}([- ]?[0-9]{3,3})?$/', $numero)) {
        echo '<script>alert("Cep inválido")</script>';
    } else {
        //Chama o controller para instanciar a classe que contem a API
        $cep = new Controller;
        //Se estiver tudo certo, retorna os dados do cep.
        if ($cep->pegarCep($numero)) {
            $dados = $cep->pegarCep($numero);
        } else {
            echo '<script>alert("Cep inválido")</script>';
        }
    }
}




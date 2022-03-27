<?php

namespace App\Controller;

//Chama a classe Cep
use App\Service\Cep;

class Controller 
{
    //Recebe valores da view
    public function pegarCep($num)
    {
        //Instancia função
        return Cep::consultarCep($num);
    } 
}
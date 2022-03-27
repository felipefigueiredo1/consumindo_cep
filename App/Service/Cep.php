<?php 

namespace App\Service;

class Cep
{
    //Função que consulta o CEP
    public static function consultarCEP($cep)
    {
        //Inicia cURL
        $curl = curl_init();
        
        //Configura cURL
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://viacep.com.br/ws/{$cep}/json/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        //Execute
        $response = curl_exec($curl);

        //Fecha a conexão 
        curl_close($curl);
 
        //Conversão JSON para Array
        $array = json_decode($response, true);

        //Contéudo em Array, confere se o cep existe ou não na base de dados da API
        if (isset($array['cep'])) {
            return $array;
        } else {
            return 'Cep inválido';
        }

        exit;
    }
}
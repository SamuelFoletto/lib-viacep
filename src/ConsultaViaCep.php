<?php

namespace Samuelfoletto\LibViaCep;

use GuzzleHttp\Client;
class ConsultaViaCep
{
    const BASE_ENDPOINT = 'https://viacep.com.br/ws/';
    public function __construct(Cep $cep){
        $this->cep = $cep;
    }

    public function consultaCep($cep){
        $url = self::BASE_ENDPOINT . "{$cep}/json";

        $response = $this->cep->request('GET', $url);

        return json_decode($response->getBody()->getContents(), true);

    }
}
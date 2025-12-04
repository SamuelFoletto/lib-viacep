<?php

namespace Samuelfoletto\LibViaCep;

use GuzzleHttp\Client;
class ConsultaViaCep
{
    const BASE_ENDPOINT = 'https://viacep.com.br/ws/';
    private $client;
    public function __construct(Client $client){
        $this->client = $client;
    }

    public function consultaCep($cep){
        $url = self::BASE_ENDPOINT . "{$cep}/json";

        $response = $this->client->request('GET', $url);

        return json_decode($response->getBody()->getContents(), true);

    }
}
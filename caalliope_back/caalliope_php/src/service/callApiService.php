<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    private function getApi(string $var)
    {
        $response = $this->client->request(
            'GET',
            'https://www.goodreads.com/api' . $var
        );

        return $response->toArray();
    }
}
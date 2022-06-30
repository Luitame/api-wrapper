<?php

namespace Luitame\ApiWrapper;

use GuzzleHttp\Client;
use PhpParser\Builder\Class_;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;

class HttpClient {

    const API_URL = "https://5da8ccd8e44c790014cd5126.mockapi.io/api/v1/";

    private ClientInterface $client;
    private Class_ $logger;

    public function __construct(ClientInterface $client)
    {
        $this->client = new Client([
            'base_uri' => self::API_URL,
        ]);
    }

    public function get(string $uri, array $queryParameters = []): ResponseInterface
    {
        try {
            return $this->client->get($uri, $queryParameters);
        } catch (ClientExceptionInterface $e) {
            // TODO: log error
        }
    }

    public function post(string $uri, array $body = []): ResponseInterface
    {
        try {
            return $this->client->post($uri, $body);
        } catch (ClientExceptionInterface $e) {
            // TODO: log error
        }
    }
}

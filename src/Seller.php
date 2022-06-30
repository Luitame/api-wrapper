<?php

namespace Luitame\ApiWrapper;

use DateTime;

class Seller
{
    private const URI = '/seller';

    private int $id;
    private string $name;
    private string $email;
    private DateTime $createdAt;

    private HttpClient $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }

    public function create(): void
    {
        $this->client->post();
    }

    public function get(int $id): array
    {
        // sprintfy
        $this->client->get(self::URI."/".$id);
        return [];
    }
}
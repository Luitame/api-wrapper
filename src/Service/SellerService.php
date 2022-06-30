<?php

namespace Luitame\ApiWrapper\Service;

use Luitame\ApiWrapper\Entity\Seller;

class SellerService
{
    private const URI = '/seller';

    private HttpClient $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }

    public function create(Seller $seller): void
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
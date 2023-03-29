<?php

namespace App\Service;

use ONGR\ElasticsearchBundle\Service\Manager as ElasticManager;

class ElasticService
{
    public function __construct(
        private readonly ElasticManager $manager
    ) {
    }

    public function addToIndex(array $body): void
    {
        $this->manager->getClient()->index(
            [
                'index' => $this->manager->getIndexName(),
                'body'  => $body
            ]
        );
    }
}
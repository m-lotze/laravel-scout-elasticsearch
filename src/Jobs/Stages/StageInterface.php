<?php

namespace Matchish\ScoutElasticSearch\Jobs\Stages;

use Elasticsearch\Client;

interface StageInterface
{
    public function title(): string;

    public function estimate(): int;

    public function handle(Client $elasticsearch): void;
}

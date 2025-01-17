<?php

namespace Matchish\ScoutElasticSearch\ElasticSearch;

use IteratorAggregate;
use Traversable;

interface HitsIteratorAggregate extends IteratorAggregate
{
    public function __construct(array $results, callable $callback = null);

    public function getIterator(): Traversable;
}

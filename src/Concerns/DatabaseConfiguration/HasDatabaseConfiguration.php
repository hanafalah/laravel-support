<?php

namespace Hanafalah\LaravelSupport\Concerns\DatabaseConfiguration;

use Hanafalah\LaravelSupport\Concerns as Concerns;

trait HasDatabaseConfiguration
{
    use Concerns\Support\HasArray;
    use Concerns\DatabaseConfiguration\HasModelConfiguration;
    use Concerns\DatabaseConfiguration\HasConnectionConfiguration;

    protected $__database_config;

    protected function setAppDatabase(): self
    {
        $this->__database_config = config('database');
        return $this;
    }
}

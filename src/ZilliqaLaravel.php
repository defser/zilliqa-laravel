<?php

namespace Defser\ZilliqaLaravel;

use Zilliqa\Web3Methods;
use Zilliqa\Zilliqa;

class ZilliqaLaravel
{
    use Web3Methods;

    /** @var Zilliqa */
    protected $client;

    /** @var array */
    protected $config;

    public function __construct(array $config)
    {
        $this->loadFromConfig($config);
    }

    protected function loadFromConfig(array $config): void
    {
        $this->config = $config;
        $this->client = new Zilliqa($config['host']);
    }

    public function __call(string $method, array $parameters)
    {
        return $this->getClient()->{$method}(...$parameters);
    }

    public function getClient(): Zilliqa
    {
        return $this->client;
    }
}
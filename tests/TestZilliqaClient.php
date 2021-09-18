<?php

namespace Defser\ZilliqaLaravel\Test;

use Defser\ZilliqaLaravel\ZilliqaLaravel;
use Exception;
use PHPUnit\Framework\TestCase;

abstract class TestZilliqaClient extends TestCase
{
    /**
     * @var ZilliqaLaravel
     */
    protected $zilliqaLaravel;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        $this->zilliqaLaravel = new ZilliqaLaravel(['host' => 'https://api.zilliqa.com/']);
    }
}
<?php
namespace Defser\ZilliqaLaravel\Test\Unit;

use Defser\ZilliqaLaravel\Test\TestZilliqaClient;
use Zilliqa\DataType\ZilliqaBech32;
use Zilliqa\ZilliqaStatic;

class GetBalanceTest extends TestZilliqaClient
{
    public function testMainNetGetBalance() {
        // @see https://viewblock.io/zilliqa/address/zil1l4khjax278mae63ywsv3l4uj8gg4fsxh34nnzh
        $mainNetTx = new ZilliqaBech32('zil1l4khjax278mae63ywsv3l4uj8gg4fsxh34nnzh');
        $balance = $this->zilliqaLaravel->GetBalance($mainNetTx);
        $this->assertSame(100000000.0, ZilliqaStatic::convertCurrency($balance->balance));
    }
}
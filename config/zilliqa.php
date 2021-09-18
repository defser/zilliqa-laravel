<?php

return [
    'default' => env('ZILLIQA_CHAIN', 'mainnet'),
    'connections' => [
        'mainnet' => [
            'host' => env('ZILLIQA_MAINNET_HTTP_HOST', 'https://api.zilliqa.com/'),
        ],
        'developer_testnet' => [
            'host' => env('ZILLIQA_DEVELOPER_TESTNET_HTTP_HOST', 'https://dev-api.zilliqa.com/'),
        ],
        'local_testnet' => [
            'host' => env('ZILLIQA_LOCAL_TESTNET_HTTP_HOST', 'http://localhost:4201/'),
        ],
        'isolated_server' => [
            'host' => env('ZILLIQA_ISOLATED_SERVER_HTTP_HOST', 'https://zilliqa-isolated-server.zilliqa.com/'),
        ],

    ],

];
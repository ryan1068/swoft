<?php
return [
    'master' => [
        'name'        => 'master',
        'uri'         => [
            '127.0.0.1:3306',
            '127.0.0.1:3306',
        ],
        'maxIdel'     => 8,
        'maxActive'   => 8,
        'maxWait'     => 8,
        'timeout'     => 8,
        'balancer'    => 'random',
        'useProvider' => false,
        'provider'    => 'consul',
    ],

    'slave' => [
        'name'        => 'slave',
        'uri'         => [
            '127.0.0.1:3306',
            '127.0.0.1:3306',
        ],
        'maxIdel'     => 8,
        'maxActive'   => 8,
        'maxWait'     => 8,
        'timeout'     => 8,
        'balancer'    => 'random',
        'useProvider' => false,
        'provider'    => 'consul',
    ],
];
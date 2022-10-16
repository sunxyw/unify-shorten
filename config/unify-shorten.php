<?php

// config for Sunxyw/Shorten
return [
    'providers' => [
        'default' => '1pt',

        '1pt' => [
            'class' => \Sunxyw\Shorten\Providers\OnePt::class,
            'api' => 'https://thakdees.dev.fast.sheridanc.on.ca/1pt/addURL.php',
            'options' => [
                'base_url' => 'https://1pt.co/',
            ],
        ],

        'cleanuri' => [
            'class' => \Sunxyw\Shorten\Providers\CleanUri::class,
            'api' => 'https://cleanuri.com/api/v1/shorten',
            'options' => [
                'base_url' => 'https://cleanuri.com/',
            ],
        ],

        'gotiny' => [
            'class' => \Sunxyw\Shorten\Providers\GoTiny::class,
            'api' => 'https://gotiny.cc/api',
            'options' => [
                'base_url' => 'https://gotiny.cc/',
            ],
        ],

        'cuttly' => [
            'class' => \Sunxyw\Shorten\Providers\CuttLy::class,
            'api' => 'https://cutt.ly/api/api.php',
            'options' => [
                'api_key' => 'c8d221a514aff4b00bb9c9c0b7c1cd8fce115',
                'base_url' => 'https://cutt.ly/',
            ],
        ],
    ],
];

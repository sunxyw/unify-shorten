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
    ],
];

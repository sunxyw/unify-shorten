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
    ],
];

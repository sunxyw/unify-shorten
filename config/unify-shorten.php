<?php

// config for Sunxyw/Shorten
return [
    'providers' => [
        'default' => env('SHORTEN_PROVIDER', '1pt'),

        '1pt' => [
            'class' => \Sunxyw\Shorten\Providers\OnePt::class,
            'api' => 'https://csclub.uwaterloo.ca/~phthakka/1pt/addURL.php',
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
                'api_key' => env('CUTTLY_API_KEY'),
                'base_url' => 'https://cutt.ly/',
            ],
        ],

        'firebase' => [
            'class' => \Sunxyw\Shorten\Providers\Firebase::class,
            'api' => 'https://firebasedynamiclinks.googleapis.com/v1/shortLinks',
            'options' => [
                'api_key' => env('FIREBASE_API_KEY'),
                'base_url' => env('FIREBASE_SHORTEN_BASE_URL', 'https://jumpto.page.link/'),
            ],
        ],
    ],
];

<?php

test('all providers can shorten', function () {
    $providers = \Illuminate\Support\Facades\Config::get('unify-shorten.providers');
    unset($providers['default']);
    $shorten = app(\Sunxyw\Shorten\Shorten::class);
    foreach ($providers as $provider => $config) {
        $url = $shorten->provider($provider)->shorten('https://google.com');
        expect($url)->toBeString();
        expect($url)->toStartWith($config['options']['base_url']);
    }
});

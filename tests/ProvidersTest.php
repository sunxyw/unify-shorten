<?php

test('all providers can shorten', function () {
    $providers = \Illuminate\Support\Facades\Config::get('unify-shorten.providers');
    unset($providers['default']);
    $providers = array_keys($providers);
    foreach ($providers as $provider) {
        $url = \Sunxyw\Shorten\Facades\Shorten::provider($provider)->shorten('https://google.com');
        expect($url)->toBeString();
    }
});

<?php

use Sunxyw\Shorten\Shorten;

test('all providers can shorten', function ($provider, $config) {
    $url = app(Shorten::class)->provider($provider)->shorten('https://google.com');
    expect($url)->toBeString();
    expect($url)->toStartWith($config['options']['base_url']);
})->with('providers');

test('provider can be access via magic property', function () {
    $shorten = app(Shorten::class);
    $url = $shorten->gotiny->shorten('https://google.com');
    expect($url)->toBeString();
    expect($url)->toStartWith('https://gotiny.cc/');
});

test('provider can be access via facade', function () {
    $url = \Sunxyw\Shorten\Facades\Shorten::shorten('https://google.com');
    expect($url)->toBeString();
});

test('provider can be access via helper', function () {
    $url = shorten('https://google.com');
    expect($url)->toBeString();
});

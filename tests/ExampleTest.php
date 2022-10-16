<?php

it('can test', function () {
    $url = \Sunxyw\Shorten\Facades\Shorten::shorten('https://google.com');
    expect($url)->toBeString();
});

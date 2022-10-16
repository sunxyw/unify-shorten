<?php

use Sunxyw\Shorten\Shorten;

function shorten(string $url, string $code = null): string
{
    return app(Shorten::class)->shorten($url, $code);
}

<?php

use Sunxyw\Shorten\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

dataset('providers', function () {
    $providers = require __DIR__ . '/../config/unify-shorten.php';
    unset($providers['default']);
    return $providers;
});

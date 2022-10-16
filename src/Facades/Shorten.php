<?php

namespace Sunxyw\Shorten\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sunxyw\Shorten\Shorten
 */
class Shorten extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sunxyw\Shorten\Shorten::class;
    }
}

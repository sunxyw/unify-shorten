<?php

namespace Sunxyw\Shorten\Exceptions;

class UnknownProviderException extends \RuntimeException
{
    public function __construct(string $name)
    {
        parent::__construct("Provider [$name] not found.");
    }
}

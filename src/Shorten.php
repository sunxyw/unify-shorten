<?php

namespace Sunxyw\Shorten;

use Sunxyw\Shorten\Exceptions\UnknownProviderException;
use Sunxyw\Shorten\Providers\Provider;

class Shorten
{
    private array $providers;
    private string $default;

    public function __construct()
    {
        $providers = config('unify-shorten.providers', ['default' => '']);
        $this->default = $providers['default'];
        unset($providers['default']);
        $this->providers = $providers;
    }

    public function __get(string $name)
    {
        return $this->provider($name);
    }

    public function __set(string $name, $value): void
    {
        $this->providers[$name] = $value;
    }

    public function __isset(string $name): bool
    {
        return isset($this->providers[$name]);
    }

    public function provider(string $name): Provider
    {
        if (!isset($this->providers[$name])) {
            throw new UnknownProviderException($name);
        }
        $config = $this->providers[$name];

        $class = $config['class'];
        $api = $config['api'];
        $options = $config['options'] ?? [];

        return new $class($api, $options);
    }

    public function shorten(string $url, string $code = null): string
    {
        return $this->provider($this->default)->shorten($url, $code);
    }
}

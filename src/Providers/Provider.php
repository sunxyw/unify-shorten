<?php

namespace Sunxyw\Shorten\Providers;

abstract class Provider
{
    protected string $api;
    protected array $options;

    public function __construct(string $api, array $options = [])
    {
        $this->api = $api;
        $this->options = $options;
    }

    protected function option(string $name, $default = null)
    {
        return $this->options[$name] ?? $default;
    }

    abstract public function shorten(string $url, string $code = null): string;
}

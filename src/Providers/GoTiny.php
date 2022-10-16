<?php

namespace Sunxyw\Shorten\Providers;

use Illuminate\Support\Facades\Http;
use Sunxyw\Shorten\Exceptions\RemoteServiceException;

/**
 * @see https://github.com/robvanbakel/gotiny-api
 */
class GoTiny extends Provider
{
    public function shorten(string $url, string $code = null): string
    {
        $response = Http::post($this->api, [
            'input' => $url,
            'custom' => $code,
        ]);

        if ($response->failed() || $response->json('0.long') !== $url) {
            throw new RemoteServiceException($response->json('message'));
        }

        return $this->options['base_url'].$response->json('0.code');
    }
}

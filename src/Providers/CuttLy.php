<?php

namespace Sunxyw\Shorten\Providers;

use Illuminate\Support\Facades\Http;
use Sunxyw\Shorten\Exceptions\RemoteServiceException;

class CuttLy extends Provider
{
    public function shorten(string $url, string $code = null): string
    {
        $response = Http::get($this->api, [
            'key' => $this->option('api_key'),
            'short' => $url,
            'name' => $code,
        ]);

        if ($response->failed() || $response->json('url.status') !== 7) {
            throw new RemoteServiceException("Error: {$response->json('url.status')}");
        }

        return $response->json('url.shortLink');
    }
}

<?php

namespace Sunxyw\Shorten\Providers;

use Illuminate\Support\Facades\Http;
use Sunxyw\Shorten\Exceptions\RemoteServiceException;

/**
 * @see https://cleanuri.com/docs
 */
class CleanUri extends Provider
{
    public function shorten(string $url, string $code = null): string
    {
        $response = Http::post($this->api, [
            'url' => $url,
        ]);

        if ($response->failed() || $response->json('error')) {
            throw new RemoteServiceException($response->json('error', 'Unknown error'));
        }

        return $response->json('result_url');
    }
}

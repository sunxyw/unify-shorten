<?php

namespace Sunxyw\Shorten\Providers;

use Illuminate\Support\Facades\Http;
use Sunxyw\Shorten\Exceptions\RemoteServiceException;

/**
 * @see https://github.com/1pt-co/api
 */
class OnePt extends Provider
{
    public function shorten(string $url, string $code = null): string
    {
        $response = Http::get($this->api, [
            'url' => $url,
            'cu' => $code,
        ]);

        if ($response->successful() && $response->json('status') === 201) {
            return $this->option('base_url') . $response->json('short');
        }

        throw new RemoteServiceException($response->json('message'));
    }
}

<?php

namespace Sunxyw\Shorten\Providers;

use Illuminate\Support\Facades\Http;
use Sunxyw\Shorten\Exceptions\RemoteServiceException;

class Firebase extends Provider
{
    public function shorten(string $url, string $code = null): string
    {
        $response = Http::post($this->api . '?key=' . $this->option('api_key'), [
            'dynamicLinkInfo' => [
                'domainUriPrefix' => rtrim($this->option('base_url'), '/'),
                'link' => $url,
            ],
            'suffix' => [
                'option' => $this->option('suffix_option', 'SHORT'),
            ],
        ]);

        if ($response->successful()) {
            return $response->json('shortLink');
        }

        throw new RemoteServiceException($response->json('error.message'));
    }
}

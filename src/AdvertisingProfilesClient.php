<?php

namespace CedricZiel\AmznAdvertisingProfilesApi;

use CedricZiel\AmznAdvertisingProfilesApi\Generated\Authentication\BearerAuthAuthentication;
use CedricZiel\AmznAdvertisingProfilesApi\Generated\Client;
use Http\Client\Common\Plugin\AddHostPlugin;
use Nyholm\Psr7\Uri;

class AdvertisingProfilesClient extends Client
{
    public static function createFor(Endpoint $endpoint, string $accessToken, $httpClient = null): AdvertisingProfilesClient
    {
        $plugins = [
            new AddHostPlugin(new Uri($endpoint->value)),
            new BearerAuthAuthentication($accessToken),
        ];

        return parent::create($httpClient, $plugins);
    }
}

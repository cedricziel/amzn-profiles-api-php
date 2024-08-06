<?php

namespace CedricZiel\AmznAdvertisingProfilesApi;

use CedricZiel\AmznAdvertisingProfilesApi\Generated\Authentication\BearerAuthAuthentication;
use CedricZiel\AmznAdvertisingProfilesApi\Generated\Client;
use Http\Client\Common\Plugin\AddHostPlugin;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Nyholm\Psr7\Uri;

class AdvertisingProfilesClient extends Client
{
    public static function createFor(Endpoint $endpoint, string $accessToken, $httpClient = null): AdvertisingProfilesClient
    {
        $plugins = [
            new AuthenticationRegistry([
                new BearerAuthAuthentication($accessToken),
            ]),
            new AddHostPlugin(new Uri($endpoint->value)),
        ];

        return parent::create($httpClient, $plugins);
    }
}

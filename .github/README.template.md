# amzn-profiles-api-php

PHP Client for the Amazon Advertising Profiles API

```shell
composer require cedricziel/amznprofilesapiphp
```

## Docs

### General

Instantiate a client, configure your secrets and continue to use:

```php
use CedricZiel\AmznAdvertisingProfilesApi\AdvertisingProfilesClient;
use CedricZiel\AmznAdvertisingProfilesApi\Endpoint;
use CedricZiel\AmznAdvertisingProfilesApi\Header;

// You need to obtain a token via the Amazon LwA workflow
$token = '..';

$client = AdvertisingProfilesClient::createFor(
    Endpoint::Europe,
    $token,
);

// execute the endpoint of choice, see below ...
$client->listProfiles([], [Header::AmazonAdvertisingApiClientId->value => $clientId]);
```

### docs ###

## License

Apache 2.0

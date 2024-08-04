<?php

// see above how to create a client
use CedricZiel\AmznAdvertisingProfilesApi\Endpoint;
use CedricZiel\AmznAdvertisingProfilesApi\AdvertisingProfilesClient;
use CedricZiel\AmznAdvertisingProfilesApi\Header;

$clientId = '...';
$accessToken = '...';

$client = AdvertisingProfilesClient::createFor(Endpoint::Europe, $accessToken);
$client->listProfiles([], [Header::AmazonAdvertisingApiClientId->value => $clientId]);

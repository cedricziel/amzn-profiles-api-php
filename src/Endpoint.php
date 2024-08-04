<?php

namespace CedricZiel\AmznAdvertisingProfilesApi;

enum Endpoint: string
{
    case Europe = 'https://advertising-api-eu.amazon.com';
    case FarEast = 'https://advertising-api-fe.amazon.com';
    case NorthAmerica = 'https://advertising-api.amazon.com';
}

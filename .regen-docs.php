<?php

require_once __DIR__.'/vendor/autoload.php';

function underscoreToCamelCase($string, $capitalizeFirstCharacter = false)
{
    $str = str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));

    if (!$capitalizeFirstCharacter) {
        $str[0] = strtolower($str[0]);
    }

    return $str;
}

$readme = file_get_contents('./.github/README.template.md');
$yaml = Symfony\Component\Yaml\Yaml::parse(file_get_contents('openapi.yaml'));

$doc = '';

foreach ($yaml['paths'] as $pathName => $path) {
    foreach ($path as $httpMethod => $method) {
        $methodName = underscoreToCamelCase($method['operationId']);

        $doc .= '### '.$method['operationId'].' - '."$httpMethod $pathName\n";
        $doc .= "\n";
        $doc .= $method['summary'] ?? '';
        $doc .= "\n\n";
        $doc .= $method['description'] ?? '';
        $doc .= "\n\n";
        $doc .= '```php'."\n";
        $doc .= "use CedricZiel\AmznAdvertisingProfilesApi\AdvertisingProfilesClient;\n";
        $doc .= "use CedricZiel\AmznAdvertisingProfilesApi\Endpoint;\n";
        $doc .= "use CedricZiel\AmznAdvertisingProfilesApi\Header;\n";
        $doc .= "// see above how to create a client\n";
        $doc .= "\$accessToken = '...';\n";
        $doc .= "\$clientId = '...';\n";
        $doc .= '$client = AdvertisingProfilesClient::createFor(Endpoint::Europe, $accessToken);'."\n";
        $doc .= '$client->'."{$methodName}([], [Header::AmazonAdvertisingApiClientId->value => \$clientId]);\n";
        $doc .= '```'."\n";
        $doc .= "\n";
        echo $method['operationId']."\n";
    }
}

file_put_contents('README.md', str_replace('### docs ###', $doc, $readme));

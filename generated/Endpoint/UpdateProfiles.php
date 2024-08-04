<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznAdvertisingProfilesApi\Generated\Endpoint;

class UpdateProfiles extends \CedricZiel\AmznAdvertisingProfilesApi\Generated\Runtime\Client\BaseEndpoint implements \CedricZiel\AmznAdvertisingProfilesApi\Generated\Runtime\Client\Endpoint
{
    use \CedricZiel\AmznAdvertisingProfilesApi\Generated\Runtime\Client\EndpointTrait;

    /**
     * Note that this operation is only used for Sellers using Sponsored Products. This operation is not enabled for vendor type accounts.
     *
     * @param \CedricZiel\AmznAdvertisingProfilesApi\Generated\Model\Profile[]|null $requestBody
     * @param array                                                                 $headerParameters {
     *
     * @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account.
     *             }
     */
    public function __construct(?array $requestBody = null, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return '/v2/profiles';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \CedricZiel\AmznAdvertisingProfilesApi\Generated\Model\Profile) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Amazon-Advertising-API-ClientId']);
        $optionsResolver->setRequired(['Amazon-Advertising-API-ClientId']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Amazon-Advertising-API-ClientId', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \CedricZiel\AmznAdvertisingProfilesApi\Generated\Model\ProfileResponse[]|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'CedricZiel\AmznAdvertisingProfilesApi\Generated\Model\ProfileResponse[]', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['oauth2AuthorizationCode', 'bearerAuth'];
    }
}

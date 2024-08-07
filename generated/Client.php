<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznAdvertisingProfilesApi\Generated;

class Client extends Runtime\Client\Client
{
    /**
     * Note that this operation does not return a response unless the current account has created at least one campaign using the advertising console.
     *
     * @param array $queryParameters {
     *
     * @var string $apiProgram Filters response to include profiles that have permissions for the specified Advertising API program only. Setting `apiProgram=billing` filters the response to include only profiles to which the user and application associated with the access token have permission to view or edit billing information.
     * @var string $accessLevel Filters response to include profiles that have specified permissions for the specified Advertising API program only. Currently, the only supported access level is `view` and `edit`. Setting `accessLevel=view` filters the response to include only profiles to which the user and application associated with the access token have view permission to the provided api program.
     * @var string $profileTypeFilter Filters response to include profiles that are of the specified types in the comma-delimited list. Default is all types. Note that this filter performs an inclusive AND operation on the types.
     * @var string $validPaymentMethodFilter Filter response to include profiles that have valid payment methods. Default is to include all profiles. Setting this filter to `true` returns only profiles with either no `validPaymentMethod` field, or the `validPaymentMethod` field set to `true`.  Setting this to `false` returns profiles with the `validPaymentMethod` field set to `false` only.
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account.
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \CedricZiel\AmznAdvertisingProfilesApi\Generated\Model\Profile[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function listProfiles(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListProfiles($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Note that this operation is only used for Sellers using Sponsored Products. This operation is not enabled for vendor type accounts.
     *
     * @param \CedricZiel\AmznAdvertisingProfilesApi\Generated\Model\Profile[]|null $requestBody
     * @param array                                                                 $headerParameters {
     *
     * @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account.
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \CedricZiel\AmznAdvertisingProfilesApi\Generated\Model\ProfileResponse[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateProfiles(?array $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateProfiles($requestBody, $headerParameters), $fetch);
    }

    /**
     * This operation does not return a response unless the current account has created at least one campaign using the advertising console.
     *
     * @param array $headerParameters {
     *
     * @var string $Amazon-Advertising-API-ClientId The identifier of a client associated with a "Login with Amazon" account.
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return Model\Profile|\Psr\Http\Message\ResponseInterface|null
     */
    public function getProfileById(int $profileId, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetProfileById($profileId, $headerParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}

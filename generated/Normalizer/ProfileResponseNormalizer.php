<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\AmznAdvertisingProfilesApi\Generated\Normalizer;

use CedricZiel\AmznAdvertisingProfilesApi\Generated\Runtime\Normalizer\CheckArray;
use CedricZiel\AmznAdvertisingProfilesApi\Generated\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ProfileResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznAdvertisingProfilesApi\Generated\Model\ProfileResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\AmznAdvertisingProfilesApi\Generated\Model\ProfileResponse::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznAdvertisingProfilesApi\Generated\Model\ProfileResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('profileId', $data)) {
                $object->setProfileId($data['profileId']);
                unset($data['profileId']);
            }
            if (\array_key_exists('code', $data)) {
                $object->setCode($data['code']);
                unset($data['code']);
            }
            if (\array_key_exists('details', $data)) {
                $object->setDetails($data['details']);
                unset($data['details']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('profileId') && null !== $object->getProfileId()) {
                $data['profileId'] = $object->getProfileId();
            }
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['code'] = $object->getCode();
            }
            if ($object->isInitialized('details') && null !== $object->getDetails()) {
                $data['details'] = $object->getDetails();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznAdvertisingProfilesApi\Generated\Model\ProfileResponse::class => false];
        }
    }
} else {
    class ProfileResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\AmznAdvertisingProfilesApi\Generated\Model\ProfileResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\AmznAdvertisingProfilesApi\Generated\Model\ProfileResponse::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\AmznAdvertisingProfilesApi\Generated\Model\ProfileResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('profileId', $data)) {
                $object->setProfileId($data['profileId']);
                unset($data['profileId']);
            }
            if (\array_key_exists('code', $data)) {
                $object->setCode($data['code']);
                unset($data['code']);
            }
            if (\array_key_exists('details', $data)) {
                $object->setDetails($data['details']);
                unset($data['details']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('profileId') && null !== $object->getProfileId()) {
                $data['profileId'] = $object->getProfileId();
            }
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['code'] = $object->getCode();
            }
            if ($object->isInitialized('details') && null !== $object->getDetails()) {
                $data['details'] = $object->getDetails();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\AmznAdvertisingProfilesApi\Generated\Model\ProfileResponse::class => false];
        }
    }
}
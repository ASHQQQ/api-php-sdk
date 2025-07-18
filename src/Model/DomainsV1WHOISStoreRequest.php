<?php

/**
 * Hostinger API PHP SDK
 *
 * API Version: 0.0.73
 * @url https://github.com/hostinger/api-php-sdk
 *
 * NOTE: This file is auto-generated, DO NOT EDIT THIS FILE MANUALLY!
 * If you want to contribute or request a new feature, please create an issue or pull request on https://github.com/hostinger/api
 */

namespace Hostinger\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use Hostinger\ObjectSerializer;

/**
 * @implements ArrayAccess<string, mixed>
 */
class DomainsV1WHOISStoreRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'Domains.V1.WHOIS.StoreRequest';

    /**
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'tld' => 'string',
        'country' => 'string',
        'entityType' => 'string',
        'tldDetails' => 'object',
        'whoisDetails' => 'object'
    ];

    /**
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'tld' => null,
        'country' => null,
        'entityType' => null,
        'tldDetails' => null,
        'whoisDetails' => null
    ];

    /**
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'tld' => false,
        'country' => false,
        'entityType' => false,
        'tldDetails' => false,
        'whoisDetails' => false
    ];

    /**
      * @var array<string>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * @return array<string>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * @param array<string> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'tld' => 'tld',
        'country' => 'country',
        'entityType' => 'entity_type',
        'tldDetails' => 'tld_details',
        'whoisDetails' => 'whois_details'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $setters = [
        'tld' => 'setTld',
        'country' => 'setCountry',
        'entityType' => 'setEntityType',
        'tldDetails' => 'setTldDetails',
        'whoisDetails' => 'setWhoisDetails'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $getters = [
        'tld' => 'getTld',
        'country' => 'getCountry',
        'entityType' => 'getEntityType',
        'tldDetails' => 'getTldDetails',
        'whoisDetails' => 'getWhoisDetails'
    ];

    /**
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }

    public const ENTITY_TYPE_INDIVIDUAL = 'individual';
    public const ENTITY_TYPE_ORGANIZATION = 'organization';

    /**
     * @return array<string>
     */
    public function getEntityTypeAllowableValues(): array
    {
        return [
            self::ENTITY_TYPE_INDIVIDUAL,
            self::ENTITY_TYPE_ORGANIZATION,
        ];
    }

    /**
     * @var array<string, mixed>
     */
    protected array $container = [];

    /**
     * @param array<string, mixed> $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = [])
    {
        $this->setIfExists('tld', $data, null);
        $this->setIfExists('country', $data, null);
        $this->setIfExists('entityType', $data, null);
        $this->setIfExists('tldDetails', $data, null);
        $this->setIfExists('whoisDetails', $data, null);
    }

    /**
    * @param array<string, mixed> $fields
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * @return array<string> invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['tld'] === null) {
            $invalidProperties[] = "'tld' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['entityType'] === null) {
            $invalidProperties[] = "'entityType' can't be null";
        }
        $allowedValues = $this->getEntityTypeAllowableValues();
        if (!is_null($this->container['entityType']) && !in_array($this->container['entityType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'entityType', must be one of '%s'",
                $this->container['entityType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['whoisDetails'] === null) {
            $invalidProperties[] = "'whoisDetails' can't be null";
        }
        return $invalidProperties;
    }

    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * @return string
     */
    public function getTld(): string
    {
        return $this->container['tld'];
    }

    /**
     * @param string $tld TLD of the domain (without leading dot)
     */
    public function setTld(string $tld): static
    {
        $this->container['tld'] = $tld;

        return $this;
    }
    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->container['country'];
    }

    /**
     * @param string $country ISO 3166 2-letter country code
     */
    public function setCountry(string $country): static
    {
        $this->container['country'] = $country;

        return $this;
    }
    /**
     * @return string
     */
    public function getEntityType(): string
    {
        return $this->container['entityType'];
    }

    /**
     * @param string $entityType Legal entity type
     */
    public function setEntityType(string $entityType): static
    {
        $allowedValues = $this->getEntityTypeAllowableValues();
        if (!in_array($entityType, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'entityType', must be one of '%s'",
                    $entityType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['entityType'] = $entityType;

        return $this;
    }
    /**
     * @return object|null
     */
    public function getTldDetails(): ?object
    {
        return $this->container['tldDetails'];
    }

    /**
     * @param object|null $tldDetails TLD details
     */
    public function setTldDetails(?object $tldDetails): static
    {
        $this->container['tldDetails'] = $tldDetails;

        return $this;
    }
    /**
     * @return object
     */
    public function getWhoisDetails(): object
    {
        return $this->container['whoisDetails'];
    }

    /**
     * @param object $whoisDetails WHOIS details
     */
    public function setWhoisDetails(object $whoisDetails): static
    {
        $this->container['whoisDetails'] = $whoisDetails;

        return $this;
    }
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


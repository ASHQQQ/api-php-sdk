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
class BillingV1SubscriptionCancelRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static string $openAPIModelName = 'Billing.V1.Subscription.CancelRequest';

    /**
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'reasonCode' => 'string',
        'cancelOption' => 'string'
    ];

    /**
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'reasonCode' => null,
        'cancelOption' => null
    ];

    /**
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'reasonCode' => true,
        'cancelOption' => true
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
        'reasonCode' => 'reason_code',
        'cancelOption' => 'cancel_option'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $setters = [
        'reasonCode' => 'setReasonCode',
        'cancelOption' => 'setCancelOption'
    ];

    /**
     * @var array<string, string>
     */
    protected static array $getters = [
        'reasonCode' => 'getReasonCode',
        'cancelOption' => 'getCancelOption'
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

    public const REASON_CODE_OTHER = 'other';
    public const CANCEL_OPTION_IMMEDIATELY = 'immediately';

    /**
     * @return array<string>
     */
    public function getReasonCodeAllowableValues(): array
    {
        return [
            self::REASON_CODE_OTHER,
        ];
    }

    /**
     * @return array<string>
     */
    public function getCancelOptionAllowableValues(): array
    {
        return [
            self::CANCEL_OPTION_IMMEDIATELY,
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
        $this->setIfExists('reasonCode', $data, null);
        $this->setIfExists('cancelOption', $data, null);
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

        $allowedValues = $this->getReasonCodeAllowableValues();
        if (!is_null($this->container['reasonCode']) && !in_array($this->container['reasonCode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'reasonCode', must be one of '%s'",
                $this->container['reasonCode'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCancelOptionAllowableValues();
        if (!is_null($this->container['cancelOption']) && !in_array($this->container['cancelOption'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cancelOption', must be one of '%s'",
                $this->container['cancelOption'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * @return string|null
     */
    public function getReasonCode(): ?string
    {
        return $this->container['reasonCode'];
    }

    /**
     * @param string|null $reasonCode Cancellation reason code
     */
    public function setReasonCode(?string $reasonCode): static
    {
        if (is_null($reasonCode)) {
            $this->openAPINullablesSetToNull[] = 'reasonCode';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reasonCode', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getReasonCodeAllowableValues();
        if (!is_null($reasonCode) && !in_array($reasonCode, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'reasonCode', must be one of '%s'",
                    $reasonCode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reasonCode'] = $reasonCode;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getCancelOption(): ?string
    {
        return $this->container['cancelOption'];
    }

    /**
     * @param string|null $cancelOption Cancellation option
     */
    public function setCancelOption(?string $cancelOption): static
    {
        if (is_null($cancelOption)) {
            $this->openAPINullablesSetToNull[] = 'cancelOption';
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cancelOption', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getCancelOptionAllowableValues();
        if (!is_null($cancelOption) && !in_array($cancelOption, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cancelOption', must be one of '%s'",
                    $cancelOption,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cancelOption'] = $cancelOption;

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


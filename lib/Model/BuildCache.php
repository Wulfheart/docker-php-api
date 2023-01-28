<?php
/**
 * BuildCache
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Wulfheart\Docker
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Docker Engine API
 *
 * The Engine API is an HTTP API served by Docker Engine. It is the API the Docker client uses to communicate with the Engine, so everything the Docker client can do can be done with the API.  Most of the client's commands map directly to API endpoints (e.g. `docker ps` is `GET /containers/json`). The notable exception is running containers, which consists of several API calls.  # Errors  The API uses standard HTTP status codes to indicate the success or failure of the API call. The body of the response will be JSON in the following format:  ``` {   \"message\": \"page not found\" } ```  # Versioning  The API is usually changed in each release, so API calls are versioned to ensure that clients don't break. To lock to a specific version of the API, you prefix the URL with its version, for example, call `/v1.30/info` to use the v1.30 version of the `/info` endpoint. If the API version specified in the URL is not supported by the daemon, a HTTP `400 Bad Request` error message is returned.  If you omit the version-prefix, the current version of the API (v1.41) is used. For example, calling `/info` is the same as calling `/v1.41/info`. Using the API without a version-prefix is deprecated and will be removed in a future release.  Engine releases in the near future should support this version of the API, so your client will continue to work even if it is talking to a newer Engine.  The API uses an open schema model, which means server may add extra properties to responses. Likewise, the server will ignore any extra query parameters and request body properties. When you write clients, you need to ignore additional properties in responses to ensure they do not break when talking to newer daemons.   # Authentication  Authentication for registries is handled client side. The client has to send authentication details to various endpoints that need to communicate with registries, such as `POST /images/(name)/push`. These are sent as `X-Registry-Auth` header as a [base64url encoded](https://tools.ietf.org/html/rfc4648#section-5) (JSON) string with the following structure:  ``` {   \"username\": \"string\",   \"password\": \"string\",   \"email\": \"string\",   \"serveraddress\": \"string\" } ```  The `serveraddress` is a domain/IP without a protocol. Throughout this structure, double quotes are required.  If you have already got an identity token from the [`/auth` endpoint](#operation/SystemAuth), you can just pass this instead of credentials:  ``` {   \"identitytoken\": \"9cbaf023786cd7...\" } ```
 *
 * The version of the OpenAPI document: 1.41
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Wulfheart\Docker\Model;

use \ArrayAccess;
use \Wulfheart\Docker\ObjectSerializer;

/**
 * BuildCache Class Doc Comment
 *
 * @category Class
 * @description BuildCache contains information about a build cache record.
 * @package  Wulfheart\Docker
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BuildCache implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BuildCache';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'parent' => 'string',
        'type' => 'string',
        'description' => 'string',
        'in_use' => 'bool',
        'shared' => 'bool',
        'size' => 'int',
        'created_at' => 'string',
        'last_used_at' => 'string',
        'usage_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'parent' => null,
        'type' => null,
        'description' => null,
        'in_use' => null,
        'shared' => null,
        'size' => null,
        'created_at' => 'dateTime',
        'last_used_at' => 'dateTime',
        'usage_count' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'parent' => false,
		'type' => false,
		'description' => false,
		'in_use' => false,
		'shared' => false,
		'size' => false,
		'created_at' => false,
		'last_used_at' => true,
		'usage_count' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'ID',
        'parent' => 'Parent',
        'type' => 'Type',
        'description' => 'Description',
        'in_use' => 'InUse',
        'shared' => 'Shared',
        'size' => 'Size',
        'created_at' => 'CreatedAt',
        'last_used_at' => 'LastUsedAt',
        'usage_count' => 'UsageCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'parent' => 'setParent',
        'type' => 'setType',
        'description' => 'setDescription',
        'in_use' => 'setInUse',
        'shared' => 'setShared',
        'size' => 'setSize',
        'created_at' => 'setCreatedAt',
        'last_used_at' => 'setLastUsedAt',
        'usage_count' => 'setUsageCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'parent' => 'getParent',
        'type' => 'getType',
        'description' => 'getDescription',
        'in_use' => 'getInUse',
        'shared' => 'getShared',
        'size' => 'getSize',
        'created_at' => 'getCreatedAt',
        'last_used_at' => 'getLastUsedAt',
        'usage_count' => 'getUsageCount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const TYPE_INTERNAL = 'internal';
    public const TYPE_FRONTEND = 'frontend';
    public const TYPE_SOURCE_LOCAL = 'source.local';
    public const TYPE_SOURCE_GIT_CHECKOUT = 'source.git.checkout';
    public const TYPE_EXEC_CACHEMOUNT = 'exec.cachemount';
    public const TYPE_REGULAR = 'regular';
    public const TYPE_UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INTERNAL,
            self::TYPE_FRONTEND,
            self::TYPE_SOURCE_LOCAL,
            self::TYPE_SOURCE_GIT_CHECKOUT,
            self::TYPE_EXEC_CACHEMOUNT,
            self::TYPE_REGULAR,
            self::TYPE_UNKNOWN_DEFAULT_OPEN_API,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('parent', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('in_use', $data ?? [], null);
        $this->setIfExists('shared', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('last_used_at', $data ?? [], null);
        $this->setIfExists('usage_count', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Unique ID of the build cache record.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return string|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param string|null $parent ID of the parent build cache record.
     *
     * @return self
     */
    public function setParent($parent)
    {
        if (is_null($parent)) {
            throw new \InvalidArgumentException('non-nullable parent cannot be null');
        }
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Cache record type.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the build-step that produced the build cache.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets in_use
     *
     * @return bool|null
     */
    public function getInUse()
    {
        return $this->container['in_use'];
    }

    /**
     * Sets in_use
     *
     * @param bool|null $in_use Indicates if the build cache is in use.
     *
     * @return self
     */
    public function setInUse($in_use)
    {
        if (is_null($in_use)) {
            throw new \InvalidArgumentException('non-nullable in_use cannot be null');
        }
        $this->container['in_use'] = $in_use;

        return $this;
    }

    /**
     * Gets shared
     *
     * @return bool|null
     */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
     * Sets shared
     *
     * @param bool|null $shared Indicates if the build cache is shared.
     *
     * @return self
     */
    public function setShared($shared)
    {
        if (is_null($shared)) {
            throw new \InvalidArgumentException('non-nullable shared cannot be null');
        }
        $this->container['shared'] = $shared;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size Amount of disk space used by the build cache (in bytes).
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at Date and time at which the build cache was created in [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets last_used_at
     *
     * @return string|null
     */
    public function getLastUsedAt()
    {
        return $this->container['last_used_at'];
    }

    /**
     * Sets last_used_at
     *
     * @param string|null $last_used_at Date and time at which the build cache was last used in [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     *
     * @return self
     */
    public function setLastUsedAt($last_used_at)
    {
        if (is_null($last_used_at)) {
            array_push($this->openAPINullablesSetToNull, 'last_used_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_used_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_used_at'] = $last_used_at;

        return $this;
    }

    /**
     * Gets usage_count
     *
     * @return int|null
     */
    public function getUsageCount()
    {
        return $this->container['usage_count'];
    }

    /**
     * Sets usage_count
     *
     * @param int|null $usage_count usage_count
     *
     * @return self
     */
    public function setUsageCount($usage_count)
    {
        if (is_null($usage_count)) {
            throw new \InvalidArgumentException('non-nullable usage_count cannot be null');
        }
        $this->container['usage_count'] = $usage_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



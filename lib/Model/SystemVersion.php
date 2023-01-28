<?php
/**
 * SystemVersion
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
 * SystemVersion Class Doc Comment
 *
 * @category Class
 * @description Response of Engine API: GET \&quot;/version\&quot;
 * @package  Wulfheart\Docker
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SystemVersion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SystemVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'platform' => '\Wulfheart\Docker\Model\SystemVersionPlatform',
        'components' => '\Wulfheart\Docker\Model\SystemVersionComponentsInner[]',
        'version' => 'string',
        'api_version' => 'string',
        'min_api_version' => 'string',
        'git_commit' => 'string',
        'go_version' => 'string',
        'os' => 'string',
        'arch' => 'string',
        'kernel_version' => 'string',
        'experimental' => 'bool',
        'build_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'platform' => null,
        'components' => null,
        'version' => null,
        'api_version' => null,
        'min_api_version' => null,
        'git_commit' => null,
        'go_version' => null,
        'os' => null,
        'arch' => null,
        'kernel_version' => null,
        'experimental' => null,
        'build_time' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'platform' => false,
		'components' => false,
		'version' => false,
		'api_version' => false,
		'min_api_version' => false,
		'git_commit' => false,
		'go_version' => false,
		'os' => false,
		'arch' => false,
		'kernel_version' => false,
		'experimental' => false,
		'build_time' => false
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
        'platform' => 'Platform',
        'components' => 'Components',
        'version' => 'Version',
        'api_version' => 'ApiVersion',
        'min_api_version' => 'MinAPIVersion',
        'git_commit' => 'GitCommit',
        'go_version' => 'GoVersion',
        'os' => 'Os',
        'arch' => 'Arch',
        'kernel_version' => 'KernelVersion',
        'experimental' => 'Experimental',
        'build_time' => 'BuildTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'platform' => 'setPlatform',
        'components' => 'setComponents',
        'version' => 'setVersion',
        'api_version' => 'setApiVersion',
        'min_api_version' => 'setMinApiVersion',
        'git_commit' => 'setGitCommit',
        'go_version' => 'setGoVersion',
        'os' => 'setOs',
        'arch' => 'setArch',
        'kernel_version' => 'setKernelVersion',
        'experimental' => 'setExperimental',
        'build_time' => 'setBuildTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'platform' => 'getPlatform',
        'components' => 'getComponents',
        'version' => 'getVersion',
        'api_version' => 'getApiVersion',
        'min_api_version' => 'getMinApiVersion',
        'git_commit' => 'getGitCommit',
        'go_version' => 'getGoVersion',
        'os' => 'getOs',
        'arch' => 'getArch',
        'kernel_version' => 'getKernelVersion',
        'experimental' => 'getExperimental',
        'build_time' => 'getBuildTime'
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
        $this->setIfExists('platform', $data ?? [], null);
        $this->setIfExists('components', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('api_version', $data ?? [], null);
        $this->setIfExists('min_api_version', $data ?? [], null);
        $this->setIfExists('git_commit', $data ?? [], null);
        $this->setIfExists('go_version', $data ?? [], null);
        $this->setIfExists('os', $data ?? [], null);
        $this->setIfExists('arch', $data ?? [], null);
        $this->setIfExists('kernel_version', $data ?? [], null);
        $this->setIfExists('experimental', $data ?? [], null);
        $this->setIfExists('build_time', $data ?? [], null);
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
     * Gets platform
     *
     * @return \Wulfheart\Docker\Model\SystemVersionPlatform|null
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param \Wulfheart\Docker\Model\SystemVersionPlatform|null $platform platform
     *
     * @return self
     */
    public function setPlatform($platform)
    {
        if (is_null($platform)) {
            throw new \InvalidArgumentException('non-nullable platform cannot be null');
        }
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets components
     *
     * @return \Wulfheart\Docker\Model\SystemVersionComponentsInner[]|null
     */
    public function getComponents()
    {
        return $this->container['components'];
    }

    /**
     * Sets components
     *
     * @param \Wulfheart\Docker\Model\SystemVersionComponentsInner[]|null $components Information about system components
     *
     * @return self
     */
    public function setComponents($components)
    {
        if (is_null($components)) {
            throw new \InvalidArgumentException('non-nullable components cannot be null');
        }
        $this->container['components'] = $components;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version The version of the daemon
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets api_version
     *
     * @return string|null
     */
    public function getApiVersion()
    {
        return $this->container['api_version'];
    }

    /**
     * Sets api_version
     *
     * @param string|null $api_version The default (and highest) API version that is supported by the daemon
     *
     * @return self
     */
    public function setApiVersion($api_version)
    {
        if (is_null($api_version)) {
            throw new \InvalidArgumentException('non-nullable api_version cannot be null');
        }
        $this->container['api_version'] = $api_version;

        return $this;
    }

    /**
     * Gets min_api_version
     *
     * @return string|null
     */
    public function getMinApiVersion()
    {
        return $this->container['min_api_version'];
    }

    /**
     * Sets min_api_version
     *
     * @param string|null $min_api_version The minimum API version that is supported by the daemon
     *
     * @return self
     */
    public function setMinApiVersion($min_api_version)
    {
        if (is_null($min_api_version)) {
            throw new \InvalidArgumentException('non-nullable min_api_version cannot be null');
        }
        $this->container['min_api_version'] = $min_api_version;

        return $this;
    }

    /**
     * Gets git_commit
     *
     * @return string|null
     */
    public function getGitCommit()
    {
        return $this->container['git_commit'];
    }

    /**
     * Sets git_commit
     *
     * @param string|null $git_commit The Git commit of the source code that was used to build the daemon
     *
     * @return self
     */
    public function setGitCommit($git_commit)
    {
        if (is_null($git_commit)) {
            throw new \InvalidArgumentException('non-nullable git_commit cannot be null');
        }
        $this->container['git_commit'] = $git_commit;

        return $this;
    }

    /**
     * Gets go_version
     *
     * @return string|null
     */
    public function getGoVersion()
    {
        return $this->container['go_version'];
    }

    /**
     * Sets go_version
     *
     * @param string|null $go_version The version Go used to compile the daemon, and the version of the Go runtime in use.
     *
     * @return self
     */
    public function setGoVersion($go_version)
    {
        if (is_null($go_version)) {
            throw new \InvalidArgumentException('non-nullable go_version cannot be null');
        }
        $this->container['go_version'] = $go_version;

        return $this;
    }

    /**
     * Gets os
     *
     * @return string|null
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param string|null $os The operating system that the daemon is running on (\"linux\" or \"windows\")
     *
     * @return self
     */
    public function setOs($os)
    {
        if (is_null($os)) {
            throw new \InvalidArgumentException('non-nullable os cannot be null');
        }
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets arch
     *
     * @return string|null
     */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
     * Sets arch
     *
     * @param string|null $arch The architecture that the daemon is running on
     *
     * @return self
     */
    public function setArch($arch)
    {
        if (is_null($arch)) {
            throw new \InvalidArgumentException('non-nullable arch cannot be null');
        }
        $this->container['arch'] = $arch;

        return $this;
    }

    /**
     * Gets kernel_version
     *
     * @return string|null
     */
    public function getKernelVersion()
    {
        return $this->container['kernel_version'];
    }

    /**
     * Sets kernel_version
     *
     * @param string|null $kernel_version The kernel version (`uname -r`) that the daemon is running on.  This field is omitted when empty.
     *
     * @return self
     */
    public function setKernelVersion($kernel_version)
    {
        if (is_null($kernel_version)) {
            throw new \InvalidArgumentException('non-nullable kernel_version cannot be null');
        }
        $this->container['kernel_version'] = $kernel_version;

        return $this;
    }

    /**
     * Gets experimental
     *
     * @return bool|null
     */
    public function getExperimental()
    {
        return $this->container['experimental'];
    }

    /**
     * Sets experimental
     *
     * @param bool|null $experimental Indicates if the daemon is started with experimental features enabled.  This field is omitted when empty / false.
     *
     * @return self
     */
    public function setExperimental($experimental)
    {
        if (is_null($experimental)) {
            throw new \InvalidArgumentException('non-nullable experimental cannot be null');
        }
        $this->container['experimental'] = $experimental;

        return $this;
    }

    /**
     * Gets build_time
     *
     * @return string|null
     */
    public function getBuildTime()
    {
        return $this->container['build_time'];
    }

    /**
     * Sets build_time
     *
     * @param string|null $build_time The date and time that the daemon was compiled.
     *
     * @return self
     */
    public function setBuildTime($build_time)
    {
        if (is_null($build_time)) {
            throw new \InvalidArgumentException('non-nullable build_time cannot be null');
        }
        $this->container['build_time'] = $build_time;

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



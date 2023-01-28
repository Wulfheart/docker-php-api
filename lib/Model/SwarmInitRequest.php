<?php
/**
 * SwarmInitRequest
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
 * SwarmInitRequest Class Doc Comment
 *
 * @category Class
 * @package  Wulfheart\Docker
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SwarmInitRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SwarmInitRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'listen_addr' => 'string',
        'advertise_addr' => 'string',
        'data_path_addr' => 'string',
        'data_path_port' => 'int',
        'default_addr_pool' => 'string[]',
        'force_new_cluster' => 'bool',
        'subnet_size' => 'int',
        'spec' => '\Wulfheart\Docker\Model\SwarmSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'listen_addr' => null,
        'advertise_addr' => null,
        'data_path_addr' => null,
        'data_path_port' => 'uint32',
        'default_addr_pool' => null,
        'force_new_cluster' => null,
        'subnet_size' => 'uint32',
        'spec' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'listen_addr' => false,
		'advertise_addr' => false,
		'data_path_addr' => false,
		'data_path_port' => false,
		'default_addr_pool' => false,
		'force_new_cluster' => false,
		'subnet_size' => false,
		'spec' => false
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
        'listen_addr' => 'ListenAddr',
        'advertise_addr' => 'AdvertiseAddr',
        'data_path_addr' => 'DataPathAddr',
        'data_path_port' => 'DataPathPort',
        'default_addr_pool' => 'DefaultAddrPool',
        'force_new_cluster' => 'ForceNewCluster',
        'subnet_size' => 'SubnetSize',
        'spec' => 'Spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'listen_addr' => 'setListenAddr',
        'advertise_addr' => 'setAdvertiseAddr',
        'data_path_addr' => 'setDataPathAddr',
        'data_path_port' => 'setDataPathPort',
        'default_addr_pool' => 'setDefaultAddrPool',
        'force_new_cluster' => 'setForceNewCluster',
        'subnet_size' => 'setSubnetSize',
        'spec' => 'setSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'listen_addr' => 'getListenAddr',
        'advertise_addr' => 'getAdvertiseAddr',
        'data_path_addr' => 'getDataPathAddr',
        'data_path_port' => 'getDataPathPort',
        'default_addr_pool' => 'getDefaultAddrPool',
        'force_new_cluster' => 'getForceNewCluster',
        'subnet_size' => 'getSubnetSize',
        'spec' => 'getSpec'
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
        $this->setIfExists('listen_addr', $data ?? [], null);
        $this->setIfExists('advertise_addr', $data ?? [], null);
        $this->setIfExists('data_path_addr', $data ?? [], null);
        $this->setIfExists('data_path_port', $data ?? [], null);
        $this->setIfExists('default_addr_pool', $data ?? [], null);
        $this->setIfExists('force_new_cluster', $data ?? [], null);
        $this->setIfExists('subnet_size', $data ?? [], null);
        $this->setIfExists('spec', $data ?? [], null);
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
     * Gets listen_addr
     *
     * @return string|null
     */
    public function getListenAddr()
    {
        return $this->container['listen_addr'];
    }

    /**
     * Sets listen_addr
     *
     * @param string|null $listen_addr Listen address used for inter-manager communication, as well as determining the networking interface used for the VXLAN Tunnel Endpoint (VTEP). This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the default swarm listening port is used.
     *
     * @return self
     */
    public function setListenAddr($listen_addr)
    {
        if (is_null($listen_addr)) {
            throw new \InvalidArgumentException('non-nullable listen_addr cannot be null');
        }
        $this->container['listen_addr'] = $listen_addr;

        return $this;
    }

    /**
     * Gets advertise_addr
     *
     * @return string|null
     */
    public function getAdvertiseAddr()
    {
        return $this->container['advertise_addr'];
    }

    /**
     * Sets advertise_addr
     *
     * @param string|null $advertise_addr Externally reachable address advertised to other nodes. This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the port number from the listen address is used. If `AdvertiseAddr` is not specified, it will be automatically detected when possible.
     *
     * @return self
     */
    public function setAdvertiseAddr($advertise_addr)
    {
        if (is_null($advertise_addr)) {
            throw new \InvalidArgumentException('non-nullable advertise_addr cannot be null');
        }
        $this->container['advertise_addr'] = $advertise_addr;

        return $this;
    }

    /**
     * Gets data_path_addr
     *
     * @return string|null
     */
    public function getDataPathAddr()
    {
        return $this->container['data_path_addr'];
    }

    /**
     * Sets data_path_addr
     *
     * @param string|null $data_path_addr Address or interface to use for data path traffic (format: `<ip|interface>`), for example,  `192.168.1.1`, or an interface, like `eth0`. If `DataPathAddr` is unspecified, the same address as `AdvertiseAddr` is used.  The `DataPathAddr` specifies the address that global scope network drivers will publish towards other  nodes in order to reach the containers running on this node. Using this parameter it is possible to separate the container data traffic from the management traffic of the cluster.
     *
     * @return self
     */
    public function setDataPathAddr($data_path_addr)
    {
        if (is_null($data_path_addr)) {
            throw new \InvalidArgumentException('non-nullable data_path_addr cannot be null');
        }
        $this->container['data_path_addr'] = $data_path_addr;

        return $this;
    }

    /**
     * Gets data_path_port
     *
     * @return int|null
     */
    public function getDataPathPort()
    {
        return $this->container['data_path_port'];
    }

    /**
     * Sets data_path_port
     *
     * @param int|null $data_path_port DataPathPort specifies the data path port number for data traffic. Acceptable port range is 1024 to 49151. if no port is set or is set to 0, default port 4789 will be used.
     *
     * @return self
     */
    public function setDataPathPort($data_path_port)
    {
        if (is_null($data_path_port)) {
            throw new \InvalidArgumentException('non-nullable data_path_port cannot be null');
        }
        $this->container['data_path_port'] = $data_path_port;

        return $this;
    }

    /**
     * Gets default_addr_pool
     *
     * @return string[]|null
     */
    public function getDefaultAddrPool()
    {
        return $this->container['default_addr_pool'];
    }

    /**
     * Sets default_addr_pool
     *
     * @param string[]|null $default_addr_pool Default Address Pool specifies default subnet pools for global scope networks.
     *
     * @return self
     */
    public function setDefaultAddrPool($default_addr_pool)
    {
        if (is_null($default_addr_pool)) {
            throw new \InvalidArgumentException('non-nullable default_addr_pool cannot be null');
        }
        $this->container['default_addr_pool'] = $default_addr_pool;

        return $this;
    }

    /**
     * Gets force_new_cluster
     *
     * @return bool|null
     */
    public function getForceNewCluster()
    {
        return $this->container['force_new_cluster'];
    }

    /**
     * Sets force_new_cluster
     *
     * @param bool|null $force_new_cluster Force creation of a new swarm.
     *
     * @return self
     */
    public function setForceNewCluster($force_new_cluster)
    {
        if (is_null($force_new_cluster)) {
            throw new \InvalidArgumentException('non-nullable force_new_cluster cannot be null');
        }
        $this->container['force_new_cluster'] = $force_new_cluster;

        return $this;
    }

    /**
     * Gets subnet_size
     *
     * @return int|null
     */
    public function getSubnetSize()
    {
        return $this->container['subnet_size'];
    }

    /**
     * Sets subnet_size
     *
     * @param int|null $subnet_size SubnetSize specifies the subnet size of the networks created from the default subnet pool.
     *
     * @return self
     */
    public function setSubnetSize($subnet_size)
    {
        if (is_null($subnet_size)) {
            throw new \InvalidArgumentException('non-nullable subnet_size cannot be null');
        }
        $this->container['subnet_size'] = $subnet_size;

        return $this;
    }

    /**
     * Gets spec
     *
     * @return \Wulfheart\Docker\Model\SwarmSpec|null
     */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
     * Sets spec
     *
     * @param \Wulfheart\Docker\Model\SwarmSpec|null $spec spec
     *
     * @return self
     */
    public function setSpec($spec)
    {
        if (is_null($spec)) {
            throw new \InvalidArgumentException('non-nullable spec cannot be null');
        }
        $this->container['spec'] = $spec;

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


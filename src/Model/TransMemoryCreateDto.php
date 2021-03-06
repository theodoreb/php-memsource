<?php
/**
 * TransMemoryCreateDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Memsource REST API
 *
 * Welcome to Memsource's API documentation. To view our legacy APIs please [visit our documentation](https://wiki.memsource.com/wiki/Memsource_API) and for more information about our new APIs, [visit our blog](https://www.memsource.com/blog/2017/10/24/introducing-rest-apis-qa-with-the-memsource-api-team/).    If you have any questions, please contact [Memsource Support](<mailto:support@memsource.com>).
 *
 * OpenAPI spec version: All
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Memsource\Model;

use \ArrayAccess;
use \Memsource\ObjectSerializer;

/**
 * TransMemoryCreateDto Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransMemoryCreateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransMemoryCreateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'sourceLang' => 'string',
        'targetLangs' => 'string[]',
        'client' => '\Memsource\Model\IdReference',
        'businessUnit' => '\Memsource\Model\IdReference',
        'domain' => '\Memsource\Model\IdReference',
        'subDomain' => '\Memsource\Model\IdReference',
        'note' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'sourceLang' => null,
        'targetLangs' => null,
        'client' => null,
        'businessUnit' => null,
        'domain' => null,
        'subDomain' => null,
        'note' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'sourceLang' => 'sourceLang',
        'targetLangs' => 'targetLangs',
        'client' => 'client',
        'businessUnit' => 'businessUnit',
        'domain' => 'domain',
        'subDomain' => 'subDomain',
        'note' => 'note'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'sourceLang' => 'setSourceLang',
        'targetLangs' => 'setTargetLangs',
        'client' => 'setClient',
        'businessUnit' => 'setBusinessUnit',
        'domain' => 'setDomain',
        'subDomain' => 'setSubDomain',
        'note' => 'setNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'sourceLang' => 'getSourceLang',
        'targetLangs' => 'getTargetLangs',
        'client' => 'getClient',
        'businessUnit' => 'getBusinessUnit',
        'domain' => 'getDomain',
        'subDomain' => 'getSubDomain',
        'note' => 'getNote'
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
        return self::$swaggerModelName;
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sourceLang'] = isset($data['sourceLang']) ? $data['sourceLang'] : null;
        $this->container['targetLangs'] = isset($data['targetLangs']) ? $data['targetLangs'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['businessUnit'] = isset($data['businessUnit']) ? $data['businessUnit'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['subDomain'] = isset($data['subDomain']) ? $data['subDomain'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ((strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['sourceLang'] === null) {
            $invalidProperties[] = "'sourceLang' can't be null";
        }
        if ($this->container['targetLangs'] === null) {
            $invalidProperties[] = "'targetLangs' can't be null";
        }
        if (!is_null($this->container['note']) && (strlen($this->container['note']) > 4096)) {
            $invalidProperties[] = "invalid value for 'note', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['note']) && (strlen($this->container['note']) < 0)) {
            $invalidProperties[] = "invalid value for 'note', the character length must be bigger than or equal to 0.";
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

        if ($this->container['name'] === null) {
            return false;
        }
        if (strlen($this->container['name']) > 255) {
            return false;
        }
        if (strlen($this->container['name']) < 0) {
            return false;
        }
        if ($this->container['sourceLang'] === null) {
            return false;
        }
        if ($this->container['targetLangs'] === null) {
            return false;
        }
        if (strlen($this->container['note']) > 4096) {
            return false;
        }
        if (strlen($this->container['note']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling TransMemoryCreateDto., must be smaller than or equal to 255.');
        }
        if ((strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling TransMemoryCreateDto., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets sourceLang
     *
     * @return string
     */
    public function getSourceLang()
    {
        return $this->container['sourceLang'];
    }

    /**
     * Sets sourceLang
     *
     * @param string $sourceLang sourceLang
     *
     * @return $this
     */
    public function setSourceLang($sourceLang)
    {
        $this->container['sourceLang'] = $sourceLang;

        return $this;
    }

    /**
     * Gets targetLangs
     *
     * @return string[]
     */
    public function getTargetLangs()
    {
        return $this->container['targetLangs'];
    }

    /**
     * Sets targetLangs
     *
     * @param string[] $targetLangs targetLangs
     *
     * @return $this
     */
    public function setTargetLangs($targetLangs)
    {
        $this->container['targetLangs'] = $targetLangs;

        return $this;
    }

    /**
     * Gets client
     *
     * @return \Memsource\Model\IdReference
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param \Memsource\Model\IdReference $client client
     *
     * @return $this
     */
    public function setClient($client)
    {
        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets businessUnit
     *
     * @return \Memsource\Model\IdReference
     */
    public function getBusinessUnit()
    {
        return $this->container['businessUnit'];
    }

    /**
     * Sets businessUnit
     *
     * @param \Memsource\Model\IdReference $businessUnit businessUnit
     *
     * @return $this
     */
    public function setBusinessUnit($businessUnit)
    {
        $this->container['businessUnit'] = $businessUnit;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return \Memsource\Model\IdReference
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param \Memsource\Model\IdReference $domain domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets subDomain
     *
     * @return \Memsource\Model\IdReference
     */
    public function getSubDomain()
    {
        return $this->container['subDomain'];
    }

    /**
     * Sets subDomain
     *
     * @param \Memsource\Model\IdReference $subDomain subDomain
     *
     * @return $this
     */
    public function setSubDomain($subDomain)
    {
        $this->container['subDomain'] = $subDomain;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        if (!is_null($note) && (strlen($note) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $note when calling TransMemoryCreateDto., must be smaller than or equal to 4096.');
        }
        if (!is_null($note) && (strlen($note) < 0)) {
            throw new \InvalidArgumentException('invalid length for $note when calling TransMemoryCreateDto., must be bigger than or equal to 0.');
        }

        $this->container['note'] = $note;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



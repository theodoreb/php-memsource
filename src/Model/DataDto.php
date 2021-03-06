<?php
/**
 * DataDto
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
 * DataDto Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DataDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'available' => 'bool',
        'all' => '\Memsource\Model\CountsDto',
        'repetitions' => '\Memsource\Model\CountsDto',
        'transMemoryMatches' => '\Memsource\Model\MatchCounts101Dto',
        'machineTranslationMatches' => '\Memsource\Model\MatchCountsDto',
        'nonTranslatablesMatches' => '\Memsource\Model\MatchCountsNTDto'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'available' => null,
        'all' => null,
        'repetitions' => null,
        'transMemoryMatches' => null,
        'machineTranslationMatches' => null,
        'nonTranslatablesMatches' => null
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
        'available' => 'available',
        'all' => 'all',
        'repetitions' => 'repetitions',
        'transMemoryMatches' => 'transMemoryMatches',
        'machineTranslationMatches' => 'machineTranslationMatches',
        'nonTranslatablesMatches' => 'nonTranslatablesMatches'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available' => 'setAvailable',
        'all' => 'setAll',
        'repetitions' => 'setRepetitions',
        'transMemoryMatches' => 'setTransMemoryMatches',
        'machineTranslationMatches' => 'setMachineTranslationMatches',
        'nonTranslatablesMatches' => 'setNonTranslatablesMatches'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available' => 'getAvailable',
        'all' => 'getAll',
        'repetitions' => 'getRepetitions',
        'transMemoryMatches' => 'getTransMemoryMatches',
        'machineTranslationMatches' => 'getMachineTranslationMatches',
        'nonTranslatablesMatches' => 'getNonTranslatablesMatches'
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
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['all'] = isset($data['all']) ? $data['all'] : null;
        $this->container['repetitions'] = isset($data['repetitions']) ? $data['repetitions'] : null;
        $this->container['transMemoryMatches'] = isset($data['transMemoryMatches']) ? $data['transMemoryMatches'] : null;
        $this->container['machineTranslationMatches'] = isset($data['machineTranslationMatches']) ? $data['machineTranslationMatches'] : null;
        $this->container['nonTranslatablesMatches'] = isset($data['nonTranslatablesMatches']) ? $data['nonTranslatablesMatches'] : null;
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

        return true;
    }


    /**
     * Gets available
     *
     * @return bool
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     *
     * @param bool $available available
     *
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets all
     *
     * @return \Memsource\Model\CountsDto
     */
    public function getAll()
    {
        return $this->container['all'];
    }

    /**
     * Sets all
     *
     * @param \Memsource\Model\CountsDto $all all
     *
     * @return $this
     */
    public function setAll($all)
    {
        $this->container['all'] = $all;

        return $this;
    }

    /**
     * Gets repetitions
     *
     * @return \Memsource\Model\CountsDto
     */
    public function getRepetitions()
    {
        return $this->container['repetitions'];
    }

    /**
     * Sets repetitions
     *
     * @param \Memsource\Model\CountsDto $repetitions repetitions
     *
     * @return $this
     */
    public function setRepetitions($repetitions)
    {
        $this->container['repetitions'] = $repetitions;

        return $this;
    }

    /**
     * Gets transMemoryMatches
     *
     * @return \Memsource\Model\MatchCounts101Dto
     */
    public function getTransMemoryMatches()
    {
        return $this->container['transMemoryMatches'];
    }

    /**
     * Sets transMemoryMatches
     *
     * @param \Memsource\Model\MatchCounts101Dto $transMemoryMatches transMemoryMatches
     *
     * @return $this
     */
    public function setTransMemoryMatches($transMemoryMatches)
    {
        $this->container['transMemoryMatches'] = $transMemoryMatches;

        return $this;
    }

    /**
     * Gets machineTranslationMatches
     *
     * @return \Memsource\Model\MatchCountsDto
     */
    public function getMachineTranslationMatches()
    {
        return $this->container['machineTranslationMatches'];
    }

    /**
     * Sets machineTranslationMatches
     *
     * @param \Memsource\Model\MatchCountsDto $machineTranslationMatches machineTranslationMatches
     *
     * @return $this
     */
    public function setMachineTranslationMatches($machineTranslationMatches)
    {
        $this->container['machineTranslationMatches'] = $machineTranslationMatches;

        return $this;
    }

    /**
     * Gets nonTranslatablesMatches
     *
     * @return \Memsource\Model\MatchCountsNTDto
     */
    public function getNonTranslatablesMatches()
    {
        return $this->container['nonTranslatablesMatches'];
    }

    /**
     * Sets nonTranslatablesMatches
     *
     * @param \Memsource\Model\MatchCountsNTDto $nonTranslatablesMatches nonTranslatablesMatches
     *
     * @return $this
     */
    public function setNonTranslatablesMatches($nonTranslatablesMatches)
    {
        $this->container['nonTranslatablesMatches'] = $nonTranslatablesMatches;

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



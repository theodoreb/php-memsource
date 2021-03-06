<?php
/**
 * MatchCountsDto
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
 * MatchCountsDto Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MatchCountsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MatchCountsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'match100' => '\Memsource\Model\CountsDto',
        'match95' => '\Memsource\Model\CountsDto',
        'match85' => '\Memsource\Model\CountsDto',
        'match75' => '\Memsource\Model\CountsDto',
        'match50' => '\Memsource\Model\CountsDto',
        'match0' => '\Memsource\Model\CountsDto'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'match100' => null,
        'match95' => null,
        'match85' => null,
        'match75' => null,
        'match50' => null,
        'match0' => null
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
        'match100' => 'match100',
        'match95' => 'match95',
        'match85' => 'match85',
        'match75' => 'match75',
        'match50' => 'match50',
        'match0' => 'match0'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'match100' => 'setMatch100',
        'match95' => 'setMatch95',
        'match85' => 'setMatch85',
        'match75' => 'setMatch75',
        'match50' => 'setMatch50',
        'match0' => 'setMatch0'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'match100' => 'getMatch100',
        'match95' => 'getMatch95',
        'match85' => 'getMatch85',
        'match75' => 'getMatch75',
        'match50' => 'getMatch50',
        'match0' => 'getMatch0'
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
        $this->container['match100'] = isset($data['match100']) ? $data['match100'] : null;
        $this->container['match95'] = isset($data['match95']) ? $data['match95'] : null;
        $this->container['match85'] = isset($data['match85']) ? $data['match85'] : null;
        $this->container['match75'] = isset($data['match75']) ? $data['match75'] : null;
        $this->container['match50'] = isset($data['match50']) ? $data['match50'] : null;
        $this->container['match0'] = isset($data['match0']) ? $data['match0'] : null;
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
     * Gets match100
     *
     * @return \Memsource\Model\CountsDto
     */
    public function getMatch100()
    {
        return $this->container['match100'];
    }

    /**
     * Sets match100
     *
     * @param \Memsource\Model\CountsDto $match100 match100
     *
     * @return $this
     */
    public function setMatch100($match100)
    {
        $this->container['match100'] = $match100;

        return $this;
    }

    /**
     * Gets match95
     *
     * @return \Memsource\Model\CountsDto
     */
    public function getMatch95()
    {
        return $this->container['match95'];
    }

    /**
     * Sets match95
     *
     * @param \Memsource\Model\CountsDto $match95 match95
     *
     * @return $this
     */
    public function setMatch95($match95)
    {
        $this->container['match95'] = $match95;

        return $this;
    }

    /**
     * Gets match85
     *
     * @return \Memsource\Model\CountsDto
     */
    public function getMatch85()
    {
        return $this->container['match85'];
    }

    /**
     * Sets match85
     *
     * @param \Memsource\Model\CountsDto $match85 match85
     *
     * @return $this
     */
    public function setMatch85($match85)
    {
        $this->container['match85'] = $match85;

        return $this;
    }

    /**
     * Gets match75
     *
     * @return \Memsource\Model\CountsDto
     */
    public function getMatch75()
    {
        return $this->container['match75'];
    }

    /**
     * Sets match75
     *
     * @param \Memsource\Model\CountsDto $match75 match75
     *
     * @return $this
     */
    public function setMatch75($match75)
    {
        $this->container['match75'] = $match75;

        return $this;
    }

    /**
     * Gets match50
     *
     * @return \Memsource\Model\CountsDto
     */
    public function getMatch50()
    {
        return $this->container['match50'];
    }

    /**
     * Sets match50
     *
     * @param \Memsource\Model\CountsDto $match50 match50
     *
     * @return $this
     */
    public function setMatch50($match50)
    {
        $this->container['match50'] = $match50;

        return $this;
    }

    /**
     * Gets match0
     *
     * @return \Memsource\Model\CountsDto
     */
    public function getMatch0()
    {
        return $this->container['match0'];
    }

    /**
     * Sets match0
     *
     * @param \Memsource\Model\CountsDto $match0 match0
     *
     * @return $this
     */
    public function setMatch0($match0)
    {
        $this->container['match0'] = $match0;

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



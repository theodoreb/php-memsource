<?php
/**
 * CountsDto
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
 * CountsDto Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CountsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CountsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'segments' => 'double',
        'words' => 'double',
        'characters' => 'double',
        'normalizedPages' => 'double',
        'percent' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'segments' => 'double',
        'words' => 'double',
        'characters' => 'double',
        'normalizedPages' => 'double',
        'percent' => 'double'
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
        'segments' => 'segments',
        'words' => 'words',
        'characters' => 'characters',
        'normalizedPages' => 'normalizedPages',
        'percent' => 'percent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'segments' => 'setSegments',
        'words' => 'setWords',
        'characters' => 'setCharacters',
        'normalizedPages' => 'setNormalizedPages',
        'percent' => 'setPercent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'segments' => 'getSegments',
        'words' => 'getWords',
        'characters' => 'getCharacters',
        'normalizedPages' => 'getNormalizedPages',
        'percent' => 'getPercent'
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
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
        $this->container['words'] = isset($data['words']) ? $data['words'] : null;
        $this->container['characters'] = isset($data['characters']) ? $data['characters'] : null;
        $this->container['normalizedPages'] = isset($data['normalizedPages']) ? $data['normalizedPages'] : null;
        $this->container['percent'] = isset($data['percent']) ? $data['percent'] : null;
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
     * Gets segments
     *
     * @return double
     */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
     * Sets segments
     *
     * @param double $segments segments
     *
     * @return $this
     */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;

        return $this;
    }

    /**
     * Gets words
     *
     * @return double
     */
    public function getWords()
    {
        return $this->container['words'];
    }

    /**
     * Sets words
     *
     * @param double $words words
     *
     * @return $this
     */
    public function setWords($words)
    {
        $this->container['words'] = $words;

        return $this;
    }

    /**
     * Gets characters
     *
     * @return double
     */
    public function getCharacters()
    {
        return $this->container['characters'];
    }

    /**
     * Sets characters
     *
     * @param double $characters characters
     *
     * @return $this
     */
    public function setCharacters($characters)
    {
        $this->container['characters'] = $characters;

        return $this;
    }

    /**
     * Gets normalizedPages
     *
     * @return double
     */
    public function getNormalizedPages()
    {
        return $this->container['normalizedPages'];
    }

    /**
     * Sets normalizedPages
     *
     * @param double $normalizedPages normalizedPages
     *
     * @return $this
     */
    public function setNormalizedPages($normalizedPages)
    {
        $this->container['normalizedPages'] = $normalizedPages;

        return $this;
    }

    /**
     * Gets percent
     *
     * @return double
     */
    public function getPercent()
    {
        return $this->container['percent'];
    }

    /**
     * Sets percent
     *
     * @param double $percent percent
     *
     * @return $this
     */
    public function setPercent($percent)
    {
        $this->container['percent'] = $percent;

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



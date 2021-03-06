<?php
/**
 * TMMatchSettingsDto
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
 * TMMatchSettingsDto Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TMMatchSettingsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TMMatchSettingsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contextType' => 'string',
        'prevOrNextSegment' => 'bool',
        'penalizeMultiContextMatch' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contextType' => null,
        'prevOrNextSegment' => null,
        'penalizeMultiContextMatch' => null
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
        'contextType' => 'contextType',
        'prevOrNextSegment' => 'prevOrNextSegment',
        'penalizeMultiContextMatch' => 'penalizeMultiContextMatch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contextType' => 'setContextType',
        'prevOrNextSegment' => 'setPrevOrNextSegment',
        'penalizeMultiContextMatch' => 'setPenalizeMultiContextMatch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contextType' => 'getContextType',
        'prevOrNextSegment' => 'getPrevOrNextSegment',
        'penalizeMultiContextMatch' => 'getPenalizeMultiContextMatch'
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

    const CONTEXT_TYPE_AUTO = 'AUTO';
    const CONTEXT_TYPE_PREV_AND_NEXT_SEGMENT = 'PREV_AND_NEXT_SEGMENT';
    const CONTEXT_TYPE_SEGMENT_KEY = 'SEGMENT_KEY';
    const CONTEXT_TYPE_NO_CONTEXT = 'NO_CONTEXT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContextTypeAllowableValues()
    {
        return [
            self::CONTEXT_TYPE_AUTO,
            self::CONTEXT_TYPE_PREV_AND_NEXT_SEGMENT,
            self::CONTEXT_TYPE_SEGMENT_KEY,
            self::CONTEXT_TYPE_NO_CONTEXT,
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
        $this->container['contextType'] = isset($data['contextType']) ? $data['contextType'] : null;
        $this->container['prevOrNextSegment'] = isset($data['prevOrNextSegment']) ? $data['prevOrNextSegment'] : null;
        $this->container['penalizeMultiContextMatch'] = isset($data['penalizeMultiContextMatch']) ? $data['penalizeMultiContextMatch'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getContextTypeAllowableValues();
        if (!in_array($this->container['contextType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'contextType', must be one of '%s'",
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

        $allowedValues = $this->getContextTypeAllowableValues();
        if (!in_array($this->container['contextType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets contextType
     *
     * @return string
     */
    public function getContextType()
    {
        return $this->container['contextType'];
    }

    /**
     * Sets contextType
     *
     * @param string $contextType default: PREV_AND_NEXT_SEGMENT
     *
     * @return $this
     */
    public function setContextType($contextType)
    {
        $allowedValues = $this->getContextTypeAllowableValues();
        if (!is_null($contextType) && !in_array($contextType, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'contextType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['contextType'] = $contextType;

        return $this;
    }

    /**
     * Gets prevOrNextSegment
     *
     * @return bool
     */
    public function getPrevOrNextSegment()
    {
        return $this->container['prevOrNextSegment'];
    }

    /**
     * Sets prevOrNextSegment
     *
     * @param bool $prevOrNextSegment prevOrNextSegment
     *
     * @return $this
     */
    public function setPrevOrNextSegment($prevOrNextSegment)
    {
        $this->container['prevOrNextSegment'] = $prevOrNextSegment;

        return $this;
    }

    /**
     * Gets penalizeMultiContextMatch
     *
     * @return bool
     */
    public function getPenalizeMultiContextMatch()
    {
        return $this->container['penalizeMultiContextMatch'];
    }

    /**
     * Sets penalizeMultiContextMatch
     *
     * @param bool $penalizeMultiContextMatch penalizeMultiContextMatch
     *
     * @return $this
     */
    public function setPenalizeMultiContextMatch($penalizeMultiContextMatch)
    {
        $this->container['penalizeMultiContextMatch'] = $penalizeMultiContextMatch;

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



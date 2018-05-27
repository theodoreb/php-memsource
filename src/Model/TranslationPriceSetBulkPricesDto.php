<?php
/**
 * TranslationPriceSetBulkPricesDto
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
 * TranslationPriceSetBulkPricesDto Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TranslationPriceSetBulkPricesDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TranslationPriceSetBulkPricesDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sourceLanguages' => 'string[]',
        'targetLanguages' => 'string[]',
        'price' => 'double',
        'workflowSteps' => '\Memsource\Model\IdReference[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sourceLanguages' => null,
        'targetLanguages' => null,
        'price' => 'double',
        'workflowSteps' => null
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
        'sourceLanguages' => 'sourceLanguages',
        'targetLanguages' => 'targetLanguages',
        'price' => 'price',
        'workflowSteps' => 'workflowSteps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sourceLanguages' => 'setSourceLanguages',
        'targetLanguages' => 'setTargetLanguages',
        'price' => 'setPrice',
        'workflowSteps' => 'setWorkflowSteps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sourceLanguages' => 'getSourceLanguages',
        'targetLanguages' => 'getTargetLanguages',
        'price' => 'getPrice',
        'workflowSteps' => 'getWorkflowSteps'
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
        $this->container['sourceLanguages'] = isset($data['sourceLanguages']) ? $data['sourceLanguages'] : null;
        $this->container['targetLanguages'] = isset($data['targetLanguages']) ? $data['targetLanguages'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['workflowSteps'] = isset($data['workflowSteps']) ? $data['workflowSteps'] : null;
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
     * Gets sourceLanguages
     *
     * @return string[]
     */
    public function getSourceLanguages()
    {
        return $this->container['sourceLanguages'];
    }

    /**
     * Sets sourceLanguages
     *
     * @param string[] $sourceLanguages sourceLanguages
     *
     * @return $this
     */
    public function setSourceLanguages($sourceLanguages)
    {
        $this->container['sourceLanguages'] = $sourceLanguages;

        return $this;
    }

    /**
     * Gets targetLanguages
     *
     * @return string[]
     */
    public function getTargetLanguages()
    {
        return $this->container['targetLanguages'];
    }

    /**
     * Sets targetLanguages
     *
     * @param string[] $targetLanguages targetLanguages
     *
     * @return $this
     */
    public function setTargetLanguages($targetLanguages)
    {
        $this->container['targetLanguages'] = $targetLanguages;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets workflowSteps
     *
     * @return \Memsource\Model\IdReference[]
     */
    public function getWorkflowSteps()
    {
        return $this->container['workflowSteps'];
    }

    /**
     * Sets workflowSteps
     *
     * @param \Memsource\Model\IdReference[] $workflowSteps workflowSteps
     *
     * @return $this
     */
    public function setWorkflowSteps($workflowSteps)
    {
        $this->container['workflowSteps'] = $workflowSteps;

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



<?php
/**
 * ProjectTermBaseDto
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
 * ProjectTermBaseDto Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectTermBaseDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectTermBaseDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'targetLocale' => 'string',
        'workflowStep' => '\Memsource\Model\WorkflowStepReference',
        'readMode' => 'bool',
        'writeMode' => 'bool',
        'termBase' => '\Memsource\Model\TermBaseDto',
        'qualityAssurance' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'targetLocale' => null,
        'workflowStep' => null,
        'readMode' => null,
        'writeMode' => null,
        'termBase' => null,
        'qualityAssurance' => null
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
        'targetLocale' => 'targetLocale',
        'workflowStep' => 'workflowStep',
        'readMode' => 'readMode',
        'writeMode' => 'writeMode',
        'termBase' => 'termBase',
        'qualityAssurance' => 'qualityAssurance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'targetLocale' => 'setTargetLocale',
        'workflowStep' => 'setWorkflowStep',
        'readMode' => 'setReadMode',
        'writeMode' => 'setWriteMode',
        'termBase' => 'setTermBase',
        'qualityAssurance' => 'setQualityAssurance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'targetLocale' => 'getTargetLocale',
        'workflowStep' => 'getWorkflowStep',
        'readMode' => 'getReadMode',
        'writeMode' => 'getWriteMode',
        'termBase' => 'getTermBase',
        'qualityAssurance' => 'getQualityAssurance'
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
        $this->container['targetLocale'] = isset($data['targetLocale']) ? $data['targetLocale'] : null;
        $this->container['workflowStep'] = isset($data['workflowStep']) ? $data['workflowStep'] : null;
        $this->container['readMode'] = isset($data['readMode']) ? $data['readMode'] : null;
        $this->container['writeMode'] = isset($data['writeMode']) ? $data['writeMode'] : null;
        $this->container['termBase'] = isset($data['termBase']) ? $data['termBase'] : null;
        $this->container['qualityAssurance'] = isset($data['qualityAssurance']) ? $data['qualityAssurance'] : null;
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
     * Gets targetLocale
     *
     * @return string
     */
    public function getTargetLocale()
    {
        return $this->container['targetLocale'];
    }

    /**
     * Sets targetLocale
     *
     * @param string $targetLocale targetLocale
     *
     * @return $this
     */
    public function setTargetLocale($targetLocale)
    {
        $this->container['targetLocale'] = $targetLocale;

        return $this;
    }

    /**
     * Gets workflowStep
     *
     * @return \Memsource\Model\WorkflowStepReference
     */
    public function getWorkflowStep()
    {
        return $this->container['workflowStep'];
    }

    /**
     * Sets workflowStep
     *
     * @param \Memsource\Model\WorkflowStepReference $workflowStep workflowStep
     *
     * @return $this
     */
    public function setWorkflowStep($workflowStep)
    {
        $this->container['workflowStep'] = $workflowStep;

        return $this;
    }

    /**
     * Gets readMode
     *
     * @return bool
     */
    public function getReadMode()
    {
        return $this->container['readMode'];
    }

    /**
     * Sets readMode
     *
     * @param bool $readMode readMode
     *
     * @return $this
     */
    public function setReadMode($readMode)
    {
        $this->container['readMode'] = $readMode;

        return $this;
    }

    /**
     * Gets writeMode
     *
     * @return bool
     */
    public function getWriteMode()
    {
        return $this->container['writeMode'];
    }

    /**
     * Sets writeMode
     *
     * @param bool $writeMode writeMode
     *
     * @return $this
     */
    public function setWriteMode($writeMode)
    {
        $this->container['writeMode'] = $writeMode;

        return $this;
    }

    /**
     * Gets termBase
     *
     * @return \Memsource\Model\TermBaseDto
     */
    public function getTermBase()
    {
        return $this->container['termBase'];
    }

    /**
     * Sets termBase
     *
     * @param \Memsource\Model\TermBaseDto $termBase termBase
     *
     * @return $this
     */
    public function setTermBase($termBase)
    {
        $this->container['termBase'] = $termBase;

        return $this;
    }

    /**
     * Gets qualityAssurance
     *
     * @return bool
     */
    public function getQualityAssurance()
    {
        return $this->container['qualityAssurance'];
    }

    /**
     * Sets qualityAssurance
     *
     * @param bool $qualityAssurance qualityAssurance
     *
     * @return $this
     */
    public function setQualityAssurance($qualityAssurance)
    {
        $this->container['qualityAssurance'] = $qualityAssurance;

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



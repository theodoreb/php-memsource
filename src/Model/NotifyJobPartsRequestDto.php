<?php
/**
 * NotifyJobPartsRequestDto
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
 * NotifyJobPartsRequestDto Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotifyJobPartsRequestDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NotifyJobPartsRequestDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'jobs' => '\Memsource\Model\UidReference[]',
        'emailTemplate' => '\Memsource\Model\IdReference',
        'cc' => 'string[]',
        'bcc' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'jobs' => null,
        'emailTemplate' => null,
        'cc' => null,
        'bcc' => null
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
        'jobs' => 'jobs',
        'emailTemplate' => 'emailTemplate',
        'cc' => 'cc',
        'bcc' => 'bcc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'jobs' => 'setJobs',
        'emailTemplate' => 'setEmailTemplate',
        'cc' => 'setCc',
        'bcc' => 'setBcc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'jobs' => 'getJobs',
        'emailTemplate' => 'getEmailTemplate',
        'cc' => 'getCc',
        'bcc' => 'getBcc'
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
        $this->container['jobs'] = isset($data['jobs']) ? $data['jobs'] : null;
        $this->container['emailTemplate'] = isset($data['emailTemplate']) ? $data['emailTemplate'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['bcc'] = isset($data['bcc']) ? $data['bcc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['emailTemplate'] === null) {
            $invalidProperties[] = "'emailTemplate' can't be null";
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

        if ($this->container['emailTemplate'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets jobs
     *
     * @return \Memsource\Model\UidReference[]
     */
    public function getJobs()
    {
        return $this->container['jobs'];
    }

    /**
     * Sets jobs
     *
     * @param \Memsource\Model\UidReference[] $jobs jobs
     *
     * @return $this
     */
    public function setJobs($jobs)
    {
        $this->container['jobs'] = $jobs;

        return $this;
    }

    /**
     * Gets emailTemplate
     *
     * @return \Memsource\Model\IdReference
     */
    public function getEmailTemplate()
    {
        return $this->container['emailTemplate'];
    }

    /**
     * Sets emailTemplate
     *
     * @param \Memsource\Model\IdReference $emailTemplate emailTemplate
     *
     * @return $this
     */
    public function setEmailTemplate($emailTemplate)
    {
        $this->container['emailTemplate'] = $emailTemplate;

        return $this;
    }

    /**
     * Gets cc
     *
     * @return string[]
     */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
     * Sets cc
     *
     * @param string[] $cc cc
     *
     * @return $this
     */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;

        return $this;
    }

    /**
     * Gets bcc
     *
     * @return string[]
     */
    public function getBcc()
    {
        return $this->container['bcc'];
    }

    /**
     * Sets bcc
     *
     * @param string[] $bcc bcc
     *
     * @return $this
     */
    public function setBcc($bcc)
    {
        $this->container['bcc'] = $bcc;

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



<?php
/**
 * JobPartReference
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
 * JobPartReference Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JobPartReference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JobPartReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uid' => 'string',
        'status' => 'string',
        'providers' => '\Memsource\Model\ProviderReference[]',
        'targetLang' => 'string',
        'workflowLevel' => 'int',
        'workflowStep' => '\Memsource\Model\WorkflowStepReference',
        'filename' => 'string',
        'dateDue' => '\DateTime',
        'imported' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'uid' => null,
        'status' => null,
        'providers' => null,
        'targetLang' => null,
        'workflowLevel' => 'int32',
        'workflowStep' => null,
        'filename' => null,
        'dateDue' => 'date-time',
        'imported' => null
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
        'uid' => 'uid',
        'status' => 'status',
        'providers' => 'providers',
        'targetLang' => 'targetLang',
        'workflowLevel' => 'workflowLevel',
        'workflowStep' => 'workflowStep',
        'filename' => 'filename',
        'dateDue' => 'dateDue',
        'imported' => 'imported'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uid' => 'setUid',
        'status' => 'setStatus',
        'providers' => 'setProviders',
        'targetLang' => 'setTargetLang',
        'workflowLevel' => 'setWorkflowLevel',
        'workflowStep' => 'setWorkflowStep',
        'filename' => 'setFilename',
        'dateDue' => 'setDateDue',
        'imported' => 'setImported'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uid' => 'getUid',
        'status' => 'getStatus',
        'providers' => 'getProviders',
        'targetLang' => 'getTargetLang',
        'workflowLevel' => 'getWorkflowLevel',
        'workflowStep' => 'getWorkflowStep',
        'filename' => 'getFilename',
        'dateDue' => 'getDateDue',
        'imported' => 'getImported'
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

    const STATUS__NEW = 'NEW';
    const STATUS_ACCEPTED = 'ACCEPTED';
    const STATUS_DECLINED = 'DECLINED';
    const STATUS_REJECTED = 'REJECTED';
    const STATUS_DELIVERED = 'DELIVERED';
    const STATUS_EMAILED = 'EMAILED';
    const STATUS_COMPLETED = 'COMPLETED';
    const STATUS_CANCELLED = 'CANCELLED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS__NEW,
            self::STATUS_ACCEPTED,
            self::STATUS_DECLINED,
            self::STATUS_REJECTED,
            self::STATUS_DELIVERED,
            self::STATUS_EMAILED,
            self::STATUS_COMPLETED,
            self::STATUS_CANCELLED,
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
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['providers'] = isset($data['providers']) ? $data['providers'] : null;
        $this->container['targetLang'] = isset($data['targetLang']) ? $data['targetLang'] : null;
        $this->container['workflowLevel'] = isset($data['workflowLevel']) ? $data['workflowLevel'] : null;
        $this->container['workflowStep'] = isset($data['workflowStep']) ? $data['workflowStep'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['dateDue'] = isset($data['dateDue']) ? $data['dateDue'] : null;
        $this->container['imported'] = isset($data['imported']) ? $data['imported'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string $uid uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets providers
     *
     * @return \Memsource\Model\ProviderReference[]
     */
    public function getProviders()
    {
        return $this->container['providers'];
    }

    /**
     * Sets providers
     *
     * @param \Memsource\Model\ProviderReference[] $providers providers
     *
     * @return $this
     */
    public function setProviders($providers)
    {
        $this->container['providers'] = $providers;

        return $this;
    }

    /**
     * Gets targetLang
     *
     * @return string
     */
    public function getTargetLang()
    {
        return $this->container['targetLang'];
    }

    /**
     * Sets targetLang
     *
     * @param string $targetLang targetLang
     *
     * @return $this
     */
    public function setTargetLang($targetLang)
    {
        $this->container['targetLang'] = $targetLang;

        return $this;
    }

    /**
     * Gets workflowLevel
     *
     * @return int
     */
    public function getWorkflowLevel()
    {
        return $this->container['workflowLevel'];
    }

    /**
     * Sets workflowLevel
     *
     * @param int $workflowLevel workflowLevel
     *
     * @return $this
     */
    public function setWorkflowLevel($workflowLevel)
    {
        $this->container['workflowLevel'] = $workflowLevel;

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
     * Gets filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string $filename filename
     *
     * @return $this
     */
    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets dateDue
     *
     * @return \DateTime
     */
    public function getDateDue()
    {
        return $this->container['dateDue'];
    }

    /**
     * Sets dateDue
     *
     * @param \DateTime $dateDue dateDue
     *
     * @return $this
     */
    public function setDateDue($dateDue)
    {
        $this->container['dateDue'] = $dateDue;

        return $this;
    }

    /**
     * Gets imported
     *
     * @return bool
     */
    public function getImported()
    {
        return $this->container['imported'];
    }

    /**
     * Sets imported
     *
     * @param bool $imported imported
     *
     * @return $this
     */
    public function setImported($imported)
    {
        $this->container['imported'] = $imported;

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



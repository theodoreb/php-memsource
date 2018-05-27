<?php
/**
 * CreateProjectFromTemplateDto
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
 * CreateProjectFromTemplateDto Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateProjectFromTemplateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateProjectFromTemplateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'sourceLang' => 'string',
        'targetLangs' => 'string[]',
        'workflowSteps' => '\Memsource\Model\IdReference[]',
        'dateDue' => '\DateTime',
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
        'workflowSteps' => null,
        'dateDue' => 'date-time',
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
        'workflowSteps' => 'workflowSteps',
        'dateDue' => 'dateDue',
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
        'workflowSteps' => 'setWorkflowSteps',
        'dateDue' => 'setDateDue',
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
        'workflowSteps' => 'getWorkflowSteps',
        'dateDue' => 'getDateDue',
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
        $this->container['workflowSteps'] = isset($data['workflowSteps']) ? $data['workflowSteps'] : null;
        $this->container['dateDue'] = isset($data['dateDue']) ? $data['dateDue'] : null;
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
            throw new \InvalidArgumentException('invalid length for $name when calling CreateProjectFromTemplateDto., must be smaller than or equal to 255.');
        }
        if ((strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CreateProjectFromTemplateDto., must be bigger than or equal to 0.');
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


<?php
/**
 * ExportByQueryDto
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
 * ExportByQueryDto Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExportByQueryDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExportByQueryDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'exportTargetLangs' => 'string[]',
        'queries' => 'string[]',
        'queryLangs' => 'string[]',
        'createdAtMin' => '\DateTime',
        'createdAtMax' => '\DateTime',
        'modifiedAtMin' => '\DateTime',
        'modifiedAtMax' => '\DateTime',
        'createdBy' => '\Memsource\Model\IdReference',
        'modifiedBy' => '\Memsource\Model\IdReference',
        'filename' => 'string',
        'project' => '\Memsource\Model\UidReference',
        'callbackUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'exportTargetLangs' => null,
        'queries' => null,
        'queryLangs' => null,
        'createdAtMin' => 'date-time',
        'createdAtMax' => 'date-time',
        'modifiedAtMin' => 'date-time',
        'modifiedAtMax' => 'date-time',
        'createdBy' => null,
        'modifiedBy' => null,
        'filename' => null,
        'project' => null,
        'callbackUrl' => null
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
        'exportTargetLangs' => 'exportTargetLangs',
        'queries' => 'queries',
        'queryLangs' => 'queryLangs',
        'createdAtMin' => 'createdAtMin',
        'createdAtMax' => 'createdAtMax',
        'modifiedAtMin' => 'modifiedAtMin',
        'modifiedAtMax' => 'modifiedAtMax',
        'createdBy' => 'createdBy',
        'modifiedBy' => 'modifiedBy',
        'filename' => 'filename',
        'project' => 'project',
        'callbackUrl' => 'callbackUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exportTargetLangs' => 'setExportTargetLangs',
        'queries' => 'setQueries',
        'queryLangs' => 'setQueryLangs',
        'createdAtMin' => 'setCreatedAtMin',
        'createdAtMax' => 'setCreatedAtMax',
        'modifiedAtMin' => 'setModifiedAtMin',
        'modifiedAtMax' => 'setModifiedAtMax',
        'createdBy' => 'setCreatedBy',
        'modifiedBy' => 'setModifiedBy',
        'filename' => 'setFilename',
        'project' => 'setProject',
        'callbackUrl' => 'setCallbackUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exportTargetLangs' => 'getExportTargetLangs',
        'queries' => 'getQueries',
        'queryLangs' => 'getQueryLangs',
        'createdAtMin' => 'getCreatedAtMin',
        'createdAtMax' => 'getCreatedAtMax',
        'modifiedAtMin' => 'getModifiedAtMin',
        'modifiedAtMax' => 'getModifiedAtMax',
        'createdBy' => 'getCreatedBy',
        'modifiedBy' => 'getModifiedBy',
        'filename' => 'getFilename',
        'project' => 'getProject',
        'callbackUrl' => 'getCallbackUrl'
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
        $this->container['exportTargetLangs'] = isset($data['exportTargetLangs']) ? $data['exportTargetLangs'] : null;
        $this->container['queries'] = isset($data['queries']) ? $data['queries'] : null;
        $this->container['queryLangs'] = isset($data['queryLangs']) ? $data['queryLangs'] : null;
        $this->container['createdAtMin'] = isset($data['createdAtMin']) ? $data['createdAtMin'] : null;
        $this->container['createdAtMax'] = isset($data['createdAtMax']) ? $data['createdAtMax'] : null;
        $this->container['modifiedAtMin'] = isset($data['modifiedAtMin']) ? $data['modifiedAtMin'] : null;
        $this->container['modifiedAtMax'] = isset($data['modifiedAtMax']) ? $data['modifiedAtMax'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['callbackUrl'] = isset($data['callbackUrl']) ? $data['callbackUrl'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['exportTargetLangs'] === null) {
            $invalidProperties[] = "'exportTargetLangs' can't be null";
        }
        if ($this->container['queries'] === null) {
            $invalidProperties[] = "'queries' can't be null";
        }
        if ($this->container['queryLangs'] === null) {
            $invalidProperties[] = "'queryLangs' can't be null";
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

        if ($this->container['exportTargetLangs'] === null) {
            return false;
        }
        if ($this->container['queries'] === null) {
            return false;
        }
        if ($this->container['queryLangs'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets exportTargetLangs
     *
     * @return string[]
     */
    public function getExportTargetLangs()
    {
        return $this->container['exportTargetLangs'];
    }

    /**
     * Sets exportTargetLangs
     *
     * @param string[] $exportTargetLangs exportTargetLangs
     *
     * @return $this
     */
    public function setExportTargetLangs($exportTargetLangs)
    {
        $this->container['exportTargetLangs'] = $exportTargetLangs;

        return $this;
    }

    /**
     * Gets queries
     *
     * @return string[]
     */
    public function getQueries()
    {
        return $this->container['queries'];
    }

    /**
     * Sets queries
     *
     * @param string[] $queries queries
     *
     * @return $this
     */
    public function setQueries($queries)
    {
        $this->container['queries'] = $queries;

        return $this;
    }

    /**
     * Gets queryLangs
     *
     * @return string[]
     */
    public function getQueryLangs()
    {
        return $this->container['queryLangs'];
    }

    /**
     * Sets queryLangs
     *
     * @param string[] $queryLangs queryLangs
     *
     * @return $this
     */
    public function setQueryLangs($queryLangs)
    {
        $this->container['queryLangs'] = $queryLangs;

        return $this;
    }

    /**
     * Gets createdAtMin
     *
     * @return \DateTime
     */
    public function getCreatedAtMin()
    {
        return $this->container['createdAtMin'];
    }

    /**
     * Sets createdAtMin
     *
     * @param \DateTime $createdAtMin createdAtMin
     *
     * @return $this
     */
    public function setCreatedAtMin($createdAtMin)
    {
        $this->container['createdAtMin'] = $createdAtMin;

        return $this;
    }

    /**
     * Gets createdAtMax
     *
     * @return \DateTime
     */
    public function getCreatedAtMax()
    {
        return $this->container['createdAtMax'];
    }

    /**
     * Sets createdAtMax
     *
     * @param \DateTime $createdAtMax createdAtMax
     *
     * @return $this
     */
    public function setCreatedAtMax($createdAtMax)
    {
        $this->container['createdAtMax'] = $createdAtMax;

        return $this;
    }

    /**
     * Gets modifiedAtMin
     *
     * @return \DateTime
     */
    public function getModifiedAtMin()
    {
        return $this->container['modifiedAtMin'];
    }

    /**
     * Sets modifiedAtMin
     *
     * @param \DateTime $modifiedAtMin modifiedAtMin
     *
     * @return $this
     */
    public function setModifiedAtMin($modifiedAtMin)
    {
        $this->container['modifiedAtMin'] = $modifiedAtMin;

        return $this;
    }

    /**
     * Gets modifiedAtMax
     *
     * @return \DateTime
     */
    public function getModifiedAtMax()
    {
        return $this->container['modifiedAtMax'];
    }

    /**
     * Sets modifiedAtMax
     *
     * @param \DateTime $modifiedAtMax modifiedAtMax
     *
     * @return $this
     */
    public function setModifiedAtMax($modifiedAtMax)
    {
        $this->container['modifiedAtMax'] = $modifiedAtMax;

        return $this;
    }

    /**
     * Gets createdBy
     *
     * @return \Memsource\Model\IdReference
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param \Memsource\Model\IdReference $createdBy createdBy
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

        return $this;
    }

    /**
     * Gets modifiedBy
     *
     * @return \Memsource\Model\IdReference
     */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
     * Sets modifiedBy
     *
     * @param \Memsource\Model\IdReference $modifiedBy modifiedBy
     *
     * @return $this
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;

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
     * Gets project
     *
     * @return \Memsource\Model\UidReference
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \Memsource\Model\UidReference $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets callbackUrl
     *
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->container['callbackUrl'];
    }

    /**
     * Sets callbackUrl
     *
     * @param string $callbackUrl callbackUrl
     *
     * @return $this
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->container['callbackUrl'] = $callbackUrl;

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



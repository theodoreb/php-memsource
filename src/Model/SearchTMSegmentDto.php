<?php
/**
 * SearchTMSegmentDto
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
 * SearchTMSegmentDto Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchTMSegmentDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SearchTMSegmentDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'text' => 'string',
        'lang' => 'string',
        'rtl' => 'bool',
        'modifiedAt' => 'int',
        'createdAt' => 'int',
        'modifiedBy' => '\Memsource\Model\UserReference',
        'createdBy' => '\Memsource\Model\UserReference',
        'filename' => 'string',
        'project' => '\Memsource\Model\SearchTMProjectDto',
        'client' => '\Memsource\Model\SearchTMClientDto',
        'domain' => '\Memsource\Model\SearchTMDomainDto',
        'subDomain' => '\Memsource\Model\SearchTMSubDomainDto',
        'tagMetadata' => '\Memsource\Model\TagMetadata[]',
        'previousSegment' => 'string',
        'nextSegment' => 'string',
        'key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'text' => null,
        'lang' => null,
        'rtl' => null,
        'modifiedAt' => 'int64',
        'createdAt' => 'int64',
        'modifiedBy' => null,
        'createdBy' => null,
        'filename' => null,
        'project' => null,
        'client' => null,
        'domain' => null,
        'subDomain' => null,
        'tagMetadata' => null,
        'previousSegment' => null,
        'nextSegment' => null,
        'key' => null
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
        'id' => 'id',
        'text' => 'text',
        'lang' => 'lang',
        'rtl' => 'rtl',
        'modifiedAt' => 'modifiedAt',
        'createdAt' => 'createdAt',
        'modifiedBy' => 'modifiedBy',
        'createdBy' => 'createdBy',
        'filename' => 'filename',
        'project' => 'project',
        'client' => 'client',
        'domain' => 'domain',
        'subDomain' => 'subDomain',
        'tagMetadata' => 'tagMetadata',
        'previousSegment' => 'previousSegment',
        'nextSegment' => 'nextSegment',
        'key' => 'key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'text' => 'setText',
        'lang' => 'setLang',
        'rtl' => 'setRtl',
        'modifiedAt' => 'setModifiedAt',
        'createdAt' => 'setCreatedAt',
        'modifiedBy' => 'setModifiedBy',
        'createdBy' => 'setCreatedBy',
        'filename' => 'setFilename',
        'project' => 'setProject',
        'client' => 'setClient',
        'domain' => 'setDomain',
        'subDomain' => 'setSubDomain',
        'tagMetadata' => 'setTagMetadata',
        'previousSegment' => 'setPreviousSegment',
        'nextSegment' => 'setNextSegment',
        'key' => 'setKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'text' => 'getText',
        'lang' => 'getLang',
        'rtl' => 'getRtl',
        'modifiedAt' => 'getModifiedAt',
        'createdAt' => 'getCreatedAt',
        'modifiedBy' => 'getModifiedBy',
        'createdBy' => 'getCreatedBy',
        'filename' => 'getFilename',
        'project' => 'getProject',
        'client' => 'getClient',
        'domain' => 'getDomain',
        'subDomain' => 'getSubDomain',
        'tagMetadata' => 'getTagMetadata',
        'previousSegment' => 'getPreviousSegment',
        'nextSegment' => 'getNextSegment',
        'key' => 'getKey'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
        $this->container['rtl'] = isset($data['rtl']) ? $data['rtl'] : null;
        $this->container['modifiedAt'] = isset($data['modifiedAt']) ? $data['modifiedAt'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['subDomain'] = isset($data['subDomain']) ? $data['subDomain'] : null;
        $this->container['tagMetadata'] = isset($data['tagMetadata']) ? $data['tagMetadata'] : null;
        $this->container['previousSegment'] = isset($data['previousSegment']) ? $data['previousSegment'] : null;
        $this->container['nextSegment'] = isset($data['nextSegment']) ? $data['nextSegment'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param string $lang lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;

        return $this;
    }

    /**
     * Gets rtl
     *
     * @return bool
     */
    public function getRtl()
    {
        return $this->container['rtl'];
    }

    /**
     * Sets rtl
     *
     * @param bool $rtl rtl
     *
     * @return $this
     */
    public function setRtl($rtl)
    {
        $this->container['rtl'] = $rtl;

        return $this;
    }

    /**
     * Gets modifiedAt
     *
     * @return int
     */
    public function getModifiedAt()
    {
        return $this->container['modifiedAt'];
    }

    /**
     * Sets modifiedAt
     *
     * @param int $modifiedAt modifiedAt
     *
     * @return $this
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->container['modifiedAt'] = $modifiedAt;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param int $createdAt createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets modifiedBy
     *
     * @return \Memsource\Model\UserReference
     */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
     * Sets modifiedBy
     *
     * @param \Memsource\Model\UserReference $modifiedBy modifiedBy
     *
     * @return $this
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;

        return $this;
    }

    /**
     * Gets createdBy
     *
     * @return \Memsource\Model\UserReference
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param \Memsource\Model\UserReference $createdBy createdBy
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

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
     * @return \Memsource\Model\SearchTMProjectDto
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \Memsource\Model\SearchTMProjectDto $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets client
     *
     * @return \Memsource\Model\SearchTMClientDto
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param \Memsource\Model\SearchTMClientDto $client client
     *
     * @return $this
     */
    public function setClient($client)
    {
        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return \Memsource\Model\SearchTMDomainDto
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param \Memsource\Model\SearchTMDomainDto $domain domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets subDomain
     *
     * @return \Memsource\Model\SearchTMSubDomainDto
     */
    public function getSubDomain()
    {
        return $this->container['subDomain'];
    }

    /**
     * Sets subDomain
     *
     * @param \Memsource\Model\SearchTMSubDomainDto $subDomain subDomain
     *
     * @return $this
     */
    public function setSubDomain($subDomain)
    {
        $this->container['subDomain'] = $subDomain;

        return $this;
    }

    /**
     * Gets tagMetadata
     *
     * @return \Memsource\Model\TagMetadata[]
     */
    public function getTagMetadata()
    {
        return $this->container['tagMetadata'];
    }

    /**
     * Sets tagMetadata
     *
     * @param \Memsource\Model\TagMetadata[] $tagMetadata tagMetadata
     *
     * @return $this
     */
    public function setTagMetadata($tagMetadata)
    {
        $this->container['tagMetadata'] = $tagMetadata;

        return $this;
    }

    /**
     * Gets previousSegment
     *
     * @return string
     */
    public function getPreviousSegment()
    {
        return $this->container['previousSegment'];
    }

    /**
     * Sets previousSegment
     *
     * @param string $previousSegment previousSegment
     *
     * @return $this
     */
    public function setPreviousSegment($previousSegment)
    {
        $this->container['previousSegment'] = $previousSegment;

        return $this;
    }

    /**
     * Gets nextSegment
     *
     * @return string
     */
    public function getNextSegment()
    {
        return $this->container['nextSegment'];
    }

    /**
     * Sets nextSegment
     *
     * @param string $nextSegment nextSegment
     *
     * @return $this
     */
    public function setNextSegment($nextSegment)
    {
        $this->container['nextSegment'] = $nextSegment;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

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



<?php
/**
 * TermBaseDto
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
 * TermBaseDto Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TermBaseDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TermBaseDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'internalId' => 'int',
        'name' => 'string',
        'langs' => 'string[]',
        'client' => '\Memsource\Model\ClientReference',
        'domain' => '\Memsource\Model\DomainReference',
        'subDomain' => '\Memsource\Model\SubDomainReference',
        'businessUnit' => '\Memsource\Model\BusinessUnitReference',
        'createdBy' => '\Memsource\Model\UserReference',
        'dateCreated' => '\DateTime',
        'note' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'internalId' => 'int64',
        'name' => null,
        'langs' => null,
        'client' => null,
        'domain' => null,
        'subDomain' => null,
        'businessUnit' => null,
        'createdBy' => null,
        'dateCreated' => 'date-time',
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
        'id' => 'id',
        'internalId' => 'internalId',
        'name' => 'name',
        'langs' => 'langs',
        'client' => 'client',
        'domain' => 'domain',
        'subDomain' => 'subDomain',
        'businessUnit' => 'businessUnit',
        'createdBy' => 'createdBy',
        'dateCreated' => 'dateCreated',
        'note' => 'note'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'internalId' => 'setInternalId',
        'name' => 'setName',
        'langs' => 'setLangs',
        'client' => 'setClient',
        'domain' => 'setDomain',
        'subDomain' => 'setSubDomain',
        'businessUnit' => 'setBusinessUnit',
        'createdBy' => 'setCreatedBy',
        'dateCreated' => 'setDateCreated',
        'note' => 'setNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'internalId' => 'getInternalId',
        'name' => 'getName',
        'langs' => 'getLangs',
        'client' => 'getClient',
        'domain' => 'getDomain',
        'subDomain' => 'getSubDomain',
        'businessUnit' => 'getBusinessUnit',
        'createdBy' => 'getCreatedBy',
        'dateCreated' => 'getDateCreated',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['internalId'] = isset($data['internalId']) ? $data['internalId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['langs'] = isset($data['langs']) ? $data['langs'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['subDomain'] = isset($data['subDomain']) ? $data['subDomain'] : null;
        $this->container['businessUnit'] = isset($data['businessUnit']) ? $data['businessUnit'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['dateCreated'] = isset($data['dateCreated']) ? $data['dateCreated'] : null;
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
     * Gets internalId
     *
     * @return int
     */
    public function getInternalId()
    {
        return $this->container['internalId'];
    }

    /**
     * Sets internalId
     *
     * @param int $internalId internalId
     *
     * @return $this
     */
    public function setInternalId($internalId)
    {
        $this->container['internalId'] = $internalId;

        return $this;
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
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets langs
     *
     * @return string[]
     */
    public function getLangs()
    {
        return $this->container['langs'];
    }

    /**
     * Sets langs
     *
     * @param string[] $langs langs
     *
     * @return $this
     */
    public function setLangs($langs)
    {
        $this->container['langs'] = $langs;

        return $this;
    }

    /**
     * Gets client
     *
     * @return \Memsource\Model\ClientReference
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param \Memsource\Model\ClientReference $client client
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
     * @return \Memsource\Model\DomainReference
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param \Memsource\Model\DomainReference $domain domain
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
     * @return \Memsource\Model\SubDomainReference
     */
    public function getSubDomain()
    {
        return $this->container['subDomain'];
    }

    /**
     * Sets subDomain
     *
     * @param \Memsource\Model\SubDomainReference $subDomain subDomain
     *
     * @return $this
     */
    public function setSubDomain($subDomain)
    {
        $this->container['subDomain'] = $subDomain;

        return $this;
    }

    /**
     * Gets businessUnit
     *
     * @return \Memsource\Model\BusinessUnitReference
     */
    public function getBusinessUnit()
    {
        return $this->container['businessUnit'];
    }

    /**
     * Sets businessUnit
     *
     * @param \Memsource\Model\BusinessUnitReference $businessUnit businessUnit
     *
     * @return $this
     */
    public function setBusinessUnit($businessUnit)
    {
        $this->container['businessUnit'] = $businessUnit;

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
     * Gets dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['dateCreated'];
    }

    /**
     * Sets dateCreated
     *
     * @param \DateTime $dateCreated dateCreated
     *
     * @return $this
     */
    public function setDateCreated($dateCreated)
    {
        $this->container['dateCreated'] = $dateCreated;

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


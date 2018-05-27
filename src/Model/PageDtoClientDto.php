<?php
/**
 * PageDtoClientDto
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
 * PageDtoClientDto Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PageDtoClientDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PageDtoClientDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'totalElements' => 'int',
        'totalPages' => 'int',
        'pageSize' => 'int',
        'pageNumber' => 'int',
        'numberOfElements' => 'int',
        'content' => '\Memsource\Model\ClientDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'totalElements' => 'int32',
        'totalPages' => 'int32',
        'pageSize' => 'int32',
        'pageNumber' => 'int32',
        'numberOfElements' => 'int32',
        'content' => null
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
        'totalElements' => 'totalElements',
        'totalPages' => 'totalPages',
        'pageSize' => 'pageSize',
        'pageNumber' => 'pageNumber',
        'numberOfElements' => 'numberOfElements',
        'content' => 'content'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'totalElements' => 'setTotalElements',
        'totalPages' => 'setTotalPages',
        'pageSize' => 'setPageSize',
        'pageNumber' => 'setPageNumber',
        'numberOfElements' => 'setNumberOfElements',
        'content' => 'setContent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'totalElements' => 'getTotalElements',
        'totalPages' => 'getTotalPages',
        'pageSize' => 'getPageSize',
        'pageNumber' => 'getPageNumber',
        'numberOfElements' => 'getNumberOfElements',
        'content' => 'getContent'
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
        $this->container['totalElements'] = isset($data['totalElements']) ? $data['totalElements'] : null;
        $this->container['totalPages'] = isset($data['totalPages']) ? $data['totalPages'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['pageNumber'] = isset($data['pageNumber']) ? $data['pageNumber'] : null;
        $this->container['numberOfElements'] = isset($data['numberOfElements']) ? $data['numberOfElements'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
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
     * Gets totalElements
     *
     * @return int
     */
    public function getTotalElements()
    {
        return $this->container['totalElements'];
    }

    /**
     * Sets totalElements
     *
     * @param int $totalElements totalElements
     *
     * @return $this
     */
    public function setTotalElements($totalElements)
    {
        $this->container['totalElements'] = $totalElements;

        return $this;
    }

    /**
     * Gets totalPages
     *
     * @return int
     */
    public function getTotalPages()
    {
        return $this->container['totalPages'];
    }

    /**
     * Sets totalPages
     *
     * @param int $totalPages totalPages
     *
     * @return $this
     */
    public function setTotalPages($totalPages)
    {
        $this->container['totalPages'] = $totalPages;

        return $this;
    }

    /**
     * Gets pageSize
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize
     *
     * @param int $pageSize pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * Gets pageNumber
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->container['pageNumber'];
    }

    /**
     * Sets pageNumber
     *
     * @param int $pageNumber pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->container['pageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * Gets numberOfElements
     *
     * @return int
     */
    public function getNumberOfElements()
    {
        return $this->container['numberOfElements'];
    }

    /**
     * Sets numberOfElements
     *
     * @param int $numberOfElements numberOfElements
     *
     * @return $this
     */
    public function setNumberOfElements($numberOfElements)
    {
        $this->container['numberOfElements'] = $numberOfElements;

        return $this;
    }

    /**
     * Gets content
     *
     * @return \Memsource\Model\ClientDto[]
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param \Memsource\Model\ClientDto[] $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

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



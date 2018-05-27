<?php
/**
 * UserDto
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
 * UserDto Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'userName' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'email' => 'string',
        'dateCreated' => '\DateTime',
        'dateDeleted' => '\DateTime',
        'createdBy' => '\Memsource\Model\UserReference',
        'role' => 'string',
        'timezone' => 'string',
        'note' => 'string',
        'terminologist' => 'bool',
        'sourceLangs' => 'string[]',
        'targetLangs' => 'string[]',
        'active' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'userName' => null,
        'firstName' => null,
        'lastName' => null,
        'email' => null,
        'dateCreated' => 'date-time',
        'dateDeleted' => 'date-time',
        'createdBy' => null,
        'role' => null,
        'timezone' => null,
        'note' => null,
        'terminologist' => null,
        'sourceLangs' => null,
        'targetLangs' => null,
        'active' => null
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
        'userName' => 'userName',
        'firstName' => 'firstName',
        'lastName' => 'lastName',
        'email' => 'email',
        'dateCreated' => 'dateCreated',
        'dateDeleted' => 'dateDeleted',
        'createdBy' => 'createdBy',
        'role' => 'role',
        'timezone' => 'timezone',
        'note' => 'note',
        'terminologist' => 'terminologist',
        'sourceLangs' => 'sourceLangs',
        'targetLangs' => 'targetLangs',
        'active' => 'active'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'userName' => 'setUserName',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'email' => 'setEmail',
        'dateCreated' => 'setDateCreated',
        'dateDeleted' => 'setDateDeleted',
        'createdBy' => 'setCreatedBy',
        'role' => 'setRole',
        'timezone' => 'setTimezone',
        'note' => 'setNote',
        'terminologist' => 'setTerminologist',
        'sourceLangs' => 'setSourceLangs',
        'targetLangs' => 'setTargetLangs',
        'active' => 'setActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'userName' => 'getUserName',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'email' => 'getEmail',
        'dateCreated' => 'getDateCreated',
        'dateDeleted' => 'getDateDeleted',
        'createdBy' => 'getCreatedBy',
        'role' => 'getRole',
        'timezone' => 'getTimezone',
        'note' => 'getNote',
        'terminologist' => 'getTerminologist',
        'sourceLangs' => 'getSourceLangs',
        'targetLangs' => 'getTargetLangs',
        'active' => 'getActive'
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

    const ROLE_SYS_ADMIN = 'SYS_ADMIN';
    const ROLE_SYS_ADMIN_READ = 'SYS_ADMIN_READ';
    const ROLE_ADMIN = 'ADMIN';
    const ROLE_PROJECT_MANAGER = 'PROJECT_MANAGER';
    const ROLE_LINGUIST = 'LINGUIST';
    const ROLE_GUEST = 'GUEST';
    const ROLE_SUBMITTER = 'SUBMITTER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_SYS_ADMIN,
            self::ROLE_SYS_ADMIN_READ,
            self::ROLE_ADMIN,
            self::ROLE_PROJECT_MANAGER,
            self::ROLE_LINGUIST,
            self::ROLE_GUEST,
            self::ROLE_SUBMITTER,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['dateCreated'] = isset($data['dateCreated']) ? $data['dateCreated'] : null;
        $this->container['dateDeleted'] = isset($data['dateDeleted']) ? $data['dateDeleted'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['terminologist'] = isset($data['terminologist']) ? $data['terminologist'] : null;
        $this->container['sourceLangs'] = isset($data['sourceLangs']) ? $data['sourceLangs'] : null;
        $this->container['targetLangs'] = isset($data['targetLangs']) ? $data['targetLangs'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRoleAllowableValues();
        if (!in_array($this->container['role'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'role', must be one of '%s'",
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

        $allowedValues = $this->getRoleAllowableValues();
        if (!in_array($this->container['role'], $allowedValues)) {
            return false;
        }
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
     * Gets userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
     * Sets userName
     *
     * @param string $userName userName
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string $firstName firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string $lastName lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * Gets dateDeleted
     *
     * @return \DateTime
     */
    public function getDateDeleted()
    {
        return $this->container['dateDeleted'];
    }

    /**
     * Sets dateDeleted
     *
     * @param \DateTime $dateDeleted dateDeleted
     *
     * @return $this
     */
    public function setDateDeleted($dateDeleted)
    {
        $this->container['dateDeleted'] = $dateDeleted;

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
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $allowedValues = $this->getRoleAllowableValues();
        if (!is_null($role) && !in_array($role, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'role', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

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
     * Gets terminologist
     *
     * @return bool
     */
    public function getTerminologist()
    {
        return $this->container['terminologist'];
    }

    /**
     * Sets terminologist
     *
     * @param bool $terminologist terminologist
     *
     * @return $this
     */
    public function setTerminologist($terminologist)
    {
        $this->container['terminologist'] = $terminologist;

        return $this;
    }

    /**
     * Gets sourceLangs
     *
     * @return string[]
     */
    public function getSourceLangs()
    {
        return $this->container['sourceLangs'];
    }

    /**
     * Sets sourceLangs
     *
     * @param string[] $sourceLangs sourceLangs
     *
     * @return $this
     */
    public function setSourceLangs($sourceLangs)
    {
        $this->container['sourceLangs'] = $sourceLangs;

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
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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



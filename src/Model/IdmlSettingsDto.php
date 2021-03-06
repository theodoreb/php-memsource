<?php
/**
 * IdmlSettingsDto
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
 * IdmlSettingsDto Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IdmlSettingsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IdmlSettingsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'extractNotes' => 'bool',
        'simplifyCodes' => 'bool',
        'extractMasterSpreads' => 'bool',
        'extractLockedLayers' => 'bool',
        'extractInvisibleLayers' => 'bool',
        'extractHiddenConditionalText' => 'bool',
        'keepKerning' => 'bool',
        'keepTracking' => 'bool',
        'targetFont' => 'string',
        'replaceFont' => 'bool',
        'removeXmlElements' => 'bool',
        'tagRegexp' => 'string',
        'extractVariables' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'extractNotes' => null,
        'simplifyCodes' => null,
        'extractMasterSpreads' => null,
        'extractLockedLayers' => null,
        'extractInvisibleLayers' => null,
        'extractHiddenConditionalText' => null,
        'keepKerning' => null,
        'keepTracking' => null,
        'targetFont' => null,
        'replaceFont' => null,
        'removeXmlElements' => null,
        'tagRegexp' => null,
        'extractVariables' => null
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
        'extractNotes' => 'extractNotes',
        'simplifyCodes' => 'simplifyCodes',
        'extractMasterSpreads' => 'extractMasterSpreads',
        'extractLockedLayers' => 'extractLockedLayers',
        'extractInvisibleLayers' => 'extractInvisibleLayers',
        'extractHiddenConditionalText' => 'extractHiddenConditionalText',
        'keepKerning' => 'keepKerning',
        'keepTracking' => 'keepTracking',
        'targetFont' => 'targetFont',
        'replaceFont' => 'replaceFont',
        'removeXmlElements' => 'removeXmlElements',
        'tagRegexp' => 'tagRegexp',
        'extractVariables' => 'extractVariables'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'extractNotes' => 'setExtractNotes',
        'simplifyCodes' => 'setSimplifyCodes',
        'extractMasterSpreads' => 'setExtractMasterSpreads',
        'extractLockedLayers' => 'setExtractLockedLayers',
        'extractInvisibleLayers' => 'setExtractInvisibleLayers',
        'extractHiddenConditionalText' => 'setExtractHiddenConditionalText',
        'keepKerning' => 'setKeepKerning',
        'keepTracking' => 'setKeepTracking',
        'targetFont' => 'setTargetFont',
        'replaceFont' => 'setReplaceFont',
        'removeXmlElements' => 'setRemoveXmlElements',
        'tagRegexp' => 'setTagRegexp',
        'extractVariables' => 'setExtractVariables'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'extractNotes' => 'getExtractNotes',
        'simplifyCodes' => 'getSimplifyCodes',
        'extractMasterSpreads' => 'getExtractMasterSpreads',
        'extractLockedLayers' => 'getExtractLockedLayers',
        'extractInvisibleLayers' => 'getExtractInvisibleLayers',
        'extractHiddenConditionalText' => 'getExtractHiddenConditionalText',
        'keepKerning' => 'getKeepKerning',
        'keepTracking' => 'getKeepTracking',
        'targetFont' => 'getTargetFont',
        'replaceFont' => 'getReplaceFont',
        'removeXmlElements' => 'getRemoveXmlElements',
        'tagRegexp' => 'getTagRegexp',
        'extractVariables' => 'getExtractVariables'
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
        $this->container['extractNotes'] = isset($data['extractNotes']) ? $data['extractNotes'] : null;
        $this->container['simplifyCodes'] = isset($data['simplifyCodes']) ? $data['simplifyCodes'] : null;
        $this->container['extractMasterSpreads'] = isset($data['extractMasterSpreads']) ? $data['extractMasterSpreads'] : null;
        $this->container['extractLockedLayers'] = isset($data['extractLockedLayers']) ? $data['extractLockedLayers'] : null;
        $this->container['extractInvisibleLayers'] = isset($data['extractInvisibleLayers']) ? $data['extractInvisibleLayers'] : null;
        $this->container['extractHiddenConditionalText'] = isset($data['extractHiddenConditionalText']) ? $data['extractHiddenConditionalText'] : null;
        $this->container['keepKerning'] = isset($data['keepKerning']) ? $data['keepKerning'] : null;
        $this->container['keepTracking'] = isset($data['keepTracking']) ? $data['keepTracking'] : null;
        $this->container['targetFont'] = isset($data['targetFont']) ? $data['targetFont'] : null;
        $this->container['replaceFont'] = isset($data['replaceFont']) ? $data['replaceFont'] : null;
        $this->container['removeXmlElements'] = isset($data['removeXmlElements']) ? $data['removeXmlElements'] : null;
        $this->container['tagRegexp'] = isset($data['tagRegexp']) ? $data['tagRegexp'] : null;
        $this->container['extractVariables'] = isset($data['extractVariables']) ? $data['extractVariables'] : null;
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
     * Gets extractNotes
     *
     * @return bool
     */
    public function getExtractNotes()
    {
        return $this->container['extractNotes'];
    }

    /**
     * Sets extractNotes
     *
     * @param bool $extractNotes extractNotes
     *
     * @return $this
     */
    public function setExtractNotes($extractNotes)
    {
        $this->container['extractNotes'] = $extractNotes;

        return $this;
    }

    /**
     * Gets simplifyCodes
     *
     * @return bool
     */
    public function getSimplifyCodes()
    {
        return $this->container['simplifyCodes'];
    }

    /**
     * Sets simplifyCodes
     *
     * @param bool $simplifyCodes default: true
     *
     * @return $this
     */
    public function setSimplifyCodes($simplifyCodes)
    {
        $this->container['simplifyCodes'] = $simplifyCodes;

        return $this;
    }

    /**
     * Gets extractMasterSpreads
     *
     * @return bool
     */
    public function getExtractMasterSpreads()
    {
        return $this->container['extractMasterSpreads'];
    }

    /**
     * Sets extractMasterSpreads
     *
     * @param bool $extractMasterSpreads default: true
     *
     * @return $this
     */
    public function setExtractMasterSpreads($extractMasterSpreads)
    {
        $this->container['extractMasterSpreads'] = $extractMasterSpreads;

        return $this;
    }

    /**
     * Gets extractLockedLayers
     *
     * @return bool
     */
    public function getExtractLockedLayers()
    {
        return $this->container['extractLockedLayers'];
    }

    /**
     * Sets extractLockedLayers
     *
     * @param bool $extractLockedLayers default: true
     *
     * @return $this
     */
    public function setExtractLockedLayers($extractLockedLayers)
    {
        $this->container['extractLockedLayers'] = $extractLockedLayers;

        return $this;
    }

    /**
     * Gets extractInvisibleLayers
     *
     * @return bool
     */
    public function getExtractInvisibleLayers()
    {
        return $this->container['extractInvisibleLayers'];
    }

    /**
     * Sets extractInvisibleLayers
     *
     * @param bool $extractInvisibleLayers extractInvisibleLayers
     *
     * @return $this
     */
    public function setExtractInvisibleLayers($extractInvisibleLayers)
    {
        $this->container['extractInvisibleLayers'] = $extractInvisibleLayers;

        return $this;
    }

    /**
     * Gets extractHiddenConditionalText
     *
     * @return bool
     */
    public function getExtractHiddenConditionalText()
    {
        return $this->container['extractHiddenConditionalText'];
    }

    /**
     * Sets extractHiddenConditionalText
     *
     * @param bool $extractHiddenConditionalText extractHiddenConditionalText
     *
     * @return $this
     */
    public function setExtractHiddenConditionalText($extractHiddenConditionalText)
    {
        $this->container['extractHiddenConditionalText'] = $extractHiddenConditionalText;

        return $this;
    }

    /**
     * Gets keepKerning
     *
     * @return bool
     */
    public function getKeepKerning()
    {
        return $this->container['keepKerning'];
    }

    /**
     * Sets keepKerning
     *
     * @param bool $keepKerning keepKerning
     *
     * @return $this
     */
    public function setKeepKerning($keepKerning)
    {
        $this->container['keepKerning'] = $keepKerning;

        return $this;
    }

    /**
     * Gets keepTracking
     *
     * @return bool
     */
    public function getKeepTracking()
    {
        return $this->container['keepTracking'];
    }

    /**
     * Sets keepTracking
     *
     * @param bool $keepTracking keepTracking
     *
     * @return $this
     */
    public function setKeepTracking($keepTracking)
    {
        $this->container['keepTracking'] = $keepTracking;

        return $this;
    }

    /**
     * Gets targetFont
     *
     * @return string
     */
    public function getTargetFont()
    {
        return $this->container['targetFont'];
    }

    /**
     * Sets targetFont
     *
     * @param string $targetFont targetFont
     *
     * @return $this
     */
    public function setTargetFont($targetFont)
    {
        $this->container['targetFont'] = $targetFont;

        return $this;
    }

    /**
     * Gets replaceFont
     *
     * @return bool
     */
    public function getReplaceFont()
    {
        return $this->container['replaceFont'];
    }

    /**
     * Sets replaceFont
     *
     * @param bool $replaceFont default: true
     *
     * @return $this
     */
    public function setReplaceFont($replaceFont)
    {
        $this->container['replaceFont'] = $replaceFont;

        return $this;
    }

    /**
     * Gets removeXmlElements
     *
     * @return bool
     */
    public function getRemoveXmlElements()
    {
        return $this->container['removeXmlElements'];
    }

    /**
     * Sets removeXmlElements
     *
     * @param bool $removeXmlElements removeXmlElements
     *
     * @return $this
     */
    public function setRemoveXmlElements($removeXmlElements)
    {
        $this->container['removeXmlElements'] = $removeXmlElements;

        return $this;
    }

    /**
     * Gets tagRegexp
     *
     * @return string
     */
    public function getTagRegexp()
    {
        return $this->container['tagRegexp'];
    }

    /**
     * Sets tagRegexp
     *
     * @param string $tagRegexp tagRegexp
     *
     * @return $this
     */
    public function setTagRegexp($tagRegexp)
    {
        $this->container['tagRegexp'] = $tagRegexp;

        return $this;
    }

    /**
     * Gets extractVariables
     *
     * @return bool
     */
    public function getExtractVariables()
    {
        return $this->container['extractVariables'];
    }

    /**
     * Sets extractVariables
     *
     * @param bool $extractVariables default: true
     *
     * @return $this
     */
    public function setExtractVariables($extractVariables)
    {
        $this->container['extractVariables'] = $extractVariables;

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



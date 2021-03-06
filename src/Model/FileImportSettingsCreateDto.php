<?php
/**
 * FileImportSettingsCreateDto
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
 * FileImportSettingsCreateDto Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileImportSettingsCreateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FileImportSettingsCreateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inputCharset' => 'string',
        'outputCharset' => 'string',
        'zipCharset' => 'string',
        'fileFormat' => 'string',
        'targetLength' => 'bool',
        'targetLengthMax' => 'int',
        'targetLengthPercent' => 'bool',
        'targetLengthPercentValue' => 'double',
        'segmentationRuleId' => 'int',
        'csv' => '\Memsource\Model\CsvSettingsDto',
        'dita' => '\Memsource\Model\DitaSettingsDto',
        'docBook' => '\Memsource\Model\DocBookSettingsDto',
        'doc' => '\Memsource\Model\DocSettingsDto',
        'html' => '\Memsource\Model\HtmlSettingsDto',
        'idml' => '\Memsource\Model\IdmlSettingsDto',
        'json' => '\Memsource\Model\JsonSettingsDto',
        'mac' => '\Memsource\Model\MacSettingsDto',
        'md' => '\Memsource\Model\MdSettingsDto',
        'mif' => '\Memsource\Model\MifSettingsDto',
        'multilingualXls' => '\Memsource\Model\MultilingualXlsSettingsDto',
        'multilingualXml' => '\Memsource\Model\MultilingualXmlSettingsDto',
        'pdf' => '\Memsource\Model\PdfSettingsDto',
        'php' => '\Memsource\Model\PhpSettingsDto',
        'po' => '\Memsource\Model\PoSettingsDto',
        'ppt' => '\Memsource\Model\PptSettingsDto',
        'properties' => '\Memsource\Model\PropertiesSettingsDto',
        'psd' => '\Memsource\Model\PsdSettingsDto',
        'quarkTag' => '\Memsource\Model\QuarkTagSettingsDto',
        'resx' => '\Memsource\Model\ResxSettingsDto',
        'sdlXlf' => '\Memsource\Model\SdlXlfSettingsDto',
        'tmMatch' => '\Memsource\Model\TMMatchSettingsDto',
        'ttx' => '\Memsource\Model\TtxSettingsDto',
        'txt' => '\Memsource\Model\TxtSettingsDto',
        'xlf2' => '\Memsource\Model\Xlf2SettingsDto',
        'xlf' => '\Memsource\Model\XlfSettingsDto',
        'xls' => '\Memsource\Model\XlsSettingsDto',
        'xml' => '\Memsource\Model\XmlSettingsDto',
        'yaml' => '\Memsource\Model\YamlSettingsDto'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'inputCharset' => null,
        'outputCharset' => null,
        'zipCharset' => null,
        'fileFormat' => null,
        'targetLength' => null,
        'targetLengthMax' => 'int32',
        'targetLengthPercent' => null,
        'targetLengthPercentValue' => 'double',
        'segmentationRuleId' => 'int64',
        'csv' => null,
        'dita' => null,
        'docBook' => null,
        'doc' => null,
        'html' => null,
        'idml' => null,
        'json' => null,
        'mac' => null,
        'md' => null,
        'mif' => null,
        'multilingualXls' => null,
        'multilingualXml' => null,
        'pdf' => null,
        'php' => null,
        'po' => null,
        'ppt' => null,
        'properties' => null,
        'psd' => null,
        'quarkTag' => null,
        'resx' => null,
        'sdlXlf' => null,
        'tmMatch' => null,
        'ttx' => null,
        'txt' => null,
        'xlf2' => null,
        'xlf' => null,
        'xls' => null,
        'xml' => null,
        'yaml' => null
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
        'inputCharset' => 'inputCharset',
        'outputCharset' => 'outputCharset',
        'zipCharset' => 'zipCharset',
        'fileFormat' => 'fileFormat',
        'targetLength' => 'targetLength',
        'targetLengthMax' => 'targetLengthMax',
        'targetLengthPercent' => 'targetLengthPercent',
        'targetLengthPercentValue' => 'targetLengthPercentValue',
        'segmentationRuleId' => 'segmentationRuleId',
        'csv' => 'csv',
        'dita' => 'dita',
        'docBook' => 'docBook',
        'doc' => 'doc',
        'html' => 'html',
        'idml' => 'idml',
        'json' => 'json',
        'mac' => 'mac',
        'md' => 'md',
        'mif' => 'mif',
        'multilingualXls' => 'multilingualXls',
        'multilingualXml' => 'multilingualXml',
        'pdf' => 'pdf',
        'php' => 'php',
        'po' => 'po',
        'ppt' => 'ppt',
        'properties' => 'properties',
        'psd' => 'psd',
        'quarkTag' => 'quarkTag',
        'resx' => 'resx',
        'sdlXlf' => 'sdlXlf',
        'tmMatch' => 'tmMatch',
        'ttx' => 'ttx',
        'txt' => 'txt',
        'xlf2' => 'xlf2',
        'xlf' => 'xlf',
        'xls' => 'xls',
        'xml' => 'xml',
        'yaml' => 'yaml'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inputCharset' => 'setInputCharset',
        'outputCharset' => 'setOutputCharset',
        'zipCharset' => 'setZipCharset',
        'fileFormat' => 'setFileFormat',
        'targetLength' => 'setTargetLength',
        'targetLengthMax' => 'setTargetLengthMax',
        'targetLengthPercent' => 'setTargetLengthPercent',
        'targetLengthPercentValue' => 'setTargetLengthPercentValue',
        'segmentationRuleId' => 'setSegmentationRuleId',
        'csv' => 'setCsv',
        'dita' => 'setDita',
        'docBook' => 'setDocBook',
        'doc' => 'setDoc',
        'html' => 'setHtml',
        'idml' => 'setIdml',
        'json' => 'setJson',
        'mac' => 'setMac',
        'md' => 'setMd',
        'mif' => 'setMif',
        'multilingualXls' => 'setMultilingualXls',
        'multilingualXml' => 'setMultilingualXml',
        'pdf' => 'setPdf',
        'php' => 'setPhp',
        'po' => 'setPo',
        'ppt' => 'setPpt',
        'properties' => 'setProperties',
        'psd' => 'setPsd',
        'quarkTag' => 'setQuarkTag',
        'resx' => 'setResx',
        'sdlXlf' => 'setSdlXlf',
        'tmMatch' => 'setTmMatch',
        'ttx' => 'setTtx',
        'txt' => 'setTxt',
        'xlf2' => 'setXlf2',
        'xlf' => 'setXlf',
        'xls' => 'setXls',
        'xml' => 'setXml',
        'yaml' => 'setYaml'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inputCharset' => 'getInputCharset',
        'outputCharset' => 'getOutputCharset',
        'zipCharset' => 'getZipCharset',
        'fileFormat' => 'getFileFormat',
        'targetLength' => 'getTargetLength',
        'targetLengthMax' => 'getTargetLengthMax',
        'targetLengthPercent' => 'getTargetLengthPercent',
        'targetLengthPercentValue' => 'getTargetLengthPercentValue',
        'segmentationRuleId' => 'getSegmentationRuleId',
        'csv' => 'getCsv',
        'dita' => 'getDita',
        'docBook' => 'getDocBook',
        'doc' => 'getDoc',
        'html' => 'getHtml',
        'idml' => 'getIdml',
        'json' => 'getJson',
        'mac' => 'getMac',
        'md' => 'getMd',
        'mif' => 'getMif',
        'multilingualXls' => 'getMultilingualXls',
        'multilingualXml' => 'getMultilingualXml',
        'pdf' => 'getPdf',
        'php' => 'getPhp',
        'po' => 'getPo',
        'ppt' => 'getPpt',
        'properties' => 'getProperties',
        'psd' => 'getPsd',
        'quarkTag' => 'getQuarkTag',
        'resx' => 'getResx',
        'sdlXlf' => 'getSdlXlf',
        'tmMatch' => 'getTmMatch',
        'ttx' => 'getTtx',
        'txt' => 'getTxt',
        'xlf2' => 'getXlf2',
        'xlf' => 'getXlf',
        'xls' => 'getXls',
        'xml' => 'getXml',
        'yaml' => 'getYaml'
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

    const FILE_FORMAT_DOC = 'doc';
    const FILE_FORMAT_PPT = 'ppt';
    const FILE_FORMAT_XLS = 'xls';
    const FILE_FORMAT_XLF = 'xlf';
    const FILE_FORMAT_XLF2 = 'xlf2';
    const FILE_FORMAT_SDLXLIFF = 'sdlxliff';
    const FILE_FORMAT_TTX = 'ttx';
    const FILE_FORMAT_HTML = 'html';
    const FILE_FORMAT_XML = 'xml';
    const FILE_FORMAT_MIF = 'mif';
    const FILE_FORMAT_TMX = 'tmx';
    const FILE_FORMAT_IDML = 'idml';
    const FILE_FORMAT_DITA = 'dita';
    const FILE_FORMAT_JSON = 'json';
    const FILE_FORMAT_PO = 'po';
    const FILE_FORMAT_TS = 'ts';
    const FILE_FORMAT_ICML = 'icml';
    const FILE_FORMAT_YAML = 'yaml';
    const FILE_FORMAT_PROPERTIES = 'properties';
    const FILE_FORMAT_CSV = 'csv';
    const FILE_FORMAT_ANDROID_STRING = 'android_string';
    const FILE_FORMAT_DESKTOP_ENTRY = 'desktop_entry';
    const FILE_FORMAT_MAC_STRINGS = 'mac_strings';
    const FILE_FORMAT_PDF = 'pdf';
    const FILE_FORMAT_WINDOWS_RC = 'windows_rc';
    const FILE_FORMAT_XML_PROPERTIES = 'xml_properties';
    const FILE_FORMAT_JOOMLA_INI = 'joomla_ini';
    const FILE_FORMAT_MAGENTO_CSV = 'magento_csv';
    const FILE_FORMAT_DTD = 'dtd';
    const FILE_FORMAT_MOZILLA_PROPERTIES = 'mozilla_properties';
    const FILE_FORMAT_PLIST = 'plist';
    const FILE_FORMAT_PLAIN_TEXT = 'plain_text';
    const FILE_FORMAT_SRT = 'srt';
    const FILE_FORMAT_SUB = 'sub';
    const FILE_FORMAT_SBV = 'sbv';
    const FILE_FORMAT_WIKI = 'wiki';
    const FILE_FORMAT_RESX = 'resx';
    const FILE_FORMAT_RESJSON = 'resjson';
    const FILE_FORMAT_CHROME_JSON = 'chrome_json';
    const FILE_FORMAT_EPUB = 'epub';
    const FILE_FORMAT_SVG = 'svg';
    const FILE_FORMAT_DOCBOOK = 'docbook';
    const FILE_FORMAT_WPXLIFF = 'wpxliff';
    const FILE_FORMAT_MULTILING_XML = 'multiling_xml';
    const FILE_FORMAT_MULTILING_XLS = 'multiling_xls';
    const FILE_FORMAT_MQXLIFF = 'mqxliff';
    const FILE_FORMAT_PHP = 'php';
    const FILE_FORMAT_PSD = 'psd';
    const FILE_FORMAT_TAG = 'tag';
    const FILE_FORMAT_MD = 'md';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFileFormatAllowableValues()
    {
        return [
            self::FILE_FORMAT_DOC,
            self::FILE_FORMAT_PPT,
            self::FILE_FORMAT_XLS,
            self::FILE_FORMAT_XLF,
            self::FILE_FORMAT_XLF2,
            self::FILE_FORMAT_SDLXLIFF,
            self::FILE_FORMAT_TTX,
            self::FILE_FORMAT_HTML,
            self::FILE_FORMAT_XML,
            self::FILE_FORMAT_MIF,
            self::FILE_FORMAT_TMX,
            self::FILE_FORMAT_IDML,
            self::FILE_FORMAT_DITA,
            self::FILE_FORMAT_JSON,
            self::FILE_FORMAT_PO,
            self::FILE_FORMAT_TS,
            self::FILE_FORMAT_ICML,
            self::FILE_FORMAT_YAML,
            self::FILE_FORMAT_PROPERTIES,
            self::FILE_FORMAT_CSV,
            self::FILE_FORMAT_ANDROID_STRING,
            self::FILE_FORMAT_DESKTOP_ENTRY,
            self::FILE_FORMAT_MAC_STRINGS,
            self::FILE_FORMAT_PDF,
            self::FILE_FORMAT_WINDOWS_RC,
            self::FILE_FORMAT_XML_PROPERTIES,
            self::FILE_FORMAT_JOOMLA_INI,
            self::FILE_FORMAT_MAGENTO_CSV,
            self::FILE_FORMAT_DTD,
            self::FILE_FORMAT_MOZILLA_PROPERTIES,
            self::FILE_FORMAT_PLIST,
            self::FILE_FORMAT_PLAIN_TEXT,
            self::FILE_FORMAT_SRT,
            self::FILE_FORMAT_SUB,
            self::FILE_FORMAT_SBV,
            self::FILE_FORMAT_WIKI,
            self::FILE_FORMAT_RESX,
            self::FILE_FORMAT_RESJSON,
            self::FILE_FORMAT_CHROME_JSON,
            self::FILE_FORMAT_EPUB,
            self::FILE_FORMAT_SVG,
            self::FILE_FORMAT_DOCBOOK,
            self::FILE_FORMAT_WPXLIFF,
            self::FILE_FORMAT_MULTILING_XML,
            self::FILE_FORMAT_MULTILING_XLS,
            self::FILE_FORMAT_MQXLIFF,
            self::FILE_FORMAT_PHP,
            self::FILE_FORMAT_PSD,
            self::FILE_FORMAT_TAG,
            self::FILE_FORMAT_MD,
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
        $this->container['inputCharset'] = isset($data['inputCharset']) ? $data['inputCharset'] : null;
        $this->container['outputCharset'] = isset($data['outputCharset']) ? $data['outputCharset'] : null;
        $this->container['zipCharset'] = isset($data['zipCharset']) ? $data['zipCharset'] : null;
        $this->container['fileFormat'] = isset($data['fileFormat']) ? $data['fileFormat'] : null;
        $this->container['targetLength'] = isset($data['targetLength']) ? $data['targetLength'] : null;
        $this->container['targetLengthMax'] = isset($data['targetLengthMax']) ? $data['targetLengthMax'] : null;
        $this->container['targetLengthPercent'] = isset($data['targetLengthPercent']) ? $data['targetLengthPercent'] : null;
        $this->container['targetLengthPercentValue'] = isset($data['targetLengthPercentValue']) ? $data['targetLengthPercentValue'] : null;
        $this->container['segmentationRuleId'] = isset($data['segmentationRuleId']) ? $data['segmentationRuleId'] : null;
        $this->container['csv'] = isset($data['csv']) ? $data['csv'] : null;
        $this->container['dita'] = isset($data['dita']) ? $data['dita'] : null;
        $this->container['docBook'] = isset($data['docBook']) ? $data['docBook'] : null;
        $this->container['doc'] = isset($data['doc']) ? $data['doc'] : null;
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
        $this->container['idml'] = isset($data['idml']) ? $data['idml'] : null;
        $this->container['json'] = isset($data['json']) ? $data['json'] : null;
        $this->container['mac'] = isset($data['mac']) ? $data['mac'] : null;
        $this->container['md'] = isset($data['md']) ? $data['md'] : null;
        $this->container['mif'] = isset($data['mif']) ? $data['mif'] : null;
        $this->container['multilingualXls'] = isset($data['multilingualXls']) ? $data['multilingualXls'] : null;
        $this->container['multilingualXml'] = isset($data['multilingualXml']) ? $data['multilingualXml'] : null;
        $this->container['pdf'] = isset($data['pdf']) ? $data['pdf'] : null;
        $this->container['php'] = isset($data['php']) ? $data['php'] : null;
        $this->container['po'] = isset($data['po']) ? $data['po'] : null;
        $this->container['ppt'] = isset($data['ppt']) ? $data['ppt'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['psd'] = isset($data['psd']) ? $data['psd'] : null;
        $this->container['quarkTag'] = isset($data['quarkTag']) ? $data['quarkTag'] : null;
        $this->container['resx'] = isset($data['resx']) ? $data['resx'] : null;
        $this->container['sdlXlf'] = isset($data['sdlXlf']) ? $data['sdlXlf'] : null;
        $this->container['tmMatch'] = isset($data['tmMatch']) ? $data['tmMatch'] : null;
        $this->container['ttx'] = isset($data['ttx']) ? $data['ttx'] : null;
        $this->container['txt'] = isset($data['txt']) ? $data['txt'] : null;
        $this->container['xlf2'] = isset($data['xlf2']) ? $data['xlf2'] : null;
        $this->container['xlf'] = isset($data['xlf']) ? $data['xlf'] : null;
        $this->container['xls'] = isset($data['xls']) ? $data['xls'] : null;
        $this->container['xml'] = isset($data['xml']) ? $data['xml'] : null;
        $this->container['yaml'] = isset($data['yaml']) ? $data['yaml'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFileFormatAllowableValues();
        if (!in_array($this->container['fileFormat'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fileFormat', must be one of '%s'",
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

        $allowedValues = $this->getFileFormatAllowableValues();
        if (!in_array($this->container['fileFormat'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets inputCharset
     *
     * @return string
     */
    public function getInputCharset()
    {
        return $this->container['inputCharset'];
    }

    /**
     * Sets inputCharset
     *
     * @param string $inputCharset inputCharset
     *
     * @return $this
     */
    public function setInputCharset($inputCharset)
    {
        $this->container['inputCharset'] = $inputCharset;

        return $this;
    }

    /**
     * Gets outputCharset
     *
     * @return string
     */
    public function getOutputCharset()
    {
        return $this->container['outputCharset'];
    }

    /**
     * Sets outputCharset
     *
     * @param string $outputCharset outputCharset
     *
     * @return $this
     */
    public function setOutputCharset($outputCharset)
    {
        $this->container['outputCharset'] = $outputCharset;

        return $this;
    }

    /**
     * Gets zipCharset
     *
     * @return string
     */
    public function getZipCharset()
    {
        return $this->container['zipCharset'];
    }

    /**
     * Sets zipCharset
     *
     * @param string $zipCharset zipCharset
     *
     * @return $this
     */
    public function setZipCharset($zipCharset)
    {
        $this->container['zipCharset'] = $zipCharset;

        return $this;
    }

    /**
     * Gets fileFormat
     *
     * @return string
     */
    public function getFileFormat()
    {
        return $this->container['fileFormat'];
    }

    /**
     * Sets fileFormat
     *
     * @param string $fileFormat default: auto-detect
     *
     * @return $this
     */
    public function setFileFormat($fileFormat)
    {
        $allowedValues = $this->getFileFormatAllowableValues();
        if (!is_null($fileFormat) && !in_array($fileFormat, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fileFormat', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fileFormat'] = $fileFormat;

        return $this;
    }

    /**
     * Gets targetLength
     *
     * @return bool
     */
    public function getTargetLength()
    {
        return $this->container['targetLength'];
    }

    /**
     * Sets targetLength
     *
     * @param bool $targetLength targetLength
     *
     * @return $this
     */
    public function setTargetLength($targetLength)
    {
        $this->container['targetLength'] = $targetLength;

        return $this;
    }

    /**
     * Gets targetLengthMax
     *
     * @return int
     */
    public function getTargetLengthMax()
    {
        return $this->container['targetLengthMax'];
    }

    /**
     * Sets targetLengthMax
     *
     * @param int $targetLengthMax default: 1000
     *
     * @return $this
     */
    public function setTargetLengthMax($targetLengthMax)
    {
        $this->container['targetLengthMax'] = $targetLengthMax;

        return $this;
    }

    /**
     * Gets targetLengthPercent
     *
     * @return bool
     */
    public function getTargetLengthPercent()
    {
        return $this->container['targetLengthPercent'];
    }

    /**
     * Sets targetLengthPercent
     *
     * @param bool $targetLengthPercent targetLengthPercent
     *
     * @return $this
     */
    public function setTargetLengthPercent($targetLengthPercent)
    {
        $this->container['targetLengthPercent'] = $targetLengthPercent;

        return $this;
    }

    /**
     * Gets targetLengthPercentValue
     *
     * @return double
     */
    public function getTargetLengthPercentValue()
    {
        return $this->container['targetLengthPercentValue'];
    }

    /**
     * Sets targetLengthPercentValue
     *
     * @param double $targetLengthPercentValue default: 130
     *
     * @return $this
     */
    public function setTargetLengthPercentValue($targetLengthPercentValue)
    {
        $this->container['targetLengthPercentValue'] = $targetLengthPercentValue;

        return $this;
    }

    /**
     * Gets segmentationRuleId
     *
     * @return int
     */
    public function getSegmentationRuleId()
    {
        return $this->container['segmentationRuleId'];
    }

    /**
     * Sets segmentationRuleId
     *
     * @param int $segmentationRuleId segmentationRuleId
     *
     * @return $this
     */
    public function setSegmentationRuleId($segmentationRuleId)
    {
        $this->container['segmentationRuleId'] = $segmentationRuleId;

        return $this;
    }

    /**
     * Gets csv
     *
     * @return \Memsource\Model\CsvSettingsDto
     */
    public function getCsv()
    {
        return $this->container['csv'];
    }

    /**
     * Sets csv
     *
     * @param \Memsource\Model\CsvSettingsDto $csv csv
     *
     * @return $this
     */
    public function setCsv($csv)
    {
        $this->container['csv'] = $csv;

        return $this;
    }

    /**
     * Gets dita
     *
     * @return \Memsource\Model\DitaSettingsDto
     */
    public function getDita()
    {
        return $this->container['dita'];
    }

    /**
     * Sets dita
     *
     * @param \Memsource\Model\DitaSettingsDto $dita dita
     *
     * @return $this
     */
    public function setDita($dita)
    {
        $this->container['dita'] = $dita;

        return $this;
    }

    /**
     * Gets docBook
     *
     * @return \Memsource\Model\DocBookSettingsDto
     */
    public function getDocBook()
    {
        return $this->container['docBook'];
    }

    /**
     * Sets docBook
     *
     * @param \Memsource\Model\DocBookSettingsDto $docBook docBook
     *
     * @return $this
     */
    public function setDocBook($docBook)
    {
        $this->container['docBook'] = $docBook;

        return $this;
    }

    /**
     * Gets doc
     *
     * @return \Memsource\Model\DocSettingsDto
     */
    public function getDoc()
    {
        return $this->container['doc'];
    }

    /**
     * Sets doc
     *
     * @param \Memsource\Model\DocSettingsDto $doc doc
     *
     * @return $this
     */
    public function setDoc($doc)
    {
        $this->container['doc'] = $doc;

        return $this;
    }

    /**
     * Gets html
     *
     * @return \Memsource\Model\HtmlSettingsDto
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param \Memsource\Model\HtmlSettingsDto $html html
     *
     * @return $this
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

        return $this;
    }

    /**
     * Gets idml
     *
     * @return \Memsource\Model\IdmlSettingsDto
     */
    public function getIdml()
    {
        return $this->container['idml'];
    }

    /**
     * Sets idml
     *
     * @param \Memsource\Model\IdmlSettingsDto $idml idml
     *
     * @return $this
     */
    public function setIdml($idml)
    {
        $this->container['idml'] = $idml;

        return $this;
    }

    /**
     * Gets json
     *
     * @return \Memsource\Model\JsonSettingsDto
     */
    public function getJson()
    {
        return $this->container['json'];
    }

    /**
     * Sets json
     *
     * @param \Memsource\Model\JsonSettingsDto $json json
     *
     * @return $this
     */
    public function setJson($json)
    {
        $this->container['json'] = $json;

        return $this;
    }

    /**
     * Gets mac
     *
     * @return \Memsource\Model\MacSettingsDto
     */
    public function getMac()
    {
        return $this->container['mac'];
    }

    /**
     * Sets mac
     *
     * @param \Memsource\Model\MacSettingsDto $mac mac
     *
     * @return $this
     */
    public function setMac($mac)
    {
        $this->container['mac'] = $mac;

        return $this;
    }

    /**
     * Gets md
     *
     * @return \Memsource\Model\MdSettingsDto
     */
    public function getMd()
    {
        return $this->container['md'];
    }

    /**
     * Sets md
     *
     * @param \Memsource\Model\MdSettingsDto $md md
     *
     * @return $this
     */
    public function setMd($md)
    {
        $this->container['md'] = $md;

        return $this;
    }

    /**
     * Gets mif
     *
     * @return \Memsource\Model\MifSettingsDto
     */
    public function getMif()
    {
        return $this->container['mif'];
    }

    /**
     * Sets mif
     *
     * @param \Memsource\Model\MifSettingsDto $mif mif
     *
     * @return $this
     */
    public function setMif($mif)
    {
        $this->container['mif'] = $mif;

        return $this;
    }

    /**
     * Gets multilingualXls
     *
     * @return \Memsource\Model\MultilingualXlsSettingsDto
     */
    public function getMultilingualXls()
    {
        return $this->container['multilingualXls'];
    }

    /**
     * Sets multilingualXls
     *
     * @param \Memsource\Model\MultilingualXlsSettingsDto $multilingualXls multilingualXls
     *
     * @return $this
     */
    public function setMultilingualXls($multilingualXls)
    {
        $this->container['multilingualXls'] = $multilingualXls;

        return $this;
    }

    /**
     * Gets multilingualXml
     *
     * @return \Memsource\Model\MultilingualXmlSettingsDto
     */
    public function getMultilingualXml()
    {
        return $this->container['multilingualXml'];
    }

    /**
     * Sets multilingualXml
     *
     * @param \Memsource\Model\MultilingualXmlSettingsDto $multilingualXml multilingualXml
     *
     * @return $this
     */
    public function setMultilingualXml($multilingualXml)
    {
        $this->container['multilingualXml'] = $multilingualXml;

        return $this;
    }

    /**
     * Gets pdf
     *
     * @return \Memsource\Model\PdfSettingsDto
     */
    public function getPdf()
    {
        return $this->container['pdf'];
    }

    /**
     * Sets pdf
     *
     * @param \Memsource\Model\PdfSettingsDto $pdf pdf
     *
     * @return $this
     */
    public function setPdf($pdf)
    {
        $this->container['pdf'] = $pdf;

        return $this;
    }

    /**
     * Gets php
     *
     * @return \Memsource\Model\PhpSettingsDto
     */
    public function getPhp()
    {
        return $this->container['php'];
    }

    /**
     * Sets php
     *
     * @param \Memsource\Model\PhpSettingsDto $php php
     *
     * @return $this
     */
    public function setPhp($php)
    {
        $this->container['php'] = $php;

        return $this;
    }

    /**
     * Gets po
     *
     * @return \Memsource\Model\PoSettingsDto
     */
    public function getPo()
    {
        return $this->container['po'];
    }

    /**
     * Sets po
     *
     * @param \Memsource\Model\PoSettingsDto $po po
     *
     * @return $this
     */
    public function setPo($po)
    {
        $this->container['po'] = $po;

        return $this;
    }

    /**
     * Gets ppt
     *
     * @return \Memsource\Model\PptSettingsDto
     */
    public function getPpt()
    {
        return $this->container['ppt'];
    }

    /**
     * Sets ppt
     *
     * @param \Memsource\Model\PptSettingsDto $ppt ppt
     *
     * @return $this
     */
    public function setPpt($ppt)
    {
        $this->container['ppt'] = $ppt;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \Memsource\Model\PropertiesSettingsDto
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \Memsource\Model\PropertiesSettingsDto $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets psd
     *
     * @return \Memsource\Model\PsdSettingsDto
     */
    public function getPsd()
    {
        return $this->container['psd'];
    }

    /**
     * Sets psd
     *
     * @param \Memsource\Model\PsdSettingsDto $psd psd
     *
     * @return $this
     */
    public function setPsd($psd)
    {
        $this->container['psd'] = $psd;

        return $this;
    }

    /**
     * Gets quarkTag
     *
     * @return \Memsource\Model\QuarkTagSettingsDto
     */
    public function getQuarkTag()
    {
        return $this->container['quarkTag'];
    }

    /**
     * Sets quarkTag
     *
     * @param \Memsource\Model\QuarkTagSettingsDto $quarkTag quarkTag
     *
     * @return $this
     */
    public function setQuarkTag($quarkTag)
    {
        $this->container['quarkTag'] = $quarkTag;

        return $this;
    }

    /**
     * Gets resx
     *
     * @return \Memsource\Model\ResxSettingsDto
     */
    public function getResx()
    {
        return $this->container['resx'];
    }

    /**
     * Sets resx
     *
     * @param \Memsource\Model\ResxSettingsDto $resx resx
     *
     * @return $this
     */
    public function setResx($resx)
    {
        $this->container['resx'] = $resx;

        return $this;
    }

    /**
     * Gets sdlXlf
     *
     * @return \Memsource\Model\SdlXlfSettingsDto
     */
    public function getSdlXlf()
    {
        return $this->container['sdlXlf'];
    }

    /**
     * Sets sdlXlf
     *
     * @param \Memsource\Model\SdlXlfSettingsDto $sdlXlf sdlXlf
     *
     * @return $this
     */
    public function setSdlXlf($sdlXlf)
    {
        $this->container['sdlXlf'] = $sdlXlf;

        return $this;
    }

    /**
     * Gets tmMatch
     *
     * @return \Memsource\Model\TMMatchSettingsDto
     */
    public function getTmMatch()
    {
        return $this->container['tmMatch'];
    }

    /**
     * Sets tmMatch
     *
     * @param \Memsource\Model\TMMatchSettingsDto $tmMatch tmMatch
     *
     * @return $this
     */
    public function setTmMatch($tmMatch)
    {
        $this->container['tmMatch'] = $tmMatch;

        return $this;
    }

    /**
     * Gets ttx
     *
     * @return \Memsource\Model\TtxSettingsDto
     */
    public function getTtx()
    {
        return $this->container['ttx'];
    }

    /**
     * Sets ttx
     *
     * @param \Memsource\Model\TtxSettingsDto $ttx ttx
     *
     * @return $this
     */
    public function setTtx($ttx)
    {
        $this->container['ttx'] = $ttx;

        return $this;
    }

    /**
     * Gets txt
     *
     * @return \Memsource\Model\TxtSettingsDto
     */
    public function getTxt()
    {
        return $this->container['txt'];
    }

    /**
     * Sets txt
     *
     * @param \Memsource\Model\TxtSettingsDto $txt txt
     *
     * @return $this
     */
    public function setTxt($txt)
    {
        $this->container['txt'] = $txt;

        return $this;
    }

    /**
     * Gets xlf2
     *
     * @return \Memsource\Model\Xlf2SettingsDto
     */
    public function getXlf2()
    {
        return $this->container['xlf2'];
    }

    /**
     * Sets xlf2
     *
     * @param \Memsource\Model\Xlf2SettingsDto $xlf2 xlf2
     *
     * @return $this
     */
    public function setXlf2($xlf2)
    {
        $this->container['xlf2'] = $xlf2;

        return $this;
    }

    /**
     * Gets xlf
     *
     * @return \Memsource\Model\XlfSettingsDto
     */
    public function getXlf()
    {
        return $this->container['xlf'];
    }

    /**
     * Sets xlf
     *
     * @param \Memsource\Model\XlfSettingsDto $xlf xlf
     *
     * @return $this
     */
    public function setXlf($xlf)
    {
        $this->container['xlf'] = $xlf;

        return $this;
    }

    /**
     * Gets xls
     *
     * @return \Memsource\Model\XlsSettingsDto
     */
    public function getXls()
    {
        return $this->container['xls'];
    }

    /**
     * Sets xls
     *
     * @param \Memsource\Model\XlsSettingsDto $xls xls
     *
     * @return $this
     */
    public function setXls($xls)
    {
        $this->container['xls'] = $xls;

        return $this;
    }

    /**
     * Gets xml
     *
     * @return \Memsource\Model\XmlSettingsDto
     */
    public function getXml()
    {
        return $this->container['xml'];
    }

    /**
     * Sets xml
     *
     * @param \Memsource\Model\XmlSettingsDto $xml xml
     *
     * @return $this
     */
    public function setXml($xml)
    {
        $this->container['xml'] = $xml;

        return $this;
    }

    /**
     * Gets yaml
     *
     * @return \Memsource\Model\YamlSettingsDto
     */
    public function getYaml()
    {
        return $this->container['yaml'];
    }

    /**
     * Sets yaml
     *
     * @param \Memsource\Model\YamlSettingsDto $yaml yaml
     *
     * @return $this
     */
    public function setYaml($yaml)
    {
        $this->container['yaml'] = $yaml;

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



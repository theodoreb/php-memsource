<?php
/**
 * FileImportSettingsDto
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
 * FileImportSettingsDto Class Doc Comment
 *
 * @category Class
 * @package  Memsource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileImportSettingsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FileImportSettingsDto';

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
        'idml' => '\Memsource\Model\IdmlSettingsDto',
        'xls' => '\Memsource\Model\XlsSettingsDto',
        'multilingualXml' => '\Memsource\Model\MultilingualXmlSettingsDto',
        'php' => '\Memsource\Model\PhpSettingsDto',
        'resx' => '\Memsource\Model\ResxSettingsDto',
        'json' => '\Memsource\Model\JsonSettingsDto',
        'html' => '\Memsource\Model\HtmlSettingsDto',
        'multilingualXls' => '\Memsource\Model\MultilingualXlsSettingsDto',
        'csv' => '\Memsource\Model\CsvSettingsDto',
        'txt' => '\Memsource\Model\TxtSettingsDto',
        'xlf2' => '\Memsource\Model\Xlf2SettingsDto',
        'quarkTag' => '\Memsource\Model\QuarkTagSettingsDto',
        'pdf' => '\Memsource\Model\PdfSettingsDto',
        'tmMatch' => '\Memsource\Model\TMMatchSettingsDto',
        'xml' => '\Memsource\Model\XmlSettingsDto',
        'mif' => '\Memsource\Model\MifSettingsDto',
        'properties' => '\Memsource\Model\PropertiesSettingsDto',
        'doc' => '\Memsource\Model\DocSettingsDto',
        'xlf' => '\Memsource\Model\XlfSettingsDto',
        'sdlXlf' => '\Memsource\Model\SdlXlfSettingsDto',
        'ttx' => '\Memsource\Model\TtxSettingsDto',
        'ppt' => '\Memsource\Model\PptSettingsDto',
        'yaml' => '\Memsource\Model\YamlSettingsDto',
        'dita' => '\Memsource\Model\DitaSettingsDto',
        'docBook' => '\Memsource\Model\DocBookSettingsDto',
        'po' => '\Memsource\Model\PoSettingsDto',
        'mac' => '\Memsource\Model\MacSettingsDto',
        'md' => '\Memsource\Model\MdSettingsDto',
        'psd' => '\Memsource\Model\PsdSettingsDto',
        'segRule' => '\Memsource\Model\SegRuleReference'
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
        'idml' => null,
        'xls' => null,
        'multilingualXml' => null,
        'php' => null,
        'resx' => null,
        'json' => null,
        'html' => null,
        'multilingualXls' => null,
        'csv' => null,
        'txt' => null,
        'xlf2' => null,
        'quarkTag' => null,
        'pdf' => null,
        'tmMatch' => null,
        'xml' => null,
        'mif' => null,
        'properties' => null,
        'doc' => null,
        'xlf' => null,
        'sdlXlf' => null,
        'ttx' => null,
        'ppt' => null,
        'yaml' => null,
        'dita' => null,
        'docBook' => null,
        'po' => null,
        'mac' => null,
        'md' => null,
        'psd' => null,
        'segRule' => null
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
        'idml' => 'idml',
        'xls' => 'xls',
        'multilingualXml' => 'multilingualXml',
        'php' => 'php',
        'resx' => 'resx',
        'json' => 'json',
        'html' => 'html',
        'multilingualXls' => 'multilingualXls',
        'csv' => 'csv',
        'txt' => 'txt',
        'xlf2' => 'xlf2',
        'quarkTag' => 'quarkTag',
        'pdf' => 'pdf',
        'tmMatch' => 'tmMatch',
        'xml' => 'xml',
        'mif' => 'mif',
        'properties' => 'properties',
        'doc' => 'doc',
        'xlf' => 'xlf',
        'sdlXlf' => 'sdlXlf',
        'ttx' => 'ttx',
        'ppt' => 'ppt',
        'yaml' => 'yaml',
        'dita' => 'dita',
        'docBook' => 'docBook',
        'po' => 'po',
        'mac' => 'mac',
        'md' => 'md',
        'psd' => 'psd',
        'segRule' => 'segRule'
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
        'idml' => 'setIdml',
        'xls' => 'setXls',
        'multilingualXml' => 'setMultilingualXml',
        'php' => 'setPhp',
        'resx' => 'setResx',
        'json' => 'setJson',
        'html' => 'setHtml',
        'multilingualXls' => 'setMultilingualXls',
        'csv' => 'setCsv',
        'txt' => 'setTxt',
        'xlf2' => 'setXlf2',
        'quarkTag' => 'setQuarkTag',
        'pdf' => 'setPdf',
        'tmMatch' => 'setTmMatch',
        'xml' => 'setXml',
        'mif' => 'setMif',
        'properties' => 'setProperties',
        'doc' => 'setDoc',
        'xlf' => 'setXlf',
        'sdlXlf' => 'setSdlXlf',
        'ttx' => 'setTtx',
        'ppt' => 'setPpt',
        'yaml' => 'setYaml',
        'dita' => 'setDita',
        'docBook' => 'setDocBook',
        'po' => 'setPo',
        'mac' => 'setMac',
        'md' => 'setMd',
        'psd' => 'setPsd',
        'segRule' => 'setSegRule'
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
        'idml' => 'getIdml',
        'xls' => 'getXls',
        'multilingualXml' => 'getMultilingualXml',
        'php' => 'getPhp',
        'resx' => 'getResx',
        'json' => 'getJson',
        'html' => 'getHtml',
        'multilingualXls' => 'getMultilingualXls',
        'csv' => 'getCsv',
        'txt' => 'getTxt',
        'xlf2' => 'getXlf2',
        'quarkTag' => 'getQuarkTag',
        'pdf' => 'getPdf',
        'tmMatch' => 'getTmMatch',
        'xml' => 'getXml',
        'mif' => 'getMif',
        'properties' => 'getProperties',
        'doc' => 'getDoc',
        'xlf' => 'getXlf',
        'sdlXlf' => 'getSdlXlf',
        'ttx' => 'getTtx',
        'ppt' => 'getPpt',
        'yaml' => 'getYaml',
        'dita' => 'getDita',
        'docBook' => 'getDocBook',
        'po' => 'getPo',
        'mac' => 'getMac',
        'md' => 'getMd',
        'psd' => 'getPsd',
        'segRule' => 'getSegRule'
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
        $this->container['inputCharset'] = isset($data['inputCharset']) ? $data['inputCharset'] : null;
        $this->container['outputCharset'] = isset($data['outputCharset']) ? $data['outputCharset'] : null;
        $this->container['zipCharset'] = isset($data['zipCharset']) ? $data['zipCharset'] : null;
        $this->container['fileFormat'] = isset($data['fileFormat']) ? $data['fileFormat'] : null;
        $this->container['targetLength'] = isset($data['targetLength']) ? $data['targetLength'] : null;
        $this->container['targetLengthMax'] = isset($data['targetLengthMax']) ? $data['targetLengthMax'] : null;
        $this->container['targetLengthPercent'] = isset($data['targetLengthPercent']) ? $data['targetLengthPercent'] : null;
        $this->container['targetLengthPercentValue'] = isset($data['targetLengthPercentValue']) ? $data['targetLengthPercentValue'] : null;
        $this->container['idml'] = isset($data['idml']) ? $data['idml'] : null;
        $this->container['xls'] = isset($data['xls']) ? $data['xls'] : null;
        $this->container['multilingualXml'] = isset($data['multilingualXml']) ? $data['multilingualXml'] : null;
        $this->container['php'] = isset($data['php']) ? $data['php'] : null;
        $this->container['resx'] = isset($data['resx']) ? $data['resx'] : null;
        $this->container['json'] = isset($data['json']) ? $data['json'] : null;
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
        $this->container['multilingualXls'] = isset($data['multilingualXls']) ? $data['multilingualXls'] : null;
        $this->container['csv'] = isset($data['csv']) ? $data['csv'] : null;
        $this->container['txt'] = isset($data['txt']) ? $data['txt'] : null;
        $this->container['xlf2'] = isset($data['xlf2']) ? $data['xlf2'] : null;
        $this->container['quarkTag'] = isset($data['quarkTag']) ? $data['quarkTag'] : null;
        $this->container['pdf'] = isset($data['pdf']) ? $data['pdf'] : null;
        $this->container['tmMatch'] = isset($data['tmMatch']) ? $data['tmMatch'] : null;
        $this->container['xml'] = isset($data['xml']) ? $data['xml'] : null;
        $this->container['mif'] = isset($data['mif']) ? $data['mif'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['doc'] = isset($data['doc']) ? $data['doc'] : null;
        $this->container['xlf'] = isset($data['xlf']) ? $data['xlf'] : null;
        $this->container['sdlXlf'] = isset($data['sdlXlf']) ? $data['sdlXlf'] : null;
        $this->container['ttx'] = isset($data['ttx']) ? $data['ttx'] : null;
        $this->container['ppt'] = isset($data['ppt']) ? $data['ppt'] : null;
        $this->container['yaml'] = isset($data['yaml']) ? $data['yaml'] : null;
        $this->container['dita'] = isset($data['dita']) ? $data['dita'] : null;
        $this->container['docBook'] = isset($data['docBook']) ? $data['docBook'] : null;
        $this->container['po'] = isset($data['po']) ? $data['po'] : null;
        $this->container['mac'] = isset($data['mac']) ? $data['mac'] : null;
        $this->container['md'] = isset($data['md']) ? $data['md'] : null;
        $this->container['psd'] = isset($data['psd']) ? $data['psd'] : null;
        $this->container['segRule'] = isset($data['segRule']) ? $data['segRule'] : null;
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
     * @param string $fileFormat fileFormat
     *
     * @return $this
     */
    public function setFileFormat($fileFormat)
    {
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
     * @param int $targetLengthMax targetLengthMax
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
     * @param double $targetLengthPercentValue targetLengthPercentValue
     *
     * @return $this
     */
    public function setTargetLengthPercentValue($targetLengthPercentValue)
    {
        $this->container['targetLengthPercentValue'] = $targetLengthPercentValue;

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
     * Gets segRule
     *
     * @return \Memsource\Model\SegRuleReference
     */
    public function getSegRule()
    {
        return $this->container['segRule'];
    }

    /**
     * Sets segRule
     *
     * @param \Memsource\Model\SegRuleReference $segRule segRule
     *
     * @return $this
     */
    public function setSegRule($segRule)
    {
        $this->container['segRule'] = $segRule;

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


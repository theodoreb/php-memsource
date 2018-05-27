# Memsource\JobApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**comparePart**](JobApi.md#comparePart) | **POST** /api2/v1/projects/{projectUid}/jobs/compare | Compare jobs on workflow levels
[**completedFile**](JobApi.md#completedFile) | **GET** /api2/v1/projects/{projectUid}/jobs/{jobUid}/targetFile | Download target file
[**createJob**](JobApi.md#createJob) | **POST** /api2/v1/projects/{projectUid}/jobs | Create job
[**createTermByJob**](JobApi.md#createTermByJob) | **POST** /api2/v1/projects/{projectUid}/jobs/{jobUid}/termBases/createByJob | Create term in job&#39;s term bases
[**deleteAllTranslations**](JobApi.md#deleteAllTranslations) | **DELETE** /api2/v1/projects/{projectUid}/jobs/translations | Delete all translations
[**deleteParts**](JobApi.md#deleteParts) | **DELETE** /api2/v1/projects/{projectUid}/jobs/batch | Delete job (batch)
[**editPart**](JobApi.md#editPart) | **PUT** /api2/v1/projects/{projectUid}/jobs/{jobUid} | Edit job
[**editParts**](JobApi.md#editParts) | **PUT** /api2/v1/projects/{projectUid}/jobs/batch | Edit jobs (batch)
[**filePreview**](JobApi.md#filePreview) | **POST** /api2/v1/projects/{projectUid}/jobs/{jobUid}/preview | Download preview file
[**filePreviewJob**](JobApi.md#filePreviewJob) | **GET** /api2/v1/projects/{projectUid}/jobs/{jobUid}/preview | Download preview file
[**getBilingualFile**](JobApi.md#getBilingualFile) | **POST** /api2/v1/projects/{projectUid}/jobs/bilingualFile | Download bilingual file
[**getOriginalFile**](JobApi.md#getOriginalFile) | **GET** /api2/v1/projects/{projectUid}/jobs/{jobUid}/original | Download original file
[**getPart**](JobApi.md#getPart) | **GET** /api2/v1/projects/{projectUid}/jobs/{jobUid} | Get job
[**getTranslationResources**](JobApi.md#getTranslationResources) | **GET** /api2/v1/projects/{projectUid}/jobs/{jobUid}/translationResources | Get translation resources
[**listParts**](JobApi.md#listParts) | **GET** /api2/v1/projects/{projectUid}/jobs | List jobs
[**listPartsV2**](JobApi.md#listPartsV2) | **GET** /api2/v2/projects/{projectUid}/jobs | List jobs
[**listProviders**](JobApi.md#listProviders) | **POST** /api2/v1/projects/{projectUid}/jobs/{jobUid}/providers/suggest | Get suggested providers
[**listSegments**](JobApi.md#listSegments) | **GET** /api2/v1/projects/{projectUid}/jobs/{jobUid}/segments | Get segments
[**notifyAssigned**](JobApi.md#notifyAssigned) | **POST** /api2/v1/projects/{projectUid}/jobs/notifyAssigned | Notify assigned users
[**previewUrls**](JobApi.md#previewUrls) | **GET** /api2/v1/projects/{projectUid}/jobs/{jobUid}/previewUrl | Get PDF preview
[**pseudoTranslate**](JobApi.md#pseudoTranslate) | **POST** /api2/v1/projects/{projectUid}/jobs/pseudoTranslate | Pseudo-translate job
[**pseudoTranslateJobPart**](JobApi.md#pseudoTranslateJobPart) | **POST** /api2/v1/projects/{projectUid}/jobs/{jobUid}/pseudoTranslate | Pseudo-translates job
[**searchSegmentByJob**](JobApi.md#searchSegmentByJob) | **POST** /api2/v1/projects/{projectUid}/jobs/{jobUid}/transMemories/search | Search job&#39;s translation memories
[**searchTermsByJob**](JobApi.md#searchTermsByJob) | **POST** /api2/v1/projects/{projectUid}/jobs/{jobUid}/termBases/searchByJob | Search job&#39;s term bases
[**searchTermsInTextByJob**](JobApi.md#searchTermsInTextByJob) | **POST** /api2/v1/projects/{projectUid}/jobs/{jobUid}/termBases/searchInTextByJob | Search terms in text
[**setStatus**](JobApi.md#setStatus) | **POST** /api2/v1/projects/{projectUid}/jobs/{jobUid}/setStatus | Edit job status
[**split**](JobApi.md#split) | **POST** /api2/v1/projects/{projectUid}/jobs/{jobUid}/split | Split job
[**statusChanges**](JobApi.md#statusChanges) | **GET** /api2/v1/projects/{projectUid}/jobs/{jobUid}/statusChanges | Get status changes
[**uploadBilingualFile**](JobApi.md#uploadBilingualFile) | **PUT** /api2/v1/bilingualFiles | Upload bilingual file
[**wildCardSearchByJob**](JobApi.md#wildCardSearchByJob) | **POST** /api2/v1/projects/{projectUid}/jobs/{jobUid}/transMemories/wildCardSearch | Wildcard search job&#39;s translation memories


# **comparePart**
> \Memsource\Model\ComparedSegmentsDto comparePart($projectUid, $body, $atWorkflowLevel, $withWorkflowLevel)

Compare jobs on workflow levels



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\JobPartReadyReferences(); // \Memsource\Model\JobPartReadyReferences | 
$atWorkflowLevel = 1; // int | 
$withWorkflowLevel = 1; // int | 

try {
    $result = $apiInstance->comparePart($projectUid, $body, $atWorkflowLevel, $withWorkflowLevel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->comparePart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\JobPartReadyReferences**](../Model/JobPartReadyReferences.md)|  | [optional]
 **atWorkflowLevel** | **int**|  | [optional] [default to 1]
 **withWorkflowLevel** | **int**|  | [optional] [default to 1]

### Return type

[**\Memsource\Model\ComparedSegmentsDto**](../Model/ComparedSegmentsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **completedFile**
> completedFile($projectUid, $jobUid, $format)

Download target file

This call will return target file with translation. This means even for other jobs that were created via 'split jobs' etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 
$format = "ORIGINAL"; // string | 

try {
    $apiInstance->completedFile($projectUid, $jobUid, $format);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->completedFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |
 **format** | **string**|  | [optional] [default to ORIGINAL]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createJob**
> \Memsource\Model\JobListDto createJob($projectUid, $memsource, $contentDisposition, $body)

Create job

Please supply job metadata in `Memsource` header.  Accepted metadata:     - `targetLangs` - **required**   - `due` - ISO 8601   - `workflowSettings` - project with workflow - see examples bellow   - `assignments` - project without workflows - see examples bellow   - `importSettings` - re-usable import settings - see [Create import settings](#operation/createImportSettings)   - `useProjectFileImportSettings` - mutually exclusive with importSettings   - `callbackUrl` - consumer callback   - `path` - original destination directory  Create and assign job in project without workflow step: ```  {      \"targetLangs\":[         \"cs_cz\"    ],    \"callbackUrl\":\"https://my-shiny-service.com/consumeCallback\",    \"importSettings\":{       \"uid\":\"abcd123\"      },    \"due\":\"2007-12-03T10:15:30.00Z\",    \"path\": \"destination directory\",    \"assignments\":[         {            \"targetLang\":\"cs_cz\",          \"providers\":[                         {                  \"id\":\"4321\",                \"type\":\"USER\"             }          ]       }    ] } ```  Create and assign job in project with workflow step: ```  {       \"targetLangs\":[           \"de\"     ],     \"useProjectFileImportSettings\":\"true\",     \"workflowSettings\":[           {               \"id\":\"64\",             \"due\":\"2007-12-03T10:15:30.00Z\",             \"assignments\":[                   {                       \"targetLang\":\"de\",                     \"providers\":[                           {                               \"id\":\"3\",                             \"type\":\"VENDOR\"                         }                     ]                 }             ]         }     ] } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$memsource = "memsource_example"; // string | 
$contentDisposition = "contentDisposition_example"; // string | 
$body = new \Memsource\Model\InputStream(); // \Memsource\Model\InputStream | 

try {
    $result = $apiInstance->createJob($projectUid, $memsource, $contentDisposition, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->createJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **memsource** | **string**|  | [optional]
 **contentDisposition** | **string**|  | [optional]
 **body** | [**\Memsource\Model\InputStream**](../Model/InputStream.md)|  | [optional]

### Return type

[**\Memsource\Model\JobListDto**](../Model/JobListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTermByJob**
> \Memsource\Model\TermPairDto createTermByJob($jobUid, $projectUid, $body)

Create term in job's term bases

Create new term in the write term base assigned to the job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$jobUid = "jobUid_example"; // string | 
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\CreateTermsDto(); // \Memsource\Model\CreateTermsDto | 

try {
    $result = $apiInstance->createTermByJob($jobUid, $projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->createTermByJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobUid** | **string**|  |
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\CreateTermsDto**](../Model/CreateTermsDto.md)|  | [optional]

### Return type

[**\Memsource\Model\TermPairDto**](../Model/TermPairDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllTranslations**
> deleteAllTranslations($projectUid, $body)

Delete all translations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\JobPartReadyReferences(); // \Memsource\Model\JobPartReadyReferences | 

try {
    $apiInstance->deleteAllTranslations($projectUid, $body);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->deleteAllTranslations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\JobPartReadyReferences**](../Model/JobPartReadyReferences.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteParts**
> deleteParts($projectUid, $body, $purge)

Delete job (batch)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\JobPartReferences(); // \Memsource\Model\JobPartReferences | 
$purge = false; // bool | 

try {
    $apiInstance->deleteParts($projectUid, $body, $purge);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->deleteParts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\JobPartReferences**](../Model/JobPartReferences.md)|  | [optional]
 **purge** | **bool**|  | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPart**
> \Memsource\Model\JobPartExtendedDto editPart($projectUid, $jobUid, $body)

Edit job



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 
$body = new \Memsource\Model\JobPartUpdateSingleDto(); // \Memsource\Model\JobPartUpdateSingleDto | 

try {
    $result = $apiInstance->editPart($projectUid, $jobUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->editPart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |
 **body** | [**\Memsource\Model\JobPartUpdateSingleDto**](../Model/JobPartUpdateSingleDto.md)|  | [optional]

### Return type

[**\Memsource\Model\JobPartExtendedDto**](../Model/JobPartExtendedDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editParts**
> \Memsource\Model\JobPartsDto editParts($projectUid, $body)

Edit jobs (batch)

Returns only jobs which were updated by the batch operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\JobPartUpdateBatchDto(); // \Memsource\Model\JobPartUpdateBatchDto | 

try {
    $result = $apiInstance->editParts($projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->editParts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\JobPartUpdateBatchDto**](../Model/JobPartUpdateBatchDto.md)|  | [optional]

### Return type

[**\Memsource\Model\JobPartsDto**](../Model/JobPartsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filePreview**
> filePreview($projectUid, $jobUid, $body)

Download preview file

Takes bilingual file (.mxliff only) as argument. If not passed, data will be taken from database

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 
$body = new \Memsource\Model\InputStream(); // \Memsource\Model\InputStream | 

try {
    $apiInstance->filePreview($projectUid, $jobUid, $body);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->filePreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |
 **body** | [**\Memsource\Model\InputStream**](../Model/InputStream.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filePreviewJob**
> filePreviewJob($projectUid, $jobUid)

Download preview file



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 

try {
    $apiInstance->filePreviewJob($projectUid, $jobUid);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->filePreviewJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBilingualFile**
> getBilingualFile($projectUid, $body, $format)

Download bilingual file



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\JobPartReadyReferences(); // \Memsource\Model\JobPartReadyReferences | 
$format = "MXLF"; // string | 

try {
    $apiInstance->getBilingualFile($projectUid, $body, $format);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getBilingualFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\JobPartReadyReferences**](../Model/JobPartReadyReferences.md)|  | [optional]
 **format** | **string**|  | [optional] [default to MXLF]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOriginalFile**
> getOriginalFile($projectUid, $jobUid)

Download original file



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 

try {
    $apiInstance->getOriginalFile($projectUid, $jobUid);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getOriginalFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPart**
> \Memsource\Model\JobPartExtendedDto getPart($projectUid, $jobUid)

Get job



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 

try {
    $result = $apiInstance->getPart($projectUid, $jobUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getPart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |

### Return type

[**\Memsource\Model\JobPartExtendedDto**](../Model/JobPartExtendedDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranslationResources**
> \Memsource\Model\TranslationResourcesDto getTranslationResources($projectUid, $jobUid)

Get translation resources



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 

try {
    $result = $apiInstance->getTranslationResources($projectUid, $jobUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getTranslationResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |

### Return type

[**\Memsource\Model\TranslationResourcesDto**](../Model/TranslationResourcesDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listParts**
> \Memsource\Model\PageDtoJobPartReference listParts($projectUid, $pageNumber, $pageSize, $count, $workflowLevel, $status, $assignedLinguist, $dueInHours, $filename, $targetLang)

List jobs



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$pageNumber = 0; // int | 
$pageSize = 50; // int | 
$count = false; // bool | 
$workflowLevel = 1; // int | 
$status = array("status_example"); // string[] | 
$assignedLinguist = 789; // int | 
$dueInHours = 56; // int | 
$filename = "filename_example"; // string | 
$targetLang = "targetLang_example"; // string | 

try {
    $result = $apiInstance->listParts($projectUid, $pageNumber, $pageSize, $count, $workflowLevel, $status, $assignedLinguist, $dueInHours, $filename, $targetLang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->listParts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **pageNumber** | **int**|  | [optional] [default to 0]
 **pageSize** | **int**|  | [optional] [default to 50]
 **count** | **bool**|  | [optional] [default to false]
 **workflowLevel** | **int**|  | [optional] [default to 1]
 **status** | [**string[]**](../Model/string.md)|  | [optional]
 **assignedLinguist** | **int**|  | [optional]
 **dueInHours** | **int**|  | [optional]
 **filename** | **string**|  | [optional]
 **targetLang** | **string**|  | [optional]

### Return type

[**\Memsource\Model\PageDtoJobPartReference**](../Model/PageDtoJobPartReference.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPartsV2**
> \Memsource\Model\PageDtoJobPartReferenceV2 listPartsV2($projectUid, $pageNumber, $pageSize, $count, $workflowLevel, $status, $assignedUser, $dueInHours, $filename, $targetLang)

List jobs



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$pageNumber = 0; // int | 
$pageSize = 50; // int | 
$count = false; // bool | 
$workflowLevel = 1; // int | 
$status = array("status_example"); // string[] | 
$assignedUser = 789; // int | 
$dueInHours = 56; // int | 
$filename = "filename_example"; // string | 
$targetLang = "targetLang_example"; // string | 

try {
    $result = $apiInstance->listPartsV2($projectUid, $pageNumber, $pageSize, $count, $workflowLevel, $status, $assignedUser, $dueInHours, $filename, $targetLang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->listPartsV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **pageNumber** | **int**|  | [optional] [default to 0]
 **pageSize** | **int**|  | [optional] [default to 50]
 **count** | **bool**|  | [optional] [default to false]
 **workflowLevel** | **int**|  | [optional] [default to 1]
 **status** | [**string[]**](../Model/string.md)|  | [optional]
 **assignedUser** | **int**|  | [optional]
 **dueInHours** | **int**|  | [optional]
 **filename** | **string**|  | [optional]
 **targetLang** | **string**|  | [optional]

### Return type

[**\Memsource\Model\PageDtoJobPartReferenceV2**](../Model/PageDtoJobPartReferenceV2.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProviders**
> \Memsource\Model\ProviderListDto listProviders($projectUid, $jobUid)

Get suggested providers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 

try {
    $result = $apiInstance->listProviders($projectUid, $jobUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->listProviders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |

### Return type

[**\Memsource\Model\ProviderListDto**](../Model/ProviderListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSegments**
> \Memsource\Model\SegmentListDto listSegments($projectUid, $jobUid, $beginIndex, $endIndex)

Get segments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 
$beginIndex = 0; // int | 
$endIndex = 0; // int | 

try {
    $result = $apiInstance->listSegments($projectUid, $jobUid, $beginIndex, $endIndex);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->listSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |
 **beginIndex** | **int**|  | [optional] [default to 0]
 **endIndex** | **int**|  | [optional] [default to 0]

### Return type

[**\Memsource\Model\SegmentListDto**](../Model/SegmentListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notifyAssigned**
> notifyAssigned($projectUid, $body)

Notify assigned users



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\NotifyJobPartsRequestDto(); // \Memsource\Model\NotifyJobPartsRequestDto | 

try {
    $apiInstance->notifyAssigned($projectUid, $body);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->notifyAssigned: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\NotifyJobPartsRequestDto**](../Model/NotifyJobPartsRequestDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **previewUrls**
> \Memsource\Model\PreviewUrlsDto previewUrls($projectUid, $jobUid, $workflowLevel)

Get PDF preview



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 
$workflowLevel = 1; // int | 

try {
    $result = $apiInstance->previewUrls($projectUid, $jobUid, $workflowLevel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->previewUrls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |
 **workflowLevel** | **int**|  | [optional] [default to 1]

### Return type

[**\Memsource\Model\PreviewUrlsDto**](../Model/PreviewUrlsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pseudoTranslate**
> pseudoTranslate($projectUid, $body, $replacement, $prefix, $suffix, $length)

Pseudo-translate job



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\JobPartReadyReferences(); // \Memsource\Model\JobPartReadyReferences | 
$replacement = "$"; // string | 
$prefix = "prefix_example"; // string | 
$suffix = "suffix_example"; // string | 
$length = 1.0; // double | 

try {
    $apiInstance->pseudoTranslate($projectUid, $body, $replacement, $prefix, $suffix, $length);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->pseudoTranslate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\JobPartReadyReferences**](../Model/JobPartReadyReferences.md)|  | [optional]
 **replacement** | **string**|  | [optional] [default to $]
 **prefix** | **string**|  | [optional]
 **suffix** | **string**|  | [optional]
 **length** | **double**|  | [optional] [default to 1.0]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pseudoTranslateJobPart**
> pseudoTranslateJobPart($projectUid, $jobUid, $body)

Pseudo-translates job



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 
$body = new \Memsource\Model\PseudoTranslateActionDto(); // \Memsource\Model\PseudoTranslateActionDto | 

try {
    $apiInstance->pseudoTranslateJobPart($projectUid, $jobUid, $body);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->pseudoTranslateJobPart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |
 **body** | [**\Memsource\Model\PseudoTranslateActionDto**](../Model/PseudoTranslateActionDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchSegmentByJob**
> \Memsource\Model\SearchResponseListDto searchSegmentByJob($jobUid, $body)

Search job's translation memories



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$jobUid = "jobUid_example"; // string | 
$body = new \Memsource\Model\SearchByJobRequestDto(); // \Memsource\Model\SearchByJobRequestDto | 

try {
    $result = $apiInstance->searchSegmentByJob($jobUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->searchSegmentByJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobUid** | **string**|  |
 **body** | [**\Memsource\Model\SearchByJobRequestDto**](../Model/SearchByJobRequestDto.md)|  | [optional]

### Return type

[**\Memsource\Model\SearchResponseListDto**](../Model/SearchResponseListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchTermsByJob**
> \Memsource\Model\SearchResponseListDto searchTermsByJob($jobUid, $projectUid, $body)

Search job's term bases

Search all read term bases assigned to the job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$jobUid = "jobUid_example"; // string | 
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\SearchByJobRequestDto(); // \Memsource\Model\SearchByJobRequestDto | 

try {
    $result = $apiInstance->searchTermsByJob($jobUid, $projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->searchTermsByJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobUid** | **string**|  |
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\SearchByJobRequestDto**](../Model/SearchByJobRequestDto.md)|  | [optional]

### Return type

[**\Memsource\Model\SearchResponseListDto**](../Model/SearchResponseListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchTermsInTextByJob**
> \Memsource\Model\SearchInTextResponseListDto searchTermsInTextByJob($jobUid, $projectUid, $body)

Search terms in text

Search in text in all read term bases assigned to the job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$jobUid = "jobUid_example"; // string | 
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\SearchInTextByJobRequestDto(); // \Memsource\Model\SearchInTextByJobRequestDto | 

try {
    $result = $apiInstance->searchTermsInTextByJob($jobUid, $projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->searchTermsInTextByJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobUid** | **string**|  |
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\SearchInTextByJobRequestDto**](../Model/SearchInTextByJobRequestDto.md)|  | [optional]

### Return type

[**\Memsource\Model\SearchInTextResponseListDto**](../Model/SearchInTextResponseListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setStatus**
> setStatus($projectUid, $jobUid, $body)

Edit job status



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 
$body = new \Memsource\Model\JobStatusChangeActionDto(); // \Memsource\Model\JobStatusChangeActionDto | 

try {
    $apiInstance->setStatus($projectUid, $jobUid, $body);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->setStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |
 **body** | [**\Memsource\Model\JobStatusChangeActionDto**](../Model/JobStatusChangeActionDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **split**
> \Memsource\Model\JobPartsDto split($projectUid, $jobUid, $body)

Split job

Splits job part by segmentOrdinals or partCount or by partSize

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 
$body = new \Memsource\Model\SplitJobActionDto(); // \Memsource\Model\SplitJobActionDto | 

try {
    $result = $apiInstance->split($projectUid, $jobUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->split: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |
 **body** | [**\Memsource\Model\SplitJobActionDto**](../Model/SplitJobActionDto.md)|  | [optional]

### Return type

[**\Memsource\Model\JobPartsDto**](../Model/JobPartsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statusChanges**
> \Memsource\Model\JobPartStatusChangesDto statusChanges($projectUid, $jobUid)

Get status changes



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 

try {
    $result = $apiInstance->statusChanges($projectUid, $jobUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->statusChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |

### Return type

[**\Memsource\Model\JobPartStatusChangesDto**](../Model/JobPartStatusChangesDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadBilingualFile**
> \Memsource\Model\JobPartsDto uploadBilingualFile($body, $format, $saveToTransMemory, $setCompleted)

Upload bilingual file

Returns updated job parts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\InputStream(); // \Memsource\Model\InputStream | 
$format = "MXLF"; // string | 
$saveToTransMemory = "Confirmed"; // string | 
$setCompleted = false; // bool | 

try {
    $result = $apiInstance->uploadBilingualFile($body, $format, $saveToTransMemory, $setCompleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->uploadBilingualFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\InputStream**](../Model/InputStream.md)|  | [optional]
 **format** | **string**|  | [optional] [default to MXLF]
 **saveToTransMemory** | **string**|  | [optional] [default to Confirmed]
 **setCompleted** | **bool**|  | [optional] [default to false]

### Return type

[**\Memsource\Model\JobPartsDto**](../Model/JobPartsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **wildCardSearchByJob**
> \Memsource\Model\SearchResponseListDto wildCardSearchByJob($jobUid, $body)

Wildcard search job's translation memories



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$jobUid = "jobUid_example"; // string | 
$body = new \Memsource\Model\WildCardSearchByProjectRequestDto(); // \Memsource\Model\WildCardSearchByProjectRequestDto | 

try {
    $result = $apiInstance->wildCardSearchByJob($jobUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->wildCardSearchByJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobUid** | **string**|  |
 **body** | [**\Memsource\Model\WildCardSearchByProjectRequestDto**](../Model/WildCardSearchByProjectRequestDto.md)|  | [optional]

### Return type

[**\Memsource\Model\SearchResponseListDto**](../Model/SearchResponseListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


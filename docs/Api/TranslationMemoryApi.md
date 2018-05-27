# Memsource\TranslationMemoryApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTransMemory**](TranslationMemoryApi.md#createTransMemory) | **POST** /api2/v1/transMemories | Create translation memory
[**deleteSourceAndTranslations**](TranslationMemoryApi.md#deleteSourceAndTranslations) | **DELETE** /api2/v1/transMemories/{transMemoryId}/segments/{segmentId} | Delete both source and translation
[**deleteTransMemory**](TranslationMemoryApi.md#deleteTransMemory) | **DELETE** /api2/v1/transMemories/{transMemoryId} | Delete translation memory
[**deleteTranslation**](TranslationMemoryApi.md#deleteTranslation) | **DELETE** /api2/v1/transMemories/{transMemoryId}/segments/{segmentId}/lang/{lang} | Delete segment of given language
[**downloadSearchResult**](TranslationMemoryApi.md#downloadSearchResult) | **GET** /api2/v1/transMemories/downloadExport/{asyncRequestId} | Download export
[**editTransMemory**](TranslationMemoryApi.md#editTransMemory) | **PUT** /api2/v1/transMemories/{transMemoryId} | Edit translation memory
[**export**](TranslationMemoryApi.md#export) | **GET** /api2/v1/transMemories/{transMemoryId}/export | Export translation memory
[**exportByQueryAsync**](TranslationMemoryApi.md#exportByQueryAsync) | **POST** /api2/v1/transMemories/{transMemoryId}/exportByQueryAsync | Search translation memory
[**getTransMemory**](TranslationMemoryApi.md#getTransMemory) | **GET** /api2/v1/transMemories/{transMemoryId} | Get translation memory
[**getTranslationResources**](TranslationMemoryApi.md#getTranslationResources) | **GET** /api2/v1/projects/{projectUid}/jobs/{jobUid}/translationResources | Get translation resources
[**importTransMemory**](TranslationMemoryApi.md#importTransMemory) | **POST** /api2/v1/transMemories/{transMemoryId}/import | Import segments
[**listTransMemories**](TranslationMemoryApi.md#listTransMemories) | **GET** /api2/v1/transMemories | List translation memories
[**search**](TranslationMemoryApi.md#search) | **POST** /api2/v1/transMemories/{transMemoryId}/search | Search translation memory (sync)
[**searchSegmentByJob**](TranslationMemoryApi.md#searchSegmentByJob) | **POST** /api2/v1/projects/{projectUid}/jobs/{jobUid}/transMemories/search | Search job&#39;s translation memories
[**updateTranslation**](TranslationMemoryApi.md#updateTranslation) | **PUT** /api2/v1/transMemories/{transMemoryId}/segments/{segmentId} | Edit segment
[**wildCardSearchByJob**](TranslationMemoryApi.md#wildCardSearchByJob) | **POST** /api2/v1/projects/{projectUid}/jobs/{jobUid}/transMemories/wildCardSearch | Wildcard search job&#39;s translation memories
[**wildcardSearch**](TranslationMemoryApi.md#wildcardSearch) | **POST** /api2/v1/transMemories/{transMemoryId}/wildCardSearch | Wildcard search


# **createTransMemory**
> \Memsource\Model\TransMemoryDto createTransMemory($body)

Create translation memory



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TranslationMemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\TransMemoryCreateDto(); // \Memsource\Model\TransMemoryCreateDto | 

try {
    $result = $apiInstance->createTransMemory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoryApi->createTransMemory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\TransMemoryCreateDto**](../Model/TransMemoryCreateDto.md)|  | [optional]

### Return type

[**\Memsource\Model\TransMemoryDto**](../Model/TransMemoryDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSourceAndTranslations**
> deleteSourceAndTranslations($transMemoryId, $segmentId)

Delete both source and translation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TranslationMemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transMemoryId = 789; // int | 
$segmentId = "segmentId_example"; // string | 

try {
    $apiInstance->deleteSourceAndTranslations($transMemoryId, $segmentId);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoryApi->deleteSourceAndTranslations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transMemoryId** | **int**|  |
 **segmentId** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTransMemory**
> deleteTransMemory($transMemoryId, $purge)

Delete translation memory



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TranslationMemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transMemoryId = 789; // int | 
$purge = false; // bool | 

try {
    $apiInstance->deleteTransMemory($transMemoryId, $purge);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoryApi->deleteTransMemory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transMemoryId** | **int**|  |
 **purge** | **bool**|  | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranslation**
> deleteTranslation($transMemoryId, $segmentId, $lang)

Delete segment of given language



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TranslationMemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transMemoryId = 789; // int | 
$segmentId = "segmentId_example"; // string | 
$lang = "lang_example"; // string | 

try {
    $apiInstance->deleteTranslation($transMemoryId, $segmentId, $lang);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoryApi->deleteTranslation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transMemoryId** | **int**|  |
 **segmentId** | **string**|  |
 **lang** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadSearchResult**
> downloadSearchResult($asyncRequestId, $format)

Download export



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TranslationMemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asyncRequestId = "asyncRequestId_example"; // string | Request ID
$format = "TMX"; // string | 

try {
    $apiInstance->downloadSearchResult($asyncRequestId, $format);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoryApi->downloadSearchResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asyncRequestId** | **string**| Request ID |
 **format** | **string**|  | [optional] [default to TMX]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editTransMemory**
> \Memsource\Model\TransMemoryDto editTransMemory($transMemoryId, $body)

Edit translation memory



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TranslationMemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transMemoryId = 789; // int | 
$body = new \Memsource\Model\TransMemoryEditDto(); // \Memsource\Model\TransMemoryEditDto | 

try {
    $result = $apiInstance->editTransMemory($transMemoryId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoryApi->editTransMemory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transMemoryId** | **int**|  |
 **body** | [**\Memsource\Model\TransMemoryEditDto**](../Model/TransMemoryEditDto.md)|  | [optional]

### Return type

[**\Memsource\Model\TransMemoryDto**](../Model/TransMemoryDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **export**
> export($transMemoryId, $format, $targetLang)

Export translation memory



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TranslationMemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transMemoryId = 789; // int | 
$format = "TMX"; // string | 
$targetLang = "targetLang_example"; // string | 

try {
    $apiInstance->export($transMemoryId, $format, $targetLang);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoryApi->export: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transMemoryId** | **int**|  |
 **format** | **string**|  | [optional] [default to TMX]
 **targetLang** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportByQueryAsync**
> \Memsource\Model\AsyncExportTMResponseDto exportByQueryAsync($transMemoryId, $body)

Search translation memory

Use GET searchExport/{asyncRequestId} to download result

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TranslationMemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transMemoryId = 789; // int | 
$body = new \Memsource\Model\ExportByQueryDto(); // \Memsource\Model\ExportByQueryDto | 

try {
    $result = $apiInstance->exportByQueryAsync($transMemoryId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoryApi->exportByQueryAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transMemoryId** | **int**|  |
 **body** | [**\Memsource\Model\ExportByQueryDto**](../Model/ExportByQueryDto.md)|  | [optional]

### Return type

[**\Memsource\Model\AsyncExportTMResponseDto**](../Model/AsyncExportTMResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransMemory**
> \Memsource\Model\TransMemoryDto getTransMemory($transMemoryId)

Get translation memory



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TranslationMemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transMemoryId = 789; // int | 

try {
    $result = $apiInstance->getTransMemory($transMemoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoryApi->getTransMemory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transMemoryId** | **int**|  |

### Return type

[**\Memsource\Model\TransMemoryDto**](../Model/TransMemoryDto.md)

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

$apiInstance = new Memsource\Api\TranslationMemoryApi(
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
    echo 'Exception when calling TranslationMemoryApi->getTranslationResources: ', $e->getMessage(), PHP_EOL;
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

# **importTransMemory**
> \Memsource\Model\ImportResponse importTransMemory($transMemoryId, $body, $contentDisposition, $strictLangMatching, $stripNativeCodes, $excludeNotConfirmedSegments)

Import segments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TranslationMemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transMemoryId = 789; // int | 
$body = new \Memsource\Model\InputStream(); // \Memsource\Model\InputStream | 
$contentDisposition = "contentDisposition_example"; // string | 
$strictLangMatching = false; // bool | 
$stripNativeCodes = true; // bool | 
$excludeNotConfirmedSegments = false; // bool | 

try {
    $result = $apiInstance->importTransMemory($transMemoryId, $body, $contentDisposition, $strictLangMatching, $stripNativeCodes, $excludeNotConfirmedSegments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoryApi->importTransMemory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transMemoryId** | **int**|  |
 **body** | [**\Memsource\Model\InputStream**](../Model/InputStream.md)|  | [optional]
 **contentDisposition** | **string**|  | [optional]
 **strictLangMatching** | **bool**|  | [optional] [default to false]
 **stripNativeCodes** | **bool**|  | [optional] [default to true]
 **excludeNotConfirmedSegments** | **bool**|  | [optional] [default to false]

### Return type

[**\Memsource\Model\ImportResponse**](../Model/ImportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTransMemories**
> \Memsource\Model\PageDtoTransMemoryDto listTransMemories($name, $sourceLang, $targetLang, $clientId, $domainId, $subDomainId, $businessUnitId, $pageNumber, $pageSize)

List translation memories



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TranslationMemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sourceLang = "sourceLang_example"; // string | 
$targetLang = "targetLang_example"; // string | 
$clientId = "clientId_example"; // string | 
$domainId = "domainId_example"; // string | 
$subDomainId = "subDomainId_example"; // string | 
$businessUnitId = "businessUnitId_example"; // string | 
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->listTransMemories($name, $sourceLang, $targetLang, $clientId, $domainId, $subDomainId, $businessUnitId, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoryApi->listTransMemories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **sourceLang** | **string**|  | [optional]
 **targetLang** | **string**|  | [optional]
 **clientId** | **string**|  | [optional]
 **domainId** | **string**|  | [optional]
 **subDomainId** | **string**|  | [optional]
 **businessUnitId** | **string**|  | [optional]
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoTransMemoryDto**](../Model/PageDtoTransMemoryDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Memsource\Model\SearchResponseListDto search($transMemoryId, $body)

Search translation memory (sync)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TranslationMemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transMemoryId = 789; // int | 
$body = new \Memsource\Model\SearchRequestDto(); // \Memsource\Model\SearchRequestDto | 

try {
    $result = $apiInstance->search($transMemoryId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoryApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transMemoryId** | **int**|  |
 **body** | [**\Memsource\Model\SearchRequestDto**](../Model/SearchRequestDto.md)|  | [optional]

### Return type

[**\Memsource\Model\SearchResponseListDto**](../Model/SearchResponseListDto.md)

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

$apiInstance = new Memsource\Api\TranslationMemoryApi(
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
    echo 'Exception when calling TranslationMemoryApi->searchSegmentByJob: ', $e->getMessage(), PHP_EOL;
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

# **updateTranslation**
> updateTranslation($transMemoryId, $segmentId, $body)

Edit segment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TranslationMemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transMemoryId = 789; // int | 
$segmentId = "segmentId_example"; // string | 
$body = new \Memsource\Model\TranslationDto(); // \Memsource\Model\TranslationDto | 

try {
    $apiInstance->updateTranslation($transMemoryId, $segmentId, $body);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoryApi->updateTranslation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transMemoryId** | **int**|  |
 **segmentId** | **string**|  |
 **body** | [**\Memsource\Model\TranslationDto**](../Model/TranslationDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **wildCardSearchByJob**
> \Memsource\Model\SearchResponseListDto wildCardSearchByJob($jobUid, $body)

Wildcard search job's translation memories



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TranslationMemoryApi(
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
    echo 'Exception when calling TranslationMemoryApi->wildCardSearchByJob: ', $e->getMessage(), PHP_EOL;
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

# **wildcardSearch**
> \Memsource\Model\SearchResponseListDto wildcardSearch($transMemoryId, $body)

Wildcard search



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TranslationMemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transMemoryId = 789; // int | 
$body = new \Memsource\Model\WildCardSearchRequestDto(); // \Memsource\Model\WildCardSearchRequestDto | 

try {
    $result = $apiInstance->wildcardSearch($transMemoryId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationMemoryApi->wildcardSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transMemoryId** | **int**|  |
 **body** | [**\Memsource\Model\WildCardSearchRequestDto**](../Model/WildCardSearchRequestDto.md)|  | [optional]

### Return type

[**\Memsource\Model\SearchResponseListDto**](../Model/SearchResponseListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


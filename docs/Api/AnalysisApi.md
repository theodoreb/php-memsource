# Memsource\AnalysisApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchEditAnalyses**](AnalysisApi.md#batchEditAnalyses) | **PUT** /api2/v1/analyses/bulk | Edit analyses (batch)
[**bulkDeleteAnalyses**](AnalysisApi.md#bulkDeleteAnalyses) | **DELETE** /api2/v1/analyses/bulk | Delete analyses (batch)
[**createAnalyseAsync**](AnalysisApi.md#createAnalyseAsync) | **POST** /api2/v1/analyses | Create analysis
[**delete**](AnalysisApi.md#delete) | **DELETE** /api2/v1/analyses/{analyseId} | Delete analysis
[**downloadAnalyse**](AnalysisApi.md#downloadAnalyse) | **GET** /api2/v1/analyses/{analyseId}/download | Download analysis
[**getAnalyse**](AnalysisApi.md#getAnalyse) | **GET** /api2/v1/analyses/{analyseId} | Get analysis
[**getAnalyseLanguagePart**](AnalysisApi.md#getAnalyseLanguagePart) | **GET** /api2/v1/analyses/{analyseId}/analyseLanguageParts/{analyseLanguagePartId} | Get analysis language part
[**getJobPartAnalyse**](AnalysisApi.md#getJobPartAnalyse) | **GET** /api2/v1/analyses/{analyseId}/jobs/{jobUid} | Get jobs analysis
[**listByProject**](AnalysisApi.md#listByProject) | **GET** /api2/v1/projects/{projectUid}/analyses | List analyses by project
[**listJobParts**](AnalysisApi.md#listJobParts) | **GET** /api2/v1/analyses/{analyseId}/analyseLanguageParts/{analyseLanguagePartId}/jobs | List jobs of analyses


# **batchEditAnalyses**
> \Memsource\Model\AnalyseDto[] batchEditAnalyses($body)

Edit analyses (batch)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\AnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\BulkEditAnalyseDto(); // \Memsource\Model\BulkEditAnalyseDto | 

try {
    $result = $apiInstance->batchEditAnalyses($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->batchEditAnalyses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\BulkEditAnalyseDto**](../Model/BulkEditAnalyseDto.md)|  | [optional]

### Return type

[**\Memsource\Model\AnalyseDto[]**](../Model/AnalyseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkDeleteAnalyses**
> bulkDeleteAnalyses($body)

Delete analyses (batch)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\AnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\BulkDeleteAnalyseDto(); // \Memsource\Model\BulkDeleteAnalyseDto | 

try {
    $apiInstance->bulkDeleteAnalyses($body);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->bulkDeleteAnalyses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\BulkDeleteAnalyseDto**](../Model/BulkDeleteAnalyseDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAnalyseAsync**
> \Memsource\Model\AsyncAnalyseResponseDto createAnalyseAsync($body)

Create analysis



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\AnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\CreateAnalyseAsyncDto(); // \Memsource\Model\CreateAnalyseAsyncDto | 

try {
    $result = $apiInstance->createAnalyseAsync($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->createAnalyseAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\CreateAnalyseAsyncDto**](../Model/CreateAnalyseAsyncDto.md)|  | [optional]

### Return type

[**\Memsource\Model\AsyncAnalyseResponseDto**](../Model/AsyncAnalyseResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> delete($analyseId, $purge)

Delete analysis



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\AnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$analyseId = "analyseId_example"; // string | 
$purge = true; // bool | 

try {
    $apiInstance->delete($analyseId, $purge);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **analyseId** | **string**|  |
 **purge** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadAnalyse**
> downloadAnalyse($analyseId, $format)

Download analysis



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\AnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$analyseId = 789; // int | 
$format = "format_example"; // string | 

try {
    $apiInstance->downloadAnalyse($analyseId, $format);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->downloadAnalyse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **analyseId** | **int**|  |
 **format** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyse**
> \Memsource\Model\AnalyseDto getAnalyse($analyseId)

Get analysis



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\AnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$analyseId = 789; // int | 

try {
    $result = $apiInstance->getAnalyse($analyseId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->getAnalyse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **analyseId** | **int**|  |

### Return type

[**\Memsource\Model\AnalyseDto**](../Model/AnalyseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyseLanguagePart**
> \Memsource\Model\AnalyseLanguagePartDto getAnalyseLanguagePart($analyseId, $analyseLanguagePartId)

Get analysis language part

Returns analysis language pair

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\AnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$analyseId = 789; // int | 
$analyseLanguagePartId = 789; // int | 

try {
    $result = $apiInstance->getAnalyseLanguagePart($analyseId, $analyseLanguagePartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->getAnalyseLanguagePart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **analyseId** | **int**|  |
 **analyseLanguagePartId** | **int**|  |

### Return type

[**\Memsource\Model\AnalyseLanguagePartDto**](../Model/AnalyseLanguagePartDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobPartAnalyse**
> \Memsource\Model\AnalyseJobDto getJobPartAnalyse($analyseId, $jobUid)

Get jobs analysis

Returns job's analyse

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\AnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$analyseId = 789; // int | 
$jobUid = "jobUid_example"; // string | 

try {
    $result = $apiInstance->getJobPartAnalyse($analyseId, $jobUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->getJobPartAnalyse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **analyseId** | **int**|  |
 **jobUid** | **string**|  |

### Return type

[**\Memsource\Model\AnalyseJobDto**](../Model/AnalyseJobDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listByProject**
> \Memsource\Model\PageDtoAnalyseDto listByProject($projectUid, $pageNumber, $pageSize)

List analyses by project



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\AnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$pageNumber = 0; // int | 
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->listByProject($projectUid, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->listByProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **pageNumber** | **int**|  | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoAnalyseDto**](../Model/PageDtoAnalyseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listJobParts**
> \Memsource\Model\PageDtoAnalyseJobDto listJobParts($analyseId, $analyseLanguagePartId, $pageNumber, $pageSize)

List jobs of analyses

Returns list of job's analyses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\AnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$analyseId = 789; // int | 
$analyseLanguagePartId = 789; // int | 
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->listJobParts($analyseId, $analyseLanguagePartId, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->listJobParts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **analyseId** | **int**|  |
 **analyseLanguagePartId** | **int**|  |
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoAnalyseJobDto**](../Model/PageDtoAnalyseJobDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


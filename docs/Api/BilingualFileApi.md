# Memsource\BilingualFileApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**compareBilingualFile**](BilingualFileApi.md#compareBilingualFile) | **POST** /api2/v1/bilingualFiles/compare | Compare bilingual file
[**convertBilingualFile**](BilingualFileApi.md#convertBilingualFile) | **POST** /api2/v1/bilingualFiles/convert | Convert bilingual file
[**getBilingualFile**](BilingualFileApi.md#getBilingualFile) | **POST** /api2/v1/projects/{projectUid}/jobs/bilingualFile | Download bilingual file
[**getPreviewFile**](BilingualFileApi.md#getPreviewFile) | **POST** /api2/v1/bilingualFiles/preview | Download preview
[**uploadBilingualFile**](BilingualFileApi.md#uploadBilingualFile) | **PUT** /api2/v1/bilingualFiles | Upload bilingual file


# **compareBilingualFile**
> \Memsource\Model\ComparedSegmentsDto compareBilingualFile($body, $workflowLevel)

Compare bilingual file

Compares bilingual file to job state. Returns list of compared segments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\BilingualFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\InputStream(); // \Memsource\Model\InputStream | 
$workflowLevel = 1; // int | 

try {
    $result = $apiInstance->compareBilingualFile($body, $workflowLevel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BilingualFileApi->compareBilingualFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\InputStream**](../Model/InputStream.md)|  | [optional]
 **workflowLevel** | **int**|  | [optional] [default to 1]

### Return type

[**\Memsource\Model\ComparedSegmentsDto**](../Model/ComparedSegmentsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertBilingualFile**
> convertBilingualFile($from, $to, $body)

Convert bilingual file



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\BilingualFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$body = new \Memsource\Model\InputStream(); // \Memsource\Model\InputStream | 

try {
    $apiInstance->convertBilingualFile($from, $to, $body);
} catch (Exception $e) {
    echo 'Exception when calling BilingualFileApi->convertBilingualFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  |
 **to** | **string**|  |
 **body** | [**\Memsource\Model\InputStream**](../Model/InputStream.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBilingualFile**
> getBilingualFile($projectUid, $body, $format)

Download bilingual file



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\BilingualFileApi(
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
    echo 'Exception when calling BilingualFileApi->getBilingualFile: ', $e->getMessage(), PHP_EOL;
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

# **getPreviewFile**
> getPreviewFile($body)

Download preview

Supports mxliff format

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\BilingualFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\InputStream(); // \Memsource\Model\InputStream | 

try {
    $apiInstance->getPreviewFile($body);
} catch (Exception $e) {
    echo 'Exception when calling BilingualFileApi->getPreviewFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\InputStream**](../Model/InputStream.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadBilingualFile**
> \Memsource\Model\JobPartsDto uploadBilingualFile($body, $format, $saveToTransMemory, $setCompleted)

Upload bilingual file

Returns updated job parts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\BilingualFileApi(
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
    echo 'Exception when calling BilingualFileApi->uploadBilingualFile: ', $e->getMessage(), PHP_EOL;
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


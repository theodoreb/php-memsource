# Memsource\FileApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUrlFile**](FileApi.md#createUrlFile) | **POST** /api2/v1/files | Upload file
[**deletesFile**](FileApi.md#deletesFile) | **DELETE** /api2/v1/files/{fileUid} | Delete file
[**getFileJson**](FileApi.md#getFileJson) | **GET** /api2/v1/files/{fileUid} | Get file
[**getFiles**](FileApi.md#getFiles) | **GET** /api2/v1/files | List files


# **createUrlFile**
> \Memsource\Model\UploadedFileDto createUrlFile($body, $contentDisposition)

Upload file

Accepts multipart/form-data, application/octet-stream or application/json.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\RemoteUploadedFileDto(); // \Memsource\Model\RemoteUploadedFileDto | file
$contentDisposition = "contentDisposition_example"; // string | 

try {
    $result = $apiInstance->createUrlFile($body, $contentDisposition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->createUrlFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\RemoteUploadedFileDto**](../Model/RemoteUploadedFileDto.md)| file |
 **contentDisposition** | **string**|  | [optional]

### Return type

[**\Memsource\Model\UploadedFileDto**](../Model/UploadedFileDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/octet-stream, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletesFile**
> deletesFile($fileUid)

Delete file



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fileUid = "fileUid_example"; // string | 

try {
    $apiInstance->deletesFile($fileUid);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deletesFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileUid** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileJson**
> \Memsource\Model\UploadedFileDto getFileJson($fileUid)

Get file

Get uploaded file as <b>octet-stream</b> or as <b>json</b> based on 'Accept' header

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fileUid = "fileUid_example"; // string | 

try {
    $result = $apiInstance->getFileJson($fileUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFileJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileUid** | **string**|  |

### Return type

[**\Memsource\Model\UploadedFileDto**](../Model/UploadedFileDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFiles**
> \Memsource\Model\PageDtoUploadedFileDto getFiles($pageNumber, $pageSize, $name, $types, $createdBy, $biggerThan)

List files



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50
$name = "name_example"; // string | 
$types = array("types_example"); // string[] | 
$createdBy = 789; // int | 
$biggerThan = 789; // int | Size in bytes

try {
    $result = $apiInstance->getFiles($pageNumber, $pageSize, $name, $types, $createdBy, $biggerThan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]
 **name** | **string**|  | [optional]
 **types** | [**string[]**](../Model/string.md)|  | [optional]
 **createdBy** | **int**|  | [optional]
 **biggerThan** | **int**| Size in bytes | [optional]

### Return type

[**\Memsource\Model\PageDtoUploadedFileDto**](../Model/PageDtoUploadedFileDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


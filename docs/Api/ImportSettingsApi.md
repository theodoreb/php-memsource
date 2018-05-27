# Memsource\ImportSettingsApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createImportSettings**](ImportSettingsApi.md#createImportSettings) | **POST** /api2/v1/importSettings | Create import settings
[**deleteImportSettings**](ImportSettingsApi.md#deleteImportSettings) | **DELETE** /api2/v1/importSettings/{uid} | Delete import settings
[**getImportSettings**](ImportSettingsApi.md#getImportSettings) | **GET** /api2/v1/importSettings/{uid} | Get import settings
[**listImportSettings**](ImportSettingsApi.md#listImportSettings) | **GET** /api2/v1/importSettings | List import settings


# **createImportSettings**
> \Memsource\Model\ImportSettingsDto createImportSettings($body)

Create import settings

Pre-defined import settings is handy for [Create Job](#operation/createJob).                   See [supported file types](https://wiki.memsource.com/wiki/API_File_Type_List)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ImportSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\ImportSettingsCreateDto(); // \Memsource\Model\ImportSettingsCreateDto | 

try {
    $result = $apiInstance->createImportSettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportSettingsApi->createImportSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\ImportSettingsCreateDto**](../Model/ImportSettingsCreateDto.md)|  | [optional]

### Return type

[**\Memsource\Model\ImportSettingsDto**](../Model/ImportSettingsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteImportSettings**
> deleteImportSettings($uid)

Delete import settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ImportSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = "uid_example"; // string | 

try {
    $apiInstance->deleteImportSettings($uid);
} catch (Exception $e) {
    echo 'Exception when calling ImportSettingsApi->deleteImportSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImportSettings**
> \Memsource\Model\ImportSettingsDto getImportSettings($uid)

Get import settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ImportSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = "uid_example"; // string | 

try {
    $result = $apiInstance->getImportSettings($uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportSettingsApi->getImportSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**|  |

### Return type

[**\Memsource\Model\ImportSettingsDto**](../Model/ImportSettingsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listImportSettings**
> \Memsource\Model\PageDtoImportSettingsReference listImportSettings($name, $pageNumber, $pageSize)

List import settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ImportSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->listImportSettings($name, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportSettingsApi->listImportSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoImportSettingsReference**](../Model/PageDtoImportSettingsReference.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


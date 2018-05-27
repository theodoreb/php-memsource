# Memsource\BusinessUnitApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBusinessUnit**](BusinessUnitApi.md#createBusinessUnit) | **POST** /api2/v1/businessUnits | Create business unit
[**deleteBusinessUnit**](BusinessUnitApi.md#deleteBusinessUnit) | **DELETE** /api2/v1/businessUnits/{businessUnitId} | Delete business unit
[**getBusinessUnit**](BusinessUnitApi.md#getBusinessUnit) | **GET** /api2/v1/businessUnits/{businessUnitId} | Get business unit
[**listBusinessUnits**](BusinessUnitApi.md#listBusinessUnits) | **GET** /api2/v1/businessUnits | List business units
[**updateBusinessUnit**](BusinessUnitApi.md#updateBusinessUnit) | **PUT** /api2/v1/businessUnits/{businessUnitId} | Edit business unit


# **createBusinessUnit**
> \Memsource\Model\BusinessUnitDto createBusinessUnit($body)

Create business unit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\BusinessUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\BusinessUnitEditDto(); // \Memsource\Model\BusinessUnitEditDto | 

try {
    $result = $apiInstance->createBusinessUnit($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessUnitApi->createBusinessUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\BusinessUnitEditDto**](../Model/BusinessUnitEditDto.md)|  | [optional]

### Return type

[**\Memsource\Model\BusinessUnitDto**](../Model/BusinessUnitDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBusinessUnit**
> deleteBusinessUnit($businessUnitId)

Delete business unit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\BusinessUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$businessUnitId = 789; // int | 

try {
    $apiInstance->deleteBusinessUnit($businessUnitId);
} catch (Exception $e) {
    echo 'Exception when calling BusinessUnitApi->deleteBusinessUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **businessUnitId** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBusinessUnit**
> \Memsource\Model\BusinessUnitDto getBusinessUnit($businessUnitId)

Get business unit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\BusinessUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$businessUnitId = 789; // int | 

try {
    $result = $apiInstance->getBusinessUnit($businessUnitId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessUnitApi->getBusinessUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **businessUnitId** | **int**|  |

### Return type

[**\Memsource\Model\BusinessUnitDto**](../Model/BusinessUnitDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBusinessUnits**
> \Memsource\Model\PageDtoBusinessUnitDto listBusinessUnits($name, $pageNumber, $pageSize)

List business units



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\BusinessUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Unique name of the business unit
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->listBusinessUnits($name, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessUnitApi->listBusinessUnits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Unique name of the business unit | [optional]
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoBusinessUnitDto**](../Model/PageDtoBusinessUnitDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBusinessUnit**
> \Memsource\Model\BusinessUnitDto updateBusinessUnit($businessUnitId, $body)

Edit business unit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\BusinessUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$businessUnitId = 789; // int | 
$body = new \Memsource\Model\BusinessUnitEditDto(); // \Memsource\Model\BusinessUnitEditDto | 

try {
    $result = $apiInstance->updateBusinessUnit($businessUnitId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessUnitApi->updateBusinessUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **businessUnitId** | **int**|  |
 **body** | [**\Memsource\Model\BusinessUnitEditDto**](../Model/BusinessUnitEditDto.md)|  | [optional]

### Return type

[**\Memsource\Model\BusinessUnitDto**](../Model/BusinessUnitDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Memsource\SubDomainApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSubDomain**](SubDomainApi.md#createSubDomain) | **POST** /api2/v1/subDomains | Create subdomain
[**deleteSubDomain**](SubDomainApi.md#deleteSubDomain) | **DELETE** /api2/v1/subDomains/{subDomainId} | Delete subdomain
[**getSubDomain**](SubDomainApi.md#getSubDomain) | **GET** /api2/v1/subDomains/{subDomainId} | Get subdomain
[**listSubDomains**](SubDomainApi.md#listSubDomains) | **GET** /api2/v1/subDomains | List subdomains
[**updateSubDomain**](SubDomainApi.md#updateSubDomain) | **PUT** /api2/v1/subDomains/{subDomainId} | Edit subdomain


# **createSubDomain**
> \Memsource\Model\SubDomainDto createSubDomain($body)

Create subdomain



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\SubDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\SubDomainEditDto(); // \Memsource\Model\SubDomainEditDto | 

try {
    $result = $apiInstance->createSubDomain($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubDomainApi->createSubDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\SubDomainEditDto**](../Model/SubDomainEditDto.md)|  | [optional]

### Return type

[**\Memsource\Model\SubDomainDto**](../Model/SubDomainDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubDomain**
> deleteSubDomain($subDomainId)

Delete subdomain



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\SubDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subDomainId = 789; // int | 

try {
    $apiInstance->deleteSubDomain($subDomainId);
} catch (Exception $e) {
    echo 'Exception when calling SubDomainApi->deleteSubDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subDomainId** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubDomain**
> \Memsource\Model\SubDomainDto getSubDomain($subDomainId)

Get subdomain



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\SubDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subDomainId = 789; // int | 

try {
    $result = $apiInstance->getSubDomain($subDomainId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubDomainApi->getSubDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subDomainId** | **int**|  |

### Return type

[**\Memsource\Model\SubDomainDto**](../Model/SubDomainDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSubDomains**
> \Memsource\Model\PageDtoSubDomainDto listSubDomains($pageNumber, $pageSize)

List subdomains



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\SubDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->listSubDomains($pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubDomainApi->listSubDomains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoSubDomainDto**](../Model/PageDtoSubDomainDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSubDomain**
> \Memsource\Model\SubDomainDto updateSubDomain($subDomainId, $body)

Edit subdomain



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\SubDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subDomainId = 789; // int | 
$body = new \Memsource\Model\SubDomainEditDto(); // \Memsource\Model\SubDomainEditDto | 

try {
    $result = $apiInstance->updateSubDomain($subDomainId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubDomainApi->updateSubDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subDomainId** | **int**|  |
 **body** | [**\Memsource\Model\SubDomainEditDto**](../Model/SubDomainEditDto.md)|  | [optional]

### Return type

[**\Memsource\Model\SubDomainDto**](../Model/SubDomainDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


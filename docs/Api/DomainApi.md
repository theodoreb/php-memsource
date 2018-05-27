# Memsource\DomainApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDomain**](DomainApi.md#createDomain) | **POST** /api2/v1/domains | Create domain
[**deleteDomain**](DomainApi.md#deleteDomain) | **DELETE** /api2/v1/domains/{domainId} | Delete domain
[**getDomain**](DomainApi.md#getDomain) | **GET** /api2/v1/domains/{domainId} | Get domain
[**listDomains**](DomainApi.md#listDomains) | **GET** /api2/v1/domains | List of domains
[**updateDomain**](DomainApi.md#updateDomain) | **PUT** /api2/v1/domains/{domainId} | Edit domain


# **createDomain**
> \Memsource\Model\DomainDto createDomain($body)

Create domain



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\DomainEditDto(); // \Memsource\Model\DomainEditDto | 

try {
    $result = $apiInstance->createDomain($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->createDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\DomainEditDto**](../Model/DomainEditDto.md)|  | [optional]

### Return type

[**\Memsource\Model\DomainDto**](../Model/DomainDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDomain**
> deleteDomain($domainId)

Delete domain



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domainId = 789; // int | 

try {
    $apiInstance->deleteDomain($domainId);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->deleteDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domainId** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDomain**
> \Memsource\Model\DomainDto getDomain($domainId)

Get domain



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domainId = 789; // int | 

try {
    $result = $apiInstance->getDomain($domainId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->getDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domainId** | **int**|  |

### Return type

[**\Memsource\Model\DomainDto**](../Model/DomainDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDomains**
> \Memsource\Model\PageDtoDomainDto listDomains($pageNumber, $pageSize)

List of domains



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->listDomains($pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->listDomains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoDomainDto**](../Model/PageDtoDomainDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDomain**
> \Memsource\Model\DomainDto updateDomain($domainId, $body)

Edit domain



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domainId = 789; // int | 
$body = new \Memsource\Model\DomainEditDto(); // \Memsource\Model\DomainEditDto | 

try {
    $result = $apiInstance->updateDomain($domainId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->updateDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domainId** | **int**|  |
 **body** | [**\Memsource\Model\DomainEditDto**](../Model/DomainEditDto.md)|  | [optional]

### Return type

[**\Memsource\Model\DomainDto**](../Model/DomainDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


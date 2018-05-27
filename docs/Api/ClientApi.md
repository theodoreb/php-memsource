# Memsource\ClientApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClient**](ClientApi.md#createClient) | **POST** /api2/v1/clients | Create client
[**deleteClient**](ClientApi.md#deleteClient) | **DELETE** /api2/v1/clients/{clientId} | Delete client
[**getClient**](ClientApi.md#getClient) | **GET** /api2/v1/clients/{clientId} | Get client
[**listClients**](ClientApi.md#listClients) | **GET** /api2/v1/clients | List clients
[**updateClient**](ClientApi.md#updateClient) | **PUT** /api2/v1/clients/{clientId} | Edit client


# **createClient**
> \Memsource\Model\ClientDto createClient($body)

Create client



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\ClientEditDto(); // \Memsource\Model\ClientEditDto | 

try {
    $result = $apiInstance->createClient($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->createClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\ClientEditDto**](../Model/ClientEditDto.md)|  |

### Return type

[**\Memsource\Model\ClientDto**](../Model/ClientDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteClient**
> deleteClient($clientId)

Delete client



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clientId = 789; // int | 

try {
    $apiInstance->deleteClient($clientId);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->deleteClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClient**
> \Memsource\Model\ClientDto getClient($clientId)

Get client



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clientId = 789; // int | 

try {
    $result = $apiInstance->getClient($clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->getClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**|  |

### Return type

[**\Memsource\Model\ClientDto**](../Model/ClientDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listClients**
> \Memsource\Model\PageDtoClientDto listClients($name, $pageNumber, $pageSize)

List clients



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Unique name of the Client
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->listClients($name, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->listClients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Unique name of the Client | [optional]
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoClientDto**](../Model/PageDtoClientDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateClient**
> \Memsource\Model\ClientDto updateClient($clientId, $body)

Edit client



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clientId = 789; // int | 
$body = new \Memsource\Model\ClientEditDto(); // \Memsource\Model\ClientEditDto | 

try {
    $result = $apiInstance->updateClient($clientId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->updateClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**|  |
 **body** | [**\Memsource\Model\ClientEditDto**](../Model/ClientEditDto.md)|  |

### Return type

[**\Memsource\Model\ClientDto**](../Model/ClientDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


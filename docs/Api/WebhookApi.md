# Memsource\WebhookApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWebHook**](WebhookApi.md#createWebHook) | **POST** /api2/v1/webhooks | Create webhook
[**deleteWebHook**](WebhookApi.md#deleteWebHook) | **DELETE** /api2/v1/webhooks/{webHookId} | Delete webhook
[**getWebHook**](WebhookApi.md#getWebHook) | **GET** /api2/v1/webhooks/{webHookId} | Get webhook
[**getWebHookList**](WebhookApi.md#getWebHookList) | **GET** /api2/v1/webhooks | Lists webhooks
[**updateWebHook**](WebhookApi.md#updateWebHook) | **PUT** /api2/v1/webhooks/{webHookId} | Edit webhook


# **createWebHook**
> \Memsource\Model\WebHookDto createWebHook($body)

Create webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\WebHookDto(); // \Memsource\Model\WebHookDto | 

try {
    $result = $apiInstance->createWebHook($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->createWebHook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\WebHookDto**](../Model/WebHookDto.md)|  | [optional]

### Return type

[**\Memsource\Model\WebHookDto**](../Model/WebHookDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWebHook**
> deleteWebHook($webHookId)

Delete webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webHookId = 789; // int | 

try {
    $apiInstance->deleteWebHook($webHookId);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->deleteWebHook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webHookId** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebHook**
> \Memsource\Model\WebHookDto getWebHook($webHookId)

Get webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webHookId = 789; // int | 

try {
    $result = $apiInstance->getWebHook($webHookId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebHook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webHookId** | **int**|  |

### Return type

[**\Memsource\Model\WebHookDto**](../Model/WebHookDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebHookList**
> \Memsource\Model\PageDtoWebHookDto getWebHookList($pageNumber, $pageSize)

Lists webhooks



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->getWebHookList($pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebHookList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoWebHookDto**](../Model/PageDtoWebHookDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebHook**
> \Memsource\Model\WebHookDto updateWebHook($webHookId, $body)

Edit webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webHookId = 789; // int | 
$body = new \Memsource\Model\WebHookDto(); // \Memsource\Model\WebHookDto | 

try {
    $result = $apiInstance->updateWebHook($webHookId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->updateWebHook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webHookId** | **int**|  |
 **body** | [**\Memsource\Model\WebHookDto**](../Model/WebHookDto.md)|  | [optional]

### Return type

[**\Memsource\Model\WebHookDto**](../Model/WebHookDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


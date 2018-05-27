# Memsource\QuoteApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createQuote**](QuoteApi.md#createQuote) | **POST** /api2/v1/quotes | Create quote
[**deleteQuote**](QuoteApi.md#deleteQuote) | **DELETE** /api2/v1/quotes/{quoteId} | Delete quote
[**get**](QuoteApi.md#get) | **GET** /api2/v1/quotes/{quoteId} | Get quote


# **createQuote**
> \Memsource\Model\QuoteDto createQuote($body)

Create quote



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\QuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\QuoteCreateDto(); // \Memsource\Model\QuoteCreateDto | 

try {
    $result = $apiInstance->createQuote($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteApi->createQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\QuoteCreateDto**](../Model/QuoteCreateDto.md)|  | [optional]

### Return type

[**\Memsource\Model\QuoteDto**](../Model/QuoteDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuote**
> deleteQuote($quoteId)

Delete quote



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\QuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quoteId = 789; // int | 

try {
    $apiInstance->deleteQuote($quoteId);
} catch (Exception $e) {
    echo 'Exception when calling QuoteApi->deleteQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quoteId** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \Memsource\Model\QuoteDto get($quoteId)

Get quote



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\QuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quoteId = 789; // int | 

try {
    $result = $apiInstance->get($quoteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quoteId** | **int**|  |

### Return type

[**\Memsource\Model\QuoteDto**](../Model/QuoteDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Memsource\AnalyticsApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aggregate**](AnalyticsApi.md#aggregate) | **POST** /api2/v1/analytics/{type} | Run analytics aggregation


# **aggregate**
> \Memsource\Model\AnalyticsResponseDto aggregate($type, $body)

Run analytics aggregation

For more information check <a target=\"_blank\" href=\"https://wiki.memsource.com/wiki/Analytics_Aggregations\">Memsource Wiki</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = "type_example"; // string | This value is case sensitive
$body = new \Memsource\Model\AnalyticsDto(); // \Memsource\Model\AnalyticsDto | 

try {
    $result = $apiInstance->aggregate($type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->aggregate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| This value is case sensitive |
 **body** | [**\Memsource\Model\AnalyticsDto**](../Model/AnalyticsDto.md)|  | [optional]

### Return type

[**\Memsource\Model\AnalyticsResponseDto**](../Model/AnalyticsResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


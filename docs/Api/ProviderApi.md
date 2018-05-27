# Memsource\ProviderApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listProviders**](ProviderApi.md#listProviders) | **POST** /api2/v1/projects/{projectUid}/jobs/{jobUid}/providers/suggest | Get suggested providers
[**listProviders_0**](ProviderApi.md#listProviders_0) | **POST** /api2/v1/projects/{projectUid}/providers/suggest | Get suggested providers


# **listProviders**
> \Memsource\Model\ProviderListDto listProviders($projectUid, $jobUid)

Get suggested providers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 

try {
    $result = $apiInstance->listProviders($projectUid, $jobUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProviderApi->listProviders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |

### Return type

[**\Memsource\Model\ProviderListDto**](../Model/ProviderListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProviders_0**
> \Memsource\Model\ProviderListDto listProviders_0($projectUid)

Get suggested providers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 

try {
    $result = $apiInstance->listProviders_0($projectUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProviderApi->listProviders_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |

### Return type

[**\Memsource\Model\ProviderListDto**](../Model/ProviderListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


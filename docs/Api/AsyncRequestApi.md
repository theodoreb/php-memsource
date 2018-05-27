# Memsource\AsyncRequestApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAsyncRequest**](AsyncRequestApi.md#getAsyncRequest) | **GET** /api2/v1/async/{asyncRequestId} | Get asynchronous request
[**listPendingRequests**](AsyncRequestApi.md#listPendingRequests) | **GET** /api2/v1/async | List pending requests


# **getAsyncRequest**
> \Memsource\Model\AsyncRequestDto getAsyncRequest($asyncRequestId)

Get asynchronous request



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\AsyncRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asyncRequestId = 789; // int | 

try {
    $result = $apiInstance->getAsyncRequest($asyncRequestId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncRequestApi->getAsyncRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asyncRequestId** | **int**|  |

### Return type

[**\Memsource\Model\AsyncRequestDto**](../Model/AsyncRequestDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPendingRequests**
> \Memsource\Model\PageDtoAsyncRequestDto listPendingRequests($all, $pageNumber, $pageSize)

List pending requests



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\AsyncRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$all = false; // bool | Pending requests for organization instead of current user. Only for ADMIN.
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->listPendingRequests($all, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncRequestApi->listPendingRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **all** | **bool**| Pending requests for organization instead of current user. Only for ADMIN. | [optional] [default to false]
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoAsyncRequestDto**](../Model/PageDtoAsyncRequestDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


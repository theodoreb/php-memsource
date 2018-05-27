# Memsource\NetRateSchemeApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDiscountScheme**](NetRateSchemeApi.md#createDiscountScheme) | **POST** /api2/v1/netRateSchemes | Create net rate scheme
[**getDiscountScheme**](NetRateSchemeApi.md#getDiscountScheme) | **GET** /api2/v1/netRateSchemes/{netRateSchemeId} | Get net rate scheme
[**getDiscountSchemeWorkflowStep**](NetRateSchemeApi.md#getDiscountSchemeWorkflowStep) | **GET** /api2/v1/netRateSchemes/{netRateSchemeId}/workflowStepNetSchemes/{netRateSchemeWorkflowStepId} | Get scheme for workflow step
[**getDiscountSchemeWorkflowSteps**](NetRateSchemeApi.md#getDiscountSchemeWorkflowSteps) | **GET** /api2/v1/netRateSchemes/{netRateSchemeId}/workflowStepNetSchemes | List schemes for workflow step
[**getDiscountSchemes**](NetRateSchemeApi.md#getDiscountSchemes) | **GET** /api2/v1/netRateSchemes | List net rate schemes


# **createDiscountScheme**
> \Memsource\Model\NetRateScheme createDiscountScheme($body)

Create net rate scheme



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\NetRateSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\DiscountSchemeCreateDto(); // \Memsource\Model\DiscountSchemeCreateDto | 

try {
    $result = $apiInstance->createDiscountScheme($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetRateSchemeApi->createDiscountScheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\DiscountSchemeCreateDto**](../Model/DiscountSchemeCreateDto.md)|  | [optional]

### Return type

[**\Memsource\Model\NetRateScheme**](../Model/NetRateScheme.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscountScheme**
> \Memsource\Model\NetRateScheme getDiscountScheme($netRateSchemeId)

Get net rate scheme



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\NetRateSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$netRateSchemeId = 789; // int | 

try {
    $result = $apiInstance->getDiscountScheme($netRateSchemeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetRateSchemeApi->getDiscountScheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **netRateSchemeId** | **int**|  |

### Return type

[**\Memsource\Model\NetRateScheme**](../Model/NetRateScheme.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscountSchemeWorkflowStep**
> \Memsource\Model\NetRateSchemeWorkflowStep getDiscountSchemeWorkflowStep($netRateSchemeId, $netRateSchemeWorkflowStepId)

Get scheme for workflow step



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\NetRateSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$netRateSchemeId = 789; // int | 
$netRateSchemeWorkflowStepId = 789; // int | 

try {
    $result = $apiInstance->getDiscountSchemeWorkflowStep($netRateSchemeId, $netRateSchemeWorkflowStepId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetRateSchemeApi->getDiscountSchemeWorkflowStep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **netRateSchemeId** | **int**|  |
 **netRateSchemeWorkflowStepId** | **int**|  |

### Return type

[**\Memsource\Model\NetRateSchemeWorkflowStep**](../Model/NetRateSchemeWorkflowStep.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscountSchemeWorkflowSteps**
> \Memsource\Model\PageDtoNetRateSchemeWorkflowStepReference getDiscountSchemeWorkflowSteps($netRateSchemeId, $pageNumber, $pageSize)

List schemes for workflow step



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\NetRateSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$netRateSchemeId = 789; // int | 
$pageNumber = 0; // int | 
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->getDiscountSchemeWorkflowSteps($netRateSchemeId, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetRateSchemeApi->getDiscountSchemeWorkflowSteps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **netRateSchemeId** | **int**|  |
 **pageNumber** | **int**|  | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoNetRateSchemeWorkflowStepReference**](../Model/PageDtoNetRateSchemeWorkflowStepReference.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscountSchemes**
> \Memsource\Model\PageDtoNetRateSchemeReference getDiscountSchemes($pageNumber, $pageSize)

List net rate schemes



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\NetRateSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageNumber = 0; // int | 
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->getDiscountSchemes($pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetRateSchemeApi->getDiscountSchemes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**|  | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoNetRateSchemeReference**](../Model/PageDtoNetRateSchemeReference.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


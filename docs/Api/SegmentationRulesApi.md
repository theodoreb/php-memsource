# Memsource\SegmentationRulesApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSegmentationRule**](SegmentationRulesApi.md#createSegmentationRule) | **POST** /api2/v1/segmentationRules | Create segmentation rule
[**deletesSegmentationRule**](SegmentationRulesApi.md#deletesSegmentationRule) | **DELETE** /api2/v1/segmentationRules/{segRuleId} | Delete segmentation rule
[**getListOfSegmentationRules**](SegmentationRulesApi.md#getListOfSegmentationRules) | **GET** /api2/v1/segmentationRules | List segmentation rules
[**getSegmentationRule**](SegmentationRulesApi.md#getSegmentationRule) | **GET** /api2/v1/segmentationRules/{segRuleId} | Get segmentation rule
[**updatesSegmentationRule**](SegmentationRulesApi.md#updatesSegmentationRule) | **PUT** /api2/v1/segmentationRules/{segRuleId} | Edit segmentation rule


# **createSegmentationRule**
> \Memsource\Model\SegmentationRuleDto createSegmentationRule($body, $segRule)

Create segmentation rule

Creates new Segmentation Rule with file and segRule JSON Object as header parameter. The same object is used for GET action.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\SegmentationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\InputStream(); // \Memsource\Model\InputStream | streamed file
$segRule = "\"{name:'name', locale:'en', primary:'false', filename:'extra_file.xml'}\""; // string | 

try {
    $result = $apiInstance->createSegmentationRule($body, $segRule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentationRulesApi->createSegmentationRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\InputStream**](../Model/InputStream.md)| streamed file |
 **segRule** | **string**|  |

### Return type

[**\Memsource\Model\SegmentationRuleDto**](../Model/SegmentationRuleDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletesSegmentationRule**
> deletesSegmentationRule($segRuleId)

Delete segmentation rule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\SegmentationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$segRuleId = 789; // int | 

try {
    $apiInstance->deletesSegmentationRule($segRuleId);
} catch (Exception $e) {
    echo 'Exception when calling SegmentationRulesApi->deletesSegmentationRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **segRuleId** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListOfSegmentationRules**
> \Memsource\Model\PageDtoSegmentationRuleReference getListOfSegmentationRules($pageNumber, $pageSize)

List segmentation rules



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\SegmentationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->getListOfSegmentationRules($pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentationRulesApi->getListOfSegmentationRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoSegmentationRuleReference**](../Model/PageDtoSegmentationRuleReference.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSegmentationRule**
> \Memsource\Model\SegmentationRuleDto getSegmentationRule($segRuleId)

Get segmentation rule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\SegmentationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$segRuleId = 789; // int | 

try {
    $result = $apiInstance->getSegmentationRule($segRuleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentationRulesApi->getSegmentationRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **segRuleId** | **int**|  |

### Return type

[**\Memsource\Model\SegmentationRuleDto**](../Model/SegmentationRuleDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatesSegmentationRule**
> \Memsource\Model\SegmentationRuleDto updatesSegmentationRule($segRuleId, $body)

Edit segmentation rule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\SegmentationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$segRuleId = 789; // int | 
$body = new \Memsource\Model\EditSegmentationRuleDto(); // \Memsource\Model\EditSegmentationRuleDto | 

try {
    $result = $apiInstance->updatesSegmentationRule($segRuleId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentationRulesApi->updatesSegmentationRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **segRuleId** | **int**|  |
 **body** | [**\Memsource\Model\EditSegmentationRuleDto**](../Model/EditSegmentationRuleDto.md)|  | [optional]

### Return type

[**\Memsource\Model\SegmentationRuleDto**](../Model/SegmentationRuleDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


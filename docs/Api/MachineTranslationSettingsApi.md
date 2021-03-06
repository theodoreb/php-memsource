# Memsource\MachineTranslationSettingsApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getList**](MachineTranslationSettingsApi.md#getList) | **GET** /api2/v1/machineTranslateSettings | List machine translate settings
[**getMTSettings**](MachineTranslationSettingsApi.md#getMTSettings) | **GET** /api2/v1/machineTranslateSettings/{id} | Get machine translate settings
[**getStatus**](MachineTranslationSettingsApi.md#getStatus) | **GET** /api2/v1/machineTranslateSettings/{id}/status | Get status of machine translate engine
[**getTranslationResources**](MachineTranslationSettingsApi.md#getTranslationResources) | **GET** /api2/v1/projects/{projectUid}/jobs/{jobUid}/translationResources | Get translation resources


# **getList**
> \Memsource\Model\PageDtoMachineTranslateSettingsPbmDto getList($pageNumber, $pageSize)

List machine translate settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\MachineTranslationSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->getList($pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachineTranslationSettingsApi->getList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoMachineTranslateSettingsPbmDto**](../Model/PageDtoMachineTranslateSettingsPbmDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMTSettings**
> \Memsource\Model\MachineTranslateSettingsPbmDto getMTSettings($id)

Get machine translate settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\MachineTranslationSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 

try {
    $result = $apiInstance->getMTSettings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachineTranslationSettingsApi->getMTSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Memsource\Model\MachineTranslateSettingsPbmDto**](../Model/MachineTranslateSettingsPbmDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatus**
> \Memsource\Model\MachineTranslateStatusDto getStatus($id)

Get status of machine translate engine



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\MachineTranslationSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 

try {
    $result = $apiInstance->getStatus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachineTranslationSettingsApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Memsource\Model\MachineTranslateStatusDto**](../Model/MachineTranslateStatusDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranslationResources**
> \Memsource\Model\TranslationResourcesDto getTranslationResources($projectUid, $jobUid)

Get translation resources



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\MachineTranslationSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 

try {
    $result = $apiInstance->getTranslationResources($projectUid, $jobUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachineTranslationSettingsApi->getTranslationResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |

### Return type

[**\Memsource\Model\TranslationResourcesDto**](../Model/TranslationResourcesDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


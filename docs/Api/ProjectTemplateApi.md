# Memsource\ProjectTemplateApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProjectFromTemplate**](ProjectTemplateApi.md#createProjectFromTemplate) | **POST** /api2/v1/projects/applyTemplate/{templateId} | Create project from template
[**createProjectTemplate**](ProjectTemplateApi.md#createProjectTemplate) | **POST** /api2/v1/projectTemplates | Create project template
[**deleteProjectTemplate**](ProjectTemplateApi.md#deleteProjectTemplate) | **DELETE** /api2/v1/projectTemplates/{projectTemplateId} | Delete project template
[**getOneTemplate**](ProjectTemplateApi.md#getOneTemplate) | **GET** /api2/v1/projectTemplates/{projectTemplateId} | Get project template
[**getTemplates**](ProjectTemplateApi.md#getTemplates) | **GET** /api2/v1/projectTemplates | List project templates


# **createProjectFromTemplate**
> \Memsource\Model\AbstractProjectDto createProjectFromTemplate($templateId, $body)

Create project from template



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$templateId = 789; // int | 
$body = new \Memsource\Model\CreateProjectFromTemplateDto(); // \Memsource\Model\CreateProjectFromTemplateDto | 

try {
    $result = $apiInstance->createProjectFromTemplate($templateId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTemplateApi->createProjectFromTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateId** | **int**|  |
 **body** | [**\Memsource\Model\CreateProjectFromTemplateDto**](../Model/CreateProjectFromTemplateDto.md)|  | [optional]

### Return type

[**\Memsource\Model\AbstractProjectDto**](../Model/AbstractProjectDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProjectTemplate**
> \Memsource\Model\ProjectTemplateDto createProjectTemplate($body)

Create project template



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\ProjectTemplateCreateActionDto(); // \Memsource\Model\ProjectTemplateCreateActionDto | 

try {
    $result = $apiInstance->createProjectTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTemplateApi->createProjectTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\ProjectTemplateCreateActionDto**](../Model/ProjectTemplateCreateActionDto.md)|  |

### Return type

[**\Memsource\Model\ProjectTemplateDto**](../Model/ProjectTemplateDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProjectTemplate**
> deleteProjectTemplate($projectTemplateId)

Delete project template



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectTemplateId = 789; // int | 

try {
    $apiInstance->deleteProjectTemplate($projectTemplateId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTemplateApi->deleteProjectTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectTemplateId** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOneTemplate**
> \Memsource\Model\ProjectTemplateDto getOneTemplate($projectTemplateId)

Get project template



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectTemplateId = 789; // int | 

try {
    $result = $apiInstance->getOneTemplate($projectTemplateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTemplateApi->getOneTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectTemplateId** | **int**|  |

### Return type

[**\Memsource\Model\ProjectTemplateDto**](../Model/ProjectTemplateDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplates**
> \Memsource\Model\PageDtoProjectTemplateReference getTemplates($name, $clientId, $pageNumber, $pageSize)

List project templates



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$clientId = 789; // int | 
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->getTemplates($name, $clientId, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectTemplateApi->getTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **clientId** | **int**|  | [optional]
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoProjectTemplateReference**](../Model/PageDtoProjectTemplateReference.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


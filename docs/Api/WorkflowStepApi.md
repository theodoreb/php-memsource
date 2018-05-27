# Memsource\WorkflowStepApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listWFSteps**](WorkflowStepApi.md#listWFSteps) | **GET** /api2/v1/workflowSteps | List workflow steps
[**listWorkflowSteps**](WorkflowStepApi.md#listWorkflowSteps) | **GET** /api2/v1/users/{userId}/workflowSteps | List assigned workflow steps


# **listWFSteps**
> \Memsource\Model\PageDtoWorkflowStepDto listWFSteps($pageNumber, $pageSize)

List workflow steps



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\WorkflowStepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->listWFSteps($pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowStepApi->listWFSteps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoWorkflowStepDto**](../Model/PageDtoWorkflowStepDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listWorkflowSteps**
> \Memsource\Model\PageDtoWorkflowStepReference listWorkflowSteps($userId, $status, $projectUid, $targetLang, $dueInHours, $filename, $pageNumber, $pageSize)

List assigned workflow steps



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\WorkflowStepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 789; // int | 
$status = array("status_example"); // string[] | 
$projectUid = "projectUid_example"; // string | 
$targetLang = array("targetLang_example"); // string[] | 
$dueInHours = 56; // int | -1 for jobs that are overdue
$filename = "filename_example"; // string | 
$pageNumber = 0; // int | 
$pageSize = 50; // int | 

try {
    $result = $apiInstance->listWorkflowSteps($userId, $status, $projectUid, $targetLang, $dueInHours, $filename, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowStepApi->listWorkflowSteps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**|  |
 **status** | [**string[]**](../Model/string.md)|  | [optional]
 **projectUid** | **string**|  | [optional]
 **targetLang** | [**string[]**](../Model/string.md)|  | [optional]
 **dueInHours** | **int**| -1 for jobs that are overdue | [optional]
 **filename** | **string**|  | [optional]
 **pageNumber** | **int**|  | [optional] [default to 0]
 **pageSize** | **int**|  | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoWorkflowStepReference**](../Model/PageDtoWorkflowStepReference.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


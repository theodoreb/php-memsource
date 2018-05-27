# Memsource\MappingApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMappingForTask**](MappingApi.md#getMappingForTask) | **GET** /api2/v1/mappings/tasks/{id} | Returns mapping for taskId (mxliff)


# **getMappingForTask**
> \Memsource\Model\TaskMappingDto getMappingForTask($id, $workflowLevel)

Returns mapping for taskId (mxliff)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\MappingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$workflowLevel = 1; // int | 

try {
    $result = $apiInstance->getMappingForTask($id, $workflowLevel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MappingApi->getMappingForTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **workflowLevel** | **int**|  | [optional] [default to 1]

### Return type

[**\Memsource\Model\TaskMappingDto**](../Model/TaskMappingDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


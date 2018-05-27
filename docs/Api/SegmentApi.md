# Memsource\SegmentApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listSegments**](SegmentApi.md#listSegments) | **GET** /api2/v1/projects/{projectUid}/jobs/{jobUid}/segments | Get segments


# **listSegments**
> \Memsource\Model\SegmentListDto listSegments($projectUid, $jobUid, $beginIndex, $endIndex)

Get segments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 
$beginIndex = 0; // int | 
$endIndex = 0; // int | 

try {
    $result = $apiInstance->listSegments($projectUid, $jobUid, $beginIndex, $endIndex);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->listSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |
 **beginIndex** | **int**|  | [optional] [default to 0]
 **endIndex** | **int**|  | [optional] [default to 0]

### Return type

[**\Memsource\Model\SegmentListDto**](../Model/SegmentListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


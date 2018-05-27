# Memsource\TranslationApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**humanTranslate**](TranslationApi.md#humanTranslate) | **POST** /api2/v1/projects/{projectUid}/jobs/humanTranslate | Human translate (Gengo or Unbabel)
[**preTranslate**](TranslationApi.md#preTranslate) | **POST** /api2/v1/projects/{projectUid}/jobs/preTranslate | Pre-translate job


# **humanTranslate**
> \Memsource\Model\AsyncRequestWrapperDto humanTranslate($projectUid, $body)

Human translate (Gengo or Unbabel)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\HumanTranslateJobsDto(); // \Memsource\Model\HumanTranslateJobsDto | 

try {
    $result = $apiInstance->humanTranslate($projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->humanTranslate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\HumanTranslateJobsDto**](../Model/HumanTranslateJobsDto.md)|  | [optional]

### Return type

[**\Memsource\Model\AsyncRequestWrapperDto**](../Model/AsyncRequestWrapperDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **preTranslate**
> \Memsource\Model\AsyncRequestWrapperDto preTranslate($projectUid, $body)

Pre-translate job



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\PreTranslateJobsDto(); // \Memsource\Model\PreTranslateJobsDto | 

try {
    $result = $apiInstance->preTranslate($projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->preTranslate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\PreTranslateJobsDto**](../Model/PreTranslateJobsDto.md)|  | [optional]

### Return type

[**\Memsource\Model\AsyncRequestWrapperDto**](../Model/AsyncRequestWrapperDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


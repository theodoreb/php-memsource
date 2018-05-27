# Memsource\QualityAssuranceApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**runQaForJobPart**](QualityAssuranceApi.md#runQaForJobPart) | **POST** /api2/v1/projects/{projectUid}/jobs/{jobUid}/qualityAssurances/run | Run quality assurance
[**runQaForJobParts**](QualityAssuranceApi.md#runQaForJobParts) | **POST** /api2/v1/projects/{projectUid}/jobs/qualityAssurances/run | Run quality assurance (batch)
[**updateIgnoredChecks**](QualityAssuranceApi.md#updateIgnoredChecks) | **POST** /api2/v1/projects/{projectUid}/jobs/{jobUid}/qualityAssurances/ignoreChecks | Edit ignored checks


# **runQaForJobPart**
> \Memsource\Model\QualityAssuranceResponse runQaForJobPart($projectUid, $jobUid, $body)

Run quality assurance



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\QualityAssuranceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 
$body = new \Memsource\Model\QualityAssuranceRunDto(); // \Memsource\Model\QualityAssuranceRunDto | 

try {
    $result = $apiInstance->runQaForJobPart($projectUid, $jobUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityAssuranceApi->runQaForJobPart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |
 **body** | [**\Memsource\Model\QualityAssuranceRunDto**](../Model/QualityAssuranceRunDto.md)|  | [optional]

### Return type

[**\Memsource\Model\QualityAssuranceResponse**](../Model/QualityAssuranceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runQaForJobParts**
> \Memsource\Model\QualityAssuranceResponse runQaForJobParts($projectUid, $body)

Run quality assurance (batch)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\QualityAssuranceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\QualityAssuranceBatchRunDto(); // \Memsource\Model\QualityAssuranceBatchRunDto | 

try {
    $result = $apiInstance->runQaForJobParts($projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityAssuranceApi->runQaForJobParts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\QualityAssuranceBatchRunDto**](../Model/QualityAssuranceBatchRunDto.md)|  | [optional]

### Return type

[**\Memsource\Model\QualityAssuranceResponse**](../Model/QualityAssuranceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateIgnoredChecks**
> updateIgnoredChecks($projectUid, $jobUid, $body)

Edit ignored checks



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\QualityAssuranceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 
$body = new \Memsource\Model\UpdateIgnoredChecksDto(); // \Memsource\Model\UpdateIgnoredChecksDto | 

try {
    $apiInstance->updateIgnoredChecks($projectUid, $jobUid, $body);
} catch (Exception $e) {
    echo 'Exception when calling QualityAssuranceApi->updateIgnoredChecks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |
 **body** | [**\Memsource\Model\UpdateIgnoredChecksDto**](../Model/UpdateIgnoredChecksDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


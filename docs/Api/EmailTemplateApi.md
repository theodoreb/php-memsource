# Memsource\EmailTemplateApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrgEmailTemplate**](EmailTemplateApi.md#getOrgEmailTemplate) | **GET** /api2/v1/emailTemplates/{templateId} | Get email template
[**listOrgEmailTemplates**](EmailTemplateApi.md#listOrgEmailTemplates) | **GET** /api2/v1/emailTemplates | List email templates


# **getOrgEmailTemplate**
> \Memsource\Model\OrganizationEmailTemplateDto getOrgEmailTemplate($templateId)

Get email template



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\EmailTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$templateId = 789; // int | 

try {
    $result = $apiInstance->getOrgEmailTemplate($templateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->getOrgEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateId** | **int**|  |

### Return type

[**\Memsource\Model\OrganizationEmailTemplateDto**](../Model/OrganizationEmailTemplateDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrgEmailTemplates**
> \Memsource\Model\PageDtoOrganizationEmailTemplateDto listOrgEmailTemplates($type, $pageNumber, $pageSize)

List email templates



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\EmailTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = "type_example"; // string | 
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->listOrgEmailTemplates($type, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->listOrgEmailTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  | [optional]
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoOrganizationEmailTemplateDto**](../Model/PageDtoOrganizationEmailTemplateDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


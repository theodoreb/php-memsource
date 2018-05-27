# Memsource\SupportedLanguagesApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listOfLanguages**](SupportedLanguagesApi.md#listOfLanguages) | **GET** /api2/v1/languages | List supported languages


# **listOfLanguages**
> \Memsource\Model\LanguageListDto listOfLanguages()

List supported languages



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\SupportedLanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listOfLanguages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportedLanguagesApi->listOfLanguages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Memsource\Model\LanguageListDto**](../Model/LanguageListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


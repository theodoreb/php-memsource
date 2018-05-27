# Memsource\SpellCheckApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addWord**](SpellCheckApi.md#addWord) | **POST** /api2/v1/spellCheck/words | Add word to dictionary
[**check**](SpellCheckApi.md#check) | **POST** /api2/v1/spellCheck/check | Spell check
[**checkByJob**](SpellCheckApi.md#checkByJob) | **POST** /api2/v1/spellCheck/check/{jobUid} | Spell check for job
[**suggest**](SpellCheckApi.md#suggest) | **POST** /api2/v1/spellCheck/suggest | Suggest a word


# **addWord**
> addWord($body)

Add word to dictionary



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\SpellCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\DictionaryItemDto(); // \Memsource\Model\DictionaryItemDto | 

try {
    $apiInstance->addWord($body);
} catch (Exception $e) {
    echo 'Exception when calling SpellCheckApi->addWord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\DictionaryItemDto**](../Model/DictionaryItemDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **check**
> \Memsource\Model\SpellCheckResponseDto check($body)

Spell check

Spell check using the settings of the user's organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\SpellCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\SpellCheckRequestDto(); // \Memsource\Model\SpellCheckRequestDto | 

try {
    $result = $apiInstance->check($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpellCheckApi->check: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\SpellCheckRequestDto**](../Model/SpellCheckRequestDto.md)|  | [optional]

### Return type

[**\Memsource\Model\SpellCheckResponseDto**](../Model/SpellCheckResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkByJob**
> \Memsource\Model\SpellCheckResponseDto checkByJob($jobUid, $body)

Spell check for job

Spell check using the settings from the project of the job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\SpellCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$jobUid = "jobUid_example"; // string | 
$body = new \Memsource\Model\SpellCheckRequestDto(); // \Memsource\Model\SpellCheckRequestDto | 

try {
    $result = $apiInstance->checkByJob($jobUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpellCheckApi->checkByJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobUid** | **string**|  |
 **body** | [**\Memsource\Model\SpellCheckRequestDto**](../Model/SpellCheckRequestDto.md)|  | [optional]

### Return type

[**\Memsource\Model\SpellCheckResponseDto**](../Model/SpellCheckResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suggest**
> \Memsource\Model\SuggestResponseDto suggest($body)

Suggest a word

Spell check suggest using the users's spell check dictionary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\SpellCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\SuggestRequestDto(); // \Memsource\Model\SuggestRequestDto | 

try {
    $result = $apiInstance->suggest($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpellCheckApi->suggest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\SuggestRequestDto**](../Model/SuggestRequestDto.md)|  | [optional]

### Return type

[**\Memsource\Model\SuggestResponseDto**](../Model/SuggestResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


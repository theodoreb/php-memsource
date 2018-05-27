# Memsource\ConversationsApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findConversations**](ConversationsApi.md#findConversations) | **POST** /api2/v1/jobs/conversations/find | Find all conversation
[**listAllConversations**](ConversationsApi.md#listAllConversations) | **GET** /api2/v1/jobs/{jobUid}/conversations | List all conversations


# **findConversations**
> \Memsource\Model\ConversationListDto findConversations($body)

Find all conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\FindConversationsDto(); // \Memsource\Model\FindConversationsDto | 

try {
    $result = $apiInstance->findConversations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->findConversations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\FindConversationsDto**](../Model/FindConversationsDto.md)|  | [optional]

### Return type

[**\Memsource\Model\ConversationListDto**](../Model/ConversationListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAllConversations**
> \Memsource\Model\ConversationListDto listAllConversations($jobUid, $includeDeleted, $since)

List all conversations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$jobUid = "jobUid_example"; // string | 
$includeDeleted = true; // bool | 
$since = "since_example"; // string | 

try {
    $result = $apiInstance->listAllConversations($jobUid, $includeDeleted, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->listAllConversations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobUid** | **string**|  |
 **includeDeleted** | **bool**|  | [optional]
 **since** | **string**|  | [optional]

### Return type

[**\Memsource\Model\ConversationListDto**](../Model/ConversationListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


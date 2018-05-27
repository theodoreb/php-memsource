# Memsource\PriceListApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLanguagePair**](PriceListApi.md#createLanguagePair) | **POST** /api2/v1/priceLists/{priceListId}/priceSets | Add language pairs
[**createPriceList**](PriceListApi.md#createPriceList) | **POST** /api2/v1/priceLists | Create price list
[**deleteLanguagePair**](PriceListApi.md#deleteLanguagePair) | **DELETE** /api2/v1/priceLists/{priceListId}/priceSets/{sourceLanguage}/{targetLanguage} | Remove language pair
[**deleteLanguagePairs**](PriceListApi.md#deleteLanguagePairs) | **DELETE** /api2/v1/priceLists/{priceListId}/priceSets | Remove language pairs
[**deletePriceList**](PriceListApi.md#deletePriceList) | **DELETE** /api2/v1/priceLists/{priceListId} | Delete price list
[**getListOfPriceList**](PriceListApi.md#getListOfPriceList) | **GET** /api2/v1/priceLists | List price lists
[**getPriceList**](PriceListApi.md#getPriceList) | **GET** /api2/v1/priceLists/{priceListId} | Get price list
[**getPricesWithWorkflowSteps**](PriceListApi.md#getPricesWithWorkflowSteps) | **GET** /api2/v1/priceLists/{priceListId}/priceSets | List price sets
[**setMinimumPriceForSet**](PriceListApi.md#setMinimumPriceForSet) | **POST** /api2/v1/priceLists/{priceListId}/priceSets/minimumPrices | Edit minimum prices
[**setPrices**](PriceListApi.md#setPrices) | **POST** /api2/v1/priceLists/{priceListId}/priceSets/prices | Edit prices
[**updatePriceList**](PriceListApi.md#updatePriceList) | **PUT** /api2/v1/priceLists/{priceListId} | Update price list


# **createLanguagePair**
> \Memsource\Model\TranslationPriceSetListDto createLanguagePair($priceListId, $body)

Add language pairs



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$priceListId = 789; // int | 
$body = new \Memsource\Model\TranslationPriceSetCreateDto(); // \Memsource\Model\TranslationPriceSetCreateDto | 

try {
    $result = $apiInstance->createLanguagePair($priceListId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->createLanguagePair: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **priceListId** | **int**|  |
 **body** | [**\Memsource\Model\TranslationPriceSetCreateDto**](../Model/TranslationPriceSetCreateDto.md)|  | [optional]

### Return type

[**\Memsource\Model\TranslationPriceSetListDto**](../Model/TranslationPriceSetListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPriceList**
> \Memsource\Model\TranslationPriceListDto createPriceList($body)

Create price list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\TranslationPriceListCreateDto(); // \Memsource\Model\TranslationPriceListCreateDto | 

try {
    $result = $apiInstance->createPriceList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->createPriceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\TranslationPriceListCreateDto**](../Model/TranslationPriceListCreateDto.md)|  | [optional]

### Return type

[**\Memsource\Model\TranslationPriceListDto**](../Model/TranslationPriceListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLanguagePair**
> deleteLanguagePair($priceListId, $sourceLanguage, $targetLanguage)

Remove language pair



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$priceListId = 789; // int | 
$sourceLanguage = "sourceLanguage_example"; // string | 
$targetLanguage = "targetLanguage_example"; // string | 

try {
    $apiInstance->deleteLanguagePair($priceListId, $sourceLanguage, $targetLanguage);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->deleteLanguagePair: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **priceListId** | **int**|  |
 **sourceLanguage** | **string**|  |
 **targetLanguage** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLanguagePairs**
> deleteLanguagePairs($priceListId, $body)

Remove language pairs



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$priceListId = 789; // int | 
$body = new \Memsource\Model\TranslationPriceSetBulkDeleteDto(); // \Memsource\Model\TranslationPriceSetBulkDeleteDto | 

try {
    $apiInstance->deleteLanguagePairs($priceListId, $body);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->deleteLanguagePairs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **priceListId** | **int**|  |
 **body** | [**\Memsource\Model\TranslationPriceSetBulkDeleteDto**](../Model/TranslationPriceSetBulkDeleteDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePriceList**
> deletePriceList($priceListId)

Delete price list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$priceListId = 789; // int | 

try {
    $apiInstance->deletePriceList($priceListId);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->deletePriceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **priceListId** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListOfPriceList**
> \Memsource\Model\PageDtoTranslationPriceListDto getListOfPriceList($pageNumber, $pageSize)

List price lists



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->getListOfPriceList($pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->getListOfPriceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoTranslationPriceListDto**](../Model/PageDtoTranslationPriceListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPriceList**
> \Memsource\Model\TranslationPriceListDto getPriceList($priceListId)

Get price list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$priceListId = 789; // int | 

try {
    $result = $apiInstance->getPriceList($priceListId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->getPriceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **priceListId** | **int**|  |

### Return type

[**\Memsource\Model\TranslationPriceListDto**](../Model/TranslationPriceListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPricesWithWorkflowSteps**
> \Memsource\Model\PageDtoTranslationPriceSetDto getPricesWithWorkflowSteps($priceListId, $pageNumber, $pageSize, $sourceLanguages, $targetLanguages)

List price sets



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$priceListId = 789; // int | 
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50
$sourceLanguages = array("sourceLanguages_example"); // string[] | 
$targetLanguages = array("targetLanguages_example"); // string[] | 

try {
    $result = $apiInstance->getPricesWithWorkflowSteps($priceListId, $pageNumber, $pageSize, $sourceLanguages, $targetLanguages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->getPricesWithWorkflowSteps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **priceListId** | **int**|  |
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]
 **sourceLanguages** | [**string[]**](../Model/string.md)|  | [optional]
 **targetLanguages** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Memsource\Model\PageDtoTranslationPriceSetDto**](../Model/PageDtoTranslationPriceSetDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMinimumPriceForSet**
> \Memsource\Model\TranslationPriceListDto setMinimumPriceForSet($priceListId, $body)

Edit minimum prices



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$priceListId = 789; // int | 
$body = new \Memsource\Model\TranslationPriceSetBulkMinimumPricesDto(); // \Memsource\Model\TranslationPriceSetBulkMinimumPricesDto | 

try {
    $result = $apiInstance->setMinimumPriceForSet($priceListId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->setMinimumPriceForSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **priceListId** | **int**|  |
 **body** | [**\Memsource\Model\TranslationPriceSetBulkMinimumPricesDto**](../Model/TranslationPriceSetBulkMinimumPricesDto.md)|  | [optional]

### Return type

[**\Memsource\Model\TranslationPriceListDto**](../Model/TranslationPriceListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPrices**
> \Memsource\Model\TranslationPriceListDto setPrices($priceListId, $body)

Edit prices

If object contains only price, all languages and workflow steps will be updated

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$priceListId = 789; // int | 
$body = new \Memsource\Model\TranslationPriceSetBulkPricesDto(); // \Memsource\Model\TranslationPriceSetBulkPricesDto | 

try {
    $result = $apiInstance->setPrices($priceListId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->setPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **priceListId** | **int**|  |
 **body** | [**\Memsource\Model\TranslationPriceSetBulkPricesDto**](../Model/TranslationPriceSetBulkPricesDto.md)|  | [optional]

### Return type

[**\Memsource\Model\TranslationPriceListDto**](../Model/TranslationPriceListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePriceList**
> \Memsource\Model\TranslationPriceListDto updatePriceList($priceListId, $body)

Update price list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$priceListId = 789; // int | 
$body = new \Memsource\Model\TranslationPriceListCreateDto(); // \Memsource\Model\TranslationPriceListCreateDto | 

try {
    $result = $apiInstance->updatePriceList($priceListId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->updatePriceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **priceListId** | **int**|  |
 **body** | [**\Memsource\Model\TranslationPriceListCreateDto**](../Model/TranslationPriceListCreateDto.md)|  | [optional]

### Return type

[**\Memsource\Model\TranslationPriceListDto**](../Model/TranslationPriceListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


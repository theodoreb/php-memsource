# Memsource\TermBaseApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**browseTerms**](TermBaseApi.md#browseTerms) | **POST** /api2/v1/termBases/{termBaseId}/browse | Browse term base
[**clearTermBase**](TermBaseApi.md#clearTermBase) | **DELETE** /api2/v1/termBases/{termBaseId}/terms | Clear term base
[**createTerm**](TermBaseApi.md#createTerm) | **POST** /api2/v1/termBases/{termBaseId}/terms | Create term
[**createTermBase**](TermBaseApi.md#createTermBase) | **POST** /api2/v1/termBases | Create term base
[**createTermByJob**](TermBaseApi.md#createTermByJob) | **POST** /api2/v1/projects/{projectUid}/jobs/{jobUid}/termBases/createByJob | Create term in job&#39;s term bases
[**deleteConcept**](TermBaseApi.md#deleteConcept) | **DELETE** /api2/v1/termBases/{termBaseId}/concepts/{conceptId} | Delete concept
[**deleteTerm**](TermBaseApi.md#deleteTerm) | **DELETE** /api2/v1/termBases/{termBaseId}/terms/{termId} | Delete term
[**deleteTermBase**](TermBaseApi.md#deleteTermBase) | **DELETE** /api2/v1/termBases/{termBaseId} | Delete term base
[**exportTermBase**](TermBaseApi.md#exportTermBase) | **GET** /api2/v1/termBases/{termBaseId}/export | Export term base
[**getTerm**](TermBaseApi.md#getTerm) | **GET** /api2/v1/termBases/{termBaseId}/terms/{termId} | Get term
[**getTermBase**](TermBaseApi.md#getTermBase) | **GET** /api2/v1/termBases/{termBaseId} | Get term base
[**getTermBaseMetadata**](TermBaseApi.md#getTermBaseMetadata) | **GET** /api2/v1/termBases/{termBaseId}/metadata | Get term base metadata
[**getTranslationResources**](TermBaseApi.md#getTranslationResources) | **GET** /api2/v1/projects/{projectUid}/jobs/{jobUid}/translationResources | Get translation resources
[**importTermBase**](TermBaseApi.md#importTermBase) | **POST** /api2/v1/termBases/{termBaseId}/upload | Upload term base
[**listTermBases**](TermBaseApi.md#listTermBases) | **GET** /api2/v1/termBases | List term bases
[**listTermsOfConcept**](TermBaseApi.md#listTermsOfConcept) | **GET** /api2/v1/termBases/{termBaseId}/concepts/{conceptId}/terms | Get terms of concept
[**searchTerms**](TermBaseApi.md#searchTerms) | **POST** /api2/v1/termBases/{termBaseId}/search | Search term base
[**searchTermsByJob**](TermBaseApi.md#searchTermsByJob) | **POST** /api2/v1/projects/{projectUid}/jobs/{jobUid}/termBases/searchByJob | Search job&#39;s term bases
[**searchTermsInTextByJob**](TermBaseApi.md#searchTermsInTextByJob) | **POST** /api2/v1/projects/{projectUid}/jobs/{jobUid}/termBases/searchInTextByJob | Search terms in text
[**updateTerm**](TermBaseApi.md#updateTerm) | **PUT** /api2/v1/termBases/{termBaseId}/terms/{termId} | Edit term
[**updateTermBase**](TermBaseApi.md#updateTermBase) | **PUT** /api2/v1/termBases/{termBaseId} | Edit term base


# **browseTerms**
> \Memsource\Model\BrowseResponseListDto browseTerms($termBaseId, $body)

Browse term base



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$termBaseId = 789; // int | 
$body = new \Memsource\Model\BrowseRequestDto(); // \Memsource\Model\BrowseRequestDto | 

try {
    $result = $apiInstance->browseTerms($termBaseId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->browseTerms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termBaseId** | **int**|  |
 **body** | [**\Memsource\Model\BrowseRequestDto**](../Model/BrowseRequestDto.md)|  | [optional]

### Return type

[**\Memsource\Model\BrowseResponseListDto**](../Model/BrowseResponseListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearTermBase**
> clearTermBase($termBaseId)

Clear term base

Deletes all terms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$termBaseId = 789; // int | 

try {
    $apiInstance->clearTermBase($termBaseId);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->clearTermBase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termBaseId** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTerm**
> \Memsource\Model\TermDto createTerm($termBaseId, $body)

Create term

Set conceptId to assign the term to an existing concept, otherwise a new concept will be created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$termBaseId = 789; // int | 
$body = new \Memsource\Model\TermCreateDto(); // \Memsource\Model\TermCreateDto | 

try {
    $result = $apiInstance->createTerm($termBaseId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->createTerm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termBaseId** | **int**|  |
 **body** | [**\Memsource\Model\TermCreateDto**](../Model/TermCreateDto.md)|  | [optional]

### Return type

[**\Memsource\Model\TermDto**](../Model/TermDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTermBase**
> \Memsource\Model\TermBaseDto createTermBase($body)

Create term base



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\TermBaseEditDto(); // \Memsource\Model\TermBaseEditDto | 

try {
    $result = $apiInstance->createTermBase($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->createTermBase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\TermBaseEditDto**](../Model/TermBaseEditDto.md)|  | [optional]

### Return type

[**\Memsource\Model\TermBaseDto**](../Model/TermBaseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTermByJob**
> \Memsource\Model\TermPairDto createTermByJob($jobUid, $projectUid, $body)

Create term in job's term bases

Create new term in the write term base assigned to the job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$jobUid = "jobUid_example"; // string | 
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\CreateTermsDto(); // \Memsource\Model\CreateTermsDto | 

try {
    $result = $apiInstance->createTermByJob($jobUid, $projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->createTermByJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobUid** | **string**|  |
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\CreateTermsDto**](../Model/CreateTermsDto.md)|  | [optional]

### Return type

[**\Memsource\Model\TermPairDto**](../Model/TermPairDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConcept**
> deleteConcept($termBaseId, $conceptId)

Delete concept



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$termBaseId = 789; // int | 
$conceptId = "conceptId_example"; // string | 

try {
    $apiInstance->deleteConcept($termBaseId, $conceptId);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->deleteConcept: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termBaseId** | **int**|  |
 **conceptId** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTerm**
> deleteTerm($termBaseId, $termId)

Delete term



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$termBaseId = 789; // int | 
$termId = "termId_example"; // string | 

try {
    $apiInstance->deleteTerm($termBaseId, $termId);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->deleteTerm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termBaseId** | **int**|  |
 **termId** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTermBase**
> deleteTermBase($termBaseId, $purge)

Delete term base



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$termBaseId = 789; // int | 
$purge = false; // bool | purge=false - the Termbase is can later be restored,                      \"purge=true - the Termbase is completely deleted and cannot be restored

try {
    $apiInstance->deleteTermBase($termBaseId, $purge);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->deleteTermBase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termBaseId** | **int**|  |
 **purge** | **bool**| purge&#x3D;false - the Termbase is can later be restored,                      \&quot;purge&#x3D;true - the Termbase is completely deleted and cannot be restored | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportTermBase**
> exportTermBase($termBaseId, $format, $charset)

Export term base



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$termBaseId = 789; // int | 
$format = "Tbx"; // string | 
$charset = "UTF-8"; // string | 

try {
    $apiInstance->exportTermBase($termBaseId, $format, $charset);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->exportTermBase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termBaseId** | **int**|  |
 **format** | **string**|  | [optional] [default to Tbx]
 **charset** | **string**|  | [optional] [default to UTF-8]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTerm**
> \Memsource\Model\TermDto getTerm($termBaseId, $termId)

Get term



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$termBaseId = 789; // int | 
$termId = "termId_example"; // string | 

try {
    $result = $apiInstance->getTerm($termBaseId, $termId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->getTerm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termBaseId** | **int**|  |
 **termId** | **string**|  |

### Return type

[**\Memsource\Model\TermDto**](../Model/TermDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTermBase**
> \Memsource\Model\TermBaseDto getTermBase($termBaseId)

Get term base



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$termBaseId = 789; // int | 

try {
    $result = $apiInstance->getTermBase($termBaseId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->getTermBase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termBaseId** | **int**|  |

### Return type

[**\Memsource\Model\TermBaseDto**](../Model/TermBaseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTermBaseMetadata**
> \Memsource\Model\MetadataDto getTermBaseMetadata($termBaseId)

Get term base metadata



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$termBaseId = 789; // int | 

try {
    $result = $apiInstance->getTermBaseMetadata($termBaseId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->getTermBaseMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termBaseId** | **int**|  |

### Return type

[**\Memsource\Model\MetadataDto**](../Model/MetadataDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranslationResources**
> \Memsource\Model\TranslationResourcesDto getTranslationResources($projectUid, $jobUid)

Get translation resources



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$jobUid = "jobUid_example"; // string | 

try {
    $result = $apiInstance->getTranslationResources($projectUid, $jobUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->getTranslationResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **jobUid** | **string**|  |

### Return type

[**\Memsource\Model\TranslationResourcesDto**](../Model/TranslationResourcesDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importTermBase**
> \Memsource\Model\ImportResponse importTermBase($termBaseId, $body, $contentDisposition, $charset, $strictLangMatching, $updateTerms)

Upload term base

Terms can be imported from XLS/XLSX and TBX file formats into a term base. See <a target=\"_blank\" href=\"https://wiki.memsource.com/wiki/Memsource_Cloud_User_Manual#Terminology_Import\">Memsource Wiki</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$termBaseId = 789; // int | 
$body = new \Memsource\Model\InputStream(); // \Memsource\Model\InputStream | 
$contentDisposition = "contentDisposition_example"; // string | 
$charset = "UTF-8"; // string | 
$strictLangMatching = false; // bool | 
$updateTerms = true; // bool | 

try {
    $result = $apiInstance->importTermBase($termBaseId, $body, $contentDisposition, $charset, $strictLangMatching, $updateTerms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->importTermBase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termBaseId** | **int**|  |
 **body** | [**\Memsource\Model\InputStream**](../Model/InputStream.md)|  | [optional]
 **contentDisposition** | **string**|  | [optional]
 **charset** | **string**|  | [optional] [default to UTF-8]
 **strictLangMatching** | **bool**|  | [optional] [default to false]
 **updateTerms** | **bool**|  | [optional] [default to true]

### Return type

[**\Memsource\Model\ImportResponse**](../Model/ImportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTermBases**
> \Memsource\Model\PageDtoTermBaseDto listTermBases($name, $lang, $clientId, $domainId, $subDomainId, $pageNumber, $pageSize)

List term bases



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$lang = array("lang_example"); // string[] | Language of the term base
$clientId = "clientId_example"; // string | 
$domainId = "domainId_example"; // string | 
$subDomainId = "subDomainId_example"; // string | 
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->listTermBases($name, $lang, $clientId, $domainId, $subDomainId, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->listTermBases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **lang** | [**string[]**](../Model/string.md)| Language of the term base | [optional]
 **clientId** | **string**|  | [optional]
 **domainId** | **string**|  | [optional]
 **subDomainId** | **string**|  | [optional]
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoTermBaseDto**](../Model/PageDtoTermBaseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTermsOfConcept**
> \Memsource\Model\ConceptDto listTermsOfConcept($termBaseId, $conceptId)

Get terms of concept



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$termBaseId = 789; // int | 
$conceptId = "conceptId_example"; // string | 

try {
    $result = $apiInstance->listTermsOfConcept($termBaseId, $conceptId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->listTermsOfConcept: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termBaseId** | **int**|  |
 **conceptId** | **string**|  |

### Return type

[**\Memsource\Model\ConceptDto**](../Model/ConceptDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchTerms**
> \Memsource\Model\SearchResponseListDto searchTerms($termBaseId, $body)

Search term base



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$termBaseId = 789; // int | 
$body = new \Memsource\Model\TermBaseSearchRequestDto(); // \Memsource\Model\TermBaseSearchRequestDto | 

try {
    $result = $apiInstance->searchTerms($termBaseId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->searchTerms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termBaseId** | **int**|  |
 **body** | [**\Memsource\Model\TermBaseSearchRequestDto**](../Model/TermBaseSearchRequestDto.md)|  | [optional]

### Return type

[**\Memsource\Model\SearchResponseListDto**](../Model/SearchResponseListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchTermsByJob**
> \Memsource\Model\SearchResponseListDto searchTermsByJob($jobUid, $projectUid, $body)

Search job's term bases

Search all read term bases assigned to the job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$jobUid = "jobUid_example"; // string | 
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\SearchByJobRequestDto(); // \Memsource\Model\SearchByJobRequestDto | 

try {
    $result = $apiInstance->searchTermsByJob($jobUid, $projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->searchTermsByJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobUid** | **string**|  |
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\SearchByJobRequestDto**](../Model/SearchByJobRequestDto.md)|  | [optional]

### Return type

[**\Memsource\Model\SearchResponseListDto**](../Model/SearchResponseListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchTermsInTextByJob**
> \Memsource\Model\SearchInTextResponseListDto searchTermsInTextByJob($jobUid, $projectUid, $body)

Search terms in text

Search in text in all read term bases assigned to the job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$jobUid = "jobUid_example"; // string | 
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\SearchInTextByJobRequestDto(); // \Memsource\Model\SearchInTextByJobRequestDto | 

try {
    $result = $apiInstance->searchTermsInTextByJob($jobUid, $projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->searchTermsInTextByJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobUid** | **string**|  |
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\SearchInTextByJobRequestDto**](../Model/SearchInTextByJobRequestDto.md)|  | [optional]

### Return type

[**\Memsource\Model\SearchInTextResponseListDto**](../Model/SearchInTextResponseListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTerm**
> \Memsource\Model\TermDto updateTerm($termBaseId, $termId, $body)

Edit term



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$termBaseId = 789; // int | 
$termId = "termId_example"; // string | 
$body = new \Memsource\Model\TermEditDto(); // \Memsource\Model\TermEditDto | 

try {
    $result = $apiInstance->updateTerm($termBaseId, $termId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->updateTerm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termBaseId** | **int**|  |
 **termId** | **string**|  |
 **body** | [**\Memsource\Model\TermEditDto**](../Model/TermEditDto.md)|  | [optional]

### Return type

[**\Memsource\Model\TermDto**](../Model/TermDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTermBase**
> \Memsource\Model\TermBaseDto updateTermBase($termBaseId, $body)

Edit term base

It is possible to add new languages only

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\TermBaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$termBaseId = 789; // int | 
$body = new \Memsource\Model\TermBaseEditDto(); // \Memsource\Model\TermBaseEditDto | 

try {
    $result = $apiInstance->updateTermBase($termBaseId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermBaseApi->updateTermBase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termBaseId** | **int**|  |
 **body** | [**\Memsource\Model\TermBaseEditDto**](../Model/TermBaseEditDto.md)|  | [optional]

### Return type

[**\Memsource\Model\TermBaseDto**](../Model/TermBaseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


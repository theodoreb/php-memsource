# Memsource\ConnectorApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConnector**](ConnectorApi.md#getConnector) | **GET** /api2/v1/connectors/{connectorId} | Get a connector
[**getConnectorList**](ConnectorApi.md#getConnectorList) | **GET** /api2/v1/connectors | List connectors
[**getFile**](ConnectorApi.md#getFile) | **GET** /api2/v1/connectors/{connectorId}/folders/{folder}/files/{file} | Download file
[**getFolder**](ConnectorApi.md#getFolder) | **GET** /api2/v1/connectors/{connectorId}/folders/{folder} | List files in a subfolder
[**getRootFolder**](ConnectorApi.md#getRootFolder) | **GET** /api2/v1/connectors/{connectorId}/folders | List files in root
[**uploadFile**](ConnectorApi.md#uploadFile) | **POST** /api2/v1/connectors/{connectorId}/folders/{folder} | Upload a file to a subfolder of the selected connector


# **getConnector**
> \Memsource\Model\ConnectorDto getConnector($connectorId)

Get a connector



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ConnectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connectorId = "connectorId_example"; // string | 

try {
    $result = $apiInstance->getConnector($connectorId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorApi->getConnector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connectorId** | **string**|  |

### Return type

[**\Memsource\Model\ConnectorDto**](../Model/ConnectorDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConnectorList**
> \Memsource\Model\ConnectorListDto getConnectorList($type)

List connectors



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ConnectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = "type_example"; // string | 

try {
    $result = $apiInstance->getConnectorList($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorApi->getConnectorList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  | [optional]

### Return type

[**\Memsource\Model\ConnectorListDto**](../Model/ConnectorListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFile**
> \Memsource\Model\InputStreamLength getFile($connectorId, $folder, $file)

Download file

Download a file from a subfolder of the selected connector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ConnectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connectorId = "connectorId_example"; // string | 
$folder = "folder_example"; // string | 
$file = "file_example"; // string | 

try {
    $result = $apiInstance->getFile($connectorId, $folder, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorApi->getFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connectorId** | **string**|  |
 **folder** | **string**|  |
 **file** | **string**|  |

### Return type

[**\Memsource\Model\InputStreamLength**](../Model/InputStreamLength.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFolder**
> \Memsource\Model\FileListDto getFolder($connectorId, $folder, $fileType, $sort, $direction)

List files in a subfolder

List files in a subfolder of the selected connector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ConnectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connectorId = "connectorId_example"; // string | 
$folder = "folder_example"; // string | 
$fileType = "ALL"; // string | 
$sort = "NAME"; // string | 
$direction = "ASCENDING"; // string | 

try {
    $result = $apiInstance->getFolder($connectorId, $folder, $fileType, $sort, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorApi->getFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connectorId** | **string**|  |
 **folder** | **string**|  |
 **fileType** | **string**|  | [optional] [default to ALL]
 **sort** | **string**|  | [optional] [default to NAME]
 **direction** | **string**|  | [optional] [default to ASCENDING]

### Return type

[**\Memsource\Model\FileListDto**](../Model/FileListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRootFolder**
> \Memsource\Model\FileListDto getRootFolder($connectorId, $fileType, $sort, $direction)

List files in root

List files in a root folder of the selected connector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ConnectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connectorId = "connectorId_example"; // string | 
$fileType = "ALL"; // string | 
$sort = "NAME"; // string | 
$direction = "ASCENDING"; // string | 

try {
    $result = $apiInstance->getRootFolder($connectorId, $fileType, $sort, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorApi->getRootFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connectorId** | **string**|  |
 **fileType** | **string**|  | [optional] [default to ALL]
 **sort** | **string**|  | [optional] [default to NAME]
 **direction** | **string**|  | [optional] [default to ASCENDING]

### Return type

[**\Memsource\Model\FileListDto**](../Model/FileListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadFile**
> \Memsource\Model\UploadResultDto uploadFile($connectorId, $folder, $contentType, $file, $sourceFileName, $subfolderName, $mimeType, $commitMessage)

Upload a file to a subfolder of the selected connector

Upload a file to a subfolder of the selected connector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ConnectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$connectorId = "connectorId_example"; // string | 
$folder = "folder_example"; // string | 
$contentType = "contentType_example"; // string | 
$file = "/path/to/file.txt"; // \SplFileObject | Translated file to upload
$sourceFileName = "sourceFileName_example"; // string | Name or ID of the original file
$subfolderName = "subfolderName_example"; // string | Optional subfolder to upload the file to
$mimeType = "mimeType_example"; // string | Mime type of the file to upload
$commitMessage = "commitMessage_example"; // string | Commit message for upload to Git, etc.

try {
    $result = $apiInstance->uploadFile($connectorId, $folder, $contentType, $file, $sourceFileName, $subfolderName, $mimeType, $commitMessage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connectorId** | **string**|  |
 **folder** | **string**|  |
 **contentType** | **string**|  |
 **file** | **\SplFileObject**| Translated file to upload |
 **sourceFileName** | **string**| Name or ID of the original file | [optional]
 **subfolderName** | **string**| Optional subfolder to upload the file to | [optional]
 **mimeType** | **string**| Mime type of the file to upload | [optional]
 **commitMessage** | **string**| Commit message for upload to Git, etc. | [optional]

### Return type

[**\Memsource\Model\UploadResultDto**](../Model/UploadResultDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


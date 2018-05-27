# Memsource\UserApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelDeletion**](UserApi.md#cancelDeletion) | **POST** /api2/v1/users/{userId}/undelete | Restore user
[**createUser**](UserApi.md#createUser) | **POST** /api2/v1/users | Create user
[**deleteUser**](UserApi.md#deleteUser) | **DELETE** /api2/v1/users/{userId} | Delete user
[**getListOfUsersFiltered**](UserApi.md#getListOfUsersFiltered) | **GET** /api2/v1/users | List users
[**getUser**](UserApi.md#getUser) | **GET** /api2/v1/users/{userId} | Get user
[**listAssignedProjects**](UserApi.md#listAssignedProjects) | **GET** /api2/v1/users/{userId}/projects | List assigned projects
[**listJobs**](UserApi.md#listJobs) | **GET** /api2/v1/users/{userId}/jobs | List assigned jobs
[**listTargetLangs**](UserApi.md#listTargetLangs) | **GET** /api2/v1/users/{userId}/targetLangs | List assigned target languages
[**listWorkflowSteps**](UserApi.md#listWorkflowSteps) | **GET** /api2/v1/users/{userId}/workflowSteps | List assigned workflow steps
[**loginActivity**](UserApi.md#loginActivity) | **GET** /api2/v1/users/{userId}/loginStatistics | Login statistics
[**sendLoginInfo**](UserApi.md#sendLoginInfo) | **POST** /api2/v1/users/{userId}/emailLoginInformation | Send login information
[**updatePassword**](UserApi.md#updatePassword) | **POST** /api2/v1/users/{userId}/updatePassword | Update password
[**updateUser**](UserApi.md#updateUser) | **PUT** /api2/v1/users/{userId} | Edit user


# **cancelDeletion**
> \Memsource\Model\UserDto cancelDeletion($userId)

Restore user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 789; // int | 

try {
    $result = $apiInstance->cancelDeletion($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->cancelDeletion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**|  |

### Return type

[**\Memsource\Model\UserDto**](../Model/UserDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUser**
> \Memsource\Model\UserDetailsDto createUser($body)

Create user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\UserCreateDto(); // \Memsource\Model\UserCreateDto | 

try {
    $result = $apiInstance->createUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\UserCreateDto**](../Model/UserCreateDto.md)|  | [optional]

### Return type

[**\Memsource\Model\UserDetailsDto**](../Model/UserDetailsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUser**
> deleteUser($userId)

Delete user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 789; // int | 

try {
    $apiInstance->deleteUser($userId);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListOfUsersFiltered**
> \Memsource\Model\PageDtoUserDto getListOfUsersFiltered($userName, $email, $role, $includeDeleted, $pageNumber, $pageSize)

List users



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userName = "userName_example"; // string | 
$email = "email_example"; // string | 
$role = array("role_example"); // string[] | 
$includeDeleted = false; // bool | 
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->getListOfUsersFiltered($userName, $email, $role, $includeDeleted, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getListOfUsersFiltered: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userName** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **role** | [**string[]**](../Model/string.md)|  | [optional]
 **includeDeleted** | **bool**|  | [optional] [default to false]
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoUserDto**](../Model/PageDtoUserDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> \Memsource\Model\UserDetailsDto getUser($userId)

Get user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 789; // int | 

try {
    $result = $apiInstance->getUser($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**|  |

### Return type

[**\Memsource\Model\UserDetailsDto**](../Model/UserDetailsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAssignedProjects**
> \Memsource\Model\PageDtoProjectReference listAssignedProjects($userId, $status, $targetLang, $workflowStepId, $dueInHours, $filename, $projectName, $pageNumber, $pageSize)

List assigned projects



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 789; // int | 
$status = array("status_example"); // string[] | 
$targetLang = array("targetLang_example"); // string[] | 
$workflowStepId = 789; // int | 
$dueInHours = 56; // int | -1 for jobs that are overdue
$filename = "filename_example"; // string | 
$projectName = "projectName_example"; // string | 
$pageNumber = 0; // int | 
$pageSize = 50; // int | 

try {
    $result = $apiInstance->listAssignedProjects($userId, $status, $targetLang, $workflowStepId, $dueInHours, $filename, $projectName, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listAssignedProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**|  |
 **status** | [**string[]**](../Model/string.md)|  | [optional]
 **targetLang** | [**string[]**](../Model/string.md)|  | [optional]
 **workflowStepId** | **int**|  | [optional]
 **dueInHours** | **int**| -1 for jobs that are overdue | [optional]
 **filename** | **string**|  | [optional]
 **projectName** | **string**|  | [optional]
 **pageNumber** | **int**|  | [optional] [default to 0]
 **pageSize** | **int**|  | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoProjectReference**](../Model/PageDtoProjectReference.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listJobs**
> \Memsource\Model\PageDtoAssignedJobDto listJobs($userId, $status, $projectUid, $targetLang, $workflowStepId, $dueInHours, $filename, $pageNumber, $pageSize)

List assigned jobs



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 789; // int | 
$status = array("status_example"); // string[] | 
$projectUid = "projectUid_example"; // string | 
$targetLang = array("targetLang_example"); // string[] | 
$workflowStepId = 789; // int | 
$dueInHours = 56; // int | -1 for jobs that are overdue
$filename = "filename_example"; // string | 
$pageNumber = 0; // int | 
$pageSize = 50; // int | 

try {
    $result = $apiInstance->listJobs($userId, $status, $projectUid, $targetLang, $workflowStepId, $dueInHours, $filename, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**|  |
 **status** | [**string[]**](../Model/string.md)|  | [optional]
 **projectUid** | **string**|  | [optional]
 **targetLang** | [**string[]**](../Model/string.md)|  | [optional]
 **workflowStepId** | **int**|  | [optional]
 **dueInHours** | **int**| -1 for jobs that are overdue | [optional]
 **filename** | **string**|  | [optional]
 **pageNumber** | **int**|  | [optional] [default to 0]
 **pageSize** | **int**|  | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoAssignedJobDto**](../Model/PageDtoAssignedJobDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTargetLangs**
> \Memsource\Model\PageDtoString listTargetLangs($userId, $status, $projectUid, $workflowStepId, $dueInHours, $filename, $pageNumber, $pageSize)

List assigned target languages



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 789; // int | 
$status = array("status_example"); // string[] | 
$projectUid = "projectUid_example"; // string | 
$workflowStepId = 789; // int | 
$dueInHours = 56; // int | -1 for jobs that are overdue
$filename = "filename_example"; // string | 
$pageNumber = 0; // int | 
$pageSize = 50; // int | 

try {
    $result = $apiInstance->listTargetLangs($userId, $status, $projectUid, $workflowStepId, $dueInHours, $filename, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listTargetLangs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**|  |
 **status** | [**string[]**](../Model/string.md)|  | [optional]
 **projectUid** | **string**|  | [optional]
 **workflowStepId** | **int**|  | [optional]
 **dueInHours** | **int**| -1 for jobs that are overdue | [optional]
 **filename** | **string**|  | [optional]
 **pageNumber** | **int**|  | [optional] [default to 0]
 **pageSize** | **int**|  | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoString**](../Model/PageDtoString.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listWorkflowSteps**
> \Memsource\Model\PageDtoWorkflowStepReference listWorkflowSteps($userId, $status, $projectUid, $targetLang, $dueInHours, $filename, $pageNumber, $pageSize)

List assigned workflow steps



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 789; // int | 
$status = array("status_example"); // string[] | 
$projectUid = "projectUid_example"; // string | 
$targetLang = array("targetLang_example"); // string[] | 
$dueInHours = 56; // int | -1 for jobs that are overdue
$filename = "filename_example"; // string | 
$pageNumber = 0; // int | 
$pageSize = 50; // int | 

try {
    $result = $apiInstance->listWorkflowSteps($userId, $status, $projectUid, $targetLang, $dueInHours, $filename, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listWorkflowSteps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**|  |
 **status** | [**string[]**](../Model/string.md)|  | [optional]
 **projectUid** | **string**|  | [optional]
 **targetLang** | [**string[]**](../Model/string.md)|  | [optional]
 **dueInHours** | **int**| -1 for jobs that are overdue | [optional]
 **filename** | **string**|  | [optional]
 **pageNumber** | **int**|  | [optional] [default to 0]
 **pageSize** | **int**|  | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoWorkflowStepReference**](../Model/PageDtoWorkflowStepReference.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginActivity**
> \Memsource\Model\UserStatisticsListDto loginActivity($userId)

Login statistics



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 789; // int | 

try {
    $result = $apiInstance->loginActivity($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->loginActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**|  |

### Return type

[**\Memsource\Model\UserStatisticsListDto**](../Model/UserStatisticsListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendLoginInfo**
> sendLoginInfo($userId)

Send login information



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 789; // int | 

try {
    $apiInstance->sendLoginInfo($userId);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->sendLoginInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePassword**
> updatePassword($userId, $body)

Update password



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 789; // int | 
$body = new \Memsource\Model\UserPasswordEditDto(); // \Memsource\Model\UserPasswordEditDto | 

try {
    $apiInstance->updatePassword($userId, $body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updatePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**|  |
 **body** | [**\Memsource\Model\UserPasswordEditDto**](../Model/UserPasswordEditDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUser**
> \Memsource\Model\UserDetailsDto updateUser($userId, $body)

Edit user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 789; // int | 
$body = new \Memsource\Model\UserEditDto(); // \Memsource\Model\UserEditDto | 

try {
    $result = $apiInstance->updateUser($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**|  |
 **body** | [**\Memsource\Model\UserEditDto**](../Model/UserEditDto.md)|  | [optional]

### Return type

[**\Memsource\Model\UserDetailsDto**](../Model/UserDetailsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


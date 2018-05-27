# Memsource\ProjectApi

All URIs are relative to *https://cloud.memsource.com/web*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTargetLanguageToProject**](ProjectApi.md#addTargetLanguageToProject) | **POST** /api2/v1/projects/{projectUid}/targetLangs | Add target languages
[**addWorkflowSteps**](ProjectApi.md#addWorkflowSteps) | **POST** /api2/v1/projects/{projectUid}/workflowSteps | Add workflow steps
[**assignVendorToProject**](ProjectApi.md#assignVendorToProject) | **POST** /api2/v1/projects/{projectUid}/assignVendor | Assign vendor
[**cloneProject**](ProjectApi.md#cloneProject) | **POST** /api2/v1/projects/{projectUid}/clone | Clone project
[**createProject**](ProjectApi.md#createProject) | **POST** /api2/v1/projects | Create project
[**createProjectFromTemplate**](ProjectApi.md#createProjectFromTemplate) | **POST** /api2/v1/projects/applyTemplate/{templateId} | Create project from template
[**deleteProject**](ProjectApi.md#deleteProject) | **DELETE** /api2/v1/projects/{projectUid} | Delete project
[**editProject**](ProjectApi.md#editProject) | **PUT** /api2/v1/projects/{projectUid} | Edit project
[**editProjectAccessSettings**](ProjectApi.md#editProjectAccessSettings) | **PUT** /api2/v1/projects/{projectUid}/accessSettings | Edit access and security settings
[**editProjectQualityAssuranceSettings**](ProjectApi.md#editProjectQualityAssuranceSettings) | **PUT** /api2/v1/projects/{projectUid}/qaSettings | Edit quality assurance settings
[**enabledQualityChecks**](ProjectApi.md#enabledQualityChecks) | **GET** /api2/v1/projects/{projectUid}/qaSettingsChecks | Get QA checks
[**getFinancialSettings**](ProjectApi.md#getFinancialSettings) | **GET** /api2/v1/projects/{projectUid}/financialSettings | Get financial settings
[**getMtSettingsForProject**](ProjectApi.md#getMtSettingsForProject) | **GET** /api2/v1/projects/{projectUid}/mtSettings | Get machine translate settings
[**getProject**](ProjectApi.md#getProject) | **GET** /api2/v1/projects/{projectUid} | Get project
[**getProjectAccessSettings**](ProjectApi.md#getProjectAccessSettings) | **GET** /api2/v1/projects/{projectUid}/accessSettings | Get access and security settings
[**getProjectQASettings**](ProjectApi.md#getProjectQASettings) | **GET** /api2/v1/projects/{projectUid}/qaSettings | Get quality assurance settings
[**getProjectSettings**](ProjectApi.md#getProjectSettings) | **GET** /api2/v1/projects/{projectUid}/lqaSettings | Get LQA settings
[**getProjectTermBases**](ProjectApi.md#getProjectTermBases) | **GET** /api2/v1/projects/{projectUid}/termBases | Get term bases
[**getProjectTransMemories**](ProjectApi.md#getProjectTransMemories) | **GET** /api2/v1/projects/{projectUid}/transMemories | Get translation memories
[**getProjectWorkflowSteps**](ProjectApi.md#getProjectWorkflowSteps) | **GET** /api2/v1/projects/{projectUid}/workflowSteps | Get workflow steps
[**getQuotesForProject**](ProjectApi.md#getQuotesForProject) | **GET** /api2/v1/projects/{projectUid}/quotes | List quotes
[**listAssignedProjects**](ProjectApi.md#listAssignedProjects) | **GET** /api2/v1/users/{userId}/projects | List assigned projects
[**listByProject**](ProjectApi.md#listByProject) | **GET** /api2/v1/projects/{projectUid}/analyses | List analyses by project
[**listProjects**](ProjectApi.md#listProjects) | **GET** /api2/v1/projects | List projects
[**listProviders**](ProjectApi.md#listProviders) | **POST** /api2/v1/projects/{projectUid}/providers/suggest | Get suggested providers
[**setFinancialSettings**](ProjectApi.md#setFinancialSettings) | **PUT** /api2/v1/projects/{projectUid}/financialSettings | Edit financial settings
[**setMtSettingsForProject**](ProjectApi.md#setMtSettingsForProject) | **PUT** /api2/v1/projects/{projectUid}/mtSettings | Edit machine translate settings
[**setMtSettingsPerLanguageForProject**](ProjectApi.md#setMtSettingsPerLanguageForProject) | **PUT** /api2/v1/projects/{projectUid}/mtSettingsPerLanguage | Edit machine translate settings per language
[**setProjectStatus**](ProjectApi.md#setProjectStatus) | **POST** /api2/v1/projects/{projectUid}/setStatus | Edit project status
[**setProjectTermBases**](ProjectApi.md#setProjectTermBases) | **PUT** /api2/v1/projects/{projectUid}/termBases | Edit term bases
[**setProjectTransMemories**](ProjectApi.md#setProjectTransMemories) | **PUT** /api2/v1/projects/{projectUid}/transMemories | Edit translation memories


# **addTargetLanguageToProject**
> addTargetLanguageToProject($projectUid, $body)

Add target languages

Add target languages to project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\AddTargetLangDto(); // \Memsource\Model\AddTargetLangDto | 

try {
    $apiInstance->addTargetLanguageToProject($projectUid, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->addTargetLanguageToProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\AddTargetLangDto**](../Model/AddTargetLangDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addWorkflowSteps**
> addWorkflowSteps($projectUid, $body)

Add workflow steps



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\AddWorkflowStepsDto(); // \Memsource\Model\AddWorkflowStepsDto | 

try {
    $apiInstance->addWorkflowSteps($projectUid, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->addWorkflowSteps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\AddWorkflowStepsDto**](../Model/AddWorkflowStepsDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignVendorToProject**
> assignVendorToProject($projectUid, $body)

Assign vendor



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\AssignVendorDto(); // \Memsource\Model\AssignVendorDto | 

try {
    $apiInstance->assignVendorToProject($projectUid, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->assignVendorToProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\AssignVendorDto**](../Model/AssignVendorDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloneProject**
> \Memsource\Model\AbstractProjectDto cloneProject($projectUid, $body)

Clone project



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\CloneProjectDto(); // \Memsource\Model\CloneProjectDto | 

try {
    $result = $apiInstance->cloneProject($projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->cloneProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\CloneProjectDto**](../Model/CloneProjectDto.md)|  | [optional]

### Return type

[**\Memsource\Model\AbstractProjectDto**](../Model/AbstractProjectDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProject**
> \Memsource\Model\AbstractProjectDto createProject($body)

Create project



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Memsource\Model\CreateProjectDto(); // \Memsource\Model\CreateProjectDto | 

try {
    $result = $apiInstance->createProject($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->createProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Memsource\Model\CreateProjectDto**](../Model/CreateProjectDto.md)|  | [optional]

### Return type

[**\Memsource\Model\AbstractProjectDto**](../Model/AbstractProjectDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProjectFromTemplate**
> \Memsource\Model\AbstractProjectDto createProjectFromTemplate($templateId, $body)

Create project from template



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$templateId = 789; // int | 
$body = new \Memsource\Model\CreateProjectFromTemplateDto(); // \Memsource\Model\CreateProjectFromTemplateDto | 

try {
    $result = $apiInstance->createProjectFromTemplate($templateId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->createProjectFromTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateId** | **int**|  |
 **body** | [**\Memsource\Model\CreateProjectFromTemplateDto**](../Model/CreateProjectFromTemplateDto.md)|  | [optional]

### Return type

[**\Memsource\Model\AbstractProjectDto**](../Model/AbstractProjectDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProject**
> deleteProject($projectUid, $purge)

Delete project



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$purge = false; // bool | 

try {
    $apiInstance->deleteProject($projectUid, $purge);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deleteProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **purge** | **bool**|  | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editProject**
> \Memsource\Model\AbstractProjectDto editProject($projectUid, $body)

Edit project



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\EditProjectDto(); // \Memsource\Model\EditProjectDto | 

try {
    $result = $apiInstance->editProject($projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->editProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\EditProjectDto**](../Model/EditProjectDto.md)|  | [optional]

### Return type

[**\Memsource\Model\AbstractProjectDto**](../Model/AbstractProjectDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editProjectAccessSettings**
> \Memsource\Model\ProjectSecuritySettingsDto editProjectAccessSettings($projectUid, $body)

Edit access and security settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\EditProjectSecuritySettingsDto(); // \Memsource\Model\EditProjectSecuritySettingsDto | 

try {
    $result = $apiInstance->editProjectAccessSettings($projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->editProjectAccessSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\EditProjectSecuritySettingsDto**](../Model/EditProjectSecuritySettingsDto.md)|  | [optional]

### Return type

[**\Memsource\Model\ProjectSecuritySettingsDto**](../Model/ProjectSecuritySettingsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editProjectQualityAssuranceSettings**
> \Memsource\Model\QASettingsDto editProjectQualityAssuranceSettings($projectUid, $body)

Edit quality assurance settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\EditQASettingsDto(); // \Memsource\Model\EditQASettingsDto | 

try {
    $result = $apiInstance->editProjectQualityAssuranceSettings($projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->editProjectQualityAssuranceSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\EditQASettingsDto**](../Model/EditQASettingsDto.md)|  | [optional]

### Return type

[**\Memsource\Model\QASettingsDto**](../Model/QASettingsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enabledQualityChecks**
> \Memsource\Model\EnabledQualityChecksDto enabledQualityChecks($projectUid)

Get QA checks

Returns enabled quality assurance settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 

try {
    $result = $apiInstance->enabledQualityChecks($projectUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->enabledQualityChecks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |

### Return type

[**\Memsource\Model\EnabledQualityChecksDto**](../Model/EnabledQualityChecksDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFinancialSettings**
> \Memsource\Model\FinancialSettingsDto getFinancialSettings($projectUid)

Get financial settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 

try {
    $result = $apiInstance->getFinancialSettings($projectUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getFinancialSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |

### Return type

[**\Memsource\Model\FinancialSettingsDto**](../Model/FinancialSettingsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMtSettingsForProject**
> \Memsource\Model\MTSettingsPerLanguageListDto getMtSettingsForProject($projectUid)

Get machine translate settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 

try {
    $result = $apiInstance->getMtSettingsForProject($projectUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getMtSettingsForProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |

### Return type

[**\Memsource\Model\MTSettingsPerLanguageListDto**](../Model/MTSettingsPerLanguageListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProject**
> \Memsource\Model\AbstractProjectDto getProject($projectUid)

Get project



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 

try {
    $result = $apiInstance->getProject($projectUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |

### Return type

[**\Memsource\Model\AbstractProjectDto**](../Model/AbstractProjectDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectAccessSettings**
> \Memsource\Model\ProjectSecuritySettingsDto getProjectAccessSettings($projectUid)

Get access and security settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 

try {
    $result = $apiInstance->getProjectAccessSettings($projectUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectAccessSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |

### Return type

[**\Memsource\Model\ProjectSecuritySettingsDto**](../Model/ProjectSecuritySettingsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectQASettings**
> \Memsource\Model\QASettingsDto getProjectQASettings($projectUid)

Get quality assurance settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 

try {
    $result = $apiInstance->getProjectQASettings($projectUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectQASettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |

### Return type

[**\Memsource\Model\QASettingsDto**](../Model/QASettingsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectSettings**
> \Memsource\Model\LqaSettingsDto getProjectSettings($projectUid, $workflowLevel)

Get LQA settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$workflowLevel = 1; // int | 

try {
    $result = $apiInstance->getProjectSettings($projectUid, $workflowLevel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **workflowLevel** | **int**|  | [optional] [default to 1]

### Return type

[**\Memsource\Model\LqaSettingsDto**](../Model/LqaSettingsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectTermBases**
> \Memsource\Model\ProjectTermBaseListDto getProjectTermBases($projectUid)

Get term bases



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 

try {
    $result = $apiInstance->getProjectTermBases($projectUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectTermBases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |

### Return type

[**\Memsource\Model\ProjectTermBaseListDto**](../Model/ProjectTermBaseListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectTransMemories**
> \Memsource\Model\ProjectTransMemoryListDto getProjectTransMemories($projectUid)

Get translation memories



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 

try {
    $result = $apiInstance->getProjectTransMemories($projectUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectTransMemories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |

### Return type

[**\Memsource\Model\ProjectTransMemoryListDto**](../Model/ProjectTransMemoryListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectWorkflowSteps**
> \Memsource\Model\ProjectWorkflowStepListDto getProjectWorkflowSteps($projectUid)

Get workflow steps



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 

try {
    $result = $apiInstance->getProjectWorkflowSteps($projectUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectWorkflowSteps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |

### Return type

[**\Memsource\Model\ProjectWorkflowStepListDto**](../Model/ProjectWorkflowStepListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuotesForProject**
> \Memsource\Model\PageDtoQuoteDto getQuotesForProject($projectUid, $pageNumber, $pageSize)

List quotes



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$pageNumber = 0; // int | 
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->getQuotesForProject($projectUid, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getQuotesForProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **pageNumber** | **int**|  | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoQuoteDto**](../Model/PageDtoQuoteDto.md)

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

$apiInstance = new Memsource\Api\ProjectApi(
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
    echo 'Exception when calling ProjectApi->listAssignedProjects: ', $e->getMessage(), PHP_EOL;
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

# **listByProject**
> \Memsource\Model\PageDtoAnalyseDto listByProject($projectUid, $pageNumber, $pageSize)

List analyses by project



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$pageNumber = 0; // int | 
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->listByProject($projectUid, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->listByProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **pageNumber** | **int**|  | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoAnalyseDto**](../Model/PageDtoAnalyseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProjects**
> \Memsource\Model\PageDtoAbstractProjectDto listProjects($name, $clientId, $clientName, $businessUnitName, $statuses, $targetLangs, $domainName, $subDomainName, $costCenterId, $costCenterName, $dueInHours, $createdInLastHours, $sourceLangs, $ownerId, $jobStatuses, $jobStatusGroup, $buyerId, $pageNumber, $pageSize)

List projects



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$clientId = 789; // int | 
$clientName = "clientName_example"; // string | 
$businessUnitName = "businessUnitName_example"; // string | 
$statuses = array("statuses_example"); // string[] | 
$targetLangs = array("targetLangs_example"); // string[] | 
$domainName = "domainName_example"; // string | 
$subDomainName = "subDomainName_example"; // string | 
$costCenterId = 789; // int | 
$costCenterName = "costCenterName_example"; // string | 
$dueInHours = 56; // int | -1 for projects that are overdue
$createdInLastHours = 56; // int | 
$sourceLangs = array("sourceLangs_example"); // string[] | 
$ownerId = 789; // int | 
$jobStatuses = array("jobStatuses_example"); // string[] | Allowed for linguists only
$jobStatusGroup = "jobStatusGroup_example"; // string | Allowed for linguists only
$buyerId = 789; // int | 
$pageNumber = 0; // int | Page number, starting with 0, default 0
$pageSize = 50; // int | Page size, accepts values between 1 and 50, default 50

try {
    $result = $apiInstance->listProjects($name, $clientId, $clientName, $businessUnitName, $statuses, $targetLangs, $domainName, $subDomainName, $costCenterId, $costCenterName, $dueInHours, $createdInLastHours, $sourceLangs, $ownerId, $jobStatuses, $jobStatusGroup, $buyerId, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->listProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **clientId** | **int**|  | [optional]
 **clientName** | **string**|  | [optional]
 **businessUnitName** | **string**|  | [optional]
 **statuses** | [**string[]**](../Model/string.md)|  | [optional]
 **targetLangs** | [**string[]**](../Model/string.md)|  | [optional]
 **domainName** | **string**|  | [optional]
 **subDomainName** | **string**|  | [optional]
 **costCenterId** | **int**|  | [optional]
 **costCenterName** | **string**|  | [optional]
 **dueInHours** | **int**| -1 for projects that are overdue | [optional]
 **createdInLastHours** | **int**|  | [optional]
 **sourceLangs** | [**string[]**](../Model/string.md)|  | [optional]
 **ownerId** | **int**|  | [optional]
 **jobStatuses** | [**string[]**](../Model/string.md)| Allowed for linguists only | [optional]
 **jobStatusGroup** | **string**| Allowed for linguists only | [optional]
 **buyerId** | **int**|  | [optional]
 **pageNumber** | **int**| Page number, starting with 0, default 0 | [optional] [default to 0]
 **pageSize** | **int**| Page size, accepts values between 1 and 50, default 50 | [optional] [default to 50]

### Return type

[**\Memsource\Model\PageDtoAbstractProjectDto**](../Model/PageDtoAbstractProjectDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProviders**
> \Memsource\Model\ProviderListDto listProviders($projectUid)

Get suggested providers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 

try {
    $result = $apiInstance->listProviders($projectUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->listProviders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |

### Return type

[**\Memsource\Model\ProviderListDto**](../Model/ProviderListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setFinancialSettings**
> \Memsource\Model\FinancialSettingsDto setFinancialSettings($projectUid, $body)

Edit financial settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\SetFinancialSettingsDto(); // \Memsource\Model\SetFinancialSettingsDto | 

try {
    $result = $apiInstance->setFinancialSettings($projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setFinancialSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\SetFinancialSettingsDto**](../Model/SetFinancialSettingsDto.md)|  | [optional]

### Return type

[**\Memsource\Model\FinancialSettingsDto**](../Model/FinancialSettingsDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMtSettingsForProject**
> \Memsource\Model\MTSettingsPerLanguageListDto setMtSettingsForProject($projectUid, $body)

Edit machine translate settings

This will erase all mtSettings per language for project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\EditProjectMTSettingsDto(); // \Memsource\Model\EditProjectMTSettingsDto | 

try {
    $result = $apiInstance->setMtSettingsForProject($projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setMtSettingsForProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\EditProjectMTSettingsDto**](../Model/EditProjectMTSettingsDto.md)|  | [optional]

### Return type

[**\Memsource\Model\MTSettingsPerLanguageListDto**](../Model/MTSettingsPerLanguageListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMtSettingsPerLanguageForProject**
> \Memsource\Model\MTSettingsPerLanguageListDto setMtSettingsPerLanguageForProject($projectUid, $body)

Edit machine translate settings per language

This will erase mtSettings for project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\EditProjectMTSettPerLangListDto(); // \Memsource\Model\EditProjectMTSettPerLangListDto | 

try {
    $result = $apiInstance->setMtSettingsPerLanguageForProject($projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setMtSettingsPerLanguageForProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\EditProjectMTSettPerLangListDto**](../Model/EditProjectMTSettPerLangListDto.md)|  | [optional]

### Return type

[**\Memsource\Model\MTSettingsPerLanguageListDto**](../Model/MTSettingsPerLanguageListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setProjectStatus**
> setProjectStatus($projectUid, $body)

Edit project status



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\SetProjectStatusDto(); // \Memsource\Model\SetProjectStatusDto | 

try {
    $apiInstance->setProjectStatus($projectUid, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setProjectStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\SetProjectStatusDto**](../Model/SetProjectStatusDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setProjectTermBases**
> \Memsource\Model\ProjectTermBaseListDto setProjectTermBases($projectUid, $body)

Edit term bases



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\SetTermBaseDto(); // \Memsource\Model\SetTermBaseDto | 

try {
    $result = $apiInstance->setProjectTermBases($projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setProjectTermBases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\SetTermBaseDto**](../Model/SetTermBaseDto.md)|  | [optional]

### Return type

[**\Memsource\Model\ProjectTermBaseListDto**](../Model/ProjectTermBaseListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setProjectTransMemories**
> \Memsource\Model\ProjectTransMemoryListDto setProjectTransMemories($projectUid, $body)

Edit translation memories



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Memsource\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectUid = "projectUid_example"; // string | 
$body = new \Memsource\Model\SetProjectTransMemoriesDto(); // \Memsource\Model\SetProjectTransMemoriesDto | 

try {
    $result = $apiInstance->setProjectTransMemories($projectUid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setProjectTransMemories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectUid** | **string**|  |
 **body** | [**\Memsource\Model\SetProjectTransMemoriesDto**](../Model/SetProjectTransMemoriesDto.md)|  | [optional]

### Return type

[**\Memsource\Model\ProjectTransMemoryListDto**](../Model/ProjectTransMemoryListDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


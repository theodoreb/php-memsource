# CreateProjectDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | 
**sourceLang** | **string** |  | 
**targetLangs** | **string[]** |  | 
**client** | [**\Memsource\Model\IdReference**](IdReference.md) | Client referenced by id | [optional] 
**businessUnit** | [**\Memsource\Model\IdReference**](IdReference.md) |  | [optional] 
**domain** | [**\Memsource\Model\IdReference**](IdReference.md) |  | [optional] 
**subDomain** | [**\Memsource\Model\IdReference**](IdReference.md) |  | [optional] 
**useDefaultProjectSettings** | **bool** | default: false | [optional] 
**purchaseOrder** | **string** |  | [optional] 
**workflowSteps** | [**\Memsource\Model\IdReference[]**](IdReference.md) |  | [optional] 
**dateDue** | [**\DateTime**](\DateTime.md) |  | [optional] 
**note** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



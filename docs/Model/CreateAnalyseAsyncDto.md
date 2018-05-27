# CreateAnalyseAsyncDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**jobs** | [**\Memsource\Model\UidReference[]**](UidReference.md) |  | 
**type** | **string** | default: PreAnalyse | [optional] 
**includeFuzzyRepetitions** | **bool** | default: true | [optional] 
**includeConfirmedSegments** | **bool** | default: true | [optional] 
**includeNumbers** | **bool** | default: true | [optional] 
**includeLockedSegments** | **bool** | default: true | [optional] 
**countSourceUnits** | **bool** | default: true | [optional] 
**includeTransMemory** | **bool** | default: true | [optional] 
**includeNonTranslatables** | **bool** | default: false. Works only for type&#x3D;PreAnalyse. | [optional] 
**name** | **string** |  | [optional] 
**linguist** | [**\Memsource\Model\IdReference**](IdReference.md) |  | [optional] 
**netRateScheme** | [**\Memsource\Model\IdReference**](IdReference.md) |  | [optional] 
**compareWorkflowLevel** | **int** | Required for type&#x3D;Compare | [optional] 
**useProjectAnalysisSettings** | **bool** | default: false. Use default project settings. Will be overwritten with setting sent in the API call. | [optional] 
**callbackUrl** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



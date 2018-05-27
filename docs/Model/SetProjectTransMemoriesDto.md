# SetProjectTransMemoriesDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**readTransMemories** | [**\Memsource\Model\IdReference[]**](IdReference.md) |  | [optional] 
**writeTransMemories** | [**\Memsource\Model\IdReference[]**](IdReference.md) | Write translation memory must be included in the read translation memories, too; max 2 write TMs allowed | [optional] 
**penalties** | **double[]** | A list of penalties for each read translation memory | [optional] 
**targetLang** | **string** | Set translation memories only for the specific project target language | [optional] 
**workflowStep** | [**\Memsource\Model\IdReference**](IdReference.md) | set translation memories only for the specific workflow step | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



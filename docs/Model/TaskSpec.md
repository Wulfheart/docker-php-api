# # TaskSpec

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**plugin_spec** | [**\Wulfheart\Docker\Model\TaskSpecPluginSpec**](TaskSpecPluginSpec.md) |  | [optional]
**container_spec** | [**\Wulfheart\Docker\Model\TaskSpecContainerSpec**](TaskSpecContainerSpec.md) |  | [optional]
**network_attachment_spec** | [**\Wulfheart\Docker\Model\TaskSpecNetworkAttachmentSpec**](TaskSpecNetworkAttachmentSpec.md) |  | [optional]
**resources** | [**\Wulfheart\Docker\Model\TaskSpecResources**](TaskSpecResources.md) |  | [optional]
**restart_policy** | [**\Wulfheart\Docker\Model\TaskSpecRestartPolicy**](TaskSpecRestartPolicy.md) |  | [optional]
**placement** | [**\Wulfheart\Docker\Model\TaskSpecPlacement**](TaskSpecPlacement.md) |  | [optional]
**force_update** | **int** | A counter that triggers an update even if no relevant parameters have been changed. | [optional]
**runtime** | **string** | Runtime is the type of runtime specified for the task executor. | [optional]
**networks** | [**\Wulfheart\Docker\Model\NetworkAttachmentConfig[]**](NetworkAttachmentConfig.md) | Specifies which networks the service should attach to. | [optional]
**log_driver** | [**\Wulfheart\Docker\Model\TaskSpecLogDriver**](TaskSpecLogDriver.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

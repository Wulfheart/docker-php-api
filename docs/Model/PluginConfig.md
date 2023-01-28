# # PluginConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**docker_version** | **string** | Docker Version used to create the plugin | [optional]
**description** | **string** |  |
**documentation** | **string** |  |
**interface** | [**\Wulfheart\Docker\Model\PluginConfigInterface**](PluginConfigInterface.md) |  |
**entrypoint** | **string[]** |  |
**work_dir** | **string** |  |
**user** | [**\Wulfheart\Docker\Model\PluginConfigUser**](PluginConfigUser.md) |  | [optional]
**network** | [**\Wulfheart\Docker\Model\PluginConfigNetwork**](PluginConfigNetwork.md) |  |
**linux** | [**\Wulfheart\Docker\Model\PluginConfigLinux**](PluginConfigLinux.md) |  |
**propagated_mount** | **string** |  |
**ipc_host** | **bool** |  |
**pid_host** | **bool** |  |
**mounts** | [**\Wulfheart\Docker\Model\PluginMount[]**](PluginMount.md) |  |
**env** | [**\Wulfheart\Docker\Model\PluginEnv[]**](PluginEnv.md) |  |
**args** | [**\Wulfheart\Docker\Model\PluginConfigArgs**](PluginConfigArgs.md) |  |
**rootfs** | [**\Wulfheart\Docker\Model\PluginConfigRootfs**](PluginConfigRootfs.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

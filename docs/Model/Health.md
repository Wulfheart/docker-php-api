# # Health

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Status is one of &#x60;none&#x60;, &#x60;starting&#x60;, &#x60;healthy&#x60; or &#x60;unhealthy&#x60;  - \&quot;none\&quot;      Indicates there is no healthcheck - \&quot;starting\&quot;  Starting indicates that the container is not yet ready - \&quot;healthy\&quot;   Healthy indicates that the container is running correctly - \&quot;unhealthy\&quot; Unhealthy indicates that the container has a problem | [optional]
**failing_streak** | **int** | FailingStreak is the number of consecutive failures | [optional]
**log** | [**\Wulfheart\Docker\Model\HealthcheckResult[]**](HealthcheckResult.md) | Log contains the last few results (oldest first) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

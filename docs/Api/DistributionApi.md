# Wulfheart\Docker\DistributionApi

All URIs are relative to http://localhost/v1.41, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**distributionInspect()**](DistributionApi.md#distributionInspect) | **GET** /distribution/{name}/json | Get image information from the registry |


## `distributionInspect()`

```php
distributionInspect($name): \Wulfheart\Docker\Model\DistributionInspect
```

Get image information from the registry

Return image digest and platform information by contacting the registry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Wulfheart\Docker\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Image name or id

try {
    $result = $apiInstance->distributionInspect($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->distributionInspect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Image name or id | |

### Return type

[**\Wulfheart\Docker\Model\DistributionInspect**](../Model/DistributionInspect.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)


# Getting Started with PayPal REST APIs

## Introduction

An order represents a payment between two or more parties. Use the Orders API to create, update, retrieve, authorize, and capture orders., Call the Payments API to authorize payments, capture authorized payments, refund payments that have already been captured, and show payment information. Use the Payments API in conjunction with the <a href="/docs/api/orders/v2/">Orders API</a>. For more information, see the <a href="/docs/checkout/">PayPal Checkout Overview</a>., The Payment Method Tokens API saves payment methods so payers don't have to enter details for future transactions. Payers can check out faster or pay without being present after they agree to save a payment method.<br><br>The API associates a payment method with a temporary setup token. Pass the setup token to the API to exchange the setup token for a permanent token.<br><br>The permanent token represents a payment method that's saved to the vault. This token can be used repeatedly for checkout or recurring transactions such as subscriptions.<br><br>The Payment Method Tokens API is available in the US only.

Find out more here: [https://developer.paypal.com/docs/api/orders/v2/](https://developer.paypal.com/docs/api/orders/v2/)

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```bash
composer require "test/pay-test-sdk:14.2.9"
```

Or add it to the composer.json file manually as given below:

```json
"require": {
    "test/pay-test-sdk": "14.2.9"
}
```

You can also view the package at:
https://packagist.org/packages/test/pay-test-sdk#14.2.9

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/tahaali2000/pay-test-php-sdk/tree/14.2.9/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| environment | `Environment` | The API environment. <br> **Default: `Environment.SANDBOX`** |
| timeout | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| enableRetries | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| numberOfRetries | `int` | The number of retries to make.<br>*Default*: `0` |
| retryInterval | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| backOffFactor | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| maximumRetryWaitTime | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| retryOnTimeout | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| httpStatusCodesToRetry | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| httpMethodsToRetry | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| loggingConfiguration | [`LoggingConfigurationBuilder`](https://www.github.com/tahaali2000/pay-test-php-sdk/tree/14.2.9/doc/logging-configuration-builder.md) | Represents the logging configurations for API calls |
| proxyConfiguration | [`ProxyConfigurationBuilder`](https://www.github.com/tahaali2000/pay-test-php-sdk/tree/14.2.9/doc/proxy-configuration-builder.md) | Represents the proxy configurations for API calls |
| clientCredentialsAuth | [`ClientCredentialsAuth`](https://www.github.com/tahaali2000/pay-test-php-sdk/tree/14.2.9/doc/auth/oauth-2-client-credentials-grant.md) | The Credentials Setter for OAuth 2 Client Credentials Grant |

The API client can be initialized as follows:

```php
$client = PayPalRESTAPIsClientBuilder::init()
    ->clientCredentialsAuthCredentials(
        ClientCredentialsAuthCredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret'
        )
    )
    ->environment(Environment::SANDBOX)
    ->loggingConfiguration(
        LoggingConfigurationBuilder::init()
            ->level(LogLevel::INFO)
            ->requestConfiguration(RequestLoggingConfigurationBuilder::init()->body(true))
            ->responseConfiguration(ResponseLoggingConfigurationBuilder::init()->headers(true))
    )
    ->build();
```

## Environments

The SDK can be configured to use a different environment for making API calls. Available environments are:

### Fields

| Name | Description |
|  --- | --- |
| Production | PayPal Live Environment |
| Sandbox | **Default** PayPal Sandbox Environment |

## Authorization

This API uses the following authentication schemes.

* [`Oauth2 (OAuth 2 Client Credentials Grant)`](https://www.github.com/tahaali2000/pay-test-php-sdk/tree/14.2.9/doc/auth/oauth-2-client-credentials-grant.md)

## List of APIs

* [Orders](https://www.github.com/tahaali2000/pay-test-php-sdk/tree/14.2.9/doc/controllers/orders.md)
* [Payments](https://www.github.com/tahaali2000/pay-test-php-sdk/tree/14.2.9/doc/controllers/payments.md)
* [Vault](https://www.github.com/tahaali2000/pay-test-php-sdk/tree/14.2.9/doc/controllers/vault.md)

## SDK Infrastructure

### Configuration

* [ProxyConfigurationBuilder](https://www.github.com/tahaali2000/pay-test-php-sdk/tree/14.2.9/doc/proxy-configuration-builder.md)
* [LoggingConfigurationBuilder](https://www.github.com/tahaali2000/pay-test-php-sdk/tree/14.2.9/doc/logging-configuration-builder.md)
* [RequestLoggingConfigurationBuilder](https://www.github.com/tahaali2000/pay-test-php-sdk/tree/14.2.9/doc/request-logging-configuration-builder.md)
* [ResponseLoggingConfigurationBuilder](https://www.github.com/tahaali2000/pay-test-php-sdk/tree/14.2.9/doc/response-logging-configuration-builder.md)

### HTTP

* [HttpRequest](https://www.github.com/tahaali2000/pay-test-php-sdk/tree/14.2.9/doc/http-request.md)
* [HttpResponse](https://www.github.com/tahaali2000/pay-test-php-sdk/tree/14.2.9/doc/http-response.md)

### Utilities

* [ApiException](https://www.github.com/tahaali2000/pay-test-php-sdk/tree/14.2.9/doc/api-exception.md)


# WebFramework Stripe Module

This module provides Stripe integration for WebFramework, offering a clean interface to interact with Stripe's API for handling payments, subscriptions, and webhooks.

## Features

- Stripe customer management
- Product and price creation
- Subscription handling
- Webhook verification
- Invoice retrieval
- Production and development environment support

## Requirements

- PHP 8.2 or higher
- WebFramework 8.x
- Stripe PHP SDK 7.128 or higher

## Installation

Install via Composer:

```bash
composer require avoutic/web-framework-stripe
```

## Configuration

If you are using the definition from _definitions/defitinions.php_. You can just add the following _stripe.php_ to your auth config directory (_config/auth_):

```php
<?php

return [
    'api_key' => 'your_stripe_secret_key',
    'publishable_api_key' => 'your_publishable_api_key',
    'endpoint_secret' => 'your_webhook_endpoint_secret'
]
```

## License

This module is open-sourced software licensed under the [MIT license](LICENSE). 
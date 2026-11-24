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
- WebFramework 8 to 12
- Stripe PHP SDK 7.128 or higher

## Installation

Install via Composer:

```bash
composer require avoutic/web-framework-stripe
```

Make sure the definitions file is included in your project by adding it to `definition_files` in your `config.php` file:

```php
return [
    'definition_files' => [
        '../vendor/avoutic/web-framework/definitions/definitions.php',
        '../vendor/avoutic/web-framework-stripe/definitions/definitions.php',
        'app_definitions.php',
    ],
];
```
## Configuration

If you are using the definition from _definitions/defitinions.php_. You can just add the following _stripe.php_ to your auth config directory (_config/auth_):

```php
<?php

return [
    'api_key' => env('STRIPE_SECRET_KEY'),'your_stripe_secret_key',
    'publishable_api_key' => env('STRIPE_PUBLISHABLE_KEY'),
    'endpoint_secret' => env('STRIPE_WEBHOOK_SECRET')
]
```
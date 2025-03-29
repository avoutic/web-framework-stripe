<?php

namespace WebFramework\Stripe;

use DI;
use Psr\Container\ContainerInterface;
use Stripe\Stripe;
use Stripe\StripeClient;
use WebFramework\Core\RuntimeEnvironment;
use WebFramework\Security\ConfigService;

return [
    StripeClient::class => function (ContainerInterface $c) {
        $secureConfigService = $c->get(ConfigService::class);

        $stripeConfig = $secureConfigService->getAuthConfig('stripe');

        Stripe::setApiKey($stripeConfig['api_key']);

        return new StripeClient($stripeConfig['api_key']);
    },
    StripeFactory::class => DI\factory(function (ContainerInterface $c) {
        $secureConfigService = $c->get(ConfigService::class);

        $config = $secureConfigService->getAuthConfig('stripe');

        return new StripeFactory(
            $c->get(RuntimeEnvironment::class),
            $c->get(StripeClient::class),
            $config['endpoint_secret'],
        );
    }),
];

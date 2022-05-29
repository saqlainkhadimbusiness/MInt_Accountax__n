<?php

namespace App\Payments;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
// use PayPalCheckoutSdk\Core\LiveEnvironment;
use PayPalCheckoutSdk\Core\SandboxEnvironment;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

class PayPalClient
{
    public static function client()
    {
        return new PayPalHttpClient(self::environment());
    }

    /**
     * This sample uses SandboxEnvironment. In production, use LiveEnvironment.
     */
    public static function environment()
    {
        $clientId = config('services.paypal.client');
        $clientSecret = config('services.paypal.secret');

        return new SandboxEnvironment($clientId, $clientSecret);
    }
}
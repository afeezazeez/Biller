<?php

namespace App\BillingFactory;

use App\BillingProviders\FlutterwaveProvider;
use App\BillingProviders\PaystackProvider;
use App\BillingProviders\StripeProvider;

class BillingProviderFactory {

    public function  __invoke($provider)
    {
        switch ($provider){

            case 'paystack':

                return new PaystackProvider();

            case 'flutterwave':
                return  new FlutterwaveProvider();

            case 'stripe':
                return  new StripeProvider();

            default:

        }
    }

}


?>

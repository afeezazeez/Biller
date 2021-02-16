<?php

namespace App\Http\Controllers;

use App\BillingFactory\BillingProviderFactory;
use Illuminate\Http\Request;
use App\BillingProviders\PaystackProvider;
use App\BillingProviders\FlutterwaveProvider;
use App\BillingProviders\StripeProvider;



class BillerController extends Controller
{
    public function bill($provider){


        $billing_provider= (new BillingProviderFactory)($provider)->billUser();

        return $billing_provider;
    }
}

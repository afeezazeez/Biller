<?php

namespace App\BillingProviders;

class StripeProvider implements \App\Interfaces\Biller
{



    public function billUser()
    {
        return "stripe";
    }


}


?>

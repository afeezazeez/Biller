<?php

namespace App\BillingProviders;

 class PaystackProvider implements \App\Interfaces\Biller
{


    public function billUser()
    {
        return "paystack";
    }


}


?>

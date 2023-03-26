<?php

namespace App\Billing;

interface PaymentGetwayContract
{
    public function setDiscount($amount);

    public function pay($amount);
}

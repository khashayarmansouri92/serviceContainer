<?php

namespace App\Billing;

class PaymentGetwayA implements PaymentGetwayContract
{

    protected $currency;
    protected $discount;

    public function __construct($currency)
    {
        $this->currency = $currency;
    }

    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }
    public function pay($amount)
    {
        return [
            "getway" => "planA",
            "amount" => $amount - $this->discount,
            "currency" => $this->currency,
            "discount" => $this->discount
        ];
    }
}

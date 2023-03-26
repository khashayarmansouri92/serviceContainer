<?php

namespace App\Orders;

use App\Billing\PaymentGetwayContract;

class OrderDetails
{
    protected $paymentGetway;
    public function __construct(PaymentGetwayContract $paymentGetway)
    {
        $this->paymentGetway = $paymentGetway;
    }

    public function all()
    {
        $this->paymentGetway->setDiscount(500);

        return [
          "order_id" => 1
        ];
    }
}

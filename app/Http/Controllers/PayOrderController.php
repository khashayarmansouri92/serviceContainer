<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGetwayContract;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails, PaymentGetwayContract $paymentGetway)
    {
        $orderDetails->all();
        return $paymentGetway->pay(25000);
    }
}

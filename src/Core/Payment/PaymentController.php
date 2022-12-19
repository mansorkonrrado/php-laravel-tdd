<?php

namespace Core\Payment;

use Core\Payment\PaymentInterface;

class PaymentController
{
    private $payment;

    public function __construct(PaymentInterface $payment)
    {
        $this->payment = $payment;
    }

    public function execute()
    {
        return $this->payment->makePayment([]);
    }
}

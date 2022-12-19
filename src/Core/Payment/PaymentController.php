<?php

namespace Core\Payment;

use Core\Payment\PaymentInterface;

class PaymentController
{
    private $repository;

    public function __construct(PaymentInterface $repository)
    {
        $this->repository = $repository;
    }
}

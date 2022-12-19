<?php

namespace Tests\Core\Payment;

use Core\Payment\PaymentController;
use PHPUnit\Framework\TestCase;

class PaymentUnitTest extends TestCase
{
    public function testPayment()
    {
        $useCase = PaymentController();
    }
}

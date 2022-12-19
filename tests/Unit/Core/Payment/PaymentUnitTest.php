<?php

namespace Tests\Core\Payment;

use Core\Payment\PaymentController;
use Core\Payment\PaymentInterface;
use Mockery;
use PHPUnit\Framework\TestCase;
use stdClass;

class PaymentUnitTest extends TestCase
{
    // constructor class Test
    // protected function setUp(): void
    // {

    // }

    public function testPayment()
    {
        // arrange
        $mockPayment = Mockery::mock(stdClass::class, PaymentInterface::class);
        $mockPayment->shouldReceive('makePayment')
            ->times(1)
            ->andReturn(true);

        $payment = new PaymentController($mockPayment);

        // act
        $response = $payment->execute();

        // assert 
        $this->assertTrue($response);
        Mockery::close();
    }

    // destructor class Test
    // protected function tearDown(): void
    // {
    //     Mockery::close();

    //     parent::tearDown();
    // }
}

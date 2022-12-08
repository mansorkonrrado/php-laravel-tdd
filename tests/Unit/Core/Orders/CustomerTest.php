<?php

namespace Tests\Core\Orders;

use Core\Orders\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function testAttributes()
    {
        $customer = new Customer(
            name: "Konrrado Mansor"
        );
        $this->assertEquals("Konrrado Mansor", $customer->getName());

        $customer->changeName(
            name: "new name"
        );
        $this->assertEquals("new name", $customer->getName());

        $this->assertTrue(true);
    }
}

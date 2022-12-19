<?php

namespace Tests\Core\Orders;

use Core\Orders\Cart;
use Core\Orders\Product;
use PHPUnit\Framework\TestCase;

class CartUnitTest extends TestCase
{
    public function testCart()
    {
        $cart = new Cart();
        $cart->add(new Product(
            id: '1',
            name: 'Xpto',
            price: 12,
            total: 1,
        ));
        $cart->add(new Product(
            id: '2',
            name: 'Xpto Two',
            price: 20,
            total: 1,
        ));

        $this->assertCount(2, $cart->getItems());
        $this->assertEquals(32, $cart->total());
    }
}

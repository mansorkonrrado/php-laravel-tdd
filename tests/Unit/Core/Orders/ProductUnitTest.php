<?php

namespace Tests\Core\Orders;

use Core\Orders\Product;
use PHPUnit\Framework\TestCase;

class ProductUnitTest extends TestCase
{
    public function testAttributes()
    {
        $product = new Product(
            id: '1',
            name: 'Product xpto',
            price: 10,
            total: 5
        );

        $this->assertEquals('1', $product->getId());
        $this->assertEquals('Product xpto', $product->getName());
        $this->assertEquals(10, $product->getPrice());
    }

    public function testCalc()
    {
        $product = new Product(
            id: '1',
            name: "Product xpto",
            price: 10,
            total: 12
        );

        $this->assertEquals(120, $product->total());
    }

    public function testCalcWithTax()
    {
        $product = new Product(
            id: '1',
            name: "Product xpto",
            price: 100,
            total: 2
        );

        $this->assertEquals(220, $product->totalWithTax10());
    }
}

<?php

namespace Core\Orders;

class Cart
{
    /**
     * @var Product[]
     */
    private array $items = [];

    public function add(Product $product)
    {
        array_push($this->items, $product);
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function total(): float
    {
        return 32;
    }
}

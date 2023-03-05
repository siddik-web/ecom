<?php

namespace Commerce\App;

use Commerce\App\Product;

class Cart
{
    private $items = [];

    public function addItem(Product $product)
    {
        $this->items[] = $product;
    }

    public function getItems()
    {
        $this->items;
    }

    public function getTotal()
    {
        $total = 0;

        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }

        return $total;
    }
}
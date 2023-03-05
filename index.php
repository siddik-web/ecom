<?php

/**
 *  Index File of E-commerce.
 */

require_once './vendor/autoload.php';

use Commerce\App\Cart;
use Commerce\App\Catalog;
use Commerce\App\Product;


$p1 = new Product('iPhone 14', 1200);
$p2 = new Product('iPhone 14 Mini', 1000);
$p3 = new Product('iPhone 14 Pro', 1400);
$p4 = new Product('iPhone 14 Pro Max', 1800);

$products = [$p1, $p2, $p3, $p4, $p4, $p1, $p2, $p3, $p4, $p4];

$catalogs = new Catalog($products);

$cart = new Cart();

foreach ($catalogs->getProducts() as $item) {
    $cart->addItem($item);
}

echo $cart->getTotal();
// $product->sayHello();

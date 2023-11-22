<?php

use controllers\products\ProductIndex;

$products = new ProductIndex();
$productArray = [];

foreach ($products->getProducts() as $key => $product)
{
    $productArray[$key] = $product;
}

$data = $productArray;
view('products/index', $data);
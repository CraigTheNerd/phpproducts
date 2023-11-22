<?php

namespace controllers\products;

use controllers\products\ProductInterface;
use models\Product;

class ProductIndex implements ProductInterface
{
    public function __construct()
    {
        return $this->getProducts();
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        $productModel = new Product();
        return $productModel->getAllProducts();
    }
}

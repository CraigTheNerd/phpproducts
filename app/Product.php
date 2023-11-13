<?php

namespace app;

require_once 'products/products.php';

class Product
{
    public string $productName;
    public string $productCategory;

    public static array $products;

    public function __construct(string $productName, string $productCategory)
    {
        $this->productName = $productName;
        $this->productCategory = $productCategory;
        $this->saveProduct($productName, $productCategory);
    }

    public function saveProduct(string $productName, string $productCategory): void
    {
        self::$products[$productCategory][$productName] = $productName;
    }

    public static function getProducts(): array
    {
        return self::$products;
    }
}


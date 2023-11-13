<?php

namespace app;

use AllowDynamicProperties;
use app\Product;

#[AllowDynamicProperties] class Category
{
    public string $categoryName;

    public static array $products;

    public function __construct(string $productName, string $productCategory)
    {
        $this->productName = $productName;
        $this->categoryName = $productCategory;
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
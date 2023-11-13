<?php

function getProductsInCategory(string $category): array {
    // Implement me

    global $inventory;

    echo '<pre>';
    print_r($inventory[$category]);
    echo '</pre>';


    return [];
}

function doesProductExistInCategory(string $product, string $category): bool {
    // Implement me

    global $inventory;
    if (in_array($product, $inventory[$category]))
    {
        echo 'yes';
        return true;
    } else {
        echo 'no';
        return false;
    }

}


<?php

function getProductsInCategory(string $category): array {
    // Implement me

    global $inventory;

    echo gettype($inventory[$category]);

    echo '<ul>';
    foreach ($inventory[$category] as $i)
    {
        echo "<li>{$i}</li>";
    }
    echo '</ul>';

    return $inventory[$category];

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


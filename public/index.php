<?php
declare(strict_types=1);


use app\Product;

error_reporting(E_ALL);

require_once '../app/bootstrap.php';

require_once '../app/Product.php';
require_once '../app/Category.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Products</title>
</head>
<body>

<?php

dump(Product::getProducts());

$inventory = Product::getProducts();

//  1
echo '<hr>';
echo 'function 1';
echo '<hr>';
getProductsInCategory('Mens');
echo '<hr>';

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

//  2
echo '<hr>';
echo 'function 2';
echo '<hr>';
doesProductExistInCategory('Toy Car', 'Kids');
echo '<hr>';

?>

</body>
</html>

<?php

//  If your application needs to connect to a database, use this database class

namespace core;

use \PDO;
use \PDOException;
use \PDOStatement;
use \stdClass;

//require 'functions.php';

class Database
{
    //  This class would normally connect to a database

    //  I'm just going to keep an array here that holds all the product data.
    //  The model can fetch it from here and hand it to the controller

    public array $allProducts = [
        'product1' => [
            'productId' => 1,
            'productName' => 'gj ocean blue wall clock',
            'productPrice' => 400,
            'productCategory' => 'decor',
            'productImage' => 'gj-ocean-blue-wall-clock.jpg'
        ],
        'product2' => [
            'productId' => 2,
            'productName' => 'aspen occasional chair',
            'productPrice' => 1075,
            'productCategory' => 'furniture',
            'productImage' => 'aspen-occasional-chair.jpg'
        ],
    ];

    public function __construct()
    {
        return $this->allProducts;
    }
}

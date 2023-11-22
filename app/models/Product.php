<?php

namespace models;

use AllowDynamicProperties;
use core\Database;

//  This class would interact with the database and hand data to the controller
#[AllowDynamicProperties] class Product
{
    private Database $database;

    //  If I was working with a database, I would instantiate the database in the constructor of this class
    //  In this instance however, I still instantiate the database because as soon as the database is instantiated,
    //  the spoofed data is handed to this model, which then hands it to the controller
    public function __construct()
    {
        $this->database = new Database();
    }

    /**
     * @return array
     */
    public function getAllProducts(): array
    {
        return $this->allProducts = $this->database->allProducts;
    }

}
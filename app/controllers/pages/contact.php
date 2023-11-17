<?php

use core\Database;

//$db = new Database();

$data = [
    'pageTitle' => 'Contact Us',
    'heading' => 'Contact Us'
];

view('pages/contact', $data);

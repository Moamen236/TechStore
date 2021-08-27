<?php

namespace TechStore\Classes\Models;

use TechStore\Classes\db;

class OrderDetails extends db
{
    public function __construct()
    {
        $this->table = 'order_details';
        $this->connect();
    }
}
<?php

namespace TechStore\Classes\Models;

use TechStore\Classes\db;

class Order extends db
{
    public function __construct()
    {
        $this->table = 'orders';
        $this->connect();
    }
}
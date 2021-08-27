<?php

namespace TechStore\Classes\Models;

use TechStore\Classes\db;

class Cat extends db
{
    public function __construct()
    {
        $this->table = 'cats';
        $this->connect();
    }
}
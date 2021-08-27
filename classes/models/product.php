<?php

namespace TechStore\Classes\Models;

use TechStore\Classes\db;

class product extends db
{
    public function __construct()
    {
        $this->table = 'products';
        $this->connect();
    }

    public function selectId($id, string $fields = "product.*")
    {
        $sql = "SELECT $fields FROM $this->table JOIN cats 
        ON $this->table.cat_id = cats.id 
        where $this->table.id = $id";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }
}
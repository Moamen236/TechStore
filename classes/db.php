<?php

namespace TechStore\Classes;

abstract class Db
{
    protected $conn;
    protected $table;
    public function connect()
    {
        $this->conn = mysqli_connect(DB_SERVER_NAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }

    public function selectAll(string $fields = "*"): array
    {
        $sql = "SELECT $fields FROM $this->table";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function selectId($id, string $fields = "*")
    {
        $sql = "SELECT $fields FROM $this->table where id = $id";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    public function selectWhere($conditions, string $fields = "*"): array
    {
        $sql = "SELECT $fields FROM $this->table where $conditions";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function getCount(): int
    {
        $sql = "SELECT count(*) as cnt FROM $this->table";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result)['cnt'];
    }

    public function insert(string $fields, $values): bool
    {
        $sql = "INSERT INTO $this->table ($fields) values ($values)";
        return mysqli_query($this->conn, $sql);
    }

    public function update(string $set, $id): bool
    {
        $sql = "UPDATE $this->table SET $set WHERE id = $id";
        return mysqli_query($this->conn, $sql);
    }

    public function delete($id): bool
    {
        $sql = "DELETE FROM $this->table WHERE id = $id";
        return mysqli_query($this->conn, $sql);
    }
}
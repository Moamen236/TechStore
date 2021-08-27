<?php

namespace TechStore\Classes;

class Request
{
    public function get(string $key)
    {
        return $_GET[$key];
    }
    public function getHas(string $key)
    {
        return isset($_GET[$key]);
    }

    public function post(string $key)
    {
        return $_POST[$key];
    }
    public function postHas(string $key): bool
    {
        return isset($_POST[$key]);
    }
    public function postClean(string $key): bool
    {
        return trim(htmlspecialchars($_POST[$key]));
    }
    public function redirect($path)
    {
        header('location:' . URL . $path);
    }
}
<?php

namespace TechStore\Classes\Validation;

class Str implements ValidationRule
{
    public function check(string $name, $value)
    {
        if (!is_string($value)) {
            return "$name should be a string";
        }
        return false;
    }
}
<?php

namespace TechStore\Classes\Validation;

class Numeric implements ValidationRule
{
    public function check(string $name, $value)
    {
        if (!is_numeric($value)) {
            return "$name nust contain only numbers";
        }
        return false;
    }
}
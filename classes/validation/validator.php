<?php

namespace TechStore\Classes\Validation;

class Validator
{
    private $errors = [];
    public function validate(string $name, $value, array $rules)
    {
        foreach ($rules as $rule) {
            $obj = new $rule;

            $error = $obj->check($name, $value);
            if ($error !== false) {
                $this->errors[] = $error;
                break;
            }
        }
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function hasErrors(): bool
    {
        return !empty($this->errors);
    }
}
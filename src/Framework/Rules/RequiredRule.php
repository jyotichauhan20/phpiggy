<?php

declare(strict_types=1);

namespace Framework\Rules;

use Framework\Contracts\RuleInterface;

class RequiredRule implements RuleInterface
{
    public function validate(array $data , string $filed , array $params) : bool
    {
        return !empty($data[$filed]);
    }
    
    public function getMessage(array $data , string $filed , array $params) : string 
    {
        return "This field is required.";
    }
}

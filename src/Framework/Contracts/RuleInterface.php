<?php

declare(strict_types=1);

namespace Framework\Contracts;

interface RuleInterface
{

    public function validate(array $data , string $filed , array $params) : bool;
    
    public function getMessage(array $data , string $filed , array $params) : string;
}

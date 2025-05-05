<?php

declare(strict_types=1);

namespace App\Services;

use App\Interfaces\CalculatorInterface;
use InvalidArgumentException;

class CalculatorService implements CalculatorInterface {
    public function calculate(string $expression): float
    {
        if (!preg_match('/^[0-9+\/*().\s-]+$/', $expression)) {
            throw new InvalidArgumentException('Invalid expression');
        }

        $result = eval("return $expression;");
        return (float)$result;
    }
}

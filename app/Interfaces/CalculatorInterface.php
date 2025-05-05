<?php

declare(strict_types=1);

namespace App\Interfaces;

use Illuminate\Http\JsonResponse;

interface CalculatorInterface {
    public function calculate(string $expression): float;
}

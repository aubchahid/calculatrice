<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\CalculatorService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use InvalidArgumentException;

class CalculatorController extends Controller
{
    public function __invoke()
    {
        return view('calculator');
    }

    public function calcul(Request $request, CalculatorService $calculatorService): JsonResponse
    {
        try {
            $result = $calculatorService->calculate($request->input('expression'));
            return response()->json(['result' => $result]);
        } catch (InvalidArgumentException) {
            throw new InvalidArgumentException();
        }
    }
}

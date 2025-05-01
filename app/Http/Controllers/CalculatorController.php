<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function __invoke()
    {
        return view('calculator');
    }

    public function calcul(Request $request)
    {
        $expression = $request->input('expression');

        try {

            if (!preg_match('/^[0-9+\/*().\s-]+$/', $expression)) {
                return response()->json(['result' => 'Invalid expression']);
            }

            $result = eval("return $expression;");
            return response()->json(['result' => $result]);
        } catch (\Throwable $e) {
            return response()->json(['result' => 'Error']);
        }
    }
}

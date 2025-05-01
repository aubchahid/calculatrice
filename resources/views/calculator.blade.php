@extends('layout')

@section('content')
    <div class="flex flex-col gap-4">
        <div
            class="switch-container w-80 items-center justify-center flex gap-4 bg-black/30 backdrop-blur-lg shadow-2xl rounded-3xl p-2 h-16">
            <label class="switch-label text-white">
                <input type="radio" name="calcOption" value="javascript" checked>
                <span class="font-bold">With Javascript</span>
            </label>
            <label class="switch-label text-white">
                <input type="radio" name="calcOption" value="laravel">
                <span class="font-bold">With Laravel</span>
            </label>
        </div>
        <div class="w-80 rounded-3xl bg-white/20 backdrop-blur-lg shadow-2xl p-6">
            <div id="display"
                class="text-white text-right text-3xl mb-4 p-4 rounded-xl bg-black/30 min-h-[60px] overflow-x-auto">0</div>
            <div class="grid grid-cols-4 gap-3">
                <button class="btn bg-red-700 font-bold text-white rounded-xl col-span-2 h-16" data-val="C">C</button>
                <button class="btn font-bold bg-white rounded-xl h-16" data-val="%">%</button>
                <button class="btn-op font-bold bg-white rounded-xl h-16" data-val="/">÷</button>

                <button class="btn font-bold bg-white rounded-xl h-16" data-val="7">7</button>
                <button class="btn font-bold bg-white rounded-xl h-16" data-val="8">8</button>
                <button class="btn font-bold bg-white rounded-xl h-16" data-val="9">9</button>
                <button class="btn-op font-bold bg-white rounded-xl h-16" data-val="*">×</button>

                <button class="btn font-bold bg-white rounded-xl h-16" data-val="4">4</button>
                <button class="btn font-bold bg-white rounded-xl h-16" data-val="5">5</button>
                <button class="btn font-bold bg-white rounded-xl h-16" data-val="6">6</button>
                <button class="btn-op font-bold bg-white rounded-xl h-16" data-val="-">−</button>

                <button class="btn font-bold bg-white rounded-xl h-16" data-val="1">1</button>
                <button class="btn font-bold bg-white rounded-xl h-16" data-val="2">2</button>
                <button class="btn font-bold bg-white rounded-xl h-16" data-val="3">3</button>
                <button class="btn-op font-bold bg-white rounded-xl h-16" data-val="+">+</button>

                <button class="btn col-span-2 font-bold bg-white rounded-xl h-16" data-val="0">0</button>
                <button class="btn font-bold bg-white rounded-xl h-16" data-val=".">.</button>
                <button class="btn-eq font-bold bg-green-500 text-white rounded-xl h-16" data-val="=">=</button>
            </div>
        </div>
    </div>
@endsection

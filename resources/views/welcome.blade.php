@extends('layout')

@section('content')
    <div
        class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
            <div
                class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">This is a simple web-based calculator that supports
                    two modes of operation. With Javascript, all calculations are handled instantly on the client side
                    using
                    JavaScript for fast and responsive performance. With Laravel, the calculator sends the expression to
                    the backend via AJAX, where the server securely processes and returns the result. This setup allows
                    flexibility for expanding into more complex or validated computations server-side.</p>
                <ul class="flex gap-3 text-sm leading-normal mt-6">
                    <li>
                        <a href="{{ route('calculator') }}"
                            class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">
                            Start Now
                        </a>
                    </li>
                </ul>
            </div>

        </main>
    </div>
@endsection

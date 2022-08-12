@extends('livewire.layouts.base')
@section('content')

<div class="bg-[#e3e0d7] flex justify-center  w-full h-screen">
    <div class="bg-[#e3e0d7] relative flex justify-center w-full h-full max-h-[770px] max-w-[1440px]  ">
        {{-- Header --}}
        <div
            class="bg-transparent absolute flex z-50 items-center justify-center sm:justify-between px-8 w-full h-[80px]">
            {{-- left --}}
            <a href="{{ route('proma-signup') }}">
                <img class="w-[90px] h-[20px]" src="{{ asset('images/proma-logo.png') }}" alt="">
            </a>
            {{-- Right --}}
            <div class="hidden sm:flex font-bold text-base items-center">
                <a class="{{ Request::is('proma-signup') ? 'flex py-2 px-4 rounded-md' : 'hidden' }}"
                    href="{{ route('proma-signin') }}">
                    <span>Sign In</span>
                </a>
                <a class="{{ Request::is('proma-signin') ? 'flex py-2 px-4 rounded-md' : 'hidden' }}"
                    href="{{ route('proma-signup') }}">
                    <span>Sign Up</span>
                </a>
                <a class="bg-[#89C09F] py-2 px-4 rounded-md" href="{{ route('proma-signup') }}">
                    <span>Help Center</span>
                </a>
            </div>
        </div>
        {{-- Background --}}
        <img class="invisible sm:visible w-full object-contain transition-all duration-300 ease-linear"
            src="{{ asset('images/Register/reg-team.jpg') }}" alt="">
        @yield('register-content')
    </div>
</div>

@endsection
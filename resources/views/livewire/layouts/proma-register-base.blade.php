@extends('livewire.layouts.base')
@section('content')

<div class="bg-white flex items-center justify-center  w-full h-full">
    <div class="bg-[#e3e0d7] relative flex justify-center w-full h-full max-h-[770px] max-w-[1440px]">
        {{-- Header --}}
        <div class="bg-transparent absolute flex z-50 items-center justify-between px-8 w-full h-[80px]">
            {{-- left --}}
            <a href="{{ route('proma-signup') }}">
                <img class="w-[90px] h-[20px]" src="{{ asset('images/proma-logo.png') }}" alt="">
            </a>
            {{-- Right --}}
            <div class="font-bold text-base flex items-center">
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
        <img class="w-full object-contain" src="{{ asset('images/Register/reg-team.jpg') }}" alt="">
        {{-- <img src="{{ asset('images/Register/register-bg.png') }}" alt=""> --}}
        @yield('register-content')
    </div>
</div>

@endsection
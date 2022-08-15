@extends('livewire.layouts.proma-register-base')
@section('register-content')

<div
    class="bg-transparent absolute flex mt-20 sm:mt-0 sm:items-center justify-center w-full h-full transition-all duration-200 ease-linear">
    <div
        class="bg-white flex flex-col items-center gap-y-4 p-8 w-full max-w-[350px] sm:max-w-[375px] h-[470px] shadow-lg rounded-xl">
        {{-- Header --}}
        <div class="flex flex-col items-center gap-y-4 px-4 w-full">
            <h1 class="font-extrabold text-3xl">Sign In</h1>
            <h2 class="font-semibold text-sm text-center">
                {{-- Create an account and start managing your projects with your
                team. --}}
                Welcome back! Enter your details and connect with your team.
            </h2>
        </div>
        {{-- Form --}}
        <form class="flex flex-col gap-y-3 mt-4 w-full">
            {{-- Email --}}
            <div class="group focus-within:bg-[#AAD2BA]/10 border-2 border-[#F5F5F5] text-[#929EAE] font-semibold text-sm flex items-center justify-between 
                    py-2 px-4 w-full rounded-lg transition-all duration-150 ease-linear">
                <input class="bg-transparent focus:outline-none w-full" type="text" placeholder="Enter Email">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10h5v-2h-5c-4.34 0-8-3.66-8-8s3.66-8 8-8s8 3.66 8 8v1.43c0 .79-.71 1.57-1.5 1.57s-1.5-.78-1.5-1.57V12c0-2.76-2.24-5-5-5s-5 2.24-5 5s2.24 5 5 5c1.38 0 2.64-.56 3.54-1.47c.65.89 1.77 1.47 2.96 1.47c1.97 0 3.5-1.6 3.5-3.57V12c0-5.52-4.48-10-10-10zm0 13c-1.66 0-3-1.34-3-3s1.34-3 3-3s3 1.34 3 3s-1.34 3-3 3z" />
                </svg>
            </div>
            {{-- Password --}}
            <div class="group focus-within:bg-[#AAD2BA]/10 border-2 border-[#F5F5F5] text-[#929EAE] font-semibold text-sm flex items-center justify-between 
                    py-2 px-4 w-full rounded-lg transition-all duration-150 ease-linear">
                <input class="bg-transparent focus:outline-none w-full" type="text" placeholder="Enter Password">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2">
                        <rect width="18" height="12" x="3" y="10" rx="2" />
                        <path d="M6 6a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3v4H6V6Z" />
                    </g>
                </svg>
            </div>
            {{-- Remember --}}
            {{-- <div class="font-semibold text-sm text-[#929EAE] flex items-center px-2 gap-x-2 w-full">
                <input type="checkbox" name="rememberPass" id="rememberPass">
                <span>Remember Me</span>
            </div> --}}
            {{-- Submit --}}
            <a href="{{ route('proma-dashboard') }}"
                class="bg-[#89C09F] hover:bg-[#89C09F]/80 font-bold text-sm flex items-center mt-4 p-3 justify-center w-full rounded-lg transition duration-150 ease-linear">
                <span>Sign In</span>
            </a>
        </form>
        {{-- Alternatives --}}
        <div class="font-semibold text-xs flex flex-col gap-y-4 w-full">
            <div class="font-semibold text-xs flex items-center justify-center gap-x-2 w-full">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                    <path fill="currentColor"
                        d="M2 9.75A.75.75 0 0 1 2.75 9h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 9.75Z" />
                </svg>
                <span>Or Sign in with</span>
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                    <path fill="currentColor"
                        d="M2 9.75A.75.75 0 0 1 2.75 9h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 9.75Z" />
                </svg>
            </div>
            {{-- Links --}}
            <div class="flex items-center gap-x-2 w-full">
                <button
                    class="border-2 border-[#F5F5F5] hover:border-[#89C09F] transition duration-150 ease-linear justify-center items-center gap-x-1 flex p-2 w-full rounded-md">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M21.456 10.154c.123.659.19 1.348.19 2.067c0 5.624-3.764 9.623-9.449 9.623A9.841 9.841 0 0 1 2.353 12a9.841 9.841 0 0 1 9.844-9.844c2.658 0 4.879.978 6.583 2.566l-2.775 2.775V7.49c-1.033-.984-2.344-1.489-3.808-1.489c-3.248 0-5.888 2.744-5.888 5.993c0 3.248 2.64 5.998 5.888 5.998c2.947 0 4.953-1.685 5.365-3.999h-5.365v-3.839h9.26Z" />
                    </svg>
                    {{-- <span>Google</span> --}}
                </button>
                <button
                    class="border-2 border-[#F5F5F5] hover:border-[#89C09F] transition duration-150 ease-linear justify-center items-center gap-x-1 flex p-2 w-full rounded-md">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M0 12.067C0 18.033 4.333 22.994 10 24v-8.667H7V12h3V9.333c0-3 1.933-4.666 4.667-4.666c.866 0 1.8.133 2.666.266V8H15.8c-1.467 0-1.8.733-1.8 1.667V12h3.2l-.533 3.333H14V24c5.667-1.006 10-5.966 10-11.933C24 5.43 18.6 0 12 0S0 5.43 0 12.067Z"
                            clip-rule="evenodd" />
                    </svg>
                    {{-- <span>Facebook</span> --}}
                </button>
                <button
                    class="border-2 border-[#F5F5F5] hover:border-[#89C09F] transition duration-150 ease-linear justify-center items-center gap-x-1 flex p-2 w-full rounded-md">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385c.6.105.825-.255.825-.57c0-.285-.015-1.23-.015-2.235c-3.015.555-3.795-.735-4.035-1.41c-.135-.345-.72-1.41-1.23-1.695c-.42-.225-1.02-.78-.015-.795c.945-.015 1.62.87 1.845 1.23c1.08 1.815 2.805 1.305 3.495.99c.105-.78.42-1.305.765-1.605c-2.67-.3-5.46-1.335-5.46-5.925c0-1.305.465-2.385 1.23-3.225c-.12-.3-.54-1.53.12-3.18c0 0 1.005-.315 3.3 1.23c.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23c.66 1.65.24 2.88.12 3.18c.765.84 1.23 1.905 1.23 3.225c0 4.605-2.805 5.625-5.475 5.925c.435.375.81 1.095.81 2.22c0 1.605-.015 2.895-.015 3.3c0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12Z"
                            clip-rule="evenodd" />
                    </svg>
                    {{-- <span>Github</span> --}}
                </button>
            </div>
            <div class="flex items-center justify-center w-full">
                <h2>Don't have an account? <a href="{{ route('proma-signup') }}" class="font-bold text-[#89C09F]">Sign
                        up</a> </h2>
            </div>
        </div>
    </div>
</div>

@endsection
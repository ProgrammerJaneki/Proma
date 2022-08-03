@extends('livewire.layouts.base')
@section('content')

<style>
    svg:hover #bottom {
        transform: translateX(-40%);
    }

    svg:hover #top {
        transform: translateX(40%);
    }
</style>

{{-- Proma Layout --}}
<div class="bg-white flex w-full">
    <section x-data="{ open: false }" class="bg-[#FAFAFA] flex w-full max-w-[1440px] shadow-lg">
        {{-- Left Panel --}}
        <nav class="bg-white flex flex-col py-6 w-full max-w-[250px] h-[900px]">
            {{-- Header --}}
            <div class="flex items-center justify-between px-6 w-full h-full md:max-h-[25px] ">
                <img class="w-[70px] h-[20px]" src="{{ asset('images/proma-logo.png') }}" alt="">
                <svg class="fill-[#1B212D] cursor-pointer" width="40" height="27" viewBox="0 0 40 27" fill="none" <g
                    id="Proma-menu">
                    <g class="" id="line-full">
                        <rect id="middle" x="5" y="11" width="30" height="4" rx="2" />
                    </g>
                    <g class="" id="line-half">
                        <rect class="transition-all duration-500 ease-in-out" id="bottom" x="20" y="17" width="15"
                            height="4" rx="2" />
                        <rect class=" transition-all duration-500 ease-in-out" id="top" x="5" y="5" width="15"
                            height="4" rx="2" />
                    </g>
                    </g>
                </svg>
            </div>
            {{-- Routes --}}
            <div class="bg-white text-[#929EAE] mt-10 pr-6 flex flex-col w-full">
                {{-- Dashboard --}}
                <a class="{{ Request::is('/') ? 'relative bg-[#AAD2BA]/10 flex py-2 pr-3 rounded-r-full font-bold md:text-sm text-[#3E6766]' : 'group hover:text-[#3E6766] transition duration-300 ease-in-out hover:font-bold bg-[#AAD2BA]/10 font-semibold text-sm py-2 pr-3 rounded-r-full' }}"
                    href="{{ route('proma-dashboard') }}">
                    <div
                        class="{{ Request::is('/') ? 'absolute flex bg-[#3E6766] top-4 w-1 h-5 rounded-xl ' : 'bg-[#3E6766] hidden group-hover:flex top-4 transition-all duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl'}}">
                    </div>
                    <div class="flex items-center pl-6 gap-2 w-full ">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M5 21h6V3H5q-.825 0-1.413.587Q3 4.175 3 5v14q0 .825.587 1.413Q4.175 21 5 21Zm8 0h6q.825 0 1.413-.587Q21 19.825 21 19v-7h-8Zm0-11h8V5q0-.825-.587-1.413Q19.825 3 19 3h-6Z" />
                        </svg>
                        <span>Dashboard</span>
                    </div>
                    <button
                        class="{{ Request::is('/') ? 'flex items-center bg-white hover:bg-[#3E6766] hover:text-white transition-all duration-500 ease-in-out p-2 rounded-full ' : 'hidden group-hover:flex items-center bg-white hover:bg-[#3E6766] hover:text-white transition-all duration-500 ease-in-out p-2 rounded-full '}}">
                        <svg class="font-bold w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707l-1.414 1.414L15.586 11H6v2h9.586z" />
                        </svg>
                    </button>
                </a>
                {{-- Projects --}}
                <a class="{{ Request::is('/proma-projects') ? 'bg-[#AAD2BA]/10 flex py-2 pr-3 rounded-r-full font-bold md:text-sm text-[#3E6766]' : 'relative group hover:text-[#3E6766] hover:font-bold hover:bg-[#AAD2BA]/10 transition duration-300 ease-in-out flex font-semibold text-sm hover:py-2 py-4 pr-3 rounded-r-full' }}"
                    href="">
                    <div
                        class="{{ Request::is('/proma-projects') ? 'absolute flex bg-[#3E6766] top-4 w-1 h-5 rounded-xl ' : 'bg-[#3E6766] hidden group-hover:flex top-4 transition duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl'}}">
                    </div>
                    <div class="flex items-center pl-6 gap-2 w-full ">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                            <path fill="currentColor"
                                d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zM368 744c0 4.4-3.6 8-8 8h-80c-4.4 0-8-3.6-8-8V280c0-4.4 3.6-8 8-8h80c4.4 0 8 3.6 8 8v464zm192-280c0 4.4-3.6 8-8 8h-80c-4.4 0-8-3.6-8-8V280c0-4.4 3.6-8 8-8h80c4.4 0 8 3.6 8 8v184zm192 72c0 4.4-3.6 8-8 8h-80c-4.4 0-8-3.6-8-8V280c0-4.4 3.6-8 8-8h80c4.4 0 8 3.6 8 8v256z" />
                        </svg>
                        <span>Projects</span>
                    </div>
                    <div
                        class="{{ Request::is('/proma-projects') ? 'flex items-center bg-white hover:bg-[#3E6766] hover:text-white transition-all duration-500 ease-in-out p-2 rounded-full ' : 'hidden group-hover:flex items-center bg-white hover:bg-[#3E6766] hover:text-white transition-all duration-500 ease-in-out p-2 rounded-full '}}">
                        <svg class="font-bold w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707l-1.414 1.414L15.586 11H6v2h9.586z" />
                        </svg>
                    </div>
                </a>
                {{-- Teams --}}
                <a class="{{ Request::is('/proma-teams') ? 'bg-[#AAD2BA]/10 flex py-2 pr-3 rounded-r-full font-bold md:text-sm text-[#3E6766]' : 'relative group hover:text-[#3E6766] hover:font-bold hover:bg-[#AAD2BA]/10 transition duration-300 ease-in-out flex font-semibold text-sm hover:py-2 py-4 pr-3 rounded-r-full' }}"
                    href="">
                    <div
                        class="{{ Request::is('/proma-teams') ? 'absolute flex bg-[#3E6766] top-4 w-1 h-5 rounded-xl ' : 'bg-[#3E6766] hidden group-hover:flex top-4 transition duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl'}}">
                    </div>
                    <div class="flex items-center pl-6 gap-2 w-full ">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <circle cx="20.288" cy="8.344" r="1.707" fill="currentColor" />
                            <path fill="currentColor"
                                d="M18.581 11.513h3.413v3.656c0 .942-.765 1.706-1.707 1.706h-1.706v-5.362zM2.006 4.2v15.6l11.213 1.979V2.221L2.006 4.2zm8.288 5.411l-1.95.049v5.752H6.881V9.757l-1.949.098V8.539l5.362-.292v1.364zm3.899.439v8.288h1.95c.808 0 1.463-.655 1.463-1.462V10.05h-3.413zm1.463-4.875c-.586 0-1.105.264-1.463.673v2.555c.357.409.877.673 1.463.673a1.95 1.95 0 0 0 0-3.901z" />
                        </svg>
                        <span>Teams</span>
                    </div>
                    <div
                        class="{{ Request::is('/proma-teams') ? 'flex items-center bg-white hover:bg-[#3E6766] hover:text-white transition-all duration-500 ease-in-out p-2 rounded-full ' : 'hidden group-hover:flex items-center bg-white hover:bg-[#3E6766] hover:text-white transition-all duration-500 ease-in-out p-2 rounded-full '}}">
                        <svg class="font-bold w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707l-1.414 1.414L15.586 11H6v2h9.586z" />
                        </svg>
                    </div>
                    {{-- Clients --}}
                    <a class="{{ Request::is('/proma-clients') ? 'bg-[#AAD2BA]/10 flex py-2 pr-3 rounded-r-full font-bold md:text-sm text-[#3E6766]' : 'relative group hover:text-[#3E6766] hover:font-bold hover:bg-[#AAD2BA]/10 transition duration-300 ease-in-out flex font-semibold text-sm hover:py-2 py-4 pr-3 rounded-r-full' }}"
                        href="">
                        <div
                            class="{{ Request::is('/proma-clients') ? 'absolute flex bg-[#3E6766] top-4 w-1 h-5 rounded-xl ' : 'bg-[#3E6766] hidden group-hover:flex top-4 transition duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl'}}">
                        </div>
                        <div class="flex items-center pl-6 gap-2 w-full ">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                <path fill="currentColor"
                                    d="M10.565 4.5H15.5a2.5 2.5 0 0 1 2.479 2.174l.016.162L18 7v4.379A2.24 2.24 0 0 0 16.75 11c-.581 0-1.11.22-1.51.582a2.75 2.75 0 1 0-4.545 2.995A2.312 2.312 0 0 0 9.005 17H4.5a2.5 2.5 0 0 1-2.495-2.336L2 14.5v-7h5.07l.154-.008a1.5 1.5 0 0 0 .823-.353l.111-.106L10.565 4.5ZM7.167 3c.27 0 .535.073.765.21l.135.09l1.318.989l-1.952 2.055l-.06.055a.5.5 0 0 1-.221.094l-.081.007H2v-1a2.5 2.5 0 0 1 2.336-2.495L4.5 3h2.667Zm7.709 11.495l.003.005h-.008l.005-.005Zm-2.126.005a1.75 1.75 0 1 0 0-3.5a1.75 1.75 0 0 0 0 3.5ZM13 19c2.143 0 3-1.098 3-2.188c0-.724-.576-1.312-1.286-1.312h-3.428c-.71 0-1.286.588-1.286 1.313c0 1.093.857 2.187 3 2.187Zm3.5-.5h-.023A2.945 2.945 0 0 0 17 16.812c0-.483-.148-.937-.404-1.312h1.333c.592 0 1.071.504 1.071 1.125c0 .934-.714 1.875-2.5 1.875Zm.25-4a1.25 1.25 0 1 0 0-2.5a1.25 1.25 0 0 0 0 2.5Z" />
                            </svg>
                            <span>Clients</span>
                        </div>
                        <div
                            class="{{ Request::is('/proma-clients') ? 'flex items-center bg-white hover:bg-[#3E6766] hover:text-white transition-all duration-500 ease-in-out p-2 rounded-full ' : 'hidden group-hover:flex items-center bg-white hover:bg-[#3E6766] hover:text-white transition-all duration-500 ease-in-out p-2 rounded-full '}}">
                            <svg class="font-bold w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707l-1.414 1.414L15.586 11H6v2h9.586z" />
                            </svg>
                        </div>
                    </a> {{-- Messages --}}
                    <a class="{{ Request::is('/proma-messages') ? 'bg-[#AAD2BA]/10 flex py-2 pr-3 rounded-r-full font-bold md:text-sm text-[#3E6766]' : 'relative group hover:text-[#3E6766] hover:font-bold hover:bg-[#AAD2BA]/10 transition duration-300 ease-in-out flex font-semibold text-sm hover:py-2 py-4 pr-3 rounded-r-full' }}"
                        href="">
                        <div
                            class="{{ Request::is('/proma-messages') ? 'absolute flex bg-[#3E6766] top-4 w-1 h-5 rounded-xl ' : 'bg-[#3E6766] hidden group-hover:flex top-4 transition duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl'}}">
                        </div>
                        <div class="flex items-center pl-6 gap-2 w-full ">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="-2 -2.5 24 24">
                                <path fill="currentColor"
                                    d="M3.656 17.979A1 1 0 0 1 2 17.243V15a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H8.003l-4.347 2.979zM16 10.017a7.136 7.136 0 0 0 0 .369v-.37c.005-.107.006-1.447.004-4.019a3 3 0 0 0-3-2.997H5V2a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2v2.243a1 1 0 0 1-1.656.736L16 13.743v-3.726z" />
                            </svg>
                            <span>Messages</span>
                        </div>
                        <div
                            class="{{ Request::is('/proma-messages') ? 'flex items-center bg-white hover:bg-[#3E6766] hover:text-white transition-all duration-500 ease-in-out p-2 rounded-full ' : 'hidden group-hover:flex items-center bg-white hover:bg-[#3E6766] hover:text-white transition-all duration-500 ease-in-out p-2 rounded-full '}}">
                            <svg class="font-bold w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707l-1.414 1.414L15.586 11H6v2h9.586z" />
                            </svg>
                        </div>
                    </a> {{-- Settings --}}
                    <a class="{{ Request::is('/proma-settings') ? 'bg-[#AAD2BA]/10 flex py-2 pr-3 rounded-r-full font-bold md:text-sm text-[#3E6766]' : 'relative group hover:text-[#3E6766] hover:font-bold hover:bg-[#AAD2BA]/10 transition duration-300 ease-in-out flex font-semibold text-sm hover:py-2 py-4 pr-3 rounded-r-full' }}"
                        href="">
                        <div
                            class="{{ Request::is('/proma-settings') ? 'absolute flex bg-[#3E6766] top-4 w-1 h-5 rounded-xl ' : 'bg-[#3E6766] hidden group-hover:flex top-4 transition duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl'}}">
                        </div>
                        <div class="flex items-center pl-6 gap-2 w-full ">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                <path fill="currentColor"
                                    d="M28.832 18.472a1.483 1.483 0 0 1 .537 1.634a14.269 14.269 0 0 1-3.156 5.443a1.478 1.478 0 0 1-1.671.347l-1.955-.858a1.501 1.501 0 0 0-.68-.128a1.474 1.474 0 0 0-.66.2a1.472 1.472 0 0 0-.727 1.124l-.235 2.13a1.48 1.48 0 0 1-1.13 1.276c-2.076.495-4.24.495-6.316 0a1.484 1.484 0 0 1-1.125-1.27l-.235-2.126a1.483 1.483 0 0 0-.485-.94a1.5 1.5 0 0 0-1.58-.255l-1.955.859a1.477 1.477 0 0 1-1.668-.343a14.267 14.267 0 0 1-3.16-5.45a1.484 1.484 0 0 1 .536-1.632l1.725-1.275a1.488 1.488 0 0 0 0-2.4l-1.725-1.273a1.48 1.48 0 0 1-.536-1.623A14.249 14.249 0 0 1 5.79 6.467c.14-.151.31-.271.5-.351a1.5 1.5 0 0 1 1.17 0l1.947.858a1.493 1.493 0 0 0 2.073-1.206l.236-2.122a1.482 1.482 0 0 1 1.148-1.281a15.462 15.462 0 0 1 3.146-.362c1.052.012 2.1.133 3.127.362a1.476 1.476 0 0 1 1.147 1.284l.236 2.12a1.483 1.483 0 0 0 2.067 1.2l1.946-.857a1.483 1.483 0 0 1 1.674.346a14.231 14.231 0 0 1 3.157 5.44a1.476 1.476 0 0 1-.537 1.63l-1.72 1.273a1.48 1.48 0 0 0-.004 2.395l1.729 1.276ZM16 20a4 4 0 1 0 0-8a4 4 0 0 0 0 8Z" />
                            </svg>
                            <span>Settings</span>
                        </div>
                        <div
                            class="{{ Request::is('/proma-settings') ? 'flex items-center bg-white hover:bg-[#3E6766] hover:text-white transition-all duration-500 ease-in-out p-2 rounded-full ' : 'hidden group-hover:flex items-center bg-white hover:bg-[#3E6766] hover:text-white transition-all duration-500 ease-in-out p-2 rounded-full '}}">
                            <svg class="font-bold w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707l-1.414 1.414L15.586 11H6v2h9.586z" />
                            </svg>
                        </div>
                    </a>
                </a>

            </div>
        </nav>
        {{-- Right --}}
        @yield('proma-base')
    </section>
</div>

@endsection
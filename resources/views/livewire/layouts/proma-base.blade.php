@extends('livewire.layouts.base')
@section('content')

{{-- Proma Layout --}}
<div class="bg-white flex w-full">
    <section x-data="{ minPanel: false }" class="bg-[#FAFAFA] flex w-full max-w-[1440px] shadow-lg">
        {{-- Left Panel --}}
        <nav :class=" minPanel ? 'max-w-[58px]' : 'max-w-[250px]' "
            class="bg-white flex flex-col py-6 w-full max-w-[250px] h-[900px] transition-all duration-500 ease-linear">
            {{-- Header --}}
            <div :class=" minPanel ? 'px-0 flex justify-center ' : 'flex items-center justify-between px-6' "
                class="w-full h-full md:max-h-[25px] ">
                <img :class=" minPanel ? 'hidden' : 'flex' " class="w-[70px] h-[20px]"
                    src="{{ asset('images/proma-logo.png') }}" alt="">
                {{-- <svg class="fill-[#1B212D] cursor-pointer" @click='minPanel = !minPanel' width="40" height="27"
                    viewBox="0 0 40 27" fill="none" <g id="Proma-menu">
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
                </svg> --}}
                <svg class="group fill-[#1B212D] cursor-pointer w-full max-w-[30px]" @click='minPanel = !minPanel'
                    width="30" height="27" viewBox="0 0 30 27" fill="none">
                    <g id="Proma-menu">
                        <g id="line-full">
                            <rect id="middle" y="11" width="30" height="4" rx="2" />
                        </g>
                        <g id="line-half">
                            <rect :class=" minPanel ? '-translate-x-1/2 group-hover:translate-x-1/2' : 'translate-x-0' "
                                class="group-hover:-translate-x-1/2 transition-all duration-500 ease-in-out" id="bottom"
                                x="15" y="17" width="15" height="4" rx="2" />
                            <rect :class=" minPanel ? 'translate-x-1/2 group-hover:-translate-x-2/4' : 'translate-x-0' "
                                class="group-hover:translate-x-1/2 transition-all duration-500 ease-in-out" id="top"
                                y="5" width="15" height="4" rx="2" fill="#1B212D" />
                        </g>
                    </g>
                </svg>
            </div>
            {{-- Routes --}}
            <div class="bg-white text-[#929EAE] mt-10 pr-6 flex flex-col w-full">
                {{-- Dashboard --}}
                <a :class=" minPanel ? 'pr-0 rounded-r-none bg-white ' : '' "
                    class="{{ Request::is('/') ? 'relative bg-[#AAD2BA]/10 flex py-2 pr-3 rounded-r-full font-bold md:text-sm text-[#3E6766]' : 'group hover:text-[#3E6766] transition duration-300 ease-in-out hover:font-bold bg-[#AAD2BA]/10 font-semibold text-sm py-2 pr-3 rounded-r-full' }}"
                    href="{{ route('proma-dashboard') }}">
                    <div :class=" minPanel ? 'hidden' : 'flex' "
                        class="{{ Request::is('/') ? 'absolute flex bg-[#3E6766] top-4 w-1 h-5 rounded-xl ' : 'bg-[#3E6766] hidden group-hover:flex top-4 transition-all duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl'}}">
                    </div>
                    <div class="flex items-center pl-6 gap-2 w-full ">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M5 21h6V3H5q-.825 0-1.413.587Q3 4.175 3 5v14q0 .825.587 1.413Q4.175 21 5 21Zm8 0h6q.825 0 1.413-.587Q21 19.825 21 19v-7h-8Zm0-11h8V5q0-.825-.587-1.413Q19.825 3 19 3h-6Z" />
                        </svg>
                        <span :class=" minPanel ? 'hidden' : 'flex' ">Dashboard</span>
                    </div>
                    <button :class=" minPanel ? 'hidden' : 'flex' "
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
                </a>
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
            </div>
            {{-- Bottom | Help Center --}}
            <div class="flex flex-col mt-32 px-6 w-full h-full max-h-[250px]">
                {{-- Desktop view --}}
                <div class="relative flex flex-col bg-[#89C09F] w-full h-full rounded-lg">
                    <div class="absolute z-20">
                        <svg class="text-[#AAD2BA] w-12 h-12" viewBox="0 0 50 63" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle id="Ellipse 21" cx="-27" cy="-14" r="77" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="absolute bottom-0 right-0 z-20">
                        <svg class="text-[#AAD2BA] w-[101px] h-[87px]" viewBox="0 0 101 87" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle id="Ellipse 22" cx="77" cy="77" r="77" fill="currentColor" />
                        </svg>

                    </div>
                    {{-- Upper --}}
                    <div class="absolute -top-7 flex items-center justify-center w-full ">
                        <div class="bg-white flex items-center justify-center w-16 h-16 rounded-full ">
                            <div class="flex bg-[#AAD2BA] p-2 rounded-full">
                                <svg class="text-[#1B212D] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M13 22h-3v-3h3v3Zm0-5h-3v-.007c0-1.65 0-3.075.672-4.073a6.304 6.304 0 0 1 1.913-1.62c.334-.214.649-.417.914-.628a3.712 3.712 0 0 0 1.332-3.824A3.033 3.033 0 0 0 9 8H6a6 6 0 0 1 6-6a6.04 6.04 0 0 1 5.434 3.366a6.017 6.017 0 0 1-.934 6.3c-.453.502-.96.95-1.514 1.337a7.248 7.248 0 0 0-1.316 1.167A4.23 4.23 0 0 0 13 17Z" />
                                </svg>
                            </div>
                            {{-- <svg class="text-[#AAD2BA] bg-black rounded-full w-8 h-8"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10s10-4.486 10-10S17.514 2 12 2zm1 16h-2v-2h2v2zm.976-4.885c-.196.158-.385.309-.535.459c-.408.407-.44.777-.441.793v.133h-2v-.167c0-.118.029-1.177 1.026-2.174c.195-.195.437-.393.691-.599c.734-.595 1.216-1.029 1.216-1.627a1.934 1.934 0 0 0-3.867.001h-2C8.066 7.765 9.831 6 12 6s3.934 1.765 3.934 3.934c0 1.597-1.179 2.55-1.958 3.181z" />
                            </svg> --}}
                        </div>
                    </div>
                    {{-- Middle --}}
                    <div class="flex flex-col text-center items-center mt-14 lg:mt-20">
                        <h1 class="font-bold text-lg">Help Center</h1>
                        <h4 class="font-medium text-xs text-[#3a4252]">Having trouble using Proma? <br> Check the help
                            center for more
                            details.</h4>
                    </div>
                    {{-- Button --}}
                    <a href=""
                        class="flex items-center justify-center z-30 lg:mt-6 w-full transition-all duration-500 ease-linear">
                        <button
                            class="bg-white hover:bg-[#3E6766] hover:text-white transition duration-500 ease-in-out flex items-center justify-center p-2 rounded-lg w-full max-w-[170px]">
                            <span class="font-bold text-sm ">Go to Help center</span>
                        </button>
                    </a>
                </div>
                {{-- Mobile View --}}
                <div class="text-[#929EAE] hidden items-center">
                    <svg class="font-bold w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M5 21q-.825 0-1.413-.587Q3 19.825 3 19V5q0-.825.587-1.413Q4.175 3 5 3h14q.825 0 1.413.587Q21 4.175 21 5v14q0 .825-.587 1.413Q19.825 21 19 21Zm7-3q.525 0 .887-.363q.363-.362.363-.887t-.363-.887Q12.525 15.5 12 15.5t-.887.363q-.363.362-.363.887t.363.887Q11.475 18 12 18Zm1-4.7q.075-.4.263-.7q.187-.3.737-.85q.925-.925 1.25-1.5q.325-.575.325-1.3q0-1.275-.937-2.112Q13.7 6 12.275 6q-1.075 0-1.912.438q-.838.437-1.288 1.162q-.225.35-.125.737q.1.388.45.538q.35.15.688.012q.337-.137.537-.462q.25-.35.675-.538q.425-.187.875-.187q.7 0 1.125.375q.425.375.425.95q0 .475-.287.95q-.288.475-.888 1q-.65.575-1 1.175q-.35.6-.35 1.125q0 .35.263.6q.262.25.637.25q.35 0 .588-.238q.237-.237.312-.587Z" />
                    </svg>
                </div>
            </div>
        </nav>
        {{-- Right --}}
        @yield('proma-base')
        <span x-text="minPanel"></span>
        {{-- <div class="transition-all duration-500 ease-linear h-20"
            :class="minPanel ? 'w-8 bg-blue-200' : 'w-40 bg-red-200' ">
        </div> --}}
    </section>
</div>


@endsection
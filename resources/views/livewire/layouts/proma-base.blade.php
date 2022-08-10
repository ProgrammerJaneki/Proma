@extends('livewire.layouts.base')
@section('content')


{{-- Proma Layout --}}
<div class="bg-white flex justify-center w-full h-screen">
    <section x-data="{ minPanel: false }" class="text-[#1B212D] flex w-full h-full  ">
        {{-- Left Panel --}}
        <nav :class=" minPanel ? 'max-w-[54px]' : 'max-w-[54px] lg:max-w-[250px] ' "
            class="bg-white hidden md:flex flex-col w-full  h-[900px] transition-all duration-300 py-6 ease-linear">
            {{-- Header --}}
            <div :class=" minPanel ? 'px-0 flex justify-center ' : 'flex items-center justify-center lg:justify-between px-0 lg:px-6 ' "
                class="w-full h-full md:max-h-[25px] ">
                <a href="">
                    <img :class=" minPanel ? 'hidden' : 'hidden lg:flex' " class="w-[70px] h-[20px]"
                        src="{{ asset('images/proma-logo.png') }}" alt="">
                </a>
                <svg class="group fill-[#1B212D] cursor-pointer " @click='minPanel = !minPanel' width="30" height="27"
                    viewBox="0 0 30 27" fill="none">
                    <g id="Proma-menu">
                        <g id="line-full">
                            <rect id="middle" y="11" width="30" height="4" rx="2" />
                        </g>
                        <g id="line-half">
                            <rect
                                :class=" minPanel ? '-translate-x-1/2 group-hover:translate-x-0' : 'translate-x-0 group-hover:-translate-x-1/2' "
                                class=" transition-all duration-500 ease-in-out" id="bottom" x="15" y="17" width="15"
                                height="4" rx="2" />
                            <rect
                                :class=" minPanel ? 'translate-x-1/2 group-hover:translate-x-0' : 'translate-x-0 group-hover:translate-x-1/2' "
                                class=" transition-all duration-500 ease-in-out" id="top" y="5" width="15" height="4"
                                rx="2" fill="#1B212D" />
                        </g>
                    </g>
                </svg>
            </div>
            {{-- Routes --}}
            <div :class=" minPanel ? 'pr-0' : 'pr-0 lg:pr-6' "
                class="bg-white text-[#929EAE] mt-10 flex flex-col w-full">
                {{-- Dashboard --}}
                <a :class=" minPanel ? '{{ Request::is('/') ? 'group relative text-[#3E6766] flex items-center py-4 pr-0 w-full' : 
                'relative group hover:text-[#3E6766] hover:font-bold transition duration-300 ease-in-out py-4 ' }}' : 
                '{{ Request::is('/') ? 'lg:bg-[#AAD2BA]/10 relative flex py-4 lg:py-2 pr-0 lg:pr-3 rounded-r-full font-bold md:text-sm text-[#3E6766]' 
                : 'relative group hover:text-[#3E6766] hover:font-bold lg:hover:bg-[#AAD2BA]/10 transition duration-300 ease-in-out flex font-semibold text-sm lg:hover:py-2 py-4 pr-0 lg:pr-3 rounded-r-full' }}' "
                    href="{{ route('proma-dashboard') }}">
                    {{-- Left Indicator --}}
                    <div
                        :class=" minPanel ? '{{ Request::is('/') ? 'absolute flex items-center bg-[#3E6766] top-4 w-1 h-5 rounded-xl' :
                        'bg-[#3E6766] hidden group-hover:flex items-center top-4 transition-all duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl' }}'  : 
                        '{{ Request::is('/') ? 'absolute flex bg-[#3E6766] top-4 w-1 h-5 rounded-xl' :
                        ' bg-[#3E6766] hidden group-hover:flex top-4 transition-all duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl ' }}' ">
                    </div>
                    {{-- Icon --}}
                    <div :class=" minPanel ? 'flex justify-center pl-0 gap-0 ' : ' justify-center lg:justify-start  pl-0 lg:pl-6 gap-0 lg:gap-2' "
                        class="flex items-center w-full ">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M5 21h6V3H5q-.825 0-1.413.587Q3 4.175 3 5v14q0 .825.587 1.413Q4.175 21 5 21Zm8 0h6q.825 0 1.413-.587Q21 19.825 21 19v-7h-8Zm0-11h8V5q0-.825-.587-1.413Q19.825 3 19 3h-6Z" />
                        </svg>
                        <span :class=" minPanel ? 'hidden' : 'hidden lg:flex' ">Dashboard</span>
                    </div>
                    {{-- Circle --}}
                    <button
                        class="bg-white hover:text-white hover:bg-[#3E6766] items-center p-2 transition-all duration-500 ease-in-out rounded-full"
                        :class=" minPanel ? '{{ Request::is('/') ? 'hidden group-hover:hidden' : 'hidden' }}' : 
                        '{{ Request::is('/') ? 'hidden lg:flex lg:group-hover:flex' : 'hidden lg:group-hover:flex' }}' ">
                        <svg class="font-bold w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707l-1.414 1.414L15.586 11H6v2h9.586z" />
                        </svg>
                    </button>
                </a>
                {{-- Project --}}
                <a :class=" minPanel ? '{{ Request::is('proma-projects') ? 'group relative text-[#3E6766] flex items-center py-4 pr-0 w-full' : 
                'relative group hover:text-[#3E6766] hover:font-bold transition duration-300 ease-in-out py-4 ' }}' : 
                '{{ Request::is('proma-projects') ? 'lg:bg-[#AAD2BA]/10 relative flex py-4 lg:py-2 pr-0 lg:pr-3 rounded-r-full font-bold md:text-sm text-[#3E6766]' 
                : 'relative group hover:text-[#3E6766] hover:font-bold lg:hover:bg-[#AAD2BA]/10 transition duration-300 ease-in-out flex font-semibold text-sm lg:hover:py-2 py-4 pr-0 lg:pr-3 rounded-r-full' }}' "
                    href="{{ route('proma-projects') }}">
                    {{-- Left Indicator --}}
                    <div
                        :class=" minPanel ? '{{ Request::is('proma-projects') ? 'absolute flex items-center bg-[#3E6766] top-4 w-1 h-5 rounded-xl' :
                        'bg-[#3E6766] hidden group-hover:flex items-center top-4 transition-all duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl' }}'  : 
                        '{{ Request::is('proma-projects') ? 'absolute flex bg-[#3E6766] top-4 w-1 h-5 rounded-xl' :
                        ' bg-[#3E6766] hidden group-hover:flex top-4 transition-all duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl ' }}' ">
                    </div>
                    {{-- Icon --}}
                    <div :class=" minPanel ? 'flex justify-center pl-0 gap-0 ' : ' justify-center lg:justify-start  pl-0 lg:pl-6 gap-0 lg:gap-2' "
                        class="flex items-center w-full ">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                            <path fill="currentColor"
                                d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zM368 744c0 4.4-3.6 8-8 8h-80c-4.4 0-8-3.6-8-8V280c0-4.4 3.6-8 8-8h80c4.4 0 8 3.6 8 8v464zm192-280c0 4.4-3.6 8-8 8h-80c-4.4 0-8-3.6-8-8V280c0-4.4 3.6-8 8-8h80c4.4 0 8 3.6 8 8v184zm192 72c0 4.4-3.6 8-8 8h-80c-4.4 0-8-3.6-8-8V280c0-4.4 3.6-8 8-8h80c4.4 0 8 3.6 8 8v256z" />
                        </svg>
                        <span :class=" minPanel ? 'hidden' : 'hidden lg:flex' ">Projects</span>
                    </div>
                    {{-- Circle --}}
                    <button
                        class="bg-white hover:text-white hover:bg-[#3E6766] items-center p-2 transition-all duration-500 ease-in-out rounded-full"
                        :class=" minPanel ? '{{ Request::is('proma-projects') ? 'hidden group-hover:hidden' : 'hidden' }}' : 
                        '{{ Request::is('proma-projects') ? 'hidden lg:flex lg:group-hover:flex' : 'hidden lg:group-hover:flex' }}' ">
                        <svg class="font-bold w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707l-1.414 1.414L15.586 11H6v2h9.586z" />
                        </svg>
                    </button>
                </a>
                {{-- Teams --}}
                <a :class=" minPanel ? '{{ Request::is('proma-teams') ? 'group relative text-[#3E6766] flex items-center py-4 pr-0 w-full' : 
                'relative group hover:text-[#3E6766] hover:font-bold transition duration-300 ease-in-out py-4 ' }}' : 
                '{{ Request::is('proma-teams') ? 'lg:bg-[#AAD2BA]/10 relative flex py-4 lg:py-2 pr-0 lg:pr-3 rounded-r-full font-bold md:text-sm text-[#3E6766]' 
                : 'relative group hover:text-[#3E6766] hover:font-bold lg:hover:bg-[#AAD2BA]/10 transition duration-300 ease-in-out flex font-semibold text-sm lg:hover:py-2 py-4 pr-0 lg:pr-3 rounded-r-full' }}' "
                    href="{{ route('proma-teams') }}">
                    {{-- Left Indicator --}}
                    <div
                        :class=" minPanel ? '{{ Request::is('proma-teams') ? 'absolute flex items-center bg-[#3E6766] top-4 w-1 h-5 rounded-xl' :
                        'bg-[#3E6766] hidden group-hover:flex items-center top-4 transition-all duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl' }}'  : 
                        '{{ Request::is('proma-teams') ? 'absolute flex bg-[#3E6766] top-4 w-1 h-5 rounded-xl' :
                        ' bg-[#3E6766] hidden group-hover:flex top-4 transition-all duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl ' }}' ">
                    </div>
                    {{-- Icon --}}
                    <div :class=" minPanel ? 'flex justify-center pl-0 gap-0 ' : ' justify-center lg:justify-start  pl-0 lg:pl-6 gap-0 lg:gap-2' "
                        class="flex items-center w-full ">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <circle cx="20.288" cy="8.344" r="1.707" fill="currentColor" />
                            <path fill="currentColor"
                                d="M18.581 11.513h3.413v3.656c0 .942-.765 1.706-1.707 1.706h-1.706v-5.362zM2.006 4.2v15.6l11.213 1.979V2.221L2.006 4.2zm8.288 5.411l-1.95.049v5.752H6.881V9.757l-1.949.098V8.539l5.362-.292v1.364zm3.899.439v8.288h1.95c.808 0 1.463-.655 1.463-1.462V10.05h-3.413zm1.463-4.875c-.586 0-1.105.264-1.463.673v2.555c.357.409.877.673 1.463.673a1.95 1.95 0 0 0 0-3.901z" />
                        </svg>
                        <span :class=" minPanel ? 'hidden' : 'hidden lg:flex' ">Teams</span>
                    </div>
                    {{-- Circle --}}
                    <button
                        class="bg-white hover:text-white hover:bg-[#3E6766] items-center p-2 transition-all duration-500 ease-in-out rounded-full"
                        :class=" minPanel ? '{{ Request::is('proma-teams') ? 'hidden group-hover:hidden' : 'hidden' }}' : 
                        '{{ Request::is('proma-teams') ? 'hidden lg:flex lg:group-hover:flex' : 'hidden lg:group-hover:flex' }}' ">
                        <svg class="font-bold w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707l-1.414 1.414L15.586 11H6v2h9.586z" />
                        </svg>
                    </button>
                </a>
                {{-- Messages --}}
                <a :class=" minPanel ? '{{ Request::is('proma-messages') ? 'group relative text-[#3E6766] flex items-center py-4 pr-0 w-full' : 
                'relative group hover:text-[#3E6766] hover:font-bold transition duration-300 ease-in-out py-4 ' }}' : 
                '{{ Request::is('proma-messages') ? 'lg:bg-[#AAD2BA]/10 relative flex py-4 lg:py-2 pr-0 lg:pr-3 rounded-r-full font-bold md:text-sm text-[#3E6766]' 
                : 'relative group hover:text-[#3E6766] hover:font-bold lg:hover:bg-[#AAD2BA]/10 transition duration-300 ease-in-out flex font-semibold text-sm lg:hover:py-2 py-4 pr-0 lg:pr-3 rounded-r-full' }}' "
                    href="">
                    {{-- Left Indicator --}}
                    <div
                        :class=" minPanel ? '{{ Request::is('proma-messages') ? 'absolute flex items-center bg-[#3E6766] top-4 w-1 h-5 rounded-xl' :
                        'bg-[#3E6766] hidden group-hover:flex items-center top-4 transition-all duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl' }}'  : 
                        '{{ Request::is('proma-messages') ? 'absolute flex bg-[#3E6766] top-4 w-1 h-5 rounded-xl' :
                        ' bg-[#3E6766] hidden group-hover:flex top-4 transition-all duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl ' }}' ">
                    </div>
                    {{-- Icon --}}
                    <div :class=" minPanel ? 'flex justify-center pl-0 gap-0 ' : ' justify-center lg:justify-start  pl-0 lg:pl-6 gap-0 lg:gap-2' "
                        class="flex items-center w-full ">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="-2 -2.5 24 24">
                            <path fill="currentColor"
                                d="M3.656 17.979A1 1 0 0 1 2 17.243V15a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H8.003l-4.347 2.979zM16 10.017a7.136 7.136 0 0 0 0 .369v-.37c.005-.107.006-1.447.004-4.019a3 3 0 0 0-3-2.997H5V2a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2v2.243a1 1 0 0 1-1.656.736L16 13.743v-3.726z" />
                        </svg>
                        <span :class=" minPanel ? 'hidden' : 'hidden lg:flex' ">Messages</span>
                    </div>
                    {{-- Circle --}}
                    <button
                        class="bg-white hover:text-white hover:bg-[#3E6766] items-center p-2 transition-all duration-500 ease-in-out rounded-full"
                        :class=" minPanel ? '{{ Request::is('proma-messages') ? 'hidden group-hover:hidden' : 'hidden' }}' : 
                        '{{ Request::is('proma-messages') ? 'hidden lg:flex lg:group-hover:flex' : 'hidden lg:group-hover:flex' }}' ">
                        <svg class="font-bold w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707l-1.414 1.414L15.586 11H6v2h9.586z" />
                        </svg>
                    </button>
                </a>
                {{-- Settings --}}
                <a :class=" minPanel ? '{{ Request::is('proma-settings') ? 'group relative text-[#3E6766] flex items-center py-4 pr-0 w-full' : 
                'relative group hover:text-[#3E6766] hover:font-bold transition duration-300 ease-in-out py-4 ' }}' : 
                '{{ Request::is('proma-settings') ? 'lg:bg-[#AAD2BA]/10 relative flex py-4 lg:py-2 pr-0 lg:pr-3 rounded-r-full font-bold md:text-sm text-[#3E6766]' 
                : 'relative group hover:text-[#3E6766] hover:font-bold lg:hover:bg-[#AAD2BA]/10 transition duration-300 ease-in-out flex font-semibold text-sm lg:hover:py-2 py-4 pr-0 lg:pr-3 rounded-r-full' }}' "
                    href="">
                    {{-- Left Indicator --}}
                    <div
                        :class=" minPanel ? '{{ Request::is('proma-settings') ? 'absolute flex items-center bg-[#3E6766] top-4 w-1 h-5 rounded-xl' :
                        'bg-[#3E6766] hidden group-hover:flex items-center top-4 transition-all duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl' }}'  : 
                        '{{ Request::is('proma-settings') ? 'absolute flex bg-[#3E6766] top-4 w-1 h-5 rounded-xl' :
                        ' bg-[#3E6766] hidden group-hover:flex top-4 transition-all duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl ' }}' ">
                    </div>
                    {{-- Icon --}}
                    <div :class=" minPanel ? 'flex justify-center pl-0 gap-0 ' : ' justify-center lg:justify-start  pl-0 lg:pl-6 gap-0 lg:gap-2' "
                        class="flex items-center w-full ">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                            <path fill="currentColor"
                                d="M28.832 18.472a1.483 1.483 0 0 1 .537 1.634a14.269 14.269 0 0 1-3.156 5.443a1.478 1.478 0 0 1-1.671.347l-1.955-.858a1.501 1.501 0 0 0-.68-.128a1.474 1.474 0 0 0-.66.2a1.472 1.472 0 0 0-.727 1.124l-.235 2.13a1.48 1.48 0 0 1-1.13 1.276c-2.076.495-4.24.495-6.316 0a1.484 1.484 0 0 1-1.125-1.27l-.235-2.126a1.483 1.483 0 0 0-.485-.94a1.5 1.5 0 0 0-1.58-.255l-1.955.859a1.477 1.477 0 0 1-1.668-.343a14.267 14.267 0 0 1-3.16-5.45a1.484 1.484 0 0 1 .536-1.632l1.725-1.275a1.488 1.488 0 0 0 0-2.4l-1.725-1.273a1.48 1.48 0 0 1-.536-1.623A14.249 14.249 0 0 1 5.79 6.467c.14-.151.31-.271.5-.351a1.5 1.5 0 0 1 1.17 0l1.947.858a1.493 1.493 0 0 0 2.073-1.206l.236-2.122a1.482 1.482 0 0 1 1.148-1.281a15.462 15.462 0 0 1 3.146-.362c1.052.012 2.1.133 3.127.362a1.476 1.476 0 0 1 1.147 1.284l.236 2.12a1.483 1.483 0 0 0 2.067 1.2l1.946-.857a1.483 1.483 0 0 1 1.674.346a14.231 14.231 0 0 1 3.157 5.44a1.476 1.476 0 0 1-.537 1.63l-1.72 1.273a1.48 1.48 0 0 0-.004 2.395l1.729 1.276ZM16 20a4 4 0 1 0 0-8a4 4 0 0 0 0 8Z" />
                        </svg>
                        <span :class=" minPanel ? 'hidden' : 'hidden lg:flex' ">Settings</span>
                    </div>
                    {{-- Circle --}}
                    <button
                        class="bg-white hover:text-white hover:bg-[#3E6766] items-center p-2 transition-all duration-500 ease-in-out rounded-full"
                        :class=" minPanel ? '{{ Request::is('proma-settings') ? 'hidden group-hover:hidden' : 'hidden' }}' : 
                        '{{ Request::is('proma-settings') ? 'hidden lg:flex lg:group-hover:flex' : 'hidden lg:group-hover:flex' }}' ">
                        <svg class="font-bold w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707l-1.414 1.414L15.586 11H6v2h9.586z" />
                        </svg>
                    </button>
                </a>
            </div>
            {{-- Bottom | Help Center --}}
            <div x-cloak :class=" minPanel ? 'hidden' : 'hidden lg:flex' "
                class="flex-col mt-48 px-6 w-full h-full max-h-[250px]">
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
                                <svg class=" w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M13 22h-3v-3h3v3Zm0-5h-3v-.007c0-1.65 0-3.075.672-4.073a6.304 6.304 0 0 1 1.913-1.62c.334-.214.649-.417.914-.628a3.712 3.712 0 0 0 1.332-3.824A3.033 3.033 0 0 0 9 8H6a6 6 0 0 1 6-6a6.04 6.04 0 0 1 5.434 3.366a6.017 6.017 0 0 1-.934 6.3c-.453.502-.96.95-1.514 1.337a7.248 7.248 0 0 0-1.316 1.167A4.23 4.23 0 0 0 13 17Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    {{-- Middle --}}
                    <div class=" flex flex-col text-center items-center mt-14 lg:mt-20">
                        <h1 class="font-bold text-lg">Help Center</h1>
                        <h4 class="font-medium text-xs ">Having trouble using Proma? <br> Check the help
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
            </div>
            {{-- Mobile View --}}
            <a x-cloak
                :class=" minPanel ? '{{ Request::is('/proma-help') ? 'group relative text-[#3E6766] flex items-center py-4 pr-0 w-full' : 
                'relative group hover:text-[#3E6766] text-[#929EAE] hover:font-bold transition duration-300 ease-in-out hover:py-4 py-4 ' }}' : 
                '{{ Request::is('/proma-help') ? ' relative flex lg:hidden py-4 pr-0 md:text-sm text-[#3E6766]' 
                : 'relative group hover:text-[#3E6766] text-[#929EAE] hover:font-bold transition duration-300 ease-in-out flex lg:hidden font-semibold text-sm py-4 ' }}' "
                class="mt-0 " href="">
                <div
                    :class=" minPanel ? '{{ Request::is('/proma-help') ? 'absolute flex bg-[#3E6766] top-4 w-1 h-5 rounded-xl' :
                        'bg-[#3E6766] hidden group-hover:flex top-4 transition-all duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl' }}'  : 
                        '{{ Request::is('/proma-help') ? 'absolute flex bg-[#3E6766] top-4 w-1 h-5 rounded-xl' :
                        ' bg-[#3E6766] hidden group-hover:flex top-4 transition-all duration-500 ease-in-out group-hover:absolute w-1 h-5 rounded-xl ' }}' ">
                </div>
                <div :class=" minPanel ? 'flex justify-center pl-0 gap-0 ' : 'flex lg:hidden justify-center pl-0 lg:pl-6 gap-0 lg:gap-2' "
                    class="flex items-center w-full ">
                    <svg class="font-bold w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M5 21q-.825 0-1.413-.587Q3 19.825 3 19V5q0-.825.587-1.413Q4.175 3 5 3h14q.825 0 1.413.587Q21 4.175 21 5v14q0 .825-.587 1.413Q19.825 21 19 21Zm7-3q.525 0 .887-.363q.363-.362.363-.887t-.363-.887Q12.525 15.5 12 15.5t-.887.363q-.363.362-.363.887t.363.887Q11.475 18 12 18Zm1-4.7q.075-.4.263-.7q.187-.3.737-.85q.925-.925 1.25-1.5q.325-.575.325-1.3q0-1.275-.937-2.112Q13.7 6 12.275 6q-1.075 0-1.912.438q-.838.437-1.288 1.162q-.225.35-.125.737q.1.388.45.538q.35.15.688.012q.337-.137.537-.462q.25-.35.675-.538q.425-.187.875-.187q.7 0 1.125.375q.425.375.425.95q0 .475-.287.95q-.288.475-.888 1q-.65.575-1 1.175q-.35.6-.35 1.125q0 .35.263.6q.262.25.637.25q.35 0 .588-.238q.237-.237.312-.587Z" />
                    </svg>
                </div>
            </a>
        </nav>
        {{-- Right --}}
        <div x-data="{ tabledProjects : false, marketTeam : false }"
            class="w-full h-screen  scrollbar-thumb-gray-400 scrollbar-track-gray-200">
            {{-- Header --}}
            <livewire:layouts.proma-main-header />
            {{-- Body --}}
            @yield('proma-base')
        </div>
    </section>
</div>


@endsection
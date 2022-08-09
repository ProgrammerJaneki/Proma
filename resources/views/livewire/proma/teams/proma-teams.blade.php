@extends('livewire.layouts.proma-base')
@section('proma-base')

<div :class=" minPanel ? 'px-2 md:px-6' : 'px-2 lg:px-10 py-5' "
    class="bg-[#FAFAFA] flex justify-center w-full h-[780px]">
    {{-- Main Container --}}
    {{-- New --}}
    <div class="bg-red-100 relative flex flex-col md:flex-row gap-x-10 w-full max-w-[1130px]">
        {{-- Mobile --}}
        {{-- <div class="w-6 h-6 absolute right-0 bg-blue-200">
        </div> --}}
        {{-- Left --}}
        <div class="flex flex-col bg-orange-200 w-full h-full max-w-[722px]">
            {{-- Top --}}
            <div class="bg-green-50 flex flex-col w-full h-full">
                {{-- Team Names --}}
                <div class="font-semibold md:font-bold text-lg md:text-xl flex items-center w-full">
                    <h1>
                        Project X Landing Page Team
                    </h1>
                </div>
                {{-- Left Top Container --}}
                <div class="bg-blue-200 flex flex-col gap-x-5 gap-y-3 items-center md:flex-row justify-center w-full">
                    {{-- 1 --}}
                    <div
                        class="bg-white flex flex-col gap-y-3 p-4 w-full max-w-[300px] h-full max-h-[200px]  rounded-xl shadow-lg">
                        {{-- Header --}}
                        <div class="flex justify-between w-full ">
                            <div class="bg-red-400 flex w-14 h-14 rounded-lg"></div>
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5">
                                    <circle cx="8" cy="2.5" r=".75" />
                                    <circle cx="8" cy="8" r=".75" />
                                    <circle cx="8" cy="13.5" r=".75" />
                                </g>
                            </svg>
                        </div>
                        <div class="font-semibold flex flex-col mt-auto whitespace-nowrap">
                            <h2 class="text-lg md:text-lg">
                                Project X Landing Page
                            </h2>
                            <span class="text-[#929EAE] text-sm md:text-sm">August 8, 2022</span>
                        </div>
                        <div
                            class="group flex items-center justify-between bg-[#89C09F] hover:bg-[#89C09F] md:bg-[#AAD2BA]/20 text-white hover:text-white md:text-[#89C09F] 
                            font-semibold text-xs md:text-sm py-2 px-4 max-w-[90px] md:max-w-[110px] rounded-md cursor-pointer transition duration-150 ease-linear  mt-auto">
                            <label class="group-hover:cursor-pointer" for="">
                                Details
                            </label>
                            <svg class="rotate-90 group-hover:rotate-90 md:rotate-0 group-hover:cursor-pointer w-3 h-3 md:w-4 md:h-4 transition-all duration-150 ease-linear"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                <path fill="currentColor" d="M2 11V9h12l-4-4l1-2l7 7l-7 7l-1-2l4-4H2z" />
                            </svg>
                        </div>
                    </div>
                    {{-- 2 --}}
                    <div
                        class="bg-white flex flex-col gap-y-5 p-4 w-full h-full max-w-[300px] md:max-w-[170px] max-h-[200px] shadow-lg rounded-xl">
                        {{-- Header --}}
                        <div class="flex justify-between ">
                            <h2 class=" font-semibold text-lg md:text-sm text-[#3E6766]">Meeting</h2>
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5">
                                    <circle cx="8" cy="2.5" r=".75" />
                                    <circle cx="8" cy="8" r=".75" />
                                    <circle cx="8" cy="13.5" r=".75" />
                                </g>
                            </svg>
                        </div>
                        {{-- Middle --}}
                        <div class="flex flex-col mt-auto">
                            <div class="font-semibold text-lg md:text-base">Schedule</div>
                            <div class="flex flex-col font-medium text-xs text-[#929EAE]">
                                <span>Aug 22, 2022</span>
                                <span>5:00 pm</span>
                            </div>
                        </div>
                        {{-- Bottom --}}
                        <div class="text-[#AAD2BA] flex justify-between items-center py-0 mt-auto ">
                            <label
                                class="bg-[#AAD2BA]/20 flex justify-center text-center font-semibold w-full max-w-[90px] md:max-w-[70px] rounded-md 
                                hover:bg-[#89C09F] hover:text-white cursor-pointer text-xs md:text-sm py-2 px-4">Join</label>
                            <svg class="text-[#929EAE] hover:text-[#89C09F] cursor-pointer w-4 h-4"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36">
                                <path fill="currentColor"
                                    d="M18 34.28A2.67 2.67 0 0 0 20.58 32h-5.26A2.67 2.67 0 0 0 18 34.28Z"
                                    class="clr-i-solid--badged clr-i-solid-path-1--badged" />
                                <path fill="currentColor"
                                    d="m32.85 28.13l-.34-.3A14.37 14.37 0 0 1 30 24.9a12.63 12.63 0 0 1-1.35-4.81v-4.94a10.92 10.92 0 0 0-.16-1.79A7.5 7.5 0 0 1 22.5 6v-.63a10.57 10.57 0 0 0-3.32-1V3.11a1.33 1.33 0 1 0-2.67 0v1.31a10.81 10.81 0 0 0-9.3 10.73v4.94a12.63 12.63 0 0 1-1.35 4.81a14.4 14.4 0 0 1-2.47 2.93l-.34.3v2.82h29.8Z"
                                    class="clr-i-solid--badged clr-i-solid-path-2--badged" />
                                <circle cx="30" cy="6" r="5" fill="currentColor"
                                    class="clr-i-solid--badged clr-i-solid-path-3--badged clr-i-badge" />
                                <path fill="none" d="M0 0h36v36H0z" />
                            </svg>
                        </div>
                    </div>
                    {{-- 3 --}}
                    <div class="bg-white flex flex-col w-full max-w-[300px] md:max-w-[170px] shadow-lg rounded-xl">
                        div
                    </div>
                </div>
            </div>
        </div>
        {{-- Right --}}
        <div class="bg-green-200 w-full max-w-[368px]">
            H
        </div>

    </div>
    {{-- Old --}}
    <div class="hidden flex-col md:flex-row gap-x-10 w-full max-w-[1130px]">
        {{-- Left --}}
        <div class="flex flex-col ">
            {{-- Desktop View --}}
            {{-- Top --}}
            <div class="hidden flex-col gap-y-4 ">
                <h1 class="font-semibold md:font-bold text-sm md:text-lg">Project X Landing Page Team</h1>
                <div class="bg-red-200 flex flex-row justify-between gap-x-5 w-full overflow-x-auto  ">
                    {{-- 1 --}}
                    <div
                        class="bg-white flex flex-col p-4 w-full min-w-[300px] max-w-[300px] h-full max-h-[200px] cursor-pointer rounded-xl shadow-lg">
                        <div class="flex justify-between w-full py-0 gap-x-2">
                            <div class="bg-red-400 flex w-14 h-14 rounded-lg">
                            </div>
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5">
                                    <circle cx="8" cy="2.5" r=".75" />
                                    <circle cx="8" cy="8" r=".75" />
                                    <circle cx="8" cy="13.5" r=".75" />
                                </g>
                            </svg>
                        </div>
                        <div class="font-semibold flex flex-col mt-auto whitespace-nowrap">
                            <h2 class="text-sm md:text-lg">Project X Landing Page</h2>
                            <span class="text-[#929EAE] text-xs md:text-sm">August 8, 2022</span>
                        </div>
                        <div class="text-[#AAD2BA] flex justify-between py-0 mt-auto ">
                            <label class="bg-[#AAD2BA]/20 font-semibold rounded-md text-xs py-2 px-5">Details</label>
                        </div>
                    </div>
                    {{-- 2 & 3 --}}
                    <div class="hidden  gap-x-5 w-full min-w-[422px] max-w-[422px] overflow-x-auto">
                        {{-- 2 --}}
                        <div class="bg-white flex flex-col p-4 w-full max-w-[211px] h-[200px] shadow-lg rounded-xl">
                            {{-- Header --}}
                            <div class="flex items-center justify-between">
                                <h2 class="font-semibold text-sm text-[#3E6766]">Meeting</h2>
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5">
                                        <circle cx="8" cy="2.5" r=".75" />
                                        <circle cx="8" cy="8" r=".75" />
                                        <circle cx="8" cy="13.5" r=".75" />
                                    </g>
                                </svg>
                            </div>
                            {{-- Middle --}}
                            <div class="flex flex-col mt-auto">
                                <div class="font-semibold text-sm">Schedule</div>
                                <div class="text-[#929EAE] font-medium text-xs flex flex-col">
                                    <span class="">Aug 22, 2022</span>
                                    <span class="">5:00 pm</span>
                                </div>
                            </div>
                            <div class="text-[#AAD2BA] flex justify-between items-center py-0 mt-auto ">
                                <label
                                    class="bg-[#AAD2BA]/20 flex items-center text-center font-semibold rounded-md text-xs py-2 px-4">Join</label>
                                <svg class="text-[#929EAE] w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36">
                                    <path fill="currentColor"
                                        d="M18 34.28A2.67 2.67 0 0 0 20.58 32h-5.26A2.67 2.67 0 0 0 18 34.28Z"
                                        class="clr-i-solid--badged clr-i-solid-path-1--badged" />
                                    <path fill="currentColor"
                                        d="m32.85 28.13l-.34-.3A14.37 14.37 0 0 1 30 24.9a12.63 12.63 0 0 1-1.35-4.81v-4.94a10.92 10.92 0 0 0-.16-1.79A7.5 7.5 0 0 1 22.5 6v-.63a10.57 10.57 0 0 0-3.32-1V3.11a1.33 1.33 0 1 0-2.67 0v1.31a10.81 10.81 0 0 0-9.3 10.73v4.94a12.63 12.63 0 0 1-1.35 4.81a14.4 14.4 0 0 1-2.47 2.93l-.34.3v2.82h29.8Z"
                                        class="clr-i-solid--badged clr-i-solid-path-2--badged" />
                                    <circle cx="30" cy="6" r="5" fill="currentColor"
                                        class="clr-i-solid--badged clr-i-solid-path-3--badged clr-i-badge" />
                                    <path fill="none" d="M0 0h36v36H0z" />
                                </svg>
                            </div>
                        </div>
                        {{-- 3 --}}
                        <div class="bg-white flex flex-col w-full p-4 max-w-[211px] h-[200px] shadow-lg rounded-xl">
                            {{-- Header --}}
                            <div class="flex items-center justify-between">
                                <h2 class="font-semibold text-sm text-[#3E6766]">Meeting</h2>
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5">
                                        <circle cx="8" cy="2.5" r=".75" />
                                        <circle cx="8" cy="8" r=".75" />
                                        <circle cx="8" cy="13.5" r=".75" />
                                    </g>
                                </svg>
                            </div>
                            {{-- Middle --}}
                            <div class="flex flex-col mt-auto">
                                <div class="font-semibold text-sm">Schedule</div>
                                <div class="text-[#929EAE] font-medium text-xs flex flex-col">
                                    <span class="">Aug 22, 2022</span>
                                    <span class="">5:00 pm</span>
                                </div>
                            </div>
                            <div class="text-[#AAD2BA] flex justify-between items-center py-0 mt-auto ">
                                <label
                                    class="bg-[#AAD2BA]/20 flex items-center text-center font-semibold rounded-md text-xs py-2 px-4">Join</label>
                                <svg class="text-[#929EAE] w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36">
                                    <path fill="currentColor"
                                        d="M18 34.28A2.67 2.67 0 0 0 20.58 32h-5.26A2.67 2.67 0 0 0 18 34.28Z"
                                        class="clr-i-solid--badged clr-i-solid-path-1--badged" />
                                    <path fill="currentColor"
                                        d="m32.85 28.13l-.34-.3A14.37 14.37 0 0 1 30 24.9a12.63 12.63 0 0 1-1.35-4.81v-4.94a10.92 10.92 0 0 0-.16-1.79A7.5 7.5 0 0 1 22.5 6v-.63a10.57 10.57 0 0 0-3.32-1V3.11a1.33 1.33 0 1 0-2.67 0v1.31a10.81 10.81 0 0 0-9.3 10.73v4.94a12.63 12.63 0 0 1-1.35 4.81a14.4 14.4 0 0 1-2.47 2.93l-.34.3v2.82h29.8Z"
                                        class="clr-i-solid--badged clr-i-solid-path-2--badged" />
                                    <circle cx="30" cy="6" r="5" fill="currentColor"
                                        class="clr-i-solid--badged clr-i-solid-path-3--badged clr-i-badge" />
                                    <path fill="none" d="M0 0h36v36H0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Bottom --}}
        </div>
        {{-- Right --}}
        <div class="bg-red-100 hidden w-full">
            Right
        </div>
    </div>
</div>

@endsection
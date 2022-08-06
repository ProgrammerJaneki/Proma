@extends('livewire.layouts.proma-base')
@section('proma-base')

<div class="bg-[#FAFAFA] py-5 w-full h-[720px] px-2 md:px-10">
    {{-- Top --}}
    <div class="flex flex-col gap-y-5 w-full">
        {{-- Header --}}
        <div class="font-bold text-sm flex items-center justify-between w-full">
            <h2 class="">From Past 7 days</h2>
            <button class="text-[#3E6766] ">
                <span>View All</span>
            </button>
        </div>
        {{-- Contents --}}
        <div class="flex items-center gap-x-2 w-full ">
            <div class="flex items-center gap-x-6 w-full  max-w-full overflow-x-auto">
                {{-- 1 --}}
                <div
                    class="bg-white border-2 border-[#F5F5F5] flex flex-col p-4 w-full min-w-[250px] max-w-[250px] h-[304px] shadow-lg rounded-xl">
                    {{-- Header 1 --}}
                    <div class="flex justify-between w-full ">
                        <img src="{{ asset('images/projects/project-lx1.png') }}" alt="">
                        <div class="flex ">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
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
                    </div>
                    {{-- Project Title --}}
                    <div class="font-medium text-sm flex flex-col mt-4 gap-y-2 w-full">
                        <div class="text-sm flex flex-col gap-y-2 w-full">
                            <h2 class="font-bold ">Project X Landing Page</h2>
                            <h4 class="text-[#929EAE]">Design a full layout for landing page</h4>
                        </div>
                        {{-- Progress --}}
                        <div class="flex flex-col gap-y-3">
                            <h4 class="text-[#929EAE]">
                                Project Done <span class="font-semibold text-[#1B212D]">10</span>/30
                            </h4>
                            <div class="flex flex-col gap-y-2 w-full">
                                <div
                                    class="text-[#929EAE] font-medium text-xs flex items-center justify-between w-full">
                                    <span class="">
                                        Progress
                                    </span>
                                    <span>40%</span>
                                </div>
                                <div class="w-full bg-[#F5F5F5] rounded-full ">
                                    <div class="bg-[#FBAE80] text-xs font-medium text-blue-100 text-center p-1 leading-none rounded-full"
                                        style="width: 40%"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Bottom --}}
                    <div class="flex items-center justify-between mt-auto">
                        <div class="flex">
                            <img src="{{ asset('images/projects/people.png') }}" alt="">
                        </div>
                        <div class="text-[#AAD2BA] flex items-center gap-1">
                            <div class="p-1 bg-[#AAD2BA]/20 rounded-md">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM277.3 415.7c-8.4 1.5-11.5-3.7-11.5-8c0-5.4.2-33 .2-55.3c0-15.6-5.2-25.5-11.3-30.7c37-4.1 76-9.2 76-73.1c0-18.2-6.5-27.3-17.1-39c1.7-4.3 7.4-22-1.7-45c-13.9-4.3-45.7 17.9-45.7 17.9c-13.2-3.7-27.5-5.6-41.6-5.6c-14.1 0-28.4 1.9-41.6 5.6c0 0-31.8-22.2-45.7-17.9c-9.1 22.9-3.5 40.6-1.7 45c-10.6 11.7-15.6 20.8-15.6 39c0 63.6 37.3 69 74.3 73.1c-4.8 4.3-9.1 11.7-10.6 22.3c-9.5 4.3-33.8 11.7-48.3-13.9c-9.1-15.8-25.5-17.1-25.5-17.1c-16.2-.2-1.1 10.2-1.1 10.2c10.8 5 18.4 24.2 18.4 24.2c9.7 29.7 56.1 19.7 56.1 19.7c0 13.9.2 36.5.2 40.6c0 4.3-3 9.5-11.5 8c-66-22.1-112.2-84.9-112.2-158.3c0-91.8 70.2-161.5 162-161.5S388 165.6 388 257.4c.1 73.4-44.7 136.3-110.7 158.3zm-98.1-61.1c-1.9.4-3.7-.4-3.9-1.7c-.2-1.5 1.1-2.8 3-3.2c1.9-.2 3.7.6 3.9 1.9c.3 1.3-1 2.6-3 3zm-9.5-.9c0 1.3-1.5 2.4-3.5 2.4c-2.2.2-3.7-.9-3.7-2.4c0-1.3 1.5-2.4 3.5-2.4c1.9-.2 3.7.9 3.7 2.4zm-13.7-1.1c-.4 1.3-2.4 1.9-4.1 1.3c-1.9-.4-3.2-1.9-2.8-3.2c.4-1.3 2.4-1.9 4.1-1.5c2 .6 3.3 2.1 2.8 3.4zm-12.3-5.4c-.9 1.1-2.8.9-4.3-.6c-1.5-1.3-1.9-3.2-.9-4.1c.9-1.1 2.8-.9 4.3.6c1.3 1.3 1.8 3.3.9 4.1zm-9.1-9.1c-.9.6-2.6 0-3.7-1.5s-1.1-3.2 0-3.9c1.1-.9 2.8-.2 3.7 1.3c1.1 1.5 1.1 3.3 0 4.1zm-6.5-9.7c-.9.9-2.4.4-3.5-.6c-1.1-1.3-1.3-2.8-.4-3.5c.9-.9 2.4-.4 3.5.6c1.1 1.3 1.3 2.8.4 3.5zm-6.7-7.4c-.4.9-1.7 1.1-2.8.4c-1.3-.6-1.9-1.7-1.5-2.6c.4-.6 1.5-.9 2.8-.4c1.3.7 1.9 1.8 1.5 2.6z" />
                                </svg>
                            </div>
                            <div class="bg-[#AAD2BA]/20 p-1 rounded-md">
                                <svg class="w-5 h-5 " xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M9.593 10.971c-.542 0-.969.475-.969 1.055c0 .578.437 1.055.969 1.055c.541 0 .968-.477.968-1.055c.011-.581-.427-1.055-.968-1.055zm3.468 0c-.542 0-.969.475-.969 1.055c0 .578.437 1.055.969 1.055c.541 0 .968-.477.968-1.055c-.001-.581-.427-1.055-.968-1.055z" />
                                    <path fill="currentColor"
                                        d="M17.678 3H4.947A1.952 1.952 0 0 0 3 4.957v12.844c0 1.083.874 1.957 1.947 1.957H15.72l-.505-1.759l1.217 1.131l1.149 1.064L19.625 22V4.957A1.952 1.952 0 0 0 17.678 3zM14.01 15.407s-.342-.408-.626-.771c1.244-.352 1.719-1.13 1.719-1.13c-.39.256-.76.438-1.093.562a6.679 6.679 0 0 1-3.838.398a7.944 7.944 0 0 1-1.396-.41a5.402 5.402 0 0 1-.693-.321c-.029-.021-.057-.029-.085-.048a.117.117 0 0 1-.039-.03c-.171-.094-.266-.16-.266-.16s.456.76 1.663 1.121c-.285.36-.637.789-.637.789c-2.099-.067-2.896-1.444-2.896-1.444c0-3.059 1.368-5.538 1.368-5.538c1.368-1.027 2.669-.998 2.669-.998l.095.114c-1.71.495-2.499 1.245-2.499 1.245s.21-.114.561-.275c1.016-.446 1.823-.57 2.156-.599c.057-.009.105-.019.162-.019a7.756 7.756 0 0 1 4.778.893s-.751-.712-2.366-1.206l.133-.152s1.302-.029 2.669.998c0 0 1.368 2.479 1.368 5.538c0-.001-.807 1.376-2.907 1.443z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- 2 --}}
                <div
                    class="bg-white border-2 border-[#F5F5F5] flex flex-col p-4 w-full min-w-[250px] max-w-[250px] h-[304px] shadow-lg rounded-xl">
                    {{-- Header 1 --}}
                    <div class="flex justify-between w-full ">
                        <img src="{{ asset('images/projects/project-lx2.png') }}" alt="">
                        <div class="flex ">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
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
                    </div>
                    {{-- Project Title --}}
                    <div class="font-medium text-sm flex flex-col mt-4 gap-y-2 w-full">
                        <div class="text-sm flex flex-col gap-y-2 w-full">
                            <h2 class="font-bold ">Project X Landing Page</h2>
                            <h4 class="text-[#929EAE]">Design a full layout for landing page</h4>
                        </div>
                        {{-- Progress --}}
                        <div class="flex flex-col gap-y-3">
                            <h4 class="text-[#929EAE]">
                                Project Done <span class="font-semibold text-[#1B212D]">10</span>/30
                            </h4>
                            <div class="flex flex-col gap-y-2 w-full">
                                <div
                                    class="text-[#929EAE] font-medium text-xs flex items-center justify-between w-full">
                                    <span class="">
                                        Progress
                                    </span>
                                    <span>40%</span>
                                </div>
                                <div class="w-full bg-[#F5F5F5] rounded-full ">
                                    <div class="bg-[#FBAE80] text-xs font-medium text-blue-100 text-center p-1 leading-none rounded-full"
                                        style="width: 40%"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Bottom --}}
                    <div class="flex items-center justify-between mt-auto">
                        <div class="flex">
                            <img src="{{ asset('images/projects/people.png') }}" alt="">
                        </div>
                        <div class="text-[#AAD2BA] flex items-center gap-1">
                            <div class="p-1 bg-[#AAD2BA]/20 rounded-md">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM277.3 415.7c-8.4 1.5-11.5-3.7-11.5-8c0-5.4.2-33 .2-55.3c0-15.6-5.2-25.5-11.3-30.7c37-4.1 76-9.2 76-73.1c0-18.2-6.5-27.3-17.1-39c1.7-4.3 7.4-22-1.7-45c-13.9-4.3-45.7 17.9-45.7 17.9c-13.2-3.7-27.5-5.6-41.6-5.6c-14.1 0-28.4 1.9-41.6 5.6c0 0-31.8-22.2-45.7-17.9c-9.1 22.9-3.5 40.6-1.7 45c-10.6 11.7-15.6 20.8-15.6 39c0 63.6 37.3 69 74.3 73.1c-4.8 4.3-9.1 11.7-10.6 22.3c-9.5 4.3-33.8 11.7-48.3-13.9c-9.1-15.8-25.5-17.1-25.5-17.1c-16.2-.2-1.1 10.2-1.1 10.2c10.8 5 18.4 24.2 18.4 24.2c9.7 29.7 56.1 19.7 56.1 19.7c0 13.9.2 36.5.2 40.6c0 4.3-3 9.5-11.5 8c-66-22.1-112.2-84.9-112.2-158.3c0-91.8 70.2-161.5 162-161.5S388 165.6 388 257.4c.1 73.4-44.7 136.3-110.7 158.3zm-98.1-61.1c-1.9.4-3.7-.4-3.9-1.7c-.2-1.5 1.1-2.8 3-3.2c1.9-.2 3.7.6 3.9 1.9c.3 1.3-1 2.6-3 3zm-9.5-.9c0 1.3-1.5 2.4-3.5 2.4c-2.2.2-3.7-.9-3.7-2.4c0-1.3 1.5-2.4 3.5-2.4c1.9-.2 3.7.9 3.7 2.4zm-13.7-1.1c-.4 1.3-2.4 1.9-4.1 1.3c-1.9-.4-3.2-1.9-2.8-3.2c.4-1.3 2.4-1.9 4.1-1.5c2 .6 3.3 2.1 2.8 3.4zm-12.3-5.4c-.9 1.1-2.8.9-4.3-.6c-1.5-1.3-1.9-3.2-.9-4.1c.9-1.1 2.8-.9 4.3.6c1.3 1.3 1.8 3.3.9 4.1zm-9.1-9.1c-.9.6-2.6 0-3.7-1.5s-1.1-3.2 0-3.9c1.1-.9 2.8-.2 3.7 1.3c1.1 1.5 1.1 3.3 0 4.1zm-6.5-9.7c-.9.9-2.4.4-3.5-.6c-1.1-1.3-1.3-2.8-.4-3.5c.9-.9 2.4-.4 3.5.6c1.1 1.3 1.3 2.8.4 3.5zm-6.7-7.4c-.4.9-1.7 1.1-2.8.4c-1.3-.6-1.9-1.7-1.5-2.6c.4-.6 1.5-.9 2.8-.4c1.3.7 1.9 1.8 1.5 2.6z" />
                                </svg>
                            </div>
                            <div class="bg-[#AAD2BA]/20 p-1 rounded-md">
                                <svg class="w-5 h-5 " xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M9.593 10.971c-.542 0-.969.475-.969 1.055c0 .578.437 1.055.969 1.055c.541 0 .968-.477.968-1.055c.011-.581-.427-1.055-.968-1.055zm3.468 0c-.542 0-.969.475-.969 1.055c0 .578.437 1.055.969 1.055c.541 0 .968-.477.968-1.055c-.001-.581-.427-1.055-.968-1.055z" />
                                    <path fill="currentColor"
                                        d="M17.678 3H4.947A1.952 1.952 0 0 0 3 4.957v12.844c0 1.083.874 1.957 1.947 1.957H15.72l-.505-1.759l1.217 1.131l1.149 1.064L19.625 22V4.957A1.952 1.952 0 0 0 17.678 3zM14.01 15.407s-.342-.408-.626-.771c1.244-.352 1.719-1.13 1.719-1.13c-.39.256-.76.438-1.093.562a6.679 6.679 0 0 1-3.838.398a7.944 7.944 0 0 1-1.396-.41a5.402 5.402 0 0 1-.693-.321c-.029-.021-.057-.029-.085-.048a.117.117 0 0 1-.039-.03c-.171-.094-.266-.16-.266-.16s.456.76 1.663 1.121c-.285.36-.637.789-.637.789c-2.099-.067-2.896-1.444-2.896-1.444c0-3.059 1.368-5.538 1.368-5.538c1.368-1.027 2.669-.998 2.669-.998l.095.114c-1.71.495-2.499 1.245-2.499 1.245s.21-.114.561-.275c1.016-.446 1.823-.57 2.156-.599c.057-.009.105-.019.162-.019a7.756 7.756 0 0 1 4.778.893s-.751-.712-2.366-1.206l.133-.152s1.302-.029 2.669.998c0 0 1.368 2.479 1.368 5.538c0-.001-.807 1.376-2.907 1.443z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- 3 --}}
                {{-- 2 --}}
                <div
                    class="bg-white border-2 border-[#F5F5F5] flex flex-col p-4 w-full min-w-[250px] max-w-[250px] h-[304px] shadow-lg rounded-xl">
                    {{-- Header 1 --}}
                    <div class="flex justify-between w-full ">
                        <img src="{{ asset('images/projects/project-lx2.png') }}" alt="">
                        <div class="flex ">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
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
                    </div>
                    {{-- Project Title --}}
                    <div class="font-medium text-sm flex flex-col mt-4 gap-y-2 w-full">
                        <div class="text-sm flex flex-col gap-y-2 w-full">
                            <h2 class="font-bold ">Project X Landing Page</h2>
                            <h4 class="text-[#929EAE]">Design a full layout for landing page</h4>
                        </div>
                        {{-- Progress --}}
                        <div class="flex flex-col gap-y-3">
                            <h4 class="text-[#929EAE]">
                                Project Done <span class="font-semibold text-[#1B212D]">10</span>/30
                            </h4>
                            <div class="flex flex-col gap-y-2 w-full">
                                <div
                                    class="text-[#929EAE] font-medium text-xs flex items-center justify-between w-full">
                                    <span class="">
                                        Progress
                                    </span>
                                    <span>40%</span>
                                </div>
                                <div class="w-full bg-[#F5F5F5] rounded-full ">
                                    <div class="bg-[#FBAE80] text-xs font-medium text-blue-100 text-center p-1 leading-none rounded-full"
                                        style="width: 40%"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Bottom --}}
                    <div class="flex items-center justify-between mt-auto">
                        <div class="flex">
                            <img src="{{ asset('images/projects/people.png') }}" alt="">
                        </div>
                        <div class="text-[#AAD2BA] flex items-center gap-1">
                            <div class="p-1 bg-[#AAD2BA]/20 rounded-md">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM277.3 415.7c-8.4 1.5-11.5-3.7-11.5-8c0-5.4.2-33 .2-55.3c0-15.6-5.2-25.5-11.3-30.7c37-4.1 76-9.2 76-73.1c0-18.2-6.5-27.3-17.1-39c1.7-4.3 7.4-22-1.7-45c-13.9-4.3-45.7 17.9-45.7 17.9c-13.2-3.7-27.5-5.6-41.6-5.6c-14.1 0-28.4 1.9-41.6 5.6c0 0-31.8-22.2-45.7-17.9c-9.1 22.9-3.5 40.6-1.7 45c-10.6 11.7-15.6 20.8-15.6 39c0 63.6 37.3 69 74.3 73.1c-4.8 4.3-9.1 11.7-10.6 22.3c-9.5 4.3-33.8 11.7-48.3-13.9c-9.1-15.8-25.5-17.1-25.5-17.1c-16.2-.2-1.1 10.2-1.1 10.2c10.8 5 18.4 24.2 18.4 24.2c9.7 29.7 56.1 19.7 56.1 19.7c0 13.9.2 36.5.2 40.6c0 4.3-3 9.5-11.5 8c-66-22.1-112.2-84.9-112.2-158.3c0-91.8 70.2-161.5 162-161.5S388 165.6 388 257.4c.1 73.4-44.7 136.3-110.7 158.3zm-98.1-61.1c-1.9.4-3.7-.4-3.9-1.7c-.2-1.5 1.1-2.8 3-3.2c1.9-.2 3.7.6 3.9 1.9c.3 1.3-1 2.6-3 3zm-9.5-.9c0 1.3-1.5 2.4-3.5 2.4c-2.2.2-3.7-.9-3.7-2.4c0-1.3 1.5-2.4 3.5-2.4c1.9-.2 3.7.9 3.7 2.4zm-13.7-1.1c-.4 1.3-2.4 1.9-4.1 1.3c-1.9-.4-3.2-1.9-2.8-3.2c.4-1.3 2.4-1.9 4.1-1.5c2 .6 3.3 2.1 2.8 3.4zm-12.3-5.4c-.9 1.1-2.8.9-4.3-.6c-1.5-1.3-1.9-3.2-.9-4.1c.9-1.1 2.8-.9 4.3.6c1.3 1.3 1.8 3.3.9 4.1zm-9.1-9.1c-.9.6-2.6 0-3.7-1.5s-1.1-3.2 0-3.9c1.1-.9 2.8-.2 3.7 1.3c1.1 1.5 1.1 3.3 0 4.1zm-6.5-9.7c-.9.9-2.4.4-3.5-.6c-1.1-1.3-1.3-2.8-.4-3.5c.9-.9 2.4-.4 3.5.6c1.1 1.3 1.3 2.8.4 3.5zm-6.7-7.4c-.4.9-1.7 1.1-2.8.4c-1.3-.6-1.9-1.7-1.5-2.6c.4-.6 1.5-.9 2.8-.4c1.3.7 1.9 1.8 1.5 2.6z" />
                                </svg>
                            </div>
                            <div class="bg-[#AAD2BA]/20 p-1 rounded-md">
                                <svg class="w-5 h-5 " xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M9.593 10.971c-.542 0-.969.475-.969 1.055c0 .578.437 1.055.969 1.055c.541 0 .968-.477.968-1.055c.011-.581-.427-1.055-.968-1.055zm3.468 0c-.542 0-.969.475-.969 1.055c0 .578.437 1.055.969 1.055c.541 0 .968-.477.968-1.055c-.001-.581-.427-1.055-.968-1.055z" />
                                    <path fill="currentColor"
                                        d="M17.678 3H4.947A1.952 1.952 0 0 0 3 4.957v12.844c0 1.083.874 1.957 1.947 1.957H15.72l-.505-1.759l1.217 1.131l1.149 1.064L19.625 22V4.957A1.952 1.952 0 0 0 17.678 3zM14.01 15.407s-.342-.408-.626-.771c1.244-.352 1.719-1.13 1.719-1.13c-.39.256-.76.438-1.093.562a6.679 6.679 0 0 1-3.838.398a7.944 7.944 0 0 1-1.396-.41a5.402 5.402 0 0 1-.693-.321c-.029-.021-.057-.029-.085-.048a.117.117 0 0 1-.039-.03c-.171-.094-.266-.16-.266-.16s.456.76 1.663 1.121c-.285.36-.637.789-.637.789c-2.099-.067-2.896-1.444-2.896-1.444c0-3.059 1.368-5.538 1.368-5.538c1.368-1.027 2.669-.998 2.669-.998l.095.114c-1.71.495-2.499 1.245-2.499 1.245s.21-.114.561-.275c1.016-.446 1.823-.57 2.156-.599c.057-.009.105-.019.162-.019a7.756 7.756 0 0 1 4.778.893s-.751-.712-2.366-1.206l.133-.152s1.302-.029 2.669.998c0 0 1.368 2.479 1.368 5.538c0-.001-.807 1.376-2.907 1.443z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button
                class="bg-white p-2 text-[#3E6766] hover:bg-[#3E6766] hover:text-[#FFFFFF] rounded-full transition duration-300 ease-linear">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M4 12h16m-7-7l7 7l-7 7" />
                </svg>
            </button>
        </div>
    </div>
    {{-- <div class="bg-red-200 w-[200px] gap-10 flex flex-col py-5 h-[720px]">
        <div class="flex flex-col bg-green-200 gap-y-4 h-[304px]">
            <div class="bg-white">Hello</div>
            <div class="bg-orange-200 ">H</div>
        </div>
        <div class="flex flex-col bg-purple-200 gap-y-4 h-[340px]">
            <div class="bg-pink-200">Bottom</div>
            <div class="bg-blue-200 ">H</div>
        </div>
    </div> --}}
</div>

@endsection
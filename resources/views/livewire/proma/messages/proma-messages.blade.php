@extends('livewire.layouts.proma-base')
@section('proma-base')

<div :class=" minPanel ? 'px-2 md:px-6' : 'px-2 lg:px-10 py-5'" class="bg-[#FAFAFA] flex justify-center w-full h-full">
    {{-- Main Container --}}
    <div class="bg-white flex w-full h-full max-w-[360px] md:max-w-[1060px] max-h-[780px] shadow-md rounded-lg
            transition-all duration-300 ease-linear">
        {{-- Left & Right --}}
        <div x-data="{ showChat : false }" class="flex flex-col md:flex-row w-full ">
            {{-- Chats & People --}}
            <div x-data="{ people : false }"
                class="md:border-r-2 border-[#F5F5F5] flex flex-col gap-y-2 md:gap-y-4 w-full max-w-[375px] overflow-y-hidden">
                {{-- Individual Convo Mobile View --}}
                {{-- Header --}}
                <div class="flex justify-between md:justify-between w-full">
                    <button @click=" people = false "
                        :class=" people ? 'font-semibold border-[#F5F5F5] text-[#929EAE]' : 'font-bold border-[#89C09F] text-[#89C09F]' "
                        class="flex text-lg border-b-4  justify-center py-2 tracking-widest w-full   transition-all duration-150 ease-linear">
                        <span class="hover:text-[#89C09F]">Chat</span>
                    </button>
                    <button @click=" people = true "
                        :class=" people ?  'font-bold border-[#89C09F] text-[#89C09F]' : 'font-semibold hover:font-bold border-[#F5F5F5] text-[#929EAE]' "
                        class="flex  text-lg border-b-4  border-[#F5F5F5] text-[#929EAE] justify-center py-2 tracking-widest 
                            transition-all duration-150 ease-linear w-full">
                        <span class="hover:text-[#89C09F]">People</span>
                    </button>
                    {{-- Desktop View --}}
                </div>
                {{-- Conversation --}}
                <div :class=" showChat ? 'flex md:hidden' : 'hidden' " class="bg-red-200 ">
                    <button @click=" showChat = !showChat ">Show</button>
                </div>
                {{-- Search Bar & Chats --}}
                <div :class=" showChat ? 'hidden md:flex' : 'flex' "
                    class="flex-col gap-y-2 md:gap-y-4 px-2 w-full overflow-y-auto">
                    <div
                        class="bg-[#FAFAFA] flex items-center p-2 md:p-3 gap-x-2 font-semibold text-[#929EAE] text-sm w-full rounded-lg">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="m21 21l-4.486-4.494M19 10.5a8.5 8.5 0 1 1-17 0a8.5 8.5 0 0 1 17 0Z" />
                        </svg>
                        <input class="bg-transparent focus:outline-none w-full" type="text" placeholder="Search">
                    </div>
                    {{-- Chats --}}
                    <div :class=" people ? 'hidden' : 'flex' "
                        class="flex flex-col border-t-2 border-[#F5F5F5] py-2 md:py-2 w-full overflow-y-auto  sm:scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200">
                        {{-- 1 --}}
                        <button @click=" showChat = !showChat "
                            :class=" showChat ? 'bg-[#AAD2BA]/20' : 'hover:bg-[#AAD2BA]/20' "
                            class=" flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Thomas</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">7:00 pm</span>
                                </div>
                                <span class="font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    yung mismong .push, .map, .filter lang talaga error e
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="text-[#929EAE] flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Marie Lopez</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">5:00 pm</span>
                                </div>
                                <span
                                    class="flex font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    Marie sent a photo
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="text-[#929EAE] flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Thomas</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">7:00 pm</span>
                                </div>
                                <span class="font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    yung mismong .push, .map, .filter lang talaga error e
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class=" flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Marie Lopez</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">5:00 pm</span>
                                </div>
                                <span
                                    class="flex font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    Marie sent a photo
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class=" flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Thomas</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">7:00 pm</span>
                                </div>
                                <span class="font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    yung mismong .push, .map, .filter lang talaga error e
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class=" flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Marie Lopez</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">5:00 pm</span>
                                </div>
                                <span
                                    class="flex font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    Marie sent a photo
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="text-[#929EAE] flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Thomas</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">7:00 pm</span>
                                </div>
                                <span class="font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    yung mismong .push, .map, .filter lang talaga error e
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="text-[#929EAE] flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Marie Lopez</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">5:00 pm</span>
                                </div>
                                <span
                                    class="flex font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    Marie sent a photo
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class=" flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Thomas</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">7:00 pm</span>
                                </div>
                                <span class="font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    yung mismong .push, .map, .filter lang talaga error e
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Marie Lopez</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">5:00 pm</span>
                                </div>
                                <span
                                    class="flex font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    Marie sent a photo
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Thomas</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">7:00 pm</span>
                                </div>
                                <span class="font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    yung mismong .push, .map, .filter lang talaga error e
                                </span>
                            </div>
                        </button>
                    </div>
                    {{-- People --}}
                    <div :class=" people ? 'flex' : 'hidden' "
                        class="flex flex-col border-t-2 border-[#F5F5F5] py-2 md:py-2 w-full  overflow-y-auto  sm:scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200">
                        {{-- Online Header --}}
                        <h2 class="px-2 font-semibold text-[#929EAE] text-sm">Online (10)</h2>
                        {{-- Onlines --}}
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        {{-- Offline Header --}}
                        <h2 class="px-2 font-semibold mt-4 text-[#929EAE] text-sm">Offline (5)</h2>
                        {{-- Offlines --}}
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Marie Lopez</span>
                                <svg class="text-[#929EAE] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M3.707 2.293a1 1 0 0 0-1.414 1.414l6.921 6.922c.05.062.105.118.168.167l6.91 6.911a1 1 0 0 0 1.415-1.414l-.675-.675a9.001 9.001 0 0 0-.668-11.982A1 1 0 1 0 14.95 5.05a7.002 7.002 0 0 1 .657 9.143l-1.435-1.435a5.002 5.002 0 0 0-.636-6.294A1 1 0 0 0 12.12 7.88a3 3 0 0 1 .587 3.415l-1.992-1.992a.922.922 0 0 0-.018-.018l-6.99-6.991Zm-.469 5.894a1 1 0 0 0-1.933-.516a9 9 0 0 0 2.331 8.693a1 1 0 0 0 1.414-1.415a6.997 6.997 0 0 1-1.812-6.762ZM7.4 11.5a1 1 0 1 0-1.73 1c.214.371.48.72.795 1.035a1 1 0 0 0 1.414-1.414c-.191-.191-.35-.4-.478-.622Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#929EAE] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M3.707 2.293a1 1 0 0 0-1.414 1.414l6.921 6.922c.05.062.105.118.168.167l6.91 6.911a1 1 0 0 0 1.415-1.414l-.675-.675a9.001 9.001 0 0 0-.668-11.982A1 1 0 1 0 14.95 5.05a7.002 7.002 0 0 1 .657 9.143l-1.435-1.435a5.002 5.002 0 0 0-.636-6.294A1 1 0 0 0 12.12 7.88a3 3 0 0 1 .587 3.415l-1.992-1.992a.922.922 0 0 0-.018-.018l-6.99-6.991Zm-.469 5.894a1 1 0 0 0-1.933-.516a9 9 0 0 0 2.331 8.693a1 1 0 0 0 1.414-1.415a6.997 6.997 0 0 1-1.812-6.762ZM7.4 11.5a1 1 0 1 0-1.73 1c.214.371.48.72.795 1.035a1 1 0 0 0 1.414-1.414c-.191-.191-.35-.4-.478-.622Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Marie Lopez</span>
                                <svg class="text-[#929EAE] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M3.707 2.293a1 1 0 0 0-1.414 1.414l6.921 6.922c.05.062.105.118.168.167l6.91 6.911a1 1 0 0 0 1.415-1.414l-.675-.675a9.001 9.001 0 0 0-.668-11.982A1 1 0 1 0 14.95 5.05a7.002 7.002 0 0 1 .657 9.143l-1.435-1.435a5.002 5.002 0 0 0-.636-6.294A1 1 0 0 0 12.12 7.88a3 3 0 0 1 .587 3.415l-1.992-1.992a.922.922 0 0 0-.018-.018l-6.99-6.991Zm-.469 5.894a1 1 0 0 0-1.933-.516a9 9 0 0 0 2.331 8.693a1 1 0 0 0 1.414-1.415a6.997 6.997 0 0 1-1.812-6.762ZM7.4 11.5a1 1 0 1 0-1.73 1c.214.371.48.72.795 1.035a1 1 0 0 0 1.414-1.414c-.191-.191-.35-.4-.478-.622Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#929EAE] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M3.707 2.293a1 1 0 0 0-1.414 1.414l6.921 6.922c.05.062.105.118.168.167l6.91 6.911a1 1 0 0 0 1.415-1.414l-.675-.675a9.001 9.001 0 0 0-.668-11.982A1 1 0 1 0 14.95 5.05a7.002 7.002 0 0 1 .657 9.143l-1.435-1.435a5.002 5.002 0 0 0-.636-6.294A1 1 0 0 0 12.12 7.88a3 3 0 0 1 .587 3.415l-1.992-1.992a.922.922 0 0 0-.018-.018l-6.99-6.991Zm-.469 5.894a1 1 0 0 0-1.933-.516a9 9 0 0 0 2.331 8.693a1 1 0 0 0 1.414-1.415a6.997 6.997 0 0 1-1.812-6.762ZM7.4 11.5a1 1 0 1 0-1.73 1c.214.371.48.72.795 1.035a1 1 0 0 0 1.414-1.414c-.191-.191-.35-.4-.478-.622Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Marie Lopez</span>
                                <svg class="text-[#929EAE] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M3.707 2.293a1 1 0 0 0-1.414 1.414l6.921 6.922c.05.062.105.118.168.167l6.91 6.911a1 1 0 0 0 1.415-1.414l-.675-.675a9.001 9.001 0 0 0-.668-11.982A1 1 0 1 0 14.95 5.05a7.002 7.002 0 0 1 .657 9.143l-1.435-1.435a5.002 5.002 0 0 0-.636-6.294A1 1 0 0 0 12.12 7.88a3 3 0 0 1 .587 3.415l-1.992-1.992a.922.922 0 0 0-.018-.018l-6.99-6.991Zm-.469 5.894a1 1 0 0 0-1.933-.516a9 9 0 0 0 2.331 8.693a1 1 0 0 0 1.414-1.415a6.997 6.997 0 0 1-1.812-6.762ZM7.4 11.5a1 1 0 1 0-1.73 1c.214.371.48.72.795 1.035a1 1 0 0 0 1.414-1.414c-.191-.191-.35-.4-.478-.622Z" />
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            {{-- Will be shown when a convo is clicked | At Mobile view, it will make Indiv Convo Mobile View into
            hidden and be flexed
            | At Desktop View, it will be shown instead to the right column --}}

            {{-- Individual Convo Desktop View --}}
            <div class="hidden md:flex w-full">
                {{-- Default Display --}}
                <div :class=" showChat ? 'hidden ' : 'flex' " class=" items-center justify-center px-4 w-full">
                    <div class="font-bold text-4xl flex flex-col gap-y-6 items-center">
                        {{-- <img src="{{ asset('images/dashboard/messages/g1.png') }}" alt=""> --}}
                        <img src="{{ asset('images/messages/bg.png') }}" alt="">
                        <h1 class="text-center drop-shadow-xl">Connect with your Team <span
                                class="text-[#89C09F] font-extrabold text-5xl">.</span> </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection